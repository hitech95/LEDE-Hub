<?php

namespace App\Http\Controllers;

use App\Hardware;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class DeviceController extends Controller
{
    public function indexPlatform()
    {
        $platforms = Hardware::whereNull('platform_id')
            ->where('hidden', false)
            ->get();

        return view('pages.platform_list', ['records' => $platforms]);
    }

    public function indexDevice()
    {
        $devices = Hardware::where('hidden', false)
            ->whereNotNull('platform_id')
            ->get();

        return view('pages.device_list', ['records' => $devices]);
    }

    public function details($manufacturerSlug, $deviceSlug)
    {
        return 'Device Details ' . $manufacturerSlug . ' ' . $deviceSlug;
    }
}
