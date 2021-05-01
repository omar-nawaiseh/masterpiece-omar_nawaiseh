<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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


Route::POST ('/save',      [MainController::class, 'save'])     ->name("auth.save");
Route::POST ('/check',     [MainController::class, 'check'])    ->name("auth.check");
Route::get  ('/logout',    [MainController::class, 'logout'])   ->name("auth.logout");
Route::get  ('/admin',     [MainController::class, 'login'])    ->name("auth.login");

Route::get  ('/admin/Admins',   [MainController::class, 'Admins']);
Route::group(['middleware'=>['AuthCheck']],function(){

     // Admin
     Route::get  ('/admin/dashboard',   [MainController::class, 'dashboard']);
     
     Route::get  ('/delete/{id}',   [MainController::class, 'delete']);
     Route::get  ('/edit/{id}',   [MainController::class, 'edit']);
     Route::post  ('update',   [MainController::class, 'update'])->name("update");

     // User
     Route::get  ('/deleteu/{id}',   [MainController::class, 'deleteu']);
     Route::get  ('/admin/Users',   [MainController::class, 'Users']);
     Route::post ('updateu',   [MainController::class, 'updateu'])->name("updateu");
     Route::get  ('/editu/{id}',   [MainController::class, 'editu']);

});



