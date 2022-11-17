<?php

use App\Http\Controllers\CompetitionController;
use App\Http\Controllers\CompletedController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Frontend\BettingController;
use App\Http\Controllers\frontend\PlacedbetController;
use App\Http\Controllers\Mpesa\MPESAController;
use App\Http\Controllers\Mpesa\MpesaResponseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;

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

Route::get('/', [WelcomeController::class,'index'])->name('login');

// Routes for logged-in users
Route::group(['middleware' => ['auth']], function () {
Route::get('/dashboard', [DashboardController::class,'index']);

Route::post('/depositamount', [DashboardController::class,'update']);
Route::post('/withdrawcash', [DashboardController::class,'withdraw']);
Route::post('/stkpush/creditaccount', [MPESAController::class,'stkPush']);
Route::get('/senddarajaapidata', [MpesaController::class,'depositAmount']);
Route::get('/confirmationstk/{id}', [MpesaResponseController::class,'stkPushresponse']);


 //remove from betslip
 Route::post('/delete-betslip',[BettingController::class,'deleteBetslip']);


//add to betslip
Route::get('/betslip', [BettingController::class, 'index']);

//Show competition

Route::get('/competition',[CompetitionController::class, 'index']);

//new compettition
Route::get('/competition/new',[CompetitionController::class, 'new']);

});

// competition complete draw
Route::post('/competition', [CompetitionController::class, 'betagainstdraw']);
// Competition complete home
Route::post('/competitionhome', [CompetitionController::class, 'betagainsthome']);
// Competition complete away
Route::post('/competitionaway', [CompetitionController::class, 'betagainstaway']);

//completed competition
Route::get('/completed',[CompletedController::class,'index']);


Route::post('/add-to-betslip',[BettingController::class,'addToBetslip']);
// place bet
Route::post('/placebet',[PlacedbetController::class,'save']);
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

