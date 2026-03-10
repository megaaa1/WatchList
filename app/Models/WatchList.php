<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WatchList extends Model
{
    protected $table = 'watch_lists';

    public $timestamps = false;

    protected $fillable = [
        'film_id'
    ];

    public function film()
    {
        return $this->belongsTo(Film::class, 'film_id');
    }
}