<?php

namespace App\Http\Controllers\Message;

use App\Models\Ticket;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
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
            'file' => 'nullable|file',
        ]);

        $ticket = Ticket::create([
            'user_id' => auth()->guard('sanctum')->id(),
            'message' => $request->message,
        ]);

        if ($request->hasFile('file')) {
            $ticket->addMedia($request->file('file'))->toMediaCollection();
        }

        return response()->json(['message' => 'Ticket message sent successfully'], 200);
    }


    /**
     * Store contact us message
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function store_contact_us(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        ContactUs::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);
        return response()->json(['message' => 'Contact us message sent successfully'], 200);
    }
}
