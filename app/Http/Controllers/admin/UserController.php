<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

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

        $usersState = [
            ['title' => 'کل کاربران', 'total' => $totalusers],
            ['title' => 'تعداد ادمین ها', 'total' => $admins],
            ['title' => "تعداد مدیران", 'total' => $editors],
            ['title' => "تعداد کاربران ساده", 'total' => $simpleUsers],
        ];

        return view('admin.pages.users.index', compact('usersState'));
    }

    public function data(Request $request)
    {
        $query = User::query()
            ->select(['id', 'name', 'email', 'status', 'created_at', 'finaly_login'])
            ->with('roles');

        // Apply role filter
        if ($request->filled('role')) {
            $query->whereHas('roles', function ($q) use ($request) {
                $q->where('name', $request->role);
            });
        }

        // Apply status filter
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        return DataTables::of($query)
            ->addColumn('user_info', function ($row) {
                $initials = collect(explode(' ', $row->name))
                    ->map(fn($word) => mb_substr($word, 0, 1))
                    ->take(2)
                    ->implode('');



                return <<<HTML
                <div class="flex items-center gap-3">
                    <div id="user_bg" class="w-10 h-10   rounded-full flex items-center justify-center text-black font-bold text-sm shadow-sm">
                        {$initials}
                    </div>
                    <div>
                        <p class="font-semibold text-gray-800 text-sm">{$row->name}</p>
                        <p class="text-xs text-gray-500">{$row->email}</p>
                    </div>
                </div>
                HTML;
            })
            ->addColumn('role_badge', function ($row) {
                $roles = $row->roles->map(function ($role) {
                    $colors = [
                        'admin' => 'bg-purple-50 text-purple-700 border-purple-200',
                        'editor' => 'bg-blue-50 text-blue-700 border-blue-200',
                        'user' => 'bg-gray-50 text-gray-700 border-gray-200',
                        'super_admin' => 'bg-red-50 text-red-700 border-red-200',
                    ];
                    $colorClass = $colors[$role->name] ?? 'bg-gray-50 text-gray-700 border-gray-200';

                    return <<<HTML
                    <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-md text-xs font-medium {$colorClass} border">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        {$role->name}
                    </span>
                    HTML;
                })->implode(' ');

                return $roles ?: '<span class="text-xs text-gray-400">بدون نقش</span>';
            })
            ->addColumn('status_badge', function ($row) {
                if ($row->status === 'active') {
                    return <<<HTML
                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md text-xs font-medium bg-green-50 text-green-700 border border-green-200">
                        <span class="w-1.5 h-1.5 bg-green-500 rounded-full animate-pulse"></span>
                        فعال
                    </span>
                    HTML;
                } else {
                    return <<<HTML
                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md text-xs font-medium bg-red-100 text-red-700 border border-red-200">
                        <span class="w-1.5 h-1.5 bg-red-500 rounded-full"></span>
                        غیر فعال
                    </span>
                    HTML;
                }
            })
            ->addColumn('created_at_formatted', fn($row) => $row->created_at->format('Y/m/d'))
            ->addColumn('last_login', function ($row) {
                return $row->finaly_login ? $row->finaly_login->diffForHumans() : 'هرگز';
            })
            ->addColumn('actions', function ($row) {
                $editRoute = route('users.edit', $row->id);
                $deleteRoute = route('users.destroy', $row->id);

                return <<<HTML
                <div class="flex items-center gap-2">
                    <a href="{$editRoute}" class="p-1.5 text-gray-400 hover:text-blue-500 hover:bg-blue-50 rounded-lg transition-colors" title="ویرایش">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                        </svg>
                    </a>
                    <form action="{$deleteRoute}" method="POST" class="inline" onsubmit="return confirm('آیا مطمئن هستید؟')">
                        <input type="hidden" name="_token" value="{$row->id}">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="p-1.5 text-gray-400 hover:text-red-500 hover:bg-red-50 rounded-lg transition-colors" title="حذف">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                        </button>
                    </form>
                </div>
                HTML;
            })
            ->rawColumns(['user_info', 'role_badge', 'status_badge', 'actions'])
            ->make(true);
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


