<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Release extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'version', 'revision',
    ];

    /**
     * Create a new Release instance.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'bail|required',
            'version' => 'bail|required|unique:releases,version',
            'revision' => 'bail|required|unique:revision,revision'
        ]);

        $release = new Release;

        $release->name = $request->name;
        $release->version = $request->version;
        $release->revision = $request->revision;

        $release->save();
    }
}
