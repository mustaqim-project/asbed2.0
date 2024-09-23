<?php

use Detection\MobileDetect;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LanguageMiddleware;
use App\Http\Controllers\DailyEntryController;
use App\Http\Controllers\UserWeightController;

Route::get('/', function () {
    $detect = new MobileDetect();

    if ($detect->isMobile()) {
        return view('mobile.frontend.dashboard.index');
    } elseif ($detect->isTablet()) {
        return view('mobile.frontend.dashboard.index');
    } else {
        return view('desktop.frontend.home-components.home');
    }
})->middleware(LanguageMiddleware::class);

Route::get('/dashboard', function () {
    $detect = new MobileDetect();

    if ($detect->isMobile() || $detect->isTablet()) {
        return view('mobile.frontend.dashboard.index');
    } else {
        return view('dashboard');
    }
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/daily_entries/create', [DailyEntryController::class, 'create'])->name('daily_entries.create');
    Route::post('/daily_entries', [DailyEntryController::class, 'store'])->name('daily_entries.store');

    Route::get('/weights', [UserWeightController::class, 'index'])->name('weights.index');
});





require __DIR__.'/auth.php';
