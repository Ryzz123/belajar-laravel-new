<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
// ini dapat menggunakan Route Model Binding jadi tidak perlu paramater id
Route::get('/post/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all(),
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category) {
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});

Route::get('/authors/{author:username}',function(User $author) {
    return view('posts', [
        'title' => 'User Posts',
        'posts' => $author->posts,
    ]);
});

// Model Products dari api
Route::get("/products", [ProductController::class, 'products']);
Route::get("/products/{id}", [ProductController::class, 'show']);