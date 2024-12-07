<?php

use App\Models\Role;
use App\Models\Ticket;
use App\Models\Message;
use App\Models\Setting;
use App\Models\Permission;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Role\RoleController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Ticket\TicketController;
use App\Http\Controllers\Message\MessageController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\DashboardProfileController;
use App\Http\Controllers\Seo\DashboardSeoController;
use App\Http\Controllers\Setting\DashboardSettingController;

Route::view('dashboard', 'index')->name('dashboard')->middleware(['auth', 'verified', 'isAdmin']);

Route::prefix('/dashboard')
    ->as('dashboard.')
    ->middleware(['auth', 'verified', 'isAdmin'])
    ->group(function () {

        // Dashboard
        Route::view('/main', 'index')->name('main');
        Route::view('v2', 'index2')->name('v2');
        Route::view('v3', 'index3')->name('v3');

        // Starter Page
        Route::view('starter', 'starter')->name('starter');

        //  Tabbed IFrame Plugin
        Route::view('iframe', 'iframe')->name('iframe');

        // Widgets
        Route::view('widgets', 'pages.widgets')->name('pages.widgets');

        // Admins
        Route::middleware('hasPermission:admin')->group(function () {
            Route::view('admins', 'pages.admins.index')->name('pages.admins');
            Route::view('admins/create', 'pages.admins.create', ['roles' => Role::all()])->name('pages.admins.create');
            Route::post('admins/store', [AdminController::class, 'store'])->name('admins.store');
            Route::get('admins/update/{id}', [AdminController::class, 'show'])->name('pages.admins.update');
            Route::post('admins/update/{id}', [AdminController::class, 'update'])->name('admins.update');
            Route::delete('admins/delete/{id}', [AdminController::class, 'destroy'])->name('admins.delete');
        });

        // Roles
        Route::middleware('hasPermission:role')->group(function () {
            Route::view('roles', 'pages.roles.index', ['roles' => Role::with('permissions')->get()])->name('pages.roles');
            Route::view('roles/create', 'pages.roles.create', ['permissions' => Permission::all()])->name('pages.roles.create');
            Route::post('roles/store', [RoleController::class, 'store'])->name('roles.store');
            Route::get('roles/update/{id}', [RoleController::class, 'show'])->name('pages.roles.update');
            Route::post('roles/update/{id}', [RoleController::class, 'update'])->name('roles.update');
            Route::delete('roles/delete/{id}', [RoleController::class, 'destroy'])->name('roles.delete');
        });

        // Settings
        Route::middleware('hasPermission:setting')->group(function () {
            Route::view('settings', 'pages.settings.create', ['settings' => Setting::first()])->name('pages.settings');
            Route::post('settings/update', [DashboardSettingController::class, 'update'])->name('settings.update');
        });

        // Seos
        Route::middleware('hasPermission:seo')->group(function () {
            Route::get('seo/{page}', [DashboardSeoController::class, 'show'])->name('pages.seos');
            Route::post('seo/update/{page}', [DashboardSeoController::class, 'update'])->name('seos.update');
        });

        // Contact us
        Route::middleware('hasPermission:contact_us')->group(function () {
            Route::delete('contact_us/clear', function () {
                Message::truncate();
                return back()->with('message', 'Contact us messages cleared successfully');
            })->name('contact_us.clear');
        });

        // Tickets
        Route::middleware('hasPermission:ticket')->group(function () {
            Route::view('tickets', 'pages.tickets.index', ['tickets' => Ticket::all()])->name('pages.tickets');
            Route::delete('tickets/delete/{id}', [TicketController::class, 'destroy'])->name('tickets.delete');
        });

        // Messages
        Route::middleware('hasPermission:contact_us')->group(function () {
            Route::view('messages', 'pages.messages.index', ['messages' => Message::all()])->name('pages.messages');
            Route::delete('messages/delete/{id}', [MessageController::class, 'destroy_message'])->name('messages.delete');
        });

        // Profile
        Route::view('dashboard/profile', 'pages.profile.update')->name('pages.profile');
        Route::post('dashboard/profile', [DashboardProfileController::class, 'update'])->name('profile.update');
        Route::post('dashboard/profile/change-password', [NewPasswordController::class, 'change'])->name('profile.password.update');

        // layouts
        Route::view('layout', 'pages.layout.top-nav')->name('pages.layout-nav');
        Route::view('layout/sidebar', 'pages.layout.top-nav-sidebar')->name('pages.layout-sidebar');
        Route::view('layout/boxed', 'pages.layout.boxed')->name('pages.layout-boxed');
        Route::view('layout/fixed/sidebar', 'pages.layout.fixed-sidebar')->name('pages.layout-fixed-sidebar');
        Route::view('layout/fixed/sidebar/custom', 'pages.layout.fixed-sidebar-custom')->name('pages.layout-fixed-sidebar-custom');
        Route::view('layout/fixed/topnav', 'pages.layout.fixed-topnav')->name('pages.layout-fixed-topnav');
        Route::view('layout/fixed/footer', 'pages.layout.fixed-footer')->name('pages.layout-fixed-footer');
        Route::view('layout/collapsed/sidebar', 'pages.layout.collapsed-sidebar')->name('pages.layout-collapsed-sidebar');

        // Charts
        Route::view('charts/chartjs', 'pages.charts.chartjs')->name('pages.charts.chartjs');
        Route::view('charts/flot', 'pages.charts.flot')->name('pages.charts.flot');
        Route::view('charts/inline', 'pages.charts.inline')->name('pages.charts.inline');
        Route::view('charts/uplot', 'pages.charts.uplot')->name('pages.charts.uplot');

        // Ui Elements
        Route::view('ui/elements/general', 'pages.ui.general')->name('pages.ui.general');
        Route::view('ui/elements/icons', 'pages.ui.icons')->name('pages.ui.icons');
        Route::view('ui/elements/buttons', 'pages.ui.buttons')->name('pages.ui.buttons');
        Route::view('ui/elements/sliders', 'pages.ui.sliders')->name('pages.ui.sliders');
        Route::view('ui/elements/modals', 'pages.ui.modals')->name('pages.ui.modals');
        Route::view('ui/elements/navbar', 'pages.ui.navbar')->name('pages.ui.navbar');
        Route::view('ui/elements/timeline', 'pages.ui.timeline')->name('pages.ui.timeline');
        Route::view('ui/elements/ribbons', 'pages.ui.ribbons')->name('pages.ui.ribbons');

        // Forms
        Route::view('forms/general', 'pages.forms.general')->name('pages.form.general');
        Route::view('forms/advanced', 'pages.forms.advanced')->name('pages.form.advanced');
        Route::view('forms/editors', 'pages.forms.editors')->name('pages.form.editors');
        Route::view('forms/validation', 'pages.forms.validation')->name('pages.form.validation');

        // Tables
        Route::view('tables/simple', 'pages.tables.simple')->name('pages.table.simple');
        Route::view('tables/data', 'pages.tables.data')->name('pages.table.data');
        Route::view('tables/jsgrid', 'pages.tables.jsgrid')->name('pages.table.jsgrid');

        // Calender
        Route::view('calender', 'pages.calendar')->name('pages.calender');

        // Gallery
        Route::view('gallery', 'pages.gallery')->name('pages.gallery');

        // Kanban
        Route::view('kanban', 'pages.kanban')->name('pages.kanban');

        // MailBox
        Route::view('mailbox', 'pages.mailbox.mailbox')->name('pages.mailbox.mailbox');
        Route::view('mailbox/read', 'pages.mailbox.read-mail')->name('pages.mailbox.read');
        Route::view('mailbox/compose', 'pages.mailbox.compose')->name('pages.mailbox.compose');

        // Pages
        Route::view('examples/invoice', 'pages.examples.invoice')->name('pages.examples.invoice');
        Route::view('examples/profile', 'pages.examples.profile')->name('pages.examples.profile');
        Route::view('examples/ecommerce', 'pages.examples.e-commerce')->name('pages.examples.e-commerce');
        Route::view('examples/projects', 'pages.examples.projects')->name('pages.examples.projects');
        Route::view('examples/project/add', 'pages.examples.project-add')->name('pages.examples.project-add');
        Route::view('examples/project/edit', 'pages.examples.project-edit')->name('pages.examples.project-edit');
        Route::view('examples/project/detail', 'pages.examples.project-detail')->name('pages.examples.project-detail');
        Route::view('examples/contacts', 'pages.examples.contacts')->name('pages.examples.contacts');
        Route::view('examples/faq', 'pages.examples.faq')->name('pages.examples.faq');
        Route::view('examples/contact/us', 'pages.examples.contact-us')->name('pages.examples.contact-us');

        //  Extras
        Route::prefix('extras/examples/')->group(function () {
            /* logs v-1 */
            Route::view('login', 'pages.examples.login')->name('pages.examples.login');
            Route::view('register', 'pages.examples.register')->name('pages.examples.register');
            Route::view('forget/password', 'pages.examples.forgot-password')->name('pages.examples.forgot-password');
            Route::view('recover/password', 'pages.examples.recover-password')->name('pages.examples.recover-password');

            /* logs v-2 */
            Route::view('login/v2', 'pages.examples.login-v2')->name('pages.examples.login-v2');
            Route::view('register/v2', 'pages.examples.register-v2')->name('pages.examples.register-v2');
            Route::view('forget/password/v2', 'pages.examples.forgot-password-v2')->name('pages.examples.forgot-password-v2');
            Route::view('recover/password/v2', 'pages.examples.recover-password-v2')->name('pages.examples.recover-password-v2');

            /* Status Codes */
            Route::view('404', 'pages.examples.404')->name('pages.examples.404');
            Route::view('500', 'pages.examples.500')->name('pages.examples.500');

            /* Another pages */
            Route::view('lockscreen', 'pages.examples.lockscreen')->name('pages.examples.lockscreen');
            Route::view('legacy/user/menu', 'pages.examples.legacy-user-menu')->name('pages.examples.legacy-user-menu');
            Route::view('language/menu', 'pages.examples.language-menu')->name('pages.examples.language-menu');
            Route::view('invoice/print', 'pages.examples.invoice-print')->name('pages.examples.invoice-print');
            Route::view('pace', 'pages.examples.pace')->name('pages.examples.pace');
            Route::view('blank', 'pages.examples.blank')->name('pages.examples.blank');
        });

        // Search
        Route::view('search/simple', 'pages.search.simple')->name('pages.search.simple');
        Route::view('search/enhanced', 'pages.search.enhanced')->name('pages.search.enhanced');
    });

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });
