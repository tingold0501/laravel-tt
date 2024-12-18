<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Webhook\WebhookController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//  Webhook
Route::get('webhook', [WebhookController::class, 'handle'])
    ->name('webhook.handle');
    
// Route::middleware('auth:sanctum')->group(function () {
//     Route::get('webhook', [WebhookController::class, 'handle'])
//         ->name('webhook.handle');
// });
