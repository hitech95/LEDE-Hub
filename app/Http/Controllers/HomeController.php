<?php

namespace App\Http\Controllers;

use App\Hardware;
use App\Http\Requests;
use App\Staff;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{

    public function index()
    {
        $expire = Config::get('hub.cache_expire');

        if (!Cache::has('developer_count') && Cache::add('developer_count', Staff::count(), $expire)) {
            Log::info('Cache:: Rebuild developer_count cache');
        }

        if (!Cache::has('unsupported_count') && Cache::add('unsupported_count', 0, $expire)) {
            Log::info('Cache:: Rebuild unsupported_count cache');
        }

        if (!Cache::has('supported_count') && Cache::add('supported_count', 0, $expire)) {
            Log::info('Cache:: Rebuild supported_count cache');
        }

        if (!Cache::has('hardware_count') && Cache::add('hardware_count', Hardware::visible()->count(), $expire)) {
            Log::info('Cache:: Rebuild hardware_count cache');
        }

        $developer = Cache::get('developer_count');
        $unsupported = Cache::get('unsupported_count');
        $supported = Cache::get('supported_count');
        $hardware = Cache::get('hardware_count');

        return view('pages.home', compact('developer', 'unsupported', 'supported', 'hardware'));
    }
}
