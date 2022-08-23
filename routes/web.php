<?php

use App\Http\Controllers\Frontend\BettingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    // $curl = curl_init();

    // curl_setopt_array($curl, [
    //     CURLOPT_URL => "https://api-football-v1.p.rapidapi.com/v3/timezone",
    //     CURLOPT_RETURNTRANSFER => true,
    //     CURLOPT_FOLLOWLOCATION => true,
    //     CURLOPT_ENCODING => "",
    //     CURLOPT_MAXREDIRS => 10,
    //     CURLOPT_TIMEOUT => 30,
    //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //     CURLOPT_CUSTOMREQUEST => "GET",
    //     CURLOPT_HTTPHEADER => [
    //         "X-RapidAPI-Host: api-football-v1.p.rapidapi.com",
    //         "X-RapidAPI-Key: b589d74debmsh2e888112b37a43fp1923c3jsn9db37703e62c"
    //     ],
    // ]);
    
    // $response = curl_exec($curl);
    // $err = curl_error($curl);
    
    // curl_close($curl);
    
    // if ($err) {
    //     dd("cURL Error #:" . $err);
    // } else {
    //     dd($response);
    // }

    return view('welcome');
})->name('login');

// Routes for logged-in users
Route::group(['middleware' => ['auth']], function () {
Route::get('/dashboard', function () {
    return view('dashboard');
});

 //remove from betslip
 Route::post('/delete-betslip',[BettingController::class,'deleteBetslip']);


//add to betslip
Route::get('/betslip', [BettingController::class, 'index']);

});
Route::post('/add-to-betslip',[BettingController::class,'addToBetslip']);
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

// create new user
Route::post('/users',[UserController::class,'store']);

//login route
Route::post('/users/authenticate',[UserController::class, 'authenticate']);

// logout
Route::post('/logout',[UserController::class, 'logout']);