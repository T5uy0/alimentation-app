<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MealController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ConsumptionController;
use App\Http\Controllers\AnalyticsController;
use App\Models\Consumption;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', [HomeController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('meals', MealController::class);
    Route::resource('consumptions', ConsumptionController::class);

    Route::get('/analytics', [AnalyticsController::class, 'index'])->name('analytics.index');
});

require __DIR__.'/auth.php';
