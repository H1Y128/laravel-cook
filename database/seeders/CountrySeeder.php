<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('countries')->insert([
            ['name' => '日本', 'created_at' => now(), 'updated_at' => now()],
            ['name' => '中国', 'created_at' => now(), 'updated_at' => now()],
            ['name' => '韓国', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'イタリア', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'スペイン', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'アメリカ', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
