<?php

use App\Http\Controllers\WebController;
use App\Http\Controllers\IngredientsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebController::class, 'index'])->name('top');

Route::get('/ingredients', [IngredientsController::class, 'index'])->name('ingredients.index');