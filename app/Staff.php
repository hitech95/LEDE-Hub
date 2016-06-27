<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Staff extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'full_name', 'nickname'
    ];

    public function getFormValue($key)
    {
        $key = str_replace(['.', '[]', '[', ']'], ['_', '', '.', ''], $key);

        if($key == 'roles'){
            return $this->$key->pluck('id')->toarray();
        }

        return $this->getAttribute($key);
    }

    public function roles()
    {
        return $this->belongsToMany('App\Role', 'staff_role');
    }

    public function hardwareHardware()
    {
        return $this->hasMany('App\StaffRoleHardware')->with('hardware');
    }

    public function hardwareRoles()
    {
        return $this->hasMany('App\StaffRoleHardware')->with('roles');
    }
}
