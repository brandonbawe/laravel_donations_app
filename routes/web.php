<?php

use Illuminate\Support\Facades\Route;
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

// Route::get('/donations', [DonationsController::class, 'index'])->name('donations');

Route::resource('/campaigns', CampaignsController::class)->middleware(['auth'])->name('campaigns', 'campaign/create');
Route::resource('/dashboard', DashboardController::class);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/status', function() {
    return view('campaigns.notification');
});

Route::post('/makePayment', [MakePaymentController::class, 'donate']);