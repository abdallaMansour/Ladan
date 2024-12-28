<?php

namespace App\Http\Controllers\Ticket;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TicketController extends Controller
{
    /**
     * Store Ticket message
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function store_ticket(Request $request)
    {
        $request->validate([
            'message' => 'required',
            'category_id' => 'required|exists:categories,id',
            'priority' => 'required|in:urgent,medium,low',
            'file' => 'nullable|file',
        ]);
        try {
            DB::beginTransaction();

            $ticket = Ticket::create([
                'user_id' => auth()->id(),
                'category_id' => $request->category_id,
                'priority' => $request->priority,
                'message' => $request->message,
            ]);

            if ($request->hasFile('file')) {
                $ticket->addMedia($request->file('file'))->toMediaCollection();
            }

            DB::commit();
            return back()->with('success', __('tickets.store.success'));
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('error', __('tickets.store.failed'));
        }
    }

    public function change_status($id, Request $request)
    {
        $request->validate(['status' => 'required|in:open,under_review,resolved,closed']);

        $ticket = Ticket::find($id);

        if (!$ticket) {
            return back()->with('error', __('tickets.change_status.not_found'));
        }

        $ticket->status = $request->status;
        $ticket->save();
        return back()->with('success', __('tickets.change_status.success'));
    }
}
