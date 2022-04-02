<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\sanpham;

class tinhnang extends Model
{
    use HasFactory;
    protected $table='tinhnang';
    public $timestamps = false;
    protected $fillable=['id','tentinhnang','sanpham_id','chitiet'];

    public function sanpham(){
        return $this->hasOne(sanpham::class,'id','sanpham_id');
      }
}
