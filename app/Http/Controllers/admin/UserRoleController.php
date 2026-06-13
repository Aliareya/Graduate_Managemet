<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserRoleController extends Controller
{
    public function index()
    {
        $users = User::all()->select('name', 'id');
        $roles = Role::all()->select('name', 'id');
        // dd(($users));
        return view('admin.pages.userrole.index', compact('users', 'roles'));
    }


    public function assignRole(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'role_id' => 'required|exists:roles,id',
        ]);

        $user = User::findOrFail($validated['user_id']);
        $user->roles()->sync([$validated['role_id']]);

        return redirect()
            ->back()
            ->with('success', 'نقش با موفقیت به کاربر اختصاص یافت.');
    }

    /**
     * Remove a role from a user.
     */
    public function remove()
    {
        $users = User::all();
        $userRolesMap = User::with('roles:id,name')->get()->keyBy('id')->map(fn($u) => $u->roles)->toArray();
        return view('admin.pages.userrole.removeRole', compact('users', 'userRolesMap'));
    }


    public function removeRole(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'role_id' => 'required|exists:roles,id',
        ]);

        $user = User::findOrFail($validated['user_id']);
        $user->roles()->detach($validated['role_id']);

        return redirect()
            ->back()
            ->with('success', 'نقش از کاربر حذف شد.');
    }
}
