<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function Home(){
        $roles = Role::get();

        return view("role", compact("roles"));
    }

    public function Create()
    {
        $user = User::findOrFail(8);
        $role = Role::where("id", "<", 4)->get();

        $user->roles()->syncWithoutDetaching($role);
        return $user;
    }
}