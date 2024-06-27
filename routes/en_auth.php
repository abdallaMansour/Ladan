<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\EnPasswordResetLinkController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;



Route::middleware('set_lang_en')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::view('en/register', 'en.en-register')->name('en.register');

        Route::post('en/register', [RegisteredUserController::class, 'store']);

        Route::view('en/login', 'en.en-login')->name('en.login');

        Route::post('en/login', [AuthenticatedSessionController::class, 'store']);

        Route::get('en/forgot-password', [EnPasswordResetLinkController::class, 'create'])
            ->name('en.password.request');

        Route::post('en/forgot-password', [EnPasswordResetLinkController::class, 'store'])
            ->name('en.password.email');

        Route::get('en/reset-password/{token}', function (Request $request) {
            return view('en.en-reset-password', ['request' => $request]);
        })->name('en.password.reset');

        Route::post('en/reset-password', [NewPasswordController::class, 'store'])
            ->name('password.store');
    });

    Route::middleware('auth')->group(function () {

        Route::get('en/verify-email', function (Request $request) {
            return $request->user()->hasVerifiedEmail()
                ? redirect()->intended(route('home', absolute: false))
                : view('auth.en-verify-email');
        })

            ->name('en.verification.notice');

        Route::get('en/verify-email/{id}/{hash}', VerifyEmailController::class)
            ->middleware(['signed', 'throttle:6,1'])
            ->name('verification.verify');

        Route::put('en/password', [PasswordController::class, 'update'])->name('en.password.update');

        Route::post('logout', function (Request $request) {
            Auth::guard('web')->logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return redirect('en/');
        })->name('logout');
    });
});
