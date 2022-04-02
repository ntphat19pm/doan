<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\chitieu;

class thang extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table='thang';
    protected $fillable=['id','tenthang'];

    public function chitieu(){
        return $this->hasMany(chitieu::class,'thang_id','id');
    }
}
