<?php

use App\Http\Controllers\API\BrandController;
use App\Http\Controllers\API\CountryController;
use Illuminate\Support\Facades\Route;

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');

Route::prefix('brands')->group(function () {
   Route::get('', [BrandController::class, 'index']);
   Route::post('', [BrandController::class, 'store']);
});

Route::prefix('countries')->group(function () {
    Route::get('', [CountryController::class, 'index']);
});
