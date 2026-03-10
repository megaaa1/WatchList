<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\WatchlistController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

//FILM ROUTES

//alya
Route::post('/films', [FilmController::class, 'store']);
//mega
Route::put('/films/{id}', [FilmController::class, 'update']);

// WATCHLIST ROUTES
//alya
Route::post('/watchlists', [WatchlistController::class, 'store']);