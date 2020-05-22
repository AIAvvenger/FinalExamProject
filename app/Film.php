<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $guarded = [];

    public static function find(int $id)
    {
        return $id;
    }

    public function users(){
        return $this->belongsToMany('App\User', 'film_user', 'filmId','userId');
    }
    public function sounds(){
        return $this->belongsToMany('App\Sound', 'film_sounds', 'filmId','soundId');
    }
}
