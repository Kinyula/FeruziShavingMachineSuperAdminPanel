<?php

use App\Http\Controllers\AddNormalSystemAdminController;
use App\Http\Controllers\AddSuperAdminPhoneNumbersController;
use App\Http\Controllers\EditSuperAdminPhoneNumberController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ViewSuperAdminPhoneNumbersController;
use App\Http\Controllers\ViewTotalNormalSystemAdminsController;
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
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile/{id}', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/{id}', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('feruzi-shaving-machines/add-super-admin-phone-numbers', [AddSuperAdminPhoneNumbersController::class, 'index'])->middleware('auth');
Route::get('feruzi-shaving-machines/view-super-admin-phone-numbers', [ViewSuperAdminPhoneNumbersController::class, 'index'])->middleware('auth');
Route::get('feruzi-shaving-machines/edit-super-admin-phone-numbers/{id}', [EditSuperAdminPhoneNumberController::class, 'index'])->middleware('auth');
Route::get('feruzi-shaving-machines/view-total-normal-admin-phone-numbers', [ViewTotalNormalSystemAdminsController::class, 'index'])->middleware('auth');
Route::get('feruzi-shaving-machines/add-normal-admin', [AddNormalSystemAdminController::class, 'index'])->middleware('auth');

require __DIR__.'/auth.php';
