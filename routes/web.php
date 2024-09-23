<?php

use Illuminate\Support\Facades\Route;
use Mobile_Detect;



Route::get('/', function () {
    $detect = new Mobile_Detect();

    if ($detect->isMobile()) {
        return view('mobile.frontend.dashboard.index');
    } elseif ($detect->isTablet()) {
        return view('mobile.frontend.dashboard.index');
    } else {
        return view('desktop.frontend.home-components.home');
    }
});



Route::get('/dashboard', function () {
    $detect = new Mobile_Detect();

    if ($detect->isMobile() || $detect->isTablet()) {
        return view('mobile.frontend.dashboard.index');
    } else {
        return view('dashboard');
    }
})->middleware(['auth', 'verified'])->name('dashboard');



require __DIR__.'/auth.php';


