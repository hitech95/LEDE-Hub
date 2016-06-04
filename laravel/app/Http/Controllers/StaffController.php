<?php

namespace App\Http\Controllers;

use App\Staff;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;

class StaffController extends Controller
{
    public function index()
    {
        $expire = Config::get('hub.cache_expire');
        $staff = null;

        if (!Cache::has('staff_list')) {
            Log::info('Cache:: Rebuild staff_list cache');

            $staff = Staff::orderBy('nickname', 'asc')->get();
            Cache::add('staff_list', $staff, $expire);
        } else {
            $staff = Cache::get('staff_list');
        }

        return view('pages.staff_list', ['records' => $staff]);
    }

    public function details($nickname)
    {
        $staff = Staff::where('nickname', $nickname)->firstOrFail();

        return view('pages.staff_detail', ['staff' => $staff]);
    }
}
