<?php

use App\Http\Middleware\Redirect;
use Illuminate\Support\Facades\Route;

Route::middleware([Redirect::class])->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('index');
    Route::get('/home', function () {
        return view('home');
    })->name('home');
});
Route::get('/sign-in', function () {
    return view('sign_in');
})->name('sign-in');

Route::get('/sign-up', function () {
    return view('sign_up');
})->name('sign-up');