<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function create(){
        return view('admin.pages.permissions.create');
    }

    public function store(Request $request){
        Permission::create([
            'name' => $request->name,
            'description' => $request->description,
            'category' => $request->category,
            'label' => $request->label
        ]);

        return redirect()->back()->with('success', "دسترسی موفقانه ایجاد شد ");
    }
}
