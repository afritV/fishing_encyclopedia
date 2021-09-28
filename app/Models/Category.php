<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function options(){
        return $this->belongsToMany(Option::class);
    }

    public function tacles(){
        return $this->hasMany(Tackle::class);
    }


}
