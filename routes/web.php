<?php

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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/index',function (){
    return view('index');
});
Route::get('/show', function (){
    return view('show');
});
Route::get('/form', function (){
    return view('form');
});

Route::get('/password', function (){
    return view('password');
});
Route::get('/profile', function () {
    return view('profile');
});

Route::get('/request-reset-password', function () {
    return view('request-reset-password');
});
Route::get('/update-password', function () {
    return view('update-password');
});
Route::get('/verify-email', function () {
    return view('verify-email');
});
Route::get('/login', function (){
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});

