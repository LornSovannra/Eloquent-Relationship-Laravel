<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function Home(){
        $users = User::get();

        return view("user", compact("users"));
    }

    public function Create(){
        /* $user = new User();
        $user->name = "Jeff Bezos";
        $user->email = "bezos.jeff@gmail.com";
        $user->password = Hash::make("123");
        $user->save();

        return $user; */
    }
}