<?php

use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\PanditController;
use App\Http\Middleware\Pandit;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(FrontController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/register', 'register')->name('register');
    Route::post('/save', 'save')->name('save');
    Route::get('/login', 'login')->name('login');
    Route::post('/loginSubmit', 'loginSubmit')->name('loginSubmit');


    Route::controller(PanditController::class)->prefix('pandit')->name('pandit.')->middleware(Pandit::class)->group(function () {
        Route::get('/dashboard', 'dashboard')->name('dashboard');
        Route::post('/kycSubmit', 'kycSubmit')->name('kycSubmit');
        Route::get('/profiles', 'profiles')->name('profiles');
    });
});
