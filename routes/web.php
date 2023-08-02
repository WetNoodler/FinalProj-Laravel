<?php

use App\Http\Controllers\MainController;
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
    return to_route('act14.main');
});

Route::prefix('/main')->controller(MainController::class)->group(function(){
    Route::get('/', 'index')->name('act14.main');
    Route::get('/login', 'login')->name('act14.login');
    Route::get('/register', 'registration')->name('act14.register');
    Route::get('/details', 'details')->name('act14.details');
    Route::get('/cart', 'cart')->name('act14.cart');
    Route::get('/profile', 'profile')->name('act14.profile');
});
