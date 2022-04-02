<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mangluoi extends Model
{
    use HasFactory;
    protected $table='mangluoi';
    public $timestamps = false;
    protected $fillable=['id','ten_mangluoi','avatar','link'];
}
