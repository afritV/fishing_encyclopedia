<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tackle extends Model
{
    use HasFactory;

    public function options(){
        return $this->hasMany(OptionValue::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

}
