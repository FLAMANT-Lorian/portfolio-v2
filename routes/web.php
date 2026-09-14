<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localize', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
    ], function () {

    Route::livewire(LaravelLocalization::transRoute('routes.home'), 'pages::home')
        ->name('home');

    Route::livewire(LaravelLocalization::transRoute('routes.projects.index'), 'pages::projects.index')
        ->name('projects');

    Route::livewire(LaravelLocalization::transRoute('routes.projects.show'), 'pages::projects.show')
        ->name('projects.show');

    Route::livewire(LaravelLocalization::transRoute('routes.about'), 'pages::about')
        ->name('about');
});
