<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.pages.users.edite');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}


