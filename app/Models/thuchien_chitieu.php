<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class thuchien_chitieu extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table='thuchien_chitieu';
    protected $fillable=['id','chitieu_id','doanhthu_dichvu','doanhthu_tong','kenhtruyen','duan','giaoduc','yte'];

      public function chitieu(){
        return $this->hasOne(chitieu::class,'id','chitieu_id');
      }
}
