<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class thongtin extends Model
{
    use HasFactory;
    protected $table='thongtin';
    public $timestamps = false;
    protected $fillable=['id','hoten','sdt','email','diachi','hinhthuc','sanpham_id','yeucau_id','noidung','trangthai','nhanvien_id','ngay_lienhe'];

    public function nhanvien(){
        return $this->hasOne(nhanvien::class,'id','nhanvien_id');
      }
}
