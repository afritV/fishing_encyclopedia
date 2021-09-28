<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->BelongsTo(Category::class);
    }

    public function tackle()
    {
        return $this->BelongsToMany(Category::class);
    }
}
