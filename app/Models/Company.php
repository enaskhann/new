<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public function virtualLocations(){
    
        return $this->hasMany(VirtualLocation::class);
    }

    public function Offices(){
    
        return $this->hasMany(Office::class);
    }
}
