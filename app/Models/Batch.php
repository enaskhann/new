<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    use HasFactory;
    protected $fillable = [
        'virtual_location_id',
        'pilgrims',
        'code',
    ];

    public function virtuallocation(){
        return $this->belongsTo(VirtualLocation::class);
    }
}
