<?php

namespace App\Http\Controllers;

use App\Staff;

use App\Http\Requests;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class StaffController extends Controller
{
    public function index()
    {
        $expire = Config::get('hub.cache_expire');
        $staff = null;

        if (!Cache::has('staff_list')) {
            Log::info('Cache:: Rebuild staff_list cache');

            //Staff query
            $staff = DB::table('staff')->orderBy('nickname', 'asc')->get();

            $staffIDs = array();
            foreach ($staff as $member) {
                array_push($staffIDs, $member->id);
            }

            //Hardware query
            $hardwareIDs = DB::table('staff_role_hardware')
                ->select('staff_id', 'hardware_id')
                ->distinct()
                ->whereIn('staff_id', $staffIDs);

            $hardware = DB::table('hardware')
                ->join(DB::raw('(' . $hardwareIDs->toSql() . ') as hub_staff_role_hardware'), 'hardware.id', '=', 'staff_role_hardware.hardware_id')
                ->mergeBindings($hardwareIDs)
                ->join('brands', 'brands.id', '=', 'hardware.brand_id')
                ->select('hardware.name as model', 'hardware.slug as model_slug', 'hardware.platform_id as platform_id', 'brands.name as brand', 'brands.slug as brand_slug', 'staff_id')
                ->where('hidden', false)
                ->get();

            //Roles query
            $rolesIDs = DB::table('staff_role_hardware')
                ->select('staff_id', 'role_id')
                ->distinct()
                ->whereIn('staff_id', $staffIDs);

            $roles = DB::table('roles')
                ->join('staff_role', 'roles.id', '=', 'staff_role.role_id')
                ->whereIn('staff_id', $staffIDs);

            $roles = DB::table('roles')
                ->join(DB::raw('(' . $rolesIDs->toSql() . ') as hub_staff_role_hardware'), 'roles.id', '=', 'staff_role_hardware.role_id')
                ->mergeBindings($rolesIDs)
                ->union($roles)
                ->get();

            foreach ($staff as $member) {
                $member->hardware = array();
                //Attach the hardware to the user
                foreach ($hardware as $item) {
                    if ($item->staff_id == $member->id) {
                        array_push($member->hardware, $item);
                    }
                }
            }

            foreach ($staff as $member) {
                $member->roles = array();
                //Attach the roles to the user
                foreach ($roles as $role) {
                    if ($role->staff_id == $member->id) {
                        array_push($member->roles, $role);
                    }
                }
            }

            Cache::add('staff_list', $staff, $expire);
        } else {
            $staff = Cache::get('staff_list');
        }

        //TODO - Remove hardcoded to configuration
        $limit = 5;

        return view('staff.index', [
            'records' => $staff,
            'limit' => $limit,
        ]);
    }

    public function show($nickname)
    {
        $staff = Staff::where('nickname', $nickname)->firstOrFail();

        return view('staff.detail', ['staff' => $staff]);
    }
}
