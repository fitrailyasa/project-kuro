<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Notifications\TaskBookingNotification; // Ensure to import the notification class
use Illuminate\Support\Facades\Notification; // Import Notification facade

class Booking extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'booking';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $fillable = ['id', 'token', 'package_id', 'user_id', 'location', 'datetime', 'no_hp', 'type', 'status', 'price_1', 'price_2', 'price_3', 'price_4', 'price_5', 'total_dibayar', 'total'];

    protected static function boot()
    {
        parent::boot();

        // Trigger notification when a new booking is created
        static::created(function ($booking) {
            $admin = User::where('email', 'admin@admin.com')->first();
            if ($admin) {
                Notification::send($admin, new TaskBookingNotification($booking));
            }
        });

        // Trigger notification when the status is updated
        static::updating(function ($booking) {
            // Check if the status is changing
            if ($booking->isDirty('status')) {
                $oldStatus = $booking->getOriginal('status');
                $newStatus = $booking->status;

                // Only send notification for specific status changes
                if (in_array($newStatus, ['Menunggu Konfirmasi', 'Diproses', 'Selesai', 'Dibatalkan'])) {
                    $user = User::find($booking->user_id); // Get the user associated with the booking
                    if ($user) {
                        Notification::send($user, new TaskBookingNotification($booking));
                    }
                }
            }
        });
    }

    public function Package()
    {
        return $this->belongsTo(Package::class, 'package_id', 'id');
    }

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
