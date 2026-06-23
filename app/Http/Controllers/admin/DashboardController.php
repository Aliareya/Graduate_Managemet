<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Faculty;
use App\Models\Graduate;

class DashboardController extends Controller
{
    public function index()
    {
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
}
