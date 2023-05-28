<?php

use App\Http\Controllers\API\V1\CovidDataController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::get('/reports', [
        CovidDataController::class, 'index'
    ]);
});
