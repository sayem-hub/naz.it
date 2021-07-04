<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MaatwebsiteController extends Controller
{
    public function importExport()
    {
        return view('importExport');
    }
    public function exportExcel($type)
    {
        $data = Post::get()->toArray();
        return Excel::create('cc-camera', function($excel) use ($data) {
            $excel->sheet('cc_camera', function($sheet) use ($data) {
                $sheet->formArray($data);
            });
        })->download($type);
    }
public function importExcel(Request $request)
{

}

}
