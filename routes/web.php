<?php

use App\Http\Controllers\API\MidtransController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TransactionGroomingController;
use App\Http\Controllers\TransactionPenitipanController;
use App\Http\Controllers\TransactionPraktikController;
use App\Http\Controllers\TsManualGroomingController;
use App\Http\Controllers\TsManualPenitipanController;
use App\Http\Controllers\TsManualPraktikController;
use App\Http\Controllers\UserController;
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

//Homepage
Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/debug-sentry', function () {
    throw new Exception('My first Sentry error!');
});

// Dashboard
Route::prefix('dashboard')
    ->middleware(['auth:sanctum', 'admin'])
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('users', UserController::class);
        Route::resource('food', FoodController::class);

        Route::get('transactions/{id}/status/{status}', [TransactionController::class, 'changeStatus'])
            ->name('transactions.changeStatus');
        Route::resource('transactions', TransactionController::class);

        Route::resource('discount', DiscountController::class);

        Route::resource('doctor', DoctorController::class);

        Route::resource('transactionsgrooming', TransactionGroomingController::class);
        Route::resource('transactionspenitipan', TransactionPenitipanController::class);
        Route::resource('transactionspraktik', TransactionPraktikController::class);

        Route::resource('groomingmanual', TsManualGroomingController::class);
        Route::resource('penitipanmanual', TsManualPenitipanController::class);
        Route::resource('praktikmanual', TsManualPraktikController::class);
    });


// midtrans related
Route::get('midtrans/success', [MidtransController::class, 'success']);
Route::get('midtrans/unfinish', [MidtransController::class, 'unfinish']);
Route::get('midtrans/error', [MidtransController::class, 'error']);
