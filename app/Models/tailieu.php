<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tailieu extends Model
{
    use HasFactory;
    protected $table='tailieu';
    public $timestamps = false;
    protected $fillable=['id','ten_tailieu','file','loai_file'];

    public function scopeSearch($query)
    {
        if($tukhoa=request()->tukhoa){
            $query=$query->where('ten_tailieu','like','%'.$tukhoa.'%');
        }
        return $query;
    }
}
