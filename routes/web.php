<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('tickets', App\Http\Controllers\TicketController::class);
Route::resource('userClients', App\Http\Controllers\UserClientsController::class);
Route::get('/ticketsApi', [App\Http\Controllers\TicketApiController::class, 'index']);
Route::post('/ticketsApi', [App\Http\Controllers\TicketApiController::class, 'store']);
//Route::put('/ticketsApi/{id}', [App\Http\Controllers\TicketApiController::class, 'update']);
//Route::delete('/ticketsApi/{id}', [App\Http\Controllers\TicketApiController::class, 'destroy']);

//Route::post('ticketsApi', 'TicketApiController@store');
//Route::put('ticketsApi/{id}', 'TicketApiController@update');
//Route::delete('ticketsApi/{id}', 'TicketApiController@destroy');
