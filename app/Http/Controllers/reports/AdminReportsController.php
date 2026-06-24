<?php

namespace App\Http\Controllers\reports;

use App\Http\Controllers\Controller;
use App\Models\Graduate;
use Mpdf\Mpdf;


class AdminReportsController extends Controller
{
    public function index(){
        return view('admin.pages.reports.index');
    }


    public function graduateReports()
    {
        // 1. Get data
        $graduates = Graduate::all();
        // dd($graduates);

        // 2. Create mPDF instance
        $mpdf = new Mpdf([
            'mode' => 'utf-8',
            'format' => 'A4',
            'default_font' => 'vazirmatn',

            // important for Persian/Arabic
            'autoLangToFont' => true,
            'autoScriptToLang' => true,
        ]);

        // 3. Register Vazirmatn font
        $mpdf->fontdata['vazirmatn'] = [
            'R' => 'Vazirmatn-Regular.ttf',
            'B' => 'Vazirmatn-Bold.ttf',
        ];

        $mpdf->default_available_fonts[] = 'vazirmatn';

        // 4. Load Blade view
        $html = view('reports.Graduate_Reports', compact('graduates'))->render();

        // 5. Write HTML to PDF
        $mpdf->WriteHTML($html);

        // 6. Output PDF (I = view in browser, D = download)
        return response(
            $mpdf->Output('graduates-report.pdf', 'D'),
            200,
            ['Content-Type' => 'application/pdf']
        );
    }
}
