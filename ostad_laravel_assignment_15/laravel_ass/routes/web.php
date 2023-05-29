<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegisterController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Http\Request;
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
    return view('welcome');
});
Route::get('/other', function () {
    return view('other');
});


Route::post('/register', [RegisterController::class, 'register']);

Route::get('/home', function () {
    return redirect('/dashboard')->withStatus(302);
});

Route::middleware([AuthMiddleware::class])->group(function () {
    Route::get('/profile', function () {
        return "profile";
    })->name('profile');

    Route::get('/settings', function () {
        return "settings";
    })->name('settings');
});


Route::post('/contact', ContactController::class)->name('contact');

