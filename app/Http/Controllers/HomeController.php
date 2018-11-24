<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // //role
        // $patient = Role::create(['guard_name' => 'patient', 'name' => 'patient']);
        // $doctor = Role::create(['guard_name' => 'doctor', 'name' => 'doctor']);
        // $investigator = Role::create(['guard_name' => 'investigator', 'name' => 'investigator']);
        // $superadmin = Role::create(['guard_name' => 'superadmin', 'name' => 'superadmin']);
        // //zgody
        // $editaccount = Permission::create(['guard_name' => 'editaccount', 'name' => 'edit account']);
        // $display = Permission::create(['guard_name' => 'display', 'name' => 'display']);
        // $delete = Permission::create(['guard_name' => 'delete', 'name' => 'delete']);
        // $addparameter = Permission::create(['guard_name' => 'addpermameter', 'name' => 'add parameter']);
        // $displaystatistic = Permission::create(['guard_name' => 'displaystatistic', 'name' => 'display statistic']);
        // $addpost = Permission::create(['guard_name' => 'addpost', 'name' => 'addpost']);
        // $registryconsultation = Permission::create(['guard_name' => 'registryconsultation', 'name' => 'registry consultation']);
        // //przypisania
        // $doctor->givePermissionTo('addpost');
        return view('home');
    }
}
