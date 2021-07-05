<?php

namespace App\Http\Controllers\Backend;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Imports\ComputersImport;
use App\Exports\ComputersExport;



class MaatwebsiteController extends Controller
{
    public function importExport()
    {
        return view('Backend.reports.report');
    }

    public function import()
    {
        Excel::import(new ComputersImport, 'computers.xlsx');

        return redirect('import.export')->with('success', 'All good!');
    }

    public function export()
    {
        return Excel::download(new ComputersExport, 'computers.xlsx');
    }
}

