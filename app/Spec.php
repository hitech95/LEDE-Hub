<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spec extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'slug', 'description'];

    /**
     * This is used to link the tag to he hardware using DB relations
     */
    public function hardware()
    {
        return $this->belongsToMany('App\Hardware');
    }
}
