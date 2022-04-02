<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class danhmuc_chuyendoi extends Model
{
    use HasFactory;
    protected $table='danhmuc_chuyendoi';
    public $timestamps = false;
    protected $fillable=['id','ten_danhmuc','avatar','chitiet','phanloai_id'];

    public function lienhe_chuyendoi(){
        return $this->hasMany(lienhe_chuyendoi::class,'linhvuc_lienhe','id');
      }
}
