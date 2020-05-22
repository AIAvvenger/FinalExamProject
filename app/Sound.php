<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sound extends Model
{
    public function films(){
        return $this->belongsToMany('App\Film', 'film_sounds', 'soundId', 'filmId');
    }
}
