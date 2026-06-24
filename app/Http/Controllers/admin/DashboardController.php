<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Faculty;
use App\Models\Graduate;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables; // Add this import

class DashboardController extends Controller
{

    public function index()
    {
        if (!auth()->user()->hasPermission('dashboard.view')) {
            abort(403);
        }
        $graduate = Graduate::count();
        $faculties = Faculty::count();
        $department = Department::count();
        $employe_graduate = Graduate::where('is_employed', '=', "yes")->count();
        $unemploye_graduate = Graduate::where('is_employed', '=', "no")->count();

        $dashboard = [
            "total_graduate" => $graduate,
            "total_faculties" => $faculties,
            "total_department" => $department,
            "total_employe" => $employe_graduate,
            "total_unemploye" => $unemploye_graduate
        ];

        return view('admin.pages.dashboard.index', compact('dashboard'));
    }

    /**
     * Process DataTables request for recent graduates
     */
    public function recentGraduatesData(Request $request)
    {
        $query = Graduate::query()
            ->select(['id', 'first_name', 'last_name', 'graduation_year', 'is_employed', 'job_status', 'department_id', 'faculty_id'])
            ->with(['department:id,name', 'faculty:id,name'])
            ->latest(); // Get the most recent graduates first

        return DataTables::of($query)
            ->addColumn('full_name', fn($row) => e($row->first_name . ' ' . $row->last_name))
            ->addColumn('faculty_name', fn($row) => e($row->faculty?->name ?? '-'))
            ->addColumn('department_name', fn($row) => e($row->department?->name ?? '-'))
            ->addColumn('employment_status', function ($row) {
                if ($row->is_employed === 'yes') {
                    return '<span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">شاغل</span>';
                } elseif ($row->is_employed === 'no') {
                    return '<span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-amber-100 text-amber-700">بیکار</span>';
                }
                return '<span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-700">ادامه تحصیل</span>';
            })
            ->rawColumns(['employment_status'])
            ->make(true);
    }
}
