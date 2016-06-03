<?php

namespace App\Http\Controllers;

use App\Staff;
use Illuminate\Http\Request;

use App\Http\Requests;

class StaffController extends Controller
{
    public function index()
    {
        $staff = Staff::orderBy('nickname', 'asc')->get();

        //return $staff;

        return view('pages.staff_list', ['records' => $staff]);
    }

    public function details($nickname)
    {
        $staff = Staff::where('nickname', $nickname)->firstOrFail();

        return view('pages.staff_detail', ['staff' => $staff]);
    }
}
