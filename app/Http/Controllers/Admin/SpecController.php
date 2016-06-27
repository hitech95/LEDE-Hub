<?php

namespace App\Http\Controllers\Admin;

use App\Spec;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Cache;

class SpecController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specs = Spec::orderBy('slug', 'ASC')->get();

        return view('admin.spec.index', compact('specs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect()->action('Admin\SpecController@index');
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

        Spec::create($request->all());

        // Clear the tag cache
        Cache::forget('specs_list');

        return redirect()->action('Admin\SpecController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect()->action('Admin\SpecController@index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $spec = Spec::findOrFail($id);
        return view('admin.spec.edit', compact('spec'));
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

        $spec = Spec::findOrFail($id);
        $spec->update($request->all());

        // Clear the specs cache
        Cache::forget('specs_list');

        return redirect()->action('Admin\SpecController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $spec = Spec::findOrFail($id);
        $spec->delete();

        return redirect()->action('Admin\SpecController@index');
    }
}
