<?php

use App\Http\Controllers\Cake\CakeController;
use App\Http\Controllers\Cake\IngredientsController;
use App\Livewire\User\Home\UserHomeIndex;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', UserHomeIndex::class);
// Route::resource('cake', CakeController::class);
// Route::resource('ingredient', IngredientsController::class);


Route::resources([
    'cake' => CakeController::class,
    'ingredient' => IngredientsController::class,
]);
