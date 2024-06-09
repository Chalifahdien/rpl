<?php

use Illuminate\Support\Facades\Route;

// Login
Route::get('/login', function () {
    return view('Login/login',['tittle'=>'Login']);
});
Route::get('/register', function () {
    return view('Login/register',['tittle'=>'Register']);
});
Route::get('/forgot-password', function () {
    return view('Login/forgot-password',['tittle'=>'Forgot Password']);
});

// Pengguna
Route::get('/', function () {
    return view('index', ['tittle'=>' ']);
});
Route::get('/profile', function () {
    return view('Profile/profile',['tittle'=>'Profile']);
});

// Admin
Route::get('/admin', function () {
    return view('Admin/admin', ['tittle'=>' ']);
});
Route::get('/user', function () {
    return view('Admin/user', ['tittle'=>'Pengguna']);
});