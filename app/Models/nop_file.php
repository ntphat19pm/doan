<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\giaoviec;

class nop_file extends Model
{
    use HasFactory;
    protected $table='nop_cv';
    public $timestamps = false;
    protected $fillable=['id','congviec_id','file','thoigian_nop'];

    public function giaoviec(){
        return $this->hasOne(giaoviec::class,'id','congviec_id');
      }
}
