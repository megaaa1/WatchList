<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
       // NAZLI
    public function index()
    {
        return response()->json(Film::with('genre')->get());
    }

    // ALYA
    public function store(Request $request)
    {
        $film = Film::create($request->all());

        return response()->json([
            'message' => 'Film created',
            'data' => $film
        ]);
    }

    // NAZLI
    public function byGenre($genre_id)
    {
        $films = Film::with('genre')
            ->where('genre_id', $genre_id)
            ->get();

        return response()->json($films);
    }
    
    // MEGA
    public function update(Request $request, $id)
    {
        $film = Film::findOrFail($id);
        $film->update($request->all());

        return response()->json([
            'message' => 'Film updated',
            'data' => $film
        ]);
    }

   // DIRA
    public function destroy($id)
    {
        Film::destroy($id);

        return response()->json([
            'message' => 'Film deleted'
        ]);
    }
}
