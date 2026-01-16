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
            '豚こま切れ肉',
            'じゃがいも',
            '玉ねぎ',
            'にんじん',
            '水',
            '和風顆粒だし',
            '酒',
            '砂糖',
            'みりん',
            'しょうゆ',
            'サラダ油',
            '豚バラ薄切り肉',
            '大根',
            '長ねぎ',
            'ごぼう',
            'こんにゃく',
            'みそ',
            'トマト',
            '卵',
            '塩',
            '鶏ガラスープの素',
            'ごま油',
            '片栗粉',
            '餃子の皮',
            '豚ひき肉',
            '白菜',
            'しょうが',
            'キムチ',
            '絹豆腐',
            'ニラ',
            'ねぎ',
            'コチュジャン',
            '韓国春雨',
            '牛バラ肉',
            '赤パプリカ',
            'しいたけ',
            'にんにく',
            'ラザニア用パスタ',
            'ピザ用チーズ',
            '合いびき肉',
            'ケチャップ',
            'ウスターソース',
            '有塩バター',
            '薄力粉',
            '牛乳',
            '塩こしょう',
            'ベーコン',
            'ブロッコリー',
            '粉チーズ',
            'こしょう',
            'オリーブオイル',
            'マカロニ',
            'チェダーチーズ',
        ];

        foreach ($ingredients as $ingredient) {
            Ingredient::create(['name' => $ingredient]);
        }
    }
}
