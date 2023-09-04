<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;

/**
 * Country controller route
 */
Route::resource('country',CountryController::class);