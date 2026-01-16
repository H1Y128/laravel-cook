<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Constraint\Count;
use App\Models\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contries = ['日本', '中国', '韓国', 'イタリア', 'スペイン', 'アメリカ'];
        
        foreach ($contries as $country) {
            Country::create(['name' => $country]);
        }
    }
}
