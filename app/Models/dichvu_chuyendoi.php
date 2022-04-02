<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dichvu_chuyendoi extends Model
{
    use HasFactory;
    protected $table='dichvu_chuyendoi';
    public $timestamps = false;
    protected $fillable=['id','ten_dichvu','chitiet','avatar'];
}
