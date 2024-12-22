<?php

use App\Http\Middleware\SetLangAr;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'set_lang_en' => App\Http\Middleware\SetLangEn::class,
            'set_lang_ar' => App\Http\Middleware\SetLangAr::class,
            'Admin' => App\Http\Middleware\Admin::class,
            'hasPermission' => App\Http\Middleware\CheckPermission::class,
            'isAdmin' => App\Http\Middleware\IsAdminMiddleware::class,
            'localize'                => \Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRoutes::class,
            'localizationRedirect'    => \Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRedirectFilter::class,
            'localeSessionRedirect'   => \Mcamara\LaravelLocalization\Middleware\LocaleSessionRedirect::class,
            'localeCookieRedirect'    => \Mcamara\LaravelLocalization\Middleware\LocaleCookieRedirect::class,
            'localeViewPath'          => \Mcamara\LaravelLocalization\Middleware\LaravelLocalizationViewPath::class,
        ]);
        // $middleware->append(SetLangAr::class);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
