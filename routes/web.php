<?php

use App\Http\Controllers\Front\FrontController;
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
    
});