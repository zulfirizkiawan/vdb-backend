<?php

use App\Http\Controllers\API\DiscountController;
use App\Http\Controllers\API\DoctorController;
use App\Http\Controllers\API\FoodController;
use App\Http\Controllers\API\GroomingController;
use App\Http\Controllers\API\MidtransController;
use App\Http\Controllers\API\PenitipanController;
use App\Http\Controllers\API\PraktikController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\TransactionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->group(function () {
    Route::get('user', [UserController::class, 'fetch']);
    Route::post('user', [UserController::class, 'updateProfile']);
    Route::post('user/photo', [UserController::class, 'updatePhoto']);
    Route::post('logout', [UserController::class, 'logout']);

    Route::post('checkout', [TransactionController::class, 'checkout']);

    Route::post('checkoutgrooming', [GroomingController::class, 'checkoutgrooming']);
    Route::get('grooming', [GroomingController::class, 'all']);
    Route::post('grooming/{id}', [GroomingController::class, 'update']);

    Route::post('checkoutpenitipan', [PenitipanController::class, 'checkoutpenitipan']);
    Route::get('penitipan', [PenitipanController::class, 'all']);
    Route::post('penitipan/{id}', [PenitipanController::class, 'update']);

    Route::post('checkoutpraktik', [PraktikController::class, 'checkoutpraktik']);
    Route::get('praktik', [PraktikController::class, 'all']);
    Route::post('praktik/{id}', [PraktikController::class, 'update']);

    Route::get('transaction', [TransactionController::class, 'all']);
    Route::post('transaction/{id}', [TransactionController::class, 'update']);
});
Route::post('login', [UserController::class, 'login']);
Route::post('register', [UserController::class, 'register']);

Route::get('food', [FoodController::class, 'all']);

Route::get('discount', [DiscountController::class, 'all']);
Route::post('discount/{id}', [DiscountController::class, 'update']);

Route::get('doctor', [DoctorController::class, 'all']);

Route::post('midtrans/callback', [MidtransController::class, 'callback']);
