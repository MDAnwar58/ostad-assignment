<?php

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

Route::post('/submit-form', function (Request $request) {
    $name = $request->input('name');

    return response()->json([
        'success' => true,
        'data' => $name
    ]);
});

Route::get('/retrieve-user-agent', function (Request $request) {
    $userAgent = $request->header('User-Agent');

    return response()->json(['user_agent' => $userAgent]);
});

Route::get('/api/endpoint', function (Request $request) {
    $page = $request->query('page');

    $page = $page ?? null;

    return response()->json(['page' => $page]);
});

Route::get('/response-json', function (Request $request) {
    $message = 'Success';

    $data = [
        'name' => 'John Doe',
        'age' => '25'
    ];

    return response()->json([
        'message' => $message,
        'data' => $data,
    ]);
});

Route::post('/file-upload', function (Request $request) {
    if ($request->hasFile('avatar')) {
        $file = $request->file('avatar');
        $path = $file->store('uploads', 'public');
        return response()->json(['message' => 'File uploaded successfully']);
    }

    return response()->json(['message' => 'No file uploaded'], 400);
});

Route::get('/retrieve-cookie', function (Request $request) {
    $rememberToken = $request->cookie('remember_token');
    $rememberToken = $rememberToken ?? null;

    return response()->json(['remember_token' => $rememberToken]);
});

Route::post('/submit', function (Request $request) {
    $email = $request->input('email');

    return response()->json([
        'success' => true,
        'message' => 'Form submitted successfully.'
    ]);
});
