<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->BelongsToMany(Category::class);
    }

    public function tacle()
    {
        return $this->BelongsToMany(Category::class);
    }
}
