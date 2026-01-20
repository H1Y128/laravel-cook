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
        // 食材マスター配列（ID順）
        $ingredients = [
            ['id' => 1,  'name' => '豚こま切れ肉', 'category_id' => 12],
            ['id' => 2,  'name' => 'じゃがいも', 'category_id' => 2],
            ['id' => 3,  'name' => '玉ねぎ', 'category_id' => 2],
            ['id' => 4,  'name' => 'にんじん', 'category_id' => 2],
            ['id' => 5,  'name' => '水', 'category_id' => 27],
            ['id' => 6,  'name' => '和風顆粒だし', 'category_id' => 27],
            ['id' => 7,  'name' => '酒', 'category_id' => 27],
            ['id' => 8,  'name' => '砂糖', 'category_id' => 27],
            ['id' => 9,  'name' => 'みりん', 'category_id' => 27],
            ['id' => 10, 'name' => 'しょうゆ', 'category_id' => 27],
            ['id' => 11, 'name' => 'サラダ油', 'category_id' => 25],
            ['id' => 12, 'name' => '豚バラ薄切り肉', 'category_id' => 12],
            ['id' => 13, 'name' => '大根', 'category_id' => 2],
            ['id' => 14, 'name' => '長ねぎ', 'category_id' => 3],
            ['id' => 15, 'name' => 'ごぼう', 'category_id' => 2],
            ['id' => 16, 'name' => 'こんにゃく', 'category_id' => 4],
            ['id' => 17, 'name' => 'みそ', 'category_id' => 9],
            ['id' => 18, 'name' => 'トマト', 'category_id' => 1],
            ['id' => 19, 'name' => '卵', 'category_id' => 20],
            ['id' => 20, 'name' => '塩', 'category_id' => 27],
            ['id' => 21, 'name' => '鶏ガラスープの素', 'category_id' => 27],
            ['id' => 22, 'name' => 'ごま油', 'category_id' => 25],
            ['id' => 23, 'name' => '片栗粉', 'category_id' => 23],
            ['id' => 24, 'name' => '餃子の皮', 'category_id' => 22],
            ['id' => 25, 'name' => '豚ひき肉', 'category_id' => 12],
            ['id' => 26, 'name' => '白菜', 'category_id' => 3],
            ['id' => 27, 'name' => 'しょうが', 'category_id' => 2],
            ['id' => 28, 'name' => 'キムチ', 'category_id' => 31],
            ['id' => 29, 'name' => '絹豆腐', 'category_id' => 9], // 絹ごし豆腐
            ['id' => 30, 'name' => 'ニラ', 'category_id' => 3],
            ['id' => 31, 'name' => 'ねぎ', 'category_id' => 3],
            ['id' => 32, 'name' => 'コチュジャン', 'category_id' => 27],
            ['id' => 33, 'name' => '韓国春雨', 'category_id' => 23],
            ['id' => 34, 'name' => '牛バラ肉', 'category_id' => 14],
            ['id' => 35, 'name' => '赤パプリカ', 'category_id' => 1],
            ['id' => 36, 'name' => 'しいたけ', 'category_id' => 10],
            ['id' => 37, 'name' => 'にんにく', 'category_id' => 2],
            ['id' => 38, 'name' => 'ラザニア用パスタ', 'category_id' => 22],
            ['id' => 39, 'name' => 'ピザ用チーズ', 'category_id' => 24],
            ['id' => 40, 'name' => '合いびき肉', 'category_id' => 15],
            ['id' => 41, 'name' => 'ケチャップ', 'category_id' => 27],
            ['id' => 42, 'name' => 'ウスターソース', 'category_id' => 27],
            ['id' => 43, 'name' => '有塩バター', 'category_id' => 24],
            ['id' => 44, 'name' => '薄力粉', 'category_id' => 22],
            ['id' => 45, 'name' => '牛乳', 'category_id' => 24],
            ['id' => 46, 'name' => '塩こしょう', 'category_id' => 27],
            ['id' => 47, 'name' => 'ベーコン', 'category_id' => 15],
            ['id' => 48, 'name' => 'ブロッコリー', 'category_id' => 4],
            ['id' => 49, 'name' => '粉チーズ', 'category_id' => 24],
            ['id' => 50, 'name' => 'こしょう', 'category_id' => 26],
            ['id' => 51, 'name' => 'オリーブオイル', 'category_id' => 25],
            ['id' => 52, 'name' => 'マカロニ', 'category_id' => 22],
            ['id' => 53, 'name' => 'チェダーチーズ', 'category_id' => 24],
        ];

        foreach ($ingredients as $ingredient) {
            Ingredient::create($ingredient);
        }
    }
}
