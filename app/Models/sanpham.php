<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\chatlieu;
use App\Models\dacdiem;
use App\Models\tinhnang;
use App\Models\loiich;

use App\Models\danhmuc;

class sanpham extends Model
{
    use HasFactory;
    protected $table='sanpham';
    public $timestamps = false;
    protected $fillable = [
		'tensp', 'anh','anh1','chitiet','danhmuc_id','slug','link','link_pdf'
	];
    public function dathang_chitiet(){
    return $this->hasMany(dathang_chitiet::class,'sanpham_id','id');
    }

    
    public function danhmuc(){
      return $this->hasOne(danhmuc::class,'id','danhmuc_id');
    }

    public function dacdiem(){
      return $this->hasMany(dacdiem::class,'sanpham_id','id');
    }
    public function tinhnang(){
      return $this->hasMany(tinhnang::class,'sanpham_id','id');
    }
    public function loiich(){
      return $this->hasMany(loiich::class,'sanpham_id','id');
    }

    public function scopeSearch($query){
      if($tukhoa=request()->tukhoa){
        
        $query=$query->where('tensp','like','%'.$tukhoa.'%');
      }
      return $query;

    }
}
