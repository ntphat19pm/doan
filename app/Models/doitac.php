<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doitac extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table='doitac';
    protected $fillable=['id','ten_doitac','hinhanh'];
}
