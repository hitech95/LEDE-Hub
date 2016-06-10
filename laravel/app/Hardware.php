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
    protected $fillable = ['name', 'slug', 'hidden', 'description', 'content'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'hidden' => 'boolean'
    ];

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

    /**
     * Set the hardware visibility.
     *
     * @param  string $value
     *
     * @return string
     */
    public function setHiddenAttribute($value)
    {
        $this->attributes['hidden'] = filter_var($value, FILTER_VALIDATE_BOOLEAN);
    }

    public function getFormValue($key)
    {
        $key = str_replace(['.', '[]', '[', ']'], ['_', '', '.', ''], $key);

        if($key == 'brand'){
            return $this->getAttribute('brand_id');
        }

        if($key == 'platform'){
            return $this->getAttribute('platform_id');
        }

        if($key == 'tags'){
            return $this->$key->pluck('id')->toarray();
        }

        if($key == 'hidden'){
            return ($this->getAttribute($key)) ? 'true' : 'false';
        }

        return $this->getAttribute($key);
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
