<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\mailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\student;
use App\Http\Controllers\viewController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});


Route::get('/student-view/{qrid}', [viewController::class, 'index']);


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    // Dashboard
    Route::resource('/dashboard', dashboardController::class);

    // Add Student
    Route::resource('/student', student::class);

    // Mail Download
    Route::post('/mail-view/pppanggung/{id}', [mailController::class, 'mailPP']);
    Route::post('/mail-view/ppmia/{id}', [mailController::class, 'mailMia']);
    Route::post('/mail-view/ppdt/{id}', [mailController::class, 'mailDt']);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
