<?php

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
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello', ['name' => 'laravel blade template']);
});
Route::get('/world', function () {
    return view('hello.world', ['name' => 'ini pake folder lagi di views']);
});

// html encode
Route::get('/html-encoding', function (\Illuminate\Http\Request $request) {
    // http://127.0.0.1:8000/html-encoding?name=<h1>Abil</h1>
    return view('html-encoding', ['name' => $request->input('name')]); // ambil input request dari path, query parameter
});
