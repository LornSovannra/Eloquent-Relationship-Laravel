<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\RoleUser;
use App\Models\User;
use Illuminate\Http\Request;

class RoleUserController extends Controller
{
    public function Home()
    {
        $role_users = RoleUser::get();

        return view("role_user", compact("role_users"));
    }

    public function Create()
    {
        $roles = Role::get();
        $users = User::get();

        return view("create_role_user", compact("users", "roles"));
    }

    public function Save(Request $req)
    {
        $user = User::findOrFail($req->user_id);
        $role = Role::findOrFail($req->role_id);

        $user->roles()->syncWithoutDetaching($role);

        return redirect("role-user");
    }

    public function Delete($user_id, $role_id)
    {
        $user = User::findOrFail($user_id);
        $role = Role::findOrFail($role_id);

        $role->users()->detach($user);

        return back();
    }
}