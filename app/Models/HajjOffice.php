<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HajjOffice extends Model
{
    use HasFactory;

    public function virtuallocations(){
    
        return $this->hasMany(VirtualLocation::class);
    }

    public function nationality(){
    
        return $this->belongsTo(nationality::class);
    }
}
