<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrimaryRoad extends Model
{
    use HasFactory;

    public function paths(){

        return $this->hasMany(path::class);
        }

    
        public function shapes() 
        {
         return $this->morphMany(Shape::class , "shapeable");
        }



        
}
