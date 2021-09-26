<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function subcategory(){
        return $this->hasMany(Subcategory::class, 'subcategory');
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    //todo delete
//    public function option(){
//        return $this->hasMany(Option::class);
//    }


}
