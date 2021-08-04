<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brother;
use App\Models\Tablet;
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
        $machine_no=0;
        Brother::where('machine_no', $machine_no);
        $machine_name = $request->input('machine_name');
        if($machine_name = 'P/M')
        {

            $machine_no +=1;
        }
        $data = [
            'brand' => $request->input('brand'),
            'machine_name' => $request->input('machine_name'),
            'serial_no' => $request->input('serial_no'),
            'machine_no'=>$machine_no,
            'supplier' => $request->input('supplier'),
            'line_no' => $request->input('line_no'),
            'unit' => $request->input('unit'),
            'type' => $request->input('type'),
            'status' => $request->input('status'),
        ];

        Brother::create($data);
        return redirect()->back();
    }

        public function index()
        {

        $tablets = Tablet::orderBy('id')->paginate(15);
            return view('Frontend.kpiproject.tablet.index', compact('tablets'));
        }

    public function create()
    {
        return view('Frontend.kpiproject.tablet.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                 'tab_id'=> 'required',
                 'model' => 'required',
                 'status' => 'required',
            ]);

            $data = [
                'tab_id' => $request->input('tab_id'),
                'brand' => $request->input('brand'),
                'model' => $request->input('model'),
                'size' => $request->input('size'),
                'serial' => $request->input('serial'),
                'imei_1' => $request->input('imei_1'),
                'imei_2' => $request->input('imei_2'),
                'user' => $request->input('user'),
                'emp_id' => $request->input('emp_id'),
                'designation' => $request->input('designation'),
                'section' => $request->input('section'),
                'department' => $request->input('department'),
                'line_no' => $request->input('line_no'),
                'status' => $request->input('status'),
                'notes' => $request->input('notes'),
            ];

            Tablet::create($data);
            return redirect()->route('tablet.index');
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors($exception->getMessage());
        }
    }

    public function edit($id)
    {
        $tablets = Tablet::find($id);
        return view('Frontend.kpiproject.tablet.edit', compact('tablets'));
    }

    public function update(Request $request, $id)
    {

        try {
            $request->validate([

                'tab_id' => 'required',
                'model' => 'required',
                'status' => 'required',
            ]);

            $tablets = Tablet::find($id);

            $data = [
                'tab_id' => $request->input('tab_id'),
                'brand' => $request->input('brand'),
                'model' => $request->input('model'),
                'size' => $request->input('size'),
                'serial' => $request->input('serial'),
                'imei_1' => $request->input('imei_1'),
                'imei_2' => $request->input('imei_2'),
                'user' => $request->input('user'),
                'emp_id' => $request->input('emp_id'),
                'designation' => $request->input('designation'),
                'section' => $request->input('section'),
                'department' => $request->input('department'),
                'line_no' => $request->input('line_no'),
                'status' => $request->input('status'),
                'notes' => $request->input('notes'),
            ];
            $tablets->update($data);
            return redirect()->route('tablet.index');
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors($exception->getMessage());
        }
    }

}
