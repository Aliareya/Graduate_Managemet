<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(){
        return view('admin.pages.users.index');
    }

    public function update(){
        return view('admin.pages.users.edite');
    }
}
