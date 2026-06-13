<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::with('permissions')->get();
        return view('admin.pages.roles.index' , compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissions = Permission::all()->groupBy('category');

        $permissionGroups = [
            [
                'title' => 'مدیریت فارغان',
                'description' => 'دسترسی‌های مربوط به فارغ‌التحصیلان',
                'icon_bg' => 'bg-blue-100',
                'icon_color' => 'text-blue-600',
                'icon_path' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z',
                'permissions' => $permissions->get('graduates', collect())->map(function ($p) {
                    return [
                        'id' => $p->id,
                        'label' => $p->label,
                    ];
                })->values()->toArray(),
            ],

            [
                'title' => 'ساختار دانشگاه',
                'description' => 'مدیریت دانشکده‌ها و دپارتمنت‌ها',
                'icon_bg' => 'bg-green-100',
                'icon_color' => 'text-green-600',
                'icon_path' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
                'permissions' => $permissions->get('university', collect())->map(function ($p) {
                    return [
                        'id' => $p->id,
                        'label' => $p->label,
                    ];
                })->values()->toArray(),
            ],


            [
                'title' => 'مدیریت کاربران',
                'description' => 'دسترسی به مدیریت کاربران سیستم',
                'icon_bg' => 'bg-red-100',
                'icon_color' => 'text-red-600',
                'icon_path' => 'M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z',
                'permissions' => $permissions->get('users', collect())->map(function ($p) {
                    return [
                        'id' => $p->id,
                        'label' => $p->label,
                    ];
                })->values()->toArray(),
            ],
        ];

        return view('admin.pages.roles.create', compact('permissionGroups', 'permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1. Validate input
        $request->validate([
            'name' => 'required|string|max:255|unique:roles,name',
            'description' => 'nullable|string',
            'permissions' => 'array', // checkbox list
            'permissions.*' => 'exists:permissions,id',
        ]);

        // 2. Create role
        $role = Role::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        // 3. Attach permissions (if any selected)
        if ($request->has('permissions')) {
            $role->permissions()->attach($request->permissions);
        }

        // 4. Redirect back with success message
        return redirect()
            ->route('roles.index')
            ->with('success', 'Role created successfully with permissions.');
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
        return view('admin.pages.roles.edit');
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
