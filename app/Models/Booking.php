<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'booking';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $fillable = ['id', 'package_id', 'name', 'location', 'date', 'time', 'no_hp', 'type', 'status', 'price_1', 'price_2', 'price_3', 'price_4', 'price_5', 'total'];

    public function Package()
    {
        return $this->belongsTo(Package::class, 'package_id', 'id');
    }
}
