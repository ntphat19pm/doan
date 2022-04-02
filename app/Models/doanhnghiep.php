<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doanhnghiep extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table='doanhnghiep';
    protected $fillable=['id','ten_kh','loai_kh','hinhanh'];
}
