<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;

Route::prefix('en')->middleware('set_lang_en')->group(function () {
    // Mail
    Route::put('en/message_create', [MessageController::class, 'message_create'])->name('en.message.create');

    // English Language
    Route::view('/', 'en.en-index')->name('en.home');
    Route::view('about', 'en.en-about')->name('en.about');

    // Details
    Route::view('host-details', 'en.en-host-details')->name('en.host-details');
    Route::view('web-details', 'en.en-web-details')->name('en.web-details');
    Route::view('mobile-details', 'en.en-mobile-details')->name('en.mobile-details');
    Route::view('network-details', 'en.en-network-details')->name('en.network-details');
    Route::view('ux-ui-details', 'en.en-ux-ui-details')->name('en.ux-ui-details');
    Route::view('pos-details', 'en.en-pos-details')->name('en.pos-details');
});

require __DIR__ . '/en_auth.php';
