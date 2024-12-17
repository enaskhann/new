<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JamaratLevel extends Model
{
    use HasFactory;

    public function paths(){
    
        return $this->hasMany(Path::class);
    }
    
    public function shapes() 
    {
     return $this->morphOne(Shape::class , "shapeable");
    }

}
