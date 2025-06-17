<?php

declare(strict_types=1);

use App\Http\Controllers\CityController;
use App\Http\Controllers\PrefectureController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->group(function () {
    Route::prefix('prefectures')->name('prefectures.')->group(function () {
        Route::get('/', [PrefectureController::class, 'index'])->name('index');
    });

    Route::prefix('cities')->name('cities.')->group(function () {
        Route::get('/', [CityController::class, 'index'])->name('index');
    });
});
