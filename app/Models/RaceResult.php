<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RaceResult extends Model
{
    use HasFactory;

    
    

    public function driver(){
        return $this->belongsTo(Driver::class);
    }

    public function race(){
        return $this->belongsTo(Race::class);
    }
    
}

