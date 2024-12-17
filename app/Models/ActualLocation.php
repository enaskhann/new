<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActualLocation extends Model
{
    
    use HasFactory;

    public function virtualLocations(){
    
        return $this->hasMany(VirtualLocation::class);
    }

    public function plots(){

        return $this->belongsTo(Plot::class);
        }

    public function path(){

            return $this->belongsTo(path::class);
            }

    public function residentialArea(){

    return $this->belongsTo(ResidentialArea::class);
            }

    public function shapes() 
    {
     return $this->morphOne(Shape::class , "shapeable");
    }

    }

