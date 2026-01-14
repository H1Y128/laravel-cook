<?php

namespace Database\Seeders;

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
        DB::table('ingredients')->insert([
            ['name' => '豚こま切れ肉', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'じゃがいも', 'created_at' => now(), 'updated_at' => now()],
            ['name' => '玉ねぎ', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'にんじん', 'created_at' => now(), 'updated_at' => now()],
            ['name' => '水', 'created_at' => now(), 'updated_at' => now()],
            ['name' => '和風顆粒だし', 'created_at' => now(), 'updated_at' => now()],
            ['name' => '酒', 'created_at' => now(), 'updated_at' => now()],
            ['name' => '砂糖', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'みりん', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'しょうゆ', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'サラダ油', 'created_at' => now(), 'updated_at' => now()],
            ['name' => '豚バラ薄切り肉', 'created_at' => now(), 'updated_at' => now()],
            ['name' => '大根', 'created_at' => now(), 'updated_at' => now()],
            ['name' => '長ねぎ', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'ごぼう', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'こんにゃく', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'みそ', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'トマト', 'created_at' => now(), 'updated_at' => now()],
            ['name' => '卵', 'created_at' => now(), 'updated_at' => now()],
            ['name' => '塩', 'created_at' => now(), 'updated_at' => now()],
            ['name' => '鶏ガラスープの素', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'ごま油', 'created_at' => now(), 'updated_at' => now()],
            ['name' => '片栗粉', 'created_at' => now(), 'updated_at' => now()],
            ['name' => '餃子の皮', 'created_at' => now(), 'updated_at' => now()],
            ['name' => '豚ひき肉', 'created_at' => now(), 'updated_at' => now()],
            ['name' => '白菜', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'しょうが', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'キムチ', 'created_at' => now(), 'updated_at' => now()],
            ['name' => '絹豆腐', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'ニラ', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'ねぎ', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'コチュジャン', 'created_at' => now(), 'updated_at' => now()],
            ['name' => '韓国春雨', 'created_at' => now(), 'updated_at' => now()],
            ['name' => '牛バラ肉', 'created_at' => now(), 'updated_at' => now()],
            ['name' => '赤パプリカ', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'しいたけ', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'にんにく', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'ラザニア用パスタ', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'ピザ用チーズ', 'created_at' => now(), 'updated_at' => now()],
            ['name' => '合いびき肉', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'ケチャップ', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'ウスターソース', 'created_at' => now(), 'updated_at' => now()],
            ['name' => '有塩バター', 'created_at' => now(), 'updated_at' => now()],
            ['name' => '薄力粉', 'created_at' => now(), 'updated_at' => now()],
            ['name' => '牛乳', 'created_at' => now(), 'updated_at' => now()],
            ['name' => '塩こしょう', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'ベーコン', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'ブロッコリー', 'created_at' => now(), 'updated_at' => now()],
            ['name' => '粉チーズ', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'こしょう', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'オリーブオイル', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'マカロニ', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'チェダーチーズ', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
