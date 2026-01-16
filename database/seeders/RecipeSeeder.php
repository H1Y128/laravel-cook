<?php

namespace Database\Seeders;

use App\Models\Recipe;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $recipes = [
            ['name' => '肉じゃが', 'volume' => 4, 'country_id' => 1],
            ['name' => '豚汁', 'volume' => 4, 'country_id' => 1],
            ['name' => 'トマトと卵の炒め物', 'volume' => 2, 'country_id' => 2],
            ['name' => '水餃子', 'volume' => 2, 'country_id' => 2],
            ['name' => 'キムチチゲ', 'volume' => 1, 'country_id' => 3],
            ['name' => 'チャプチェ', 'volume' => 2, 'country_id' => 3],
            ['name' => 'ラザニア', 'volume' => 4, 'country_id' => 4],
            ['name' => 'フリッタータ', 'volume' => 3, 'country_id' => 4],
            ['name' => 'トルティージャ', 'volume' => 4, 'country_id' => 5],
            ['name' => 'マカロニ＆チーズ', 'volume' => 2, 'country_id' => 6],
        ];
        foreach ($recipes as $recipe) {
            Recipe::create($recipe);
        }
    }
}
