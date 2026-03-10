<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Watchlist;
use Illuminate\Http\Request;

class WatchlistController extends Controller
{
        // ALYA
        public function store(Request $request)
        {
            $watchlist = Watchlist::create([
                'film_id' => $request->film_id,
                'status' => 'planned'
            ]);
    
            return response()->json([
                'message' => 'Film added to watchlist',
                'data' => $watchlist
            ]);
        }
}