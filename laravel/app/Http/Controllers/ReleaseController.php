<?php

namespace App\Http\Controllers;

use App\Release;
use Illuminate\Http\Request;

use App\Http\Requests;

class ReleaseController extends Controller
{
    public function index()
    {
        $releases = Release::orderBy('revision', 'desc')->get();

        return view('pages.release', ['records' => $releases]);
    }
}
