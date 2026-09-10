<?php

use Illuminate\Support\Facades\Route;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
    ], function () {
    Route::livewire(LaravelLocalization::transRoute('routes.home'), 'pages::home')
        ->name('home');
});
