<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StaffRoleHardware extends Model
{
    protected $table = 'staff_role_hardware';

    public function hardware()
    {
        return $this->belongsTo('App\Hardware')->distinct()->with('brand');
    }

    public function roles()
    {
        return $this->belongsTo('App\Role');
    }

    public function staff()
    {
        return $this->belongsTo('App\Staff');
    }
}
