<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RoleManagementController extends Controller
{
    public function index()
    {
        $users = User::all();
        $roles = Role::all();
        $permissions = Permission::all();
        return view('manageRoles', compact('users', 'roles', 'permissions'));
    }

    public function assignRole(Request $request)
    {
        $user = User::findOrFail($request->get('user_id'));
        $role = Role::findOrFail($request->get('role_id'));
        $user->roles()->attach($role);
        return redirect()->back()->with('Success', 'Role Assigned');
    }

    public function permissionView()
    {
        $roles = Role::all();
        $permissions = Permission::all();
        return view('managePermissions', compact( 'roles', 'permissions'));
    }

    public function assignPermission(Request $request)
    {
        $role = Role::findOrFail($request->get('role_id'));
        $permission = Permission::findOrFail($request->get('permission_id'));
        $role->permissions()->attach($permission);
        return redirect()->back()->with('Success', 'Permission assigned');
    }
}
