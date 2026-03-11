<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $table = 'films';

    protected $fillable = [
        'title',
        'genre_id',
        'release_year',
        'description'
    ];

    public function genre()
    {
        return $this->belongsTo(Genre::class, 'genre_id');
    }

    public function watchLists()
    {
        return $this->belongsToMany(
            WatchList::class,
            'watchlist_films',
            'film_id',
            'watchlist_id'
        );
    }
}