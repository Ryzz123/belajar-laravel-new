<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get(('/about'), function () {
    return view('about', [
        'title' => "About",
        "name" => "Febri Ananda Lubis",
        "email" => "Febriananda@gmail.com"
    ]);
});

// route belajar models route dan controller
Route::get('/blog', [PostController::class, 'index']);
Route::get('/post/{slug}', [PostController::class, 'show']);

// Model Products dari api
Route::get("/products", [ProductController::class, 'products']);
Route::get("/products/{id}", [ProductController::class, 'show']);