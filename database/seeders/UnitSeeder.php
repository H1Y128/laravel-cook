<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('units')->insert([
            ['name' => 'g', 'created_at' => now(), 'updated_at' => now()],
            ['name' => '個', 'created_at' => now(), 'updated_at' => now()],
            ['name' => '本', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'cc', 'created_at' => now(), 'updated_at' => now()],
            ['name' => '小さじ', 'created_at' => now(), 'updated_at' => now()],
            ['name' => '大さじ', 'created_at' => now(), 'updated_at' => now()],
            ['name' => '枚', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'cm', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'ひとつまみ', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'かけ', 'created_at' => now(), 'updated_at' => now()],
            ['name' => '丁', 'created_at' => now(), 'updated_at' => now()],
            ['name' => '束', 'created_at' => now(), 'updated_at' => now()],
            ['name' => '適量', 'created_at' => now(), 'updated_at' => now()],
            ['name' => '少々', 'created_at' => now(), 'updated_at' => now()],
            ['name' => '株', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
