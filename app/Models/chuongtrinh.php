<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\thang;

class chuongtrinh extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table='chuongtrinh';
    protected $fillable=['id','thang_id','ten_chuongtrinh','kehoach','tytrong','thuchien'];

    public function thang(){
        return $this->hasOne(thang::class,'id','thang_id');
      }
}
