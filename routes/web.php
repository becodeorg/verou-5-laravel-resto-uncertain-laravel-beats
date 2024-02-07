<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReservationController;


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



Route::get('/home', [HomeController::class, 'index']) -> name('guestHome');

Route::get('/book', [ReservationController::class, 'create']) -> name('guestBookTable');

Route::get('/', [LandingController::class, 'show']) -> name('landingPage');

Route::get('/login', [LoginController::class, 'show']) -> name('login');
Route::post('/login', [LoginController::class, 'login']);

