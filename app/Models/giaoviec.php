<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\nhanvien;

class giaoviec extends Model
{
    use HasFactory;
    protected $table='giaoviec';
    public $timestamps = false;
    protected $fillable=['id','ten_congviec','nguoinhan','hanchot','ngaynop','trangthai'];

    public function nhanvien()
    {
        return $this->hasOne(nhanvien::class,'id','nguoinhan');
    }
    public function nop_file(){
        return $this->hasMany(nop_file::class,'congviec_id','id');
      }

      public function product()
    {
        return $this->hasMany(nop_file::class,'congviec_id','id');
    }
}
