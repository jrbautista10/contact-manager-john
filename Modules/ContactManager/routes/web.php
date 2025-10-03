<?php

use Illuminate\Support\Facades\Route;
use Modules\ContactManager\Http\Controllers\ContactManagerController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('contactmanagers', ContactManagerController::class)->names('contactmanager');
});


