<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', ['tittle'=>' ']);
});

Route::get('/login', function () {
    return view('Login/login',['tittle'=>'Login']);
});
Route::get('/register', function () {
    return view('Login/register',['tittle'=>'R  egister']);
});
Route::get('/forgot-password', function () {
    return view('Login/forgot-password',['tittle'=>'Forgot Password']);
});
Route::get('/profile', function () {
    return view('Profile/profile',['tittle'=>'Profile']);
});