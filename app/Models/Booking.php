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
    protected $fillable = ['id', 'token', 'package_id', 'user_id', 'location', 'datetime', 'no_hp', 'type', 'status', 'price_1', 'price_2', 'price_3', 'price_4', 'price_5', 'total'];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($booking) {
            // Send notification when a new booking is created
            $admin = User::where('email', 'admin@admin.com')->first();
            if ($admin) {
                Notification::send($admin, new TaskBookingNotification($booking));
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
