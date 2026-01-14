<?php

namespace Database\Seeders;

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
        DB::table('recipes')->insert([
            [
                'name' => '肉じゃが',
                'volume' => 4,
                'country_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '豚汁',
                'volume' => 4,
                'country_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'トマトと卵の炒め物',
                'volume' => 2,
                'country_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '水餃子',
                'volume' => 2,
                'country_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'キムチチゲ',
                'volume' => 1,
                'country_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'チャプチェ',
                'volume' => 2,
                'country_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ラザニア',
                'volume' => 4,
                'country_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'フリッタータ',
                'volume' => 3,
                'country_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'トルティージャ',
                'volume' => 4,
                'country_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'マカロニ＆チーズ',
                'volume' => 2,
                'country_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
