<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    

    public function index()
    {
        $users = User::all();
        // dd($users->toArray());
        return view('admin.pages.users.index');
    }

    public function update()
    {
        return view('admin.pages.users.edite');
    }

    public function addRoleToUser(){
        return view('admin.pages.users.userRole');
    }
}
