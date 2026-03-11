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
        $watchlist = WatchList::create([
            'name' => $request->name
        ]);

        return response()->json([
            'message' => 'Watchlist created',
            'data' => $watchlist
        ]);
    }

    // ALYA
    public function addFilm(Request $request, $watchlist_id)
    {
        $watchlist = WatchList::findOrFail($watchlist_id);

        $watchlist->films()->attach($request->film_id);

        return response()->json([
            'message' => 'Film added to watchlist'
        ]);
    }
    
   // DIRA 
    public function removeFilm($watchlist_id, $film_id)
    {
        $watchlist = WatchList::findOrFail($watchlist_id);

        $watchlist->films()->detach($film_id);

        return response()->json([
            'message' => 'Film removed from watchlist'
        ]);
    }

    // DIRA 
    public function destroy($id)
    {
        WatchList::destroy($id);

        return response()->json([
            'message' => 'Watchlist deleted'
        ]);
    }
}