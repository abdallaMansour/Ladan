<?php

use App\Models\Project;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EnProfileController;
use App\Http\Controllers\PageController;

// Arabic language
Route::view('/', 'ar.index')->name('home');
Route::view('about', 'ar.about')->name('about');

Route::view('projects', 'ar.projects', ['projects' => Project::all()])->name('projects');
Route::get('project-details/{project}', [PageController::class, 'project_details'])->name('project.details');

// Details
Route::view('host-details', 'ar.host-details')->name('host-details');
Route::view('web-details', 'ar.web-details')->name('web-details');
Route::view('mobile-details', 'ar.mobile-details')->name('mobile-details');
Route::view('network-details', 'ar.network-details')->name('network-details');
Route::view('ux-ui-details', 'ar.ux-ui-details')->name('ux-ui-details');
Route::view('pos-details', 'ar.pos-details')->name('pos-details');

// Mail
Route::put('message_create', [MessageController::class, 'message_create'])->name('message.create');

// Route::middleware(['auth', 'verified', 'Admin'])->prefix('dashboard')->group(function () {
//     Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
//     Route::get('/users', [DashboardController::class, 'users'])->name('dashboard.users');
//     Route::get('/settings', [DashboardController::class, 'settings'])->name('dashboard.settings');

//     Route::delete('user_delete/{id}', [DashboardController::class, 'user_delete'])->name('user.delete');

//     Route::get('/messages', [DashboardController::class, 'messages'])->name('dashboard.messages');
//     Route::delete('message_delete/{id}', [MessageController::class, 'message_delete'])->name('message.delete');
//     Route::post('message_response/{name}/{email}', [MessageController::class, 'message_response'])->name('message.response');

//     Route::get('/projects', [ProjectController::class, 'index'])->name('dashboard.projects');

//     Route::view('project-create', 'dashboard.project.create')->name('project.create');
//     Route::get('project-edit/{project}', [ProjectController::class, 'edit'])->name('project.edit');

//     Route::post('project-store', [ProjectController::class, 'store'])->name('project.store');
//     Route::put('project-update/{project}', [ProjectController::class, 'update'])->name('project.update');
//     Route::delete('project-delete/{project}', [ProjectController::class, 'delete'])->name('project.delete');

//     require __DIR__ . '/setting.php';
// });

// Route::middleware(['auth', 'verified', 'set_lang_ar'])->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// Route::middleware(['auth', 'verified', 'set_lang_en'])->group(function () {
//     Route::get('en/profile', [EnProfileController::class, 'edit'])->name('en.profile.edit');
//     Route::patch('en/profile', [EnProfileController::class, 'update'])->name('en.profile.update');
//     Route::delete('en/profile', [EnProfileController::class, 'destroy'])->name('en.profile.destroy');
// });

require __DIR__ . '/en.php';
require __DIR__ . '/auth.php';
require __DIR__ . '/en_auth.php';
require __DIR__ . '/dashboard.php';
