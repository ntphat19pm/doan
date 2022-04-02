<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\thang;

class chitieu extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table='chitieu';
    protected $fillable=['id','thang_id','doanhthu_dichvu','tytrong_dichvu','doanhthu_tong','tytrong_tong','kenhtruyen','tytrong_kenhtruyen','duan','tytrong_duan','giaoduc','tytrong_giaoduc','yte','tytrong_yte'];

    public function thang(){
        return $this->hasOne(thang::class,'id','thang_id');
      }
      public function thuchien_chitieu(){
        return $this->hasMany(thuchien_chitieu::class,'chitieu_id','id');
      }
}
