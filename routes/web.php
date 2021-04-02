<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CampaignsController;
use App\Http\Controllers\MakePaymentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [HomeController::class, 'index']);

Route::middleware(['auth'])->group(function () {
   Route::resource('/dashboard', DashboardController::class);
});

// Route::get('/donations', [DonationsController::class, 'index'])->name('donations');

Route::resource('/campaigns', CampaignsController::class); 


Auth::routes();

Route::get('/home', [DashboardController::class, 'index'])->name('home');


Route::get('/status', function(Request $request) {
    //
    $name = $request->fullUrl();
     return view('campaigns.notification', ['name' => $name]);
});

Route::post('/makePayment', [MakePaymentController::class, 'donate']);
Route::get('/notify', [MakePaymentController::class, 'index']);