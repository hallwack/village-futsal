<?php

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\FieldController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\UserController;
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

Route::name('admin.')->prefix('admin')->middleware('auth:admin')->group(function () {

    Route::resource('dashboard', AdminController::class);
    Route::resource('price', PriceController::class);
    Route::resource('field', FieldController::class);
    Route::resource('booking', BookingController::class);
    Route::resource('user', UserController::class);
});

Route::name('auth.')->prefix('auth')->group(function () {

    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register');

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login');

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
})->name('home')->middleware('guest');

Route::get('/sign-in', function () {
    return view('sign-in');
});

Route::get('/sign-up', function () {
    return view('sign-up');
});

Route::get('/sign-up-next', function () {
    return view('sign-up-next');
});

Route::get('/booking', function () {
    return view('booking');
})->name('booking');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/payment-mandiri', function () {
    return view('payment-mandiri');
})->name('payment-mandiri');

Route::get('/payment-ovo', function () {
    return view('payment-ovo');
})->name('payment-ovo');

Route::get('/success', function () {
    return view('success');
})->name('success');

Route::get('/account', function () {
    return view('account');
})->name('account');

Route::get('/history-booking', function () {
    return view('history-booking');
})->name('history-booking');

Route::get('/settings', function () {
    return view('settings');
})->name('settings');

Route::get('/profile-settings', function () {
    return view('profile-settings');
})->name('profile-settings');

Route::get('/password-settings', function () {
    return view('password-settings');
})->name('password-settings');

Route::get('/success-settings', function () {
    return view('success-settings');
})->name('success-settings');
