<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slug'
    ];

    /**
     * This is used to link the Permissions to the User using DB relations
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
