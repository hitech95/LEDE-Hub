<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DeviceController extends Controller
{
    public function index()
    {
        return 'Device List';
    }

    public function details($manufacturerSlug, $deviceShortname)
    {
        return 'Device Details ' . $manufacturerSlug . ' ' . $deviceShortname;
    }
}
