<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cauhoi extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table='cauhoi';
    protected $fillable=['id','hoten','sdt','diachi','email','cauhoi','traloi','trangthai'];
}
