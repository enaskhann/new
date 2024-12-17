<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;

    public function virtuallocations(){
    
        return $this->hasMany(Virtual_location::class);
    }
    
    public function company(){
    
        return $this->belongsTo(company::class);
    }

}
