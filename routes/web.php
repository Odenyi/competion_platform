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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/blog-details', function () {
    return view('blog-details');
});
Route::get('/personal-details-setting', function () {
    return view('personal-details-setting');
});
Route::get('/soccer-bets-2', function () {
    return view('soccer-bets-2');
});
Route::get('/soccer-bets-1', function () {
    return view('soccer-bets-1');
});
Route::get('/tournaments', function () {
    return view('tournaments');
});
Route::get('/tournaments-details', function () {
    return view('tournaments-details');
});
Route::get('/modify-login-password', function () {
    return view('modify-login-password');
});
Route::get('/affiliate', function () {
    return view('affiliate');
});
Route::get('/faqs', function () {
    return view('faqs');
});
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});
Route::get('/terms-conditions', function () {
    return view('terms-conditions');
});
Route::get('/error', function () {
    return view('error');
});
Route::get('/contact', function () {
    return view('contact');
});

