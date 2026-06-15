<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Faculty;
use App\Models\Graduate;
use Illuminate\Http\Request;

class GraduateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $graduate = Graduate::select(
            'id',
            'first_name',
            'last_name',
            'student_id',
            'graduation_year',
            'is_employed',
            'job_status',
            'department_id',
            'faculty_id'
        )->with([
            'department:id,name',
            'faculty:id,name'
        ])
            ->get();

        // dd($graduate);
        return view('admin.pages.graduate.index', compact('graduate'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $faculties = Faculty::select('name', 'id')->get();
        $departments = Department::select('name', 'id', 'faculty_id')->get();

        return view('admin.pages.graduate.create', compact('faculties', 'departments'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name'      => 'required|string|max:255',
            'last_name'       => 'required|string|max:255',
            'father_name'     => 'nullable|string|max:255',
            'gender'          => 'nullable|in:male,female',
            'birth_date'      => 'nullable|date',
            'phone'           => 'nullable|string|max:20',
            'email'           => 'nullable|email|max:255',
            'address'         => 'nullable|string',
            'student_id'      => 'required|string|unique:graduates,student_id',
            'faculty_id'      => 'required|exists:faculties,id',
            'department_id'   => 'nullable|exists:departments,id',
            'entry_year'      => 'nullable|string|max:10',
            'graduation_year' => 'required|string|max:10',
            'degree'          => 'nullable|in:bachelor,master,phd',
            'is_employed'     => 'required|in:yes,no',
            'job_status'    => 'nullable|array',
            'job_status.*'  => 'nullable|in:بیکار,ادامه تحصیل',
            'company_name'    => 'nullable|string|max:255',
            'job_title'       => 'nullable|string|max:255',
            'work_location'   => 'nullable|string|max:255',
        ]);

        // Clean up fields based on employment status
        if ($validated['is_employed'] === 'yes') {
            $validated['job_status']  = null;
            $validated['company_name']  = $validated['company_name']  ?? null;
            $validated['job_title']     = $validated['job_title']     ?? null;
            $validated['work_location'] = $validated['work_location'] ?? null;
        } else {
            $validated['company_name']  = null;
            $validated['job_title']     = null;
            $validated['work_location'] = null;
            // Convert array ['بیکار', 'ادامه تحصیل'] to comma string for DB
            $validated['job_status']  = !empty($validated['job_status'])
                ? implode(',', $validated['job_status'])
                : null;
        }

        Graduate::create($validated);

        return redirect()->route('graduates.index')
            ->with('success', 'فارغ‌التحصیل با موفقیت ثبت شد.');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.pages.graduate.profile');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
