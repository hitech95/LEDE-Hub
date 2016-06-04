<?php

namespace App\Http\Controllers;

use App\Hardware;

use App\Http\Requests;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;

class HardwareController extends Controller
{
    /*
     * Return a list of platforms with the associate view
     */
    public function indexPlatform()
    {
        $expire = Config::get('hub.cache_expire');
        $platforms = null;

        if (!Cache::has('platforms_list')) {
            Log::info('Cache:: Rebuild platforms_list cache');

            $platforms = Hardware::whereNull('platform_id')
                ->where('hidden', false)
                ->with('brand')
                ->get();

            Cache::add('platforms_list', $platforms, $expire);
        }else{
            $platforms = Cache::get('platforms_list');
        }

        return view('pages.platform_list', ['records' => $platforms]);
    }

    /*
     * Return a list of devices with the associate view
     */
    public function indexDevice()
    {
        $expire = Config::get('hub.cache_expire');
        $devices = null;

        if (!Cache::has('devices_list')) {
            Log::info('Cache:: Rebuild devices_list cache');

            $devices = Hardware::where('hidden', false)
                ->whereNotNull('platform_id')
                ->with('brand')
                ->with('platform')
                ->with('tags')
                ->get();

            Cache::add('devices_list', $devices, $expire);
        } else {
            $devices = Cache::get('devices_list');
        }

        return view('pages.device_list', ['records' => $devices]);
    }

    /*
     * Return a detail page for the hardware
     */
    public function details($manufacturerSlug, $deviceSlug)
    {
        //TODO - Make the view and query the data
        return 'Device Details ' . $manufacturerSlug . ' ' . $deviceSlug;
    }
}
