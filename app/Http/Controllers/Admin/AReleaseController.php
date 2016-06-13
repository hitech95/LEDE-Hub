<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Release;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Cache;

class AReleaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $releases = Release::latest('revision')->get();

        return view('admin.release.index', compact('releases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect()->action('Admin\AReleaseController@index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //TODO - Validate the input

        Release::create($request->all());

        // Clear the tag cache
        Cache::forget('releases_list');

        return redirect()->action('Admin\AReleaseController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect('/releases');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $release = Release::findOrFail($id);
        return view('admin.release.edit', compact('release'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // TODO - Validate the input

        $release = Release::findOrFail($id);
        $release->update($request->all());

        // Clear the hardware cache
        Cache::forget('releases_list');

        return redirect()->action('Admin\AReleaseController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $release = Release::findOrFail($id);
        $release->delete();

        return redirect()->action('Admin\AReleaseController@index');
    }
}
