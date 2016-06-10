<?php

namespace App\Http\Controllers\Admin;

use App\Hardware;
use App\Http\Controllers\Controller;
use App\Staff;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller {

    public function index()
    {
        $developer = Staff::all()->count();
        $user = User::all()->count();
        $devices = Hardware::devices()->get()->count();
        $platforms = Hardware::platforms()->get()->count();

        return view('admin.dashboard', compact('developer', 'user', 'devices', 'platforms'));
    }

    public function stats()
    {
        return "Not jet available!";
    }
}
