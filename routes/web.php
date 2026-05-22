<?php

use Illuminate\Support\Facades\Route;

Route::inertia('/', 'Welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'Dashboard')->name('dashboard');
    Route::inertia('saved-listings', 'SavedListings')->name('saved-listings');
    Route::inertia('browse-listings', 'BrowseListings')->name('browse-listings');
    Route::inertia('your-listings', 'YourListings')->name('your-listings');
    Route::inertia('create-listing', 'CreateListing')->name('create-listing');
});

require __DIR__.'/settings.php';
