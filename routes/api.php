<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/ticketsApi', [App\Http\Controllers\TicketApiController::class, 'index']);
Route::post('/ticketsApi', [App\Http\Controllers\TicketApiController::class, 'store']);
Route::put('/ticketsApi/{id}', [App\Http\Controllers\TicketApiController::class, 'update']);
Route::delete('/ticketsApi/{id}', [App\Http\Controllers\TicketApiController::class, 'destroy']);

Route::get('/userClientsApi', [App\Http\Controllers\UserClientsApiController::class, 'index']);
Route::post('/userClientsApi', [App\Http\Controllers\UserClientsApiController::class, 'store']);
Route::put('/userClientsApi/{id}', [App\Http\Controllers\UserClientsApiController::class, 'update']);
Route::delete('/userClientsApi/{id}', [App\Http\Controllers\UserClientsApiController::class, 'destroy']);
