<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use App\Models\Category;
use App\Models\MajorCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IngredientsController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        
        $major_categories = MajorCategory::all();

        if ($request->category_id !== null) {
            $category_id = $request->category_id;
            // カテゴリーIDに基づいて材料をフィルタリングするロジックをここに追加
            $ingredients = Ingredient::where('category_id', $category_id)->get();
        } else {
            // すべての材料を取得するロジックをここに追加
            $ingredients = Ingredient::all();
        }

        return view('web.index', compact('ingredients', 'categories', 'major_categories'));
    }
}
