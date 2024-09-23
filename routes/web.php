<?php

use Illuminate\Support\Facades\Route;
use Detection\MobileDetect;

Route::get('/', function () {
    $detect = new MobileDetect();

    if ($detect->isMobile()) {
        return view('mobile.frontend.dashboard.index');
    } elseif ($detect->isTablet()) {
        return view('mobile.frontend.dashboard.index');
    } else {
        return view('desktop.frontend.home-components.home');
    }
});

Route::get('/dashboard', function () {
    $detect = new MobileDetect();

    if ($detect->isMobile() || $detect->isTablet()) {
        return view('mobile.frontend.dashboard.index');
    } else {
        return view('dashboard');
    }
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
