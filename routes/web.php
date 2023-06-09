<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PublisherController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/bookDetail/{book}', [HomeController::class, 'detail'])->name('bookdetail');

Route::get('/category/{category}', [CategoryController::class, 'index'])->name('category');

Route::get('/publisher', [PublisherController::class, 'index'])->name('publisher');
Route::get('/publisherDetail/{publisher}', [PublisherController::class, 'detail'])->name('publisherdetail');

Route::get('/contact', function () {
    return view('contact', ['categories' => Category::all()]);
})->name('contact');