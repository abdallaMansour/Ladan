<?php

namespace App\Http\Controllers\Message;

use App\Models\Ticket;
use App\Models\Message;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
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
            'phone' => 'required',
            'message' => 'required',
        ]);
        Message::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);
        return response()->json(['message' => 'Contact us message sent successfully'], 200);
    }

    public function destroy_message($id)
    {
        $message = Message::find($id);

        if (!$message) {
            return back()->with('error', 'Message not found');
        }

        $message->delete();

        return back()->with('success', 'Message deleted successfully.');
    }
}
