<?php

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

Route::get('/ganb/api/auth/v1/authorization', [GmoController::class, 'getCode']);
Route::post('/ganb/api/auth/v1/token', [GmoController::class, 'getToken']);
Route::get('/ganb/api/corporation/v1/accounts', [GmoController::class, 'getAccount']);
Route::post('/ganb/api/corporation/v1/va/issue', [GmoController::class, 'getIssue']);