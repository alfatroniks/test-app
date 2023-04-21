<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/{locale}', [CategoryController::class, 'index'])->name('category.index');
Route::post('/{locale}', [CategoryController::class, 'store'])->name('category.save');


Route::get('/setLocale/{locale}', function (string $locale) {

});
