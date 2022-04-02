<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gioithieu extends Model
{
    use HasFactory;
    protected $table='gioithieu';
    public $timestamps = false;
    protected $fillable=['id','noidung','tram_hatang','trungtam','capquang','diem_giaodich','dieuhanh','diem_giaonhan','canbo_nhanvien','chuyengia','giatri','chamsoc'];
}
