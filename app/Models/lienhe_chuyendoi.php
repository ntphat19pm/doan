<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lienhe_chuyendoi extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table='lienhe_chuyendoi';
    protected $fillable=['id','hoten_lienhe','sdt_lienhe','email_lienhe','congty_lienhe','linhvuc_lienhe','chitiet','trangthai_id','nhanvien_id'];

    public function danhmuc_chuyendoi(){
        return $this->hasOne(danhmuc_chuyendoi::class,'id','linhvuc_lienhe');
    }
    public function nhanvien(){
      return $this->hasOne(nhanvien::class,'id','nhanvien_id');
    }
}
