<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('pages.home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/giving', function () {
    return view('pages.giving');
})->name('giving');

Route::get('/events', function () {
    return view('pages.events');
})->name('events');

Route::get('/ministries', function () {
    return view('pages.ministries');
})->name('ministries');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
