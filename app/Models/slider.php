<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table='slider';
    protected $fillable=['id','ten_slider','avatar','trangthai'];
}
