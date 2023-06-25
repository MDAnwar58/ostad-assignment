<?php

use App\Http\Controllers\CategoryController;
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
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $posts = Post::with('category')->get();
    return view('posts', compact('posts'));
});
// Route::get('/category-post', [CategoryController::class, 'getPostsWithCategory']);

Route::get('/count-post-by-category/{category_id}', [PostController::class, 'countPostByCategory']);
Route::get('/posts/{id}/delete', [PostController::class, 'delete']);
Route::get('/posts-delete', [PostController::class, 'postsDelete']);

Route::get('/categories/{id}/posts', [CategoryController::class, 'getPostsWithCategory']);
Route::get('/get-categories/{category_id}', [CategoryController::class, 'getCategories']);
Route::get('/get-post-with-categories', [CategoryController::class, 'getPostWithCategories']);
