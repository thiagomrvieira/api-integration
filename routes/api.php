<?php

use App\Http\Controllers\CovidDataController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::get('/reports', [
        CovidDataController::class, 'index'
    ]);
});
