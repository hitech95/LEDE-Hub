<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hardware extends Model
{
    protected $table = 'hardware';

    public function brand()
    {
        return $this->belongsTo('App\Brand', 'manufacturer_id');
    }

    public function platform()
    {
        return $this->belongsTo('App\Hardware', 'platform_id')->with('brand');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}
