<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\baiviet;

class binhluan extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table='binhluan';
    protected $fillable=['id','avatar_id','hoten','noidung','baiviet_id','trangthai'];

    public function baiviet(){
        return $this->hasOne(baiviet::class,'id','baiviet_id');
      }

}
