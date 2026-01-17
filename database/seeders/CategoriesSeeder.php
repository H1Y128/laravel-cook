<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $caregories = [
            ['name' => '果菜', 'major_category_id' => 1],
            ['name' => '根菜', 'major_category_id' => 1],
            ['name' => '葉物', 'major_category_id' => 1],
            ['name' => 'その他(野菜)', 'major_category_id' => 1],
            ['name' => '柑橘類', 'major_category_id' => 2],
            ['name' => 'ベリー類', 'major_category_id' => 2],
            ['name' => '熱帯果実', 'major_category_id' => 2],
            ['name' => 'その他(果実)', 'major_category_id' => 2],
            ['name' => '豆類', 'major_category_id' => 3],
            ['name' => 'きのこ類', 'major_category_id' => 4],
            ['name' => '海藻類', 'major_category_id' => 5],
            ['name' => '豚肉', 'major_category_id' => 6],
            ['name' => '鶏肉', 'major_category_id' => 6],
            ['name' => '牛肉', 'major_category_id' => 6],
            ['name' => 'その他(肉類)', 'major_category_id' => 6],
            ['name' => '魚類', 'major_category_id' => 7],
            ['name' => '貝類', 'major_category_id' => 7],
            ['name' => '甲殻類', 'major_category_id' => 7],
            ['name' => 'その他(魚介類)', 'major_category_id' => 7],
            ['name' => '卵類', 'major_category_id' => 8],
            ['name' => '米', 'major_category_id' => 9],
            ['name' => '小麦', 'major_category_id' => 9],
            ['name' => 'その他(穀物類)', 'major_category_id' => 9],
            ['name' => '乳類', 'major_category_id' => 10],
            ['name' => '油', 'major_category_id' => 11],
            ['name' => '香辛料', 'major_category_id' => 11],
            ['name' => 'その他(調味料)', 'major_category_id' => 11],
            ['name' => '缶詰', 'major_category_id' => 12],
            ['name' => '冷凍食品', 'major_category_id' => 12],
            ['name' => 'インスタント食品', 'major_category_id' => 12],
            ['name' => 'その他(加工食品)', 'major_category_id' => 12],
        ];
        foreach ($caregories as $category) {
            Category::create($category);
        }
    }
}
