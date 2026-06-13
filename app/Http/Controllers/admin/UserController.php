<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{


    public function index()
    {
        $totalusers = User::count();
        $admins = User::whereHas('roles', function ($query) {
            $query->where('name', 'admin');
        })->count();

        $editors = User::whereHas('roles', function ($query) {
            $query->where('name', 'editor');
        })->count();

        $simpleUsers = User::whereHas('roles', function ($query) {
            $query->where('name', 'user');
        })->count();

        $users = User::with('roles')->get();
        // dd($users);

        $usersState = [
            ['title' => 'کل کاربران' , 'total' => $totalusers],
            ['title' => 'تعداد ادمین ها' , 'total' => $admins],
            ['title' => "تعداد مدیران" , 'total' => $editors],
            ['title' => "تعداد کاربران ساده" , 'total' => $simpleUsers],
        ];

        // dd($usersState);

        return view('admin.pages.users.index' , compact('usersState' , 'users'));
    }

    public function update()
    {
        return view('admin.pages.users.edite');
    }

    public function addRoleToUser()
    {
        return view('admin.pages.users.userRole');
    }
}
