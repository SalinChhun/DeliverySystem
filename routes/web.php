<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AddToCardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SigninController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ContactController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/sample', function () {
//     return "wecome to salin chhun laravel";
// });

// Route::redirect('/here', 'there');

// Route::get('/register', function () {
//     return view('register');
// });

// Route::get('home', [homeController::class, 'index']);

// Route::get('contact', [ContactController::class, 'index']);

// Route::get('about', [AboutController::class, 'index']);

// Route::get('register/save', [RegisterController ::class,'save']);


// Route::controllers(RegisterController::class)->group(function(){
//     Route::view('register');
// });

 Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'index');
 });

Route::get('all', [AddToCardController ::class,'index']);

Route::get('shop', [ShopController ::class,'index']);

Route::get('signin', [SigninController ::class,'index']);
