<?php

namespace App\Http\Controllers\Ticket;

use App\Models\Ticket;
use App\Http\Controllers\Controller;

class TicketController extends Controller
{

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
