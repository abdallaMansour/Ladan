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
        try {
            DB::beginTransaction();
            $request->validate([
                'message' => 'required',
                'file' => 'nullable|file',
            ]);

            $ticket = Ticket::create([
                'user_id' => auth()->id(),
                'message' => $request->message,
            ]);

            if ($request->hasFile('file')) {
                $ticket->addMedia($request->file('file'))->toMediaCollection();
            }

            DB::commit();
            return back()->with('success', 'Ticket message sent successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('error', $th->getMessage());
        }
    }

    public function destroy($id)
    {
        $ticket = Ticket::find($id);

        if (!$ticket) {
            return back()->with('error', 'Ticket not found');
        }
        $ticket->delete();
        return back()->with('success', 'Ticket deleted successfully.');
    }
}
