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
        return $this->hasMany(WatchList::class, 'film_id');
    }
}