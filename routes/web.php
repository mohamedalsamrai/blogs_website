<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogsController;
use App\Http\Middleware\Redirect;
use App\Http\Middleware\BlogMiddleware;
use Illuminate\Support\Facades\Route;

Route::middleware([Redirect::class])->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('index');
    Route::get('/home', function () {
        return view('home');
    })->name('home');
    Route::get('/sign-in', function () {
        return view('sign_in');
    })->name('sign-in');
    
    Route::get('/sign-up', function () {
        return view('sign_up');
    })->name('sign-up');
});
Route::post('/sign-up', [AuthController::class, 'signUp'])->name('register');
Route::post('/sign-in', [AuthController::class, 'signIn'])->name('login');
Route::get('/sign-out', [AuthController::class, 'signOut'])->name('sign-out');
Route::resource('blogs', BlogsController::class)->middleware(BlogMiddleware::class);