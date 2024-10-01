<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Available extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'available';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $fillable = ['name', 'img0', 'img1', 'img2', 'img3', 'img4', 'img5', 'img6'];
}
