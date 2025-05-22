<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\DriverApprovalController;

// Homepage
Route::get('/', function () {
    return view('welcome');
});

// Dashboard: redirect based on role
Route::get('/dashboard', function () {
    if (Auth::check() && Auth::user()->role === 'admin') {
        return redirect()->route('admin.dashboard');
    }
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// User Profile Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Routes (Protected by custom admin middleware)
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::get('/drivers', [DriverApprovalController::class, 'index'])->name('drivers.index');
    Route::post('/drivers/{id}/approve', [DriverApprovalController::class, 'approve'])->name('drivers.approve');
    Route::post('/drivers/{id}/reject', [DriverApprovalController::class, 'reject'])->name('drivers.reject');
});

require __DIR__.'/auth.php';
