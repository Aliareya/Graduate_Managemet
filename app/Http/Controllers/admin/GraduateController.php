<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Faculty;
use App\Models\Graduate;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class GraduateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!auth()->user()->hasPermission('graduates.list')) {
            abort(403);
        }
        // Return view without data; DataTables will fetch it via AJAX
        return view('admin.pages.graduate.index');
    }

    public function data(Request $request)
    {
        $query = Graduate::query()
            ->select([
                'id',
                'first_name',
                'last_name',
                'student_id',
                'graduation_year',
                'is_employed',
                'job_status',
                'department_id',
                'faculty_id'
            ])
            ->with([
                'department:id,name',
                'faculty:id,name'
            ]);

        return DataTables::of($query)
            // 1. Updated full_name column to include Avatar HTML
            ->addColumn('full_name', function ($row) {
                $fullName = e($row->first_name . ' ' . $row->last_name);

                // Get the first character (mb_substr supports Persian/Arabic/English)
                $firstLetter = e(mb_substr($row->first_name, 0, 1));

                // Array of Tailwind color classes for the avatar background
                $colors = [
                    'bg-blue-100 text-blue-700',
                    'bg-green-100 text-green-700',
                    'bg-purple-100 text-purple-700',
                    'bg-pink-100 text-pink-700',
                    'bg-yellow-100 text-yellow-700',
                    'bg-red-100 text-red-700',
                    'bg-indigo-100 text-indigo-700'
                ];

                // Generate a consistent color based on the user's name
                $colorClass = $colors[abs(crc32($row->first_name)) % count($colors)];

                return '<div class="flex items-center gap-2.5">
            <img
                src="' . asset('images/herat.jpg') . '"
                alt="' . $fullName . '"
                class="w-8 h-8 rounded-full object-cover"
            >
            <span class="font-medium text-gray-800">' . $fullName . '</span>
        </div>';
            })

            ->addColumn('faculty_name', fn($row) => e($row->faculty?->name ?? '-'))
            ->addColumn('department_name', fn($row) => e($row->department?->name ?? '-'))

            ->addColumn('employment_status', function ($row) {
                $text = '';
                if ($row->is_employed === 'yes') {
                    $text = __('graduate.employed');
                } else {
                    $text = e($row->job_status);
                }
                return '<span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">' . $text . '</span>';
            })

            ->addColumn('actions', function ($row) {
                $showRoute = route('graduates.show', $row->id);
                $editRoute = route('graduates.edit', $row->id);

                $viewTitle = __('graduate.view');
                $editTitle = __('graduate.edit');

                return <<<HTML
            <div class="flex items-center gap-2">
                <a href="{$showRoute}" class="p-2 text-gray-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors" title="{$viewTitle}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </a>
                <a href="{$editRoute}" class="p-2 text-gray-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors" title="{$editTitle}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                    </svg>
                </a>
            </div>
            HTML;
            })

            // 2. IMPORTANT: Add 'full_name' to rawColumns so the HTML renders correctly
            ->rawColumns(['full_name', 'employment_status', 'actions'])
            ->make(true);
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
        $graduate = Graduate::with('faculty:id,name', 'department:id,name')->find($id);
        // dd($graduate);
        return view('admin.pages.graduate.show', compact('graduate'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $faculties = Faculty::select('name', 'id')->get();
        $departments = Department::select('name', 'id', 'faculty_id')->get();

        return view('admin.pages.graduate.edit', compact('faculties', 'departments'));
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
        $garduate = Graduate::find($id)->delete();
        return redirect()->route('graduates.index');
    }
}
