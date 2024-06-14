<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;

// // Arabic language
// Route::view('/', 'ar.index')->name('home');
// Route::view('about', 'ar.about')->name('about');

// // Details
// Route::view('host-details', 'ar.host-details')->name('host-details');
// Route::view('web-details', 'ar.web-details')->name('web-details');
// Route::view('mobile-details', 'ar.mobile-details')->name('mobile-details');
// Route::view('network-details', 'ar.network-details')->name('network-details');
// Route::view('ux-ui-details', 'ar.ux-ui-details')->name('ux-ui-details');
// Route::view('pos-details', 'ar.pos-details')->name('pos-details');

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

Route::middleware(['auth', 'verified', 'Admin'])->prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/users', [DashboardController::class, 'users'])->name('dashboard.users');
    Route::get('/messages', [DashboardController::class, 'messages'])->name('dashboard.messages');
    Route::get('/settings', [DashboardController::class, 'settings'])->name('dashboard.settings');

    Route::delete('user_delete/{id}', [DashboardController::class, 'user_delete'])->name('user.delete');

    Route::delete('message_delete/{id}', [MessageController::class, 'message_delete'])->name('message.delete');
    Route::post('message_response/{name}/{email}', [MessageController::class, 'message_response'])->name('message.response');

    require __DIR__ . '/setting.php';
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/en_auth.php';
