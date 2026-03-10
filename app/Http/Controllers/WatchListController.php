<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Watchlist;
use Illuminate\Http\Request;

class WatchlistController extends Controller
{
     // NAZLI
    public function index()
    {
        return response()->json(
            Watchlist::with('film')->get()
        );
    }
        
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
    
    // DIRA
    public function destroy($id)
    {
        Watchlist::destroy($id);

        return response()->json([
            'message' => 'Removed from watchlist'
        ]);
    }
}