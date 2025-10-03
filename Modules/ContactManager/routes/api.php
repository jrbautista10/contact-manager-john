<?php

use Illuminate\Support\Facades\Route;
use Modules\ContactManager\Http\Controllers\ContactManagerController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('contactmanagers', ContactManagerController::class)->names('contactmanager');
});

Route::get('contacts', [ContactManagerController::class, 'getAll']);