<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plot extends Model
{
    use HasFactory;

    public function actualLocations(){
    
        return $this->hasMany(actualLocation::class);
    }
    public function shapes() 
    
    {
     return $this->morphMany(Shape::class , "shapeable");
    }
}
