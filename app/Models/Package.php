<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'package';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $fillable = ['id', 'name', 'category_id', 'desc', 'list', 'img', 'price', 'type'];

    public function Category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
