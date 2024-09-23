<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Detection\MobileDetect;

use App\Http\Controllers\DailyEntryController;
use App\Http\Controllers\UserWeightController;


Route::get('/', function () {
    $detect = new Mobile_Detect;

    if ($detect->isMobile()) {
        return view('welcome');
    } elseif ($detect->isTablet()) {
        return view('welcome');
    } else {
        return view('desktop.frontend.home-components.home');
    }
});



Route::get('/dashboard', function () {
    $detect = new Mobile_Detect;

    if ($detect->isMobile() || $detect->isTablet()) {
        return view('welcome');
    } else {
        return view('dashboard');
    }
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Route::middleware('auth')->group(function () {
//     Route::get('/daily_entries/create', [DailyEntryController::class, 'create'])->name('daily_entries.create');
//     Route::post('/daily_entries', [DailyEntryController::class, 'store'])->name('daily_entries.store');

//     Route::get('/weights', [UserWeightController::class, 'index'])->name('weights.index');
// });


require __DIR__.'/auth.php';


