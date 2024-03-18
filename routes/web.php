<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\LoginController;

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
Route::get('/dashboard', [homeController::class,'adminpanel'])->name('dashboard');
Route::get('/akpgc', [homeController::class,'frontpage'])->name('akpgc');
Route::get('/addpage', [homeController::class,'addpage']);
Route::get('/slider', [homeController::class,'slider']);
Route::post('/sliderupload', [homeController::class,'sliderupload']);
Route::get('/addNav', [homeController::class,'addNav']);
Route::post('/formNav', [homeController::class,'formNav']);
Route::post('/savepage', [homeController::class,'savepage']);

Route::get('/setting', [homeController::class,'setting']);
Route::post('/updatesetting', [homeController::class,'updatesetting']);
Route::post('/contact', [homeController::class,'contact']);
Route::get('/deleteimage/{id}',[App\Http\Controllers\HomeController::class, 'deleteimage'])->name('deleteimage');
Route::get('/editimage/{id}',[App\Http\Controllers\HomeController::class, 'editimage'])->name('editimage');
Route::post('/updateimage/{id}',[App\Http\Controllers\HomeController::class, 'updateimage'])->name('updateimage');
Route::post('/feedback',[App\Http\Controllers\HomeController::class, 'feedback'])->name('feedback');
Route::get('/login',[App\Http\Controllers\homeController::class, 'login'])->name('login');
Route::get('/register',[App\Http\Controllers\homeController::class, 'register'])->name('register');
Route::post('/register',[App\Http\Controllers\homeController::class, 'registered'])->name('registered');
Route::post('/loginauth',[App\Http\Controllers\homeController::class, 'loginauth'])->name('loginauth');
Route::get('/logout',[App\Http\Controllers\homeController::class, 'logout'])->name('logout');

Route::get('/{slug}',[App\Http\Controllers\homeController::class, 'showpage'])->name('showpage');



