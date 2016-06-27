<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Role;
use App\Staff;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Cache;

class AStaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff = Staff::all();

        return view('admin.staff.index', compact('staff'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::orderBy('name')->pluck('id', 'name')->flip();

        return view('admin.staff.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //TODO - Validate the input
        $roles = (is_null($request->roles)) ? null :
            Role::whereIn('id', $request->roles)->get();
        $staff = Staff::create($request->all());

        if (!is_null($roles)) {
            $staff->roles()->sync($roles);
        }

        $staff->save();

        // Clear the staff cache
        Cache::forget('staff_list');

        return redirect()->action('Admin\AStaffController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect()->action('StaffController@index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $staff = Staff::findOrFail($id);
        $roles = Role::orderBy('name')->pluck('id', 'name')->flip();

        return view('admin.staff.edit', compact('staff', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // TODO - Validate the input

        $roles = (is_null($request->roles)) ? null :
            Role::whereIn('id', $request->roles)->get();

        $staff = Staff::findOrFail($id);
        $staff->update($request->all());

        if (!is_null($roles)) {
            $staff->roles()->sync($roles);
        }

        // Clear the role cache
        Cache::forget('staff_list');

        return redirect()->action('Admin\AStaffController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staff = Staff::findOrFail($id);
        $staff->delete();

        return view('admin.staff.index');
    }
}
