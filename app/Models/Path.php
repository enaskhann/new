<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Path extends Model
{
    use HasFactory;

    public function actuallocations(){
    
        return $this->hasMany(actualLocation::class);
    }

    public function primaryroad(){
    
        return $this->belongsTo(primaryRoad::class);

    }

    public function jamarat_level(){
    
        return $this->belongsTo(jamaratLevel::class);
    }

    public function shapes() 
    {
     return $this->morphMany(Shape::class , "shapeable");
    }

}
