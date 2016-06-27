<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * This is used to link the Spec to the Hardware using DB relations
     */
    public function staff()
    {
        return $this->belongsToMany('App\Staff');
    }
}
