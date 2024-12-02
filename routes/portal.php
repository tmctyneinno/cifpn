<?php

use Illuminate\Support\Facades\Route;
use Auth;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\ApplicationController;
use App\Http\Controllers\User\PaymentController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\User\CashierCreateController;

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

  

Route::get('/user/payment/return', [PaymentController::class, 'handleOpayCallback'])->name('payment.return');

Route::prefix('user')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('user.dashboard');
    Route::get('/application', [ApplicationController::class, 'create'])->name('user.application.create');
    Route::post('/application', [ApplicationController::class, 'store'])->name('user.application.submit');
    Route::post('/application/update/{id}', [ApplicationController::class, 'update'])->name('user.application.update');
    Route::get('/opay/callback', [PaymentController::class, 'handleCallback'])->name('payment.callback');

    Route::get('/transactions', [HomeController::class, 'transactions'])->name('user.transaction');
    Route::get('/transactions/{id}', [HomeController::class, 'transactionShow'])->name('user.transaction.show');

    Route::get('payment/cancel', [PaymentController::class, 'opayPaymentCancel'])->name('payment.cancel');
    Route::get('payment/failed', [PaymentController::class, 'opayPaymentFailed'])->name('payment.failed');

    Route::get('/cashier-test', [CashierCreateController::class, 'queryPaymentStatus']);
   
    Route::get('/user/login', [PagesController::class, 'membershipLogin'])->name('membership.login');
    Route::get('/user-logout', function () {
        Auth::logout();
        return redirect('/');
    })->name('user.logout');

});

