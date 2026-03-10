<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    // ALYA
    public function store(Request $request)
    {
        $film = Film::create($request->all());

        return response()->json([
            'message' => 'Film created',
            'data' => $film
        ]);
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


}