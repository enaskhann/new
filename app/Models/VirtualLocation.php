<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VirtualLocation extends Model
{
    use HasFactory;

    public function Office(){
    
        return $this->belongsTo(Office::class);
    }

    public function hajjoffice(){

        return $this->belongsTo(HajjOffice::class);
    }

    public function company(){
    
        return $this->belongsTo(company::class);
    }

    public function actualLocation(){
    
        return $this->belongsTo(actualLocation::class);
    }

    public function batches(){

        return $this->hasMany(Batch::class);
    }
}
