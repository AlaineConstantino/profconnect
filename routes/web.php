<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/forgotpassword', function () {
    return view('forgotpassword');
})->name('forgotpassword');

Route::get('/resetpassword', function () {
    return view('passwordreset');
})->name('passwordreset');

Route::get('/', function () {
    return redirect()->route('login');
})->name('root');

Route::get('/home', function () {
    return view('studentlanding');
})->name('home');

Route::get('/terms', function () {
    return view('terms');
})->name('terms');
