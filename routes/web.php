<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'welcome')->name('home');


Route::middleware('guest')->group(function () {

    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store'])->name('register.store');

    Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login.store');
});


Route::middleware(['auth', 'verified'])->group(function () {
    

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    
    Route::middleware('role:admin')->get('admin/dashboard', [DashboardController::class, 'admin'])->name('admin.dashboard');
    Route::middleware('role:teacher')->get('teacher/dashboard', [DashboardController::class, 'teacher'])->name('teacher.dashboard');
    Route::middleware('role:student')->get('student/dashboard', [DashboardController::class, 'student'])->name('student.dashboard');

    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});


require __DIR__.'/auth.php';
