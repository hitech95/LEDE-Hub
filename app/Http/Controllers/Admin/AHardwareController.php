<?php

namespace App\Http\Controllers\Admin;

use App\Brand;
use App\Hardware;
use App\Http\Controllers\Controller;
use App\Tag;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Cache;

class AHardwareController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hardware = Hardware::orderBy('slug', 'ASC')->with('brand')->with('platform')->with('tags')->get();

        return view('admin.hardware.index', compact('hardware'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::orderBy('name')->get()->pluck('id', 'name')->flip();
        $tags = Tag::orderBy('name')->pluck('id', 'name')->flip();
        $platforms = Hardware::platforms()->orderBy('name')->get()->pluck('id', 'name')->flip();
        $platforms->put('-', 'Mark as Platform');

        return view('admin.hardware.create', compact('brands', 'tags', 'platforms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //TODO - Validate the request

        $brand = ($request->brand === '' || $request->brand == '-') ? null :
            Brand::findOrFail($request->brand);

        $platform = ($request->platform === '' || $request->platform == '-') ?
            null : Hardware::findOrFail($request->platform);

        $tags = (is_null($request->tags)) ? null :
            Tag::whereIn('id', $request->tags)->get();

        $hardware = new Hardware($request->all());

        $hardware->brand()->associate($brand);
        $hardware->platform()->associate($platform);
        $hardware->tags()->attach($tags);

        $hardware->save();

        // Clear the hardware cache
        Cache::forget('devices_list');
        Cache::forget('platforms_list');

        return redirect()->action('Admin\AHardwareController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // TODO - Redirect to frontend
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brands = Brand::orderBy('name')->get()->pluck('id', 'name')->flip();
        $tags = Tag::orderBy('name')->pluck('id', 'name')->flip();
        $platforms = Hardware::platforms()->orderBy('name')->where('id', '!=', $id)->get()->pluck('id', 'name')->flip();
        $platforms->put('-', 'Mark as Platform');

        $hardware = Hardware::findOrFail($id);

        return view('admin.hardware.edit', compact('hardware', 'brands', 'platforms', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        //TODO - Validate the request

        $brand = ($request->brand === '' || $request->brand == '-') ? null :
            Brand::findOrFail($request->brand);

        $platform = ($request->platform === '' || $request->platform == '-') ?
            null : Hardware::findOrFail($request->platform);

        $tags = (is_null($request->tags)) ? null :
            Tag::whereIn('id', $request->tags)->get();

        $hardware = Hardware::findOrFail($id);
        $hardware->update($request->all());

        $hardware->brand()->associate($brand);
        $hardware->platform()->associate($platform);
        $hardware->tags()->sync($tags);

        $hardware->save();

        // Clear the hardware cache
        Cache::forget('devices_list');
        Cache::forget('platforms_list');

        return redirect()->action('Admin\AHardwareController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hardware = Hardware::findOrFail($id);
        $hardware->delete();

        return redirect()->action('Admin\AHardwareController@index');
    }
}
