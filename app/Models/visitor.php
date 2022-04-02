<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class visitor extends Model
{
    use HasFactory;
    protected $table='visitor';
    public $timestamps = false;
    protected $fillable=['id','ip_address','date_visitor','nguoidung_id'];
}
