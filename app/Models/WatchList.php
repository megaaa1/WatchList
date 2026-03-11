<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WatchList extends Model
{
    protected $table = 'watchlists';

    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

    public function films()
    {
        return $this->belongsToMany(
            Film::class,
            'watchlist_films',
            'watchlist_id',
            'film_id'
        );
    }
}