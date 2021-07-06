<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brother;
use Illuminate\Http\Request;

class KpiController extends Controller
{
    public function kpi(){
        return view('Frontend.kpiproject.kpi');
    }

    public function sewingMachine()
    {
        return view('Frontend.kpiproject.index');
    }

    public function brother_machineStore(Request $request)
    {
        
        $data = [
            'brand' => $request->input('brand'),
            'machine_name' => $request->input('machine_name'),
            'serial_no' => $request->input('serial_no'),
            'supplier' => $request->input('supplier'),
            'line_no' => $request->input('line_no'),
            'unit' => $request->input('unit'),
            'type' => $request->input('type'),
            'status' => $request->input('status'),
        ];

        Brother::create($data);
        return redirect()->back();
    }
}
