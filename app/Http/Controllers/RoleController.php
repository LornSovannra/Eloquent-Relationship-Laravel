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
        /* $role = new Role();
        $role->role_name = "user";
        $role->save();

        return $role; */
    }
}