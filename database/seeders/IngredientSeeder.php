<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ingredients = [
            // 肉類
            ['name' => '豚こま切れ肉', 'category_id' => 12],
            ['name' => '鶏もも肉', 'category_id' => 13],
            ['name' => '鶏むね肉', 'category_id' => 13],
            ['name' => '牛こま切れ肉', 'category_id' => 14],
            ['name' => '合いびき肉', 'category_id' => 15],
            ['name' => '豚バラ薄切り肉', 'category_id' => 12],
            ['name' => '豚ひき肉', 'category_id' => 12],
            ['name' => '牛バラ肉', 'category_id' => 14],
            ['name' => 'ベーコン', 'category_id' => 15],

            // 豆類
            ['name' => '木綿豆腐', 'category_id' => 9],
            ['name' => '絹ごし豆腐', 'category_id' => 9],
            ['name' => '厚揚げ', 'category_id' => 9],
            ['name' => '油揚げ', 'category_id' => 9],
            ['name' => 'みそ', 'category_id' => 9],
            ['name' => '絹豆腐', 'category_id' => 9],
            
            // 野菜類
            ['name' => 'キャベツ', 'category_id' => 3],
            ['name' => 'レタス', 'category_id' => 3],
            ['name' => 'きゅうり', 'category_id' => 1],
            ['name' => 'トマト', 'category_id' => 1],
            ['name' => 'にんじん', 'category_id' => 2],
            ['name' => 'じゃがいも', 'category_id' => 2],
            ['name' => '玉ねぎ', 'category_id' => 2],
            ['name' => '大根', 'category_id' => 2],
            ['name' => '長ねぎ', 'category_id' => 3],
            ['name' => 'ごぼう', 'category_id' => 2],
            ['name' => 'こんにゃく', 'category_id' => 4],
            ['name' => '白菜', 'category_id' => 3],
            ['name' => 'しょうが', 'category_id' => 2],
            ['name' => 'ニラ', 'category_id' => 3],
            ['name' => 'ねぎ', 'category_id' => 3],
            ['name' => '赤パプリカ', 'category_id' => 1],
            ['name' => 'にんにく', 'category_id' => 2],
            ['name' => 'ブロッコリー', 'category_id' => 4],
            
            // きのこ類
            ['name' => 'しいたけ', 'category_id' => 10],
            
            // 卵類
            ['name' => '卵', 'category_id' => 20],
            
            // 穀物類
            ['name' => '餃子の皮', 'category_id' => 22],
            ['name' => 'ラザニア用パスタ', 'category_id' => 22],
            ['name' => '薄力粉', 'category_id' => 22],
            ['name' => '片栗粉', 'category_id' => 23],
            ['name' => '韓国春雨', 'category_id' => 23],

            // 乳類
            ['name' => 'ピザ用チーズ', 'category_id' => 24],
            ['name' => '有塩バター', 'category_id' => 24],
            ['name' => '牛乳', 'category_id' => 24],
            ['name' => '粉チーズ', 'category_id' => 24],
            ['name' => 'マカロニ', 'category_id' => 22],
            ['name' => 'チェダーチーズ', 'category_id' => 24],
            
            // 油類
            ['name' => 'サラダ油', 'category_id' => 25],
            ['name' => 'ごま油', 'category_id' => 25],
            ['name' => 'オリーブオイル', 'category_id' => 25],
            
            
            // 香辛料 (新規 ID 26)
            ['name' => 'こしょう', 'category_id' => 26],
            
            // その他(調味料) (新規 ID 27)
            ['name' => '水', 'category_id' => 27],
            ['name' => '和風顆粒だし', 'category_id' => 27],
            ['name' => '酒', 'category_id' => 27],
            ['name' => '砂糖', 'category_id' => 27],
            ['name' => 'みりん', 'category_id' => 27],
            ['name' => 'しょうゆ', 'category_id' => 27],
            ['name' => '塩', 'category_id' => 27],
            ['name' => '鶏ガラスープの素', 'category_id' => 27],
            ['name' => 'コチュジャン', 'category_id' => 27],
            ['name' => 'ケチャップ', 'category_id' => 27],
            ['name' => 'ウスターソース', 'category_id' => 27],
            ['name' => '塩こしょう', 'category_id' => 27],
            
            // 加工食品
            ['name' => 'キムチ', 'category_id' => 31],
        ];

        foreach ($ingredients as $ingredient) {
            Ingredient::create($ingredient);
        }
    }
}
