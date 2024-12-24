<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrawlController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Crawl data from moitruongachau.com
Route::get('/crawl', [CrawlController::class, 'getDataProject']);
Route::get('/crawl-type', [CrawlController::class, 'getDataTypeProject']);
Route::get('/crawl-address', [CrawlController::class, 'getDataAddress']);



