<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'slug'];

    /**
     * This is used to link the tag to the Hardware using DB relations
     */
    public function hardware()
    {
        return $this->belongsToMany('App\Hardware');
    }
}
