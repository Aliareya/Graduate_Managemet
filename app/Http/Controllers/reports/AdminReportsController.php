<?php

namespace App\Http\Controllers\reports;

use App\Http\Controllers\Controller;
use App\Models\Graduate;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminReportsController extends Controller
{
    public function graduateReports()
    {
        $graduates = Graduate::all();
        // dd($graduates);

        $pdf = Pdf::loadView('reports.Graduate_Reports', [
            'graduates' => $graduates
        ]);

        return $pdf->download('graduates-report.pdf');

        // یا نمایش در مرورگر
        // return $pdf->stream('graduates-report.pdf');
    }
}
