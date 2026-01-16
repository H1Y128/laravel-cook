<?php

namespace Database\Seeders;

use App\Models\Unit;
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
        $units = [
            'g',
            '個',
            '本',
            'cc',
            '小さじ',
            '大さじ',
            '枚',
            'cm',
            'ひとつまみ',
            'かけ',
            '丁',
            '束',
            '適量',
            '少々',
            '株',
        ];

        foreach ($units as $unit) {
            Unit::create(['name' => $unit]);
        }
    }
}
