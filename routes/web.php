<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\GmoController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [Controller::class, 'getViewLogin']);
Route::post('/login', [Controller::class, 'submitLogin']);

Route::get('/transfer', [GmoController::class, 'getViewTransfer'])->name('transfer');
Route::post('/transfer', [GmoController::class, 'submitTransfer']);

/**
 * ==================> API <========================
 */
Route::get('/api/v1/verify_account_number/{number_account}', [GmoController::class, 'verifyAccountNumber'])->name('verify_account_number');
Route::get('/ganb/api/auth/v1/authorization', [GmoController::class, 'getCode']);
Route::post('/ganb/api/auth/v1/token', [GmoController::class, 'getToken']);
Route::post('/ganb/api/webhooks/v1/subscribe', [GmoController::class, 'subscribe']);
Route::get('/ganb/api/corporation/v1/accounts', [GmoController::class, 'getAccount']);
Route::post('/ganb/api/corporation/v1/va/issue', [GmoController::class, 'getIssue']);
Route::post('/ganb/api/corporation/v1/transfer/transferfee', [GmoController::class, 'transferFee']);
Route::get('/ganb/api/corporation/v1/accounts/balances', [GmoController::class, 'balances']);
Route::post('/ganb/api/corporation/v1/transfer/request', [GmoController::class, 'request']);
