<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\binhluan;

class baiviet extends Model
{
    use HasFactory;
    protected $table='baiviet';
    public $timestamps = false;
    protected $fillable=['id','tenbai','mota','avatar','noidung','nguoidang','create_at','phanloai_id','binhluan_id','trangthai','tags','view'];

    public function binhluan(){
        return $this->hasMany(binhluan::class,'baiviet_id','id');
      }
      public function nhanvien()
    {
        return $this->hasOne(nhanvien::class,'id','nguoidang');
    }
}
