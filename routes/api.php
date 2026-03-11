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
//nazli
Route::get('/films', [FilmController::class, 'index']);
Route::get('/films/genre/{genre_id}', [FilmController::class, 'byGenre']);
//alya
Route::post('/films', [FilmController::class, 'store']);
//mega
Route::put('/films/{id}', [FilmController::class, 'update']);
//dira
Route::delete('/films/{id}', [FilmController::class, 'destroy']);

// WATCHLIST ROUTES

//nazli
Route::get('/watchlists', [WatchlistController::class, 'index']);
//alya
Route::post('/watchlists', [WatchlistController::class, 'store']);
Route::post('/watchlists/{watchlist_id}/films', [WatchlistController::class, 'addFilm']);

//dira
Route::delete('/watchlists/{id}', [WatchlistController::class, 'destroy']);