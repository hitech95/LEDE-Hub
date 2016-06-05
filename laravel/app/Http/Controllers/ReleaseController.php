<?php

namespace App\Http\Controllers;

use App\Release;

use App\Http\Requests;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;

class ReleaseController extends Controller
{
    public function index()
    {
        $expire = Config::get('hub.cache_expire');
        $releases = null;

        if (!Cache::has('releases_list')) {
            Log::info('Cache:: Rebuild releases_list cache');

            $releases = Release::latest('revision')->get();

            Cache::add('releases_list', $releases, $expire);
        }else{
            $releases = Cache::get('releases_list');
        }

        return view('pages.releases', ['records' => $releases]);
    }
}
