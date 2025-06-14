<?php

declare(strict_types=1);

use App\Http\Controllers\PrefectureController;
use Illuminate\Support\Facades\Route;

Route::prefix('prefectures')->name('prefectures.')->group(function () {
    Route::get('/', [PrefectureController::class, 'index'])->name('index');
});
