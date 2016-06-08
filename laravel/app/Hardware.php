<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hardware extends Model {

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'hardware';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'slug', 'description', 'content'];

    public function scopeDevices($query)
    {
        $query->whereNotNull('platform_id');
    }

    public function scopePlatforms($query)
    {
        $query->whereNull('platform_id');
    }

    public function scopeVisible($query)
    {
        $query->where('hidden', false);
    }

    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }

    public function platform()
    {
        return $this->belongsTo('App\Hardware', 'platform_id')->with('brand');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    /*
     * TODO - Untested
     */
    public function staff()
    {
        return $this->belongsToMany('App\Staff', 'staff_role_hardware');
    }
}
