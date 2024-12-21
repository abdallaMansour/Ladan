<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\Ticket;
use Illuminate\Console\Command;

class CheckTicketsStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tickets:check-status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check tickets with status false after 5 days and perform an action';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Define the date 5 days ago
        $date = Carbon::now()->subDays(5);

        // Find tickets where status is false and created more than 5 days ago
        $tickets = Ticket::where('status', false)
            ->where('created_at', '<=', $date)
            ->get();

        foreach ($tickets as $ticket) {
            // Perform your desired action
            $this->handleExpiredTicket($ticket);
        }

        $this->info('Checked tickets and performed actions for expired tickets.');
    }

    private function handleExpiredTicket($ticket)
    {
        // Example: Update status, notify, or log
        $ticket->update(['status' => 'expired']); // Or whatever action suits
        // Send notification or log as needed
        \Log::info("Ticket ID {$ticket->id} expired after 5 days.");
    }
}
