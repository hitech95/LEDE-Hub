<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /*
     *
     */
    public function hardware()
    {
        return $this->belongsToMany('App\Hardware');
    }
}
