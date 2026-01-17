<?php

namespace Database\Seeders;

use App\Models\MajorCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MajorCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $majorCategories = [
            '野菜',
            '果実',
            '豆類',
            'きのこ類',
            '海藻類',
            '肉類',
            '魚介類',
            '卵類',
            '穀物類',
            '乳類',
            '調味料',
            '加工食品',
        ];

        foreach ($majorCategories as $category) {
            MajorCategory::create([
                'name' => $category,
            ]);
        }
    }
}
