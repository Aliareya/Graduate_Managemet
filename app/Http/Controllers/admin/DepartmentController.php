<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Faculty;
use App\Models\Graduate;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Load faculties for the filter dropdown
        $faculties = Faculty::select('id', 'name')->get();
        return view('admin.pages.departments.index', compact('faculties'));
    }

    public function data(Request $request)
    {
        $query = Department::query()
            ->select(['id', 'name', 'head_name', 'faculty_id', 'updated_at'])
            ->with('faculty:id,name');

        // Filter by faculty if selected
        if ($request->filled('faculty_id')) {
            $query->where('faculty_id', $request->faculty_id);
        }

        return DataTables::of($query)
            ->addColumn('card_html', function ($row) {
                // Count graduates for this department
                $gradCount = 0;
                if (method_exists($row, 'graduates')) {
                    try {
                        $gradCount = $row->graduates()->count();
                    } catch (\Exception $e) {
                        $gradCount = 0;
                    }
                }

                // Generate routes
                $showRoute = route('departments.show', ['department' => $row->id]);
                $editRoute = route('departments.edit', ['department' => $row->id]);
                $updatedAt = $row->updated_at->diffForHumans();
                $facultyName = $row->faculty?->name ?? 'نامشخص';

                return <<<HTML
                <div class="bg-white rounded-2xl border border-gray-200 p-6 shadow-sm hover:shadow-md transition-shadow">
                    <div class="flex items-start justify-between mb-4">
                        <div class="flex-1">
                            <div class="flex items-center gap-2 mb-1">
                                <span class="text-xs text-blue-600 bg-blue-50 px-2 py-0.5 rounded-full">
                                    {$facultyName}
                                </span>
                            </div>
                            <h3 class="text-lg font-bold text-gray-800 mb-1">دپارتمان {$row->name}</h3>
                            <p class="text-sm text-gray-500">رئیس: {$row->head_name}</p>
                        </div>
                        <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" />
                            </svg>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-3 mt-4">
                        <div class="bg-gray-50 rounded-xl p-3 text-center">
                            <div class="flex items-center justify-center gap-1 mb-1">
                                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span class="text-xs text-gray-500">تعداد فارغان</span>
                            </div>
                            <p class="text-xl font-bold text-gray-800">{$gradCount}</p>
                        </div>
                    </div>
                    <div class="mt-4 pt-4 border-t border-gray-100 flex items-center justify-between">
                        <span class="text-xs text-gray-500">آخرین بروزرسانی: {$updatedAt}</span>
                        <div class="flex items-center gap-2">
                            <a href="{$showRoute}" class="p-1.5 text-gray-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </a>
                            <a href="{$editRoute}" class="p-1.5 text-gray-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                HTML;
            })
            ->rawColumns(['card_html'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $faculties = Faculty::where('is_active', true)->orderBy('name')->get();
        return view('admin.pages.departments.create', compact('faculties'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'             => 'required|string|max:255',
            'code'             => 'required|string|max:50|unique:departments,code',
            'faculty_id'       => 'required|exists:faculties,id',
            'head_name'        => 'required|string|max:255',
            'head_degree'      => 'nullable|in:phd,master,bachelor',
            'head_speciality'  => 'nullable|string|max:255',
            'head_phone'       => 'nullable|string|max:20',
            'head_email'       => 'nullable|email|max:255',
            'head_start_year'  => 'nullable|string|max:10',
            'location'         => 'nullable|string|max:255',
            'phone'            => 'nullable|string|max:20',
            'email'            => 'nullable|email|max:255',
            'description'      => 'nullable|string|max:500',
            'status'           => 'required|in:active,inactive',
            'show_on_homepage' => 'nullable|boolean',
        ]);

        Department::create([
            'name'             => $validated['name'],
            'code'             => $validated['code'],
            'faculty_id'       => $validated['faculty_id'],
            'head_name'        => $validated['head_name'],
            'head_degree'      => $validated['head_degree'] ?? null,
            'head_speciality'  => $validated['head_speciality'] ?? null,
            'head_phone'       => $validated['head_phone'] ?? null,
            'head_email'       => $validated['head_email'] ?? null,
            'head_start_year'  => $validated['head_start_year'] ?? null,
            'location'         => $validated['location'] ?? null,
            'phone'            => $validated['phone'] ?? null,
            'email'            => $validated['email'] ?? null,
            'description'      => $validated['description'] ?? null,
            'is_active'        => $validated['status'] === 'active',
            'show_on_homepage' => $request->boolean('show_on_homepage'),
        ]);

        return redirect()
            ->route('departments.index')
            ->with('success', 'دپارتمان با موفقیت ثبت شد.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $department = Department::with('faculty')->find($id);
        $graduate = Graduate::all()->where('department_id', $id);
        // dd($department , $graduate);
        return view('admin.pages.departments.show', compact('department', 'graduate'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $department = Department::find($id);
        $faculties = Faculty::where('is_active', true)->orderBy('name')->get();
        // dd($department);
        return view('admin.pages.departments.edit', compact('department', 'faculties'));
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
