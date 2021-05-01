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




Route::middleware(['auth:sanctum', 'verified'])->get('/home', function () {
    return view('BackEnd/dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->post('/post', [\App\Http\Controllers\FrontEnd\HomeController::class, 'postCreate'])->name('post.submit');


Route::middleware(['auth:sanctum', 'verified'])->get('/Profile', function () {
    return view('BackEnd/profile');
})->name('profile');






