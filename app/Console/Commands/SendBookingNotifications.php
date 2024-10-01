<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Booking;
use App\Models\User;
use App\Notifications\TaskBookingNotification;
use Illuminate\Support\Facades\Notification;
use Carbon\Carbon;

class SendBookingNotifications extends Command
{
    protected $signature = 'send:booking-notifications';
    protected $description = 'Mengirim notifikasi email untuk pesanan baru';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $admin = User::where('email', 'admin@admin.com')->first();

        if (!$admin) {
            $this->error('Admin user not found.');
            return;
        }

        // Get bookings created in the last minute
        $tasks = Booking::where('created_at', '>=', Carbon::now()->subMinute())
            ->get();

        foreach ($tasks as $task) {
            Notification::send($admin, new TaskBookingNotification($task));
        }

        $this->info('Notifikasi pesanan baru telah dikirim.');
    }
}
