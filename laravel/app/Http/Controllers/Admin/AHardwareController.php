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
        $brandsM = Brand::orderBy('name')->get();
        $tagsM = Tag::orderBy('name')->get();
        $platformsM = Hardware::platforms()->orderBy('name')->get();

        $brands = array();
        $tags = array();
        $platforms = array();

        foreach ($brandsM as $brandM)
        {
            $brands[$brandM->id] = $brandM->name;
        }

        foreach ($tagsM as $tagM)
        {
            $tags[$tagM->id] = $tagM->name;
        }

        foreach ($platformsM as $platformM)
        {
            $platforms[$platformM->id] = $platformM->name;
        }

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

        $brand = Brand::findOrFail($request->brand);
        $tags = Tag::whereIn('id', $request->tags)->get();

        if (!$request->platform === '')
        {
            $platform = Hardware::whereIn('id', $request->platform)->get();
        }

        $hardware = new Hardware($request->all());
        $hardware->brand()->associate($brand);

        if (isset($platform))
        {
            $hardware->platform()->associate($platform);
        }

        $hardware->save();

        $hardware->tags()->attach($tags);

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
        // Redirect to frontend
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
        //
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
        //
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
        //
    }
}
