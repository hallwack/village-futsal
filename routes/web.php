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

Route::name('admin.')->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard.home');
    })->name('dashboard');
});

Route::name('auth.')->prefix('auth')->group(function () {
    Route::get('/sign-in', function () {
        return view('admin.auth.sign-in');
    })->name('sign-in');

    Route::get('/sign-up', function () {
        return view('admin.auth.sign-up');
    })->name('sign-up');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
})->name('home');

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
