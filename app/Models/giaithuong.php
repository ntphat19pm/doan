<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class giaithuong extends Model
{
    use HasFactory;
    protected $table='giaithuong';
    public $timestamps = false;
    protected $fillable=['id','ten_giaithuong','avatar','phanloai_id','nam','chitiet'];
}
