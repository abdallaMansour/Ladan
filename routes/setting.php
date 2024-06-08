<?php

use App\Http\Controllers\ContactSettingController;
use Illuminate\Support\Facades\Route;

Route::put('contact_setting/update', ContactSettingController::class)->name('contact_setting.update');
