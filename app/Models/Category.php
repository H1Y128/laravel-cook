<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function majorCategory()
    {
        return $this->belongsTo(MajorCategory::class);
    }

    public function ingredients()
    {
        return $this->hasMany(Ingredient::class);
    }
}
