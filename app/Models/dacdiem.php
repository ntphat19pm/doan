<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\sanpham;

class dacdiem extends Model
{
    use HasFactory;
    protected $table='dacdiem';
    public $timestamps = false;
    protected $fillable=['id','tendacdiem','sanpham_id','chitiet'];

    public function sanpham(){
        return $this->hasOne(sanpham::class,'id','sanpham_id');
      }
}
