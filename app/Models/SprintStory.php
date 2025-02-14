<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SprintStory extends Model
{
    use HasFactory;

    public function sprint(){
        return $this->hasOne(Sprint::class);
    }
}
