<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Faculty;
use App\Models\Graduate;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::with('faculty')->get();
        // dd($departments);
        return view('admin.pages.departments.Index' , compact('departments'));
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
        $graduate = Graduate::all()->where('department_id' , $id);
        // dd($department , $graduate);
        return view('admin.pages.departments.show' , compact('department', 'graduate'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $department = Department::find($id);
        $faculties = Faculty::where('is_active', true)->orderBy('name')->get();
        // dd($department);
        return view('admin.pages.departments.edit' , compact('department' , 'faculties'));
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
