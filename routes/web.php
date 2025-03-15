<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('sign_up');
});
Route::get('/sign-in', function () {
    return view('sign_in');
});
Route::get('/sign-up', function () {
    return view('sign_up');
});
