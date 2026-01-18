<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function recipes()
    {
        return $this->belongsToMany(Recipe::class)
                    ->withPivot('quantity', 'unit_id')
                    ->using(IngredientRecipe::class)
                    ->withTimestamps();
    }
}
