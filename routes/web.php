<?php

use App\Http\Controllers\Admin\TopupController;
use App\Http\Controllers\Admin\WithdrawalController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeeTaskController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
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



Route::get('/dashboard', function () {
    $topupCount = \App\Models\TopupRequest::count();
    $withdrawalCount = \App\Models\WithdrawalRequest::count();

    return view('dashboard', compact('topupCount', 'withdrawalCount'));
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware(['auth'])->group(function () {
    Route::middleware(['can:withdraw-request', 'can:approve-withdrawal'])->group(function () {
        Route::get('/withdrawals', [WithdrawalController::class,'index'])->name('withdrawals.index');
        Route::post('/withdrawals/request', [WithdrawalController::class, 'request'])->name('withdrawals.request');
        Route::post('/withdrawals/{id}/approve', [WithdrawalController::class, 'approve'])->name('withdrawals.approve');
    });

    Route::middleware(['can:approve-topup'])->group(function () {
        Route::get('/topups', [TopupController::class,'index'])->name('topups.index');
        Route::post('/topups/{id}/approve', [TopupController::class, 'approve'])->name('topups.approve');
    });

});


require __DIR__.'/auth.php';
