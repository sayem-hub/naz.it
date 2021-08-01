<?php

namespace App\Http\Controllers\Frontend;

use App\Exports\CcameraExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Exports\ComputersExport;

class MaatwebsiteController extends Controller
{

    public function cameraExcelExport()
    {
        return Excel::download(new CcameraExport, 'cc-cameraList.xlsx');
    }
}
