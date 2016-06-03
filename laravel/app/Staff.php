<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'nickname' => 'bail|required|unique:staff,nickname',
        ]);

        $release = new Staff;

        $release->full_name = $request->name;
        $release->nickname = $request->nickname;

        $release->save();
    }
}
