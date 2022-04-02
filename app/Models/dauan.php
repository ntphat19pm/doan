<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dauan extends Model
{
    use HasFactory;
    protected $table='dauan';
    public $timestamps = false;
    protected $fillable=['id','nam','noidung','avatar'];
}
