<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Bscanner;
use Illuminate\Http\Request;

class BarcodeScanner extends Controller
{

    public function index()
    {

        $bscanners = Bscanner::orderBy('id', 'desc')->paginate(100);
        return view('Frontend.kpiproject.bscanner.index', compact('bscanners'));
    }

    public function create()
    {
        return view('Frontend.kpiproject.bscanner.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'tab_id' => 'required',
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

            Bscanner::create($data);
            return redirect()->route('bscanner.index');
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors($exception->getMessage());
        }
    }

    public function edit($id)
    {
        $bscanners = Bscanner::find($id);
        return view('Frontend.kpiproject.bscanner.edit', compact('bscanners'));
    }

    public function update(Request $request, $id)
    {

        try {
            $request->validate([

                'tab_id' => 'required',
                'model' => 'required',
                'status' => 'required',
            ]);

            $bscanners = Bscanner::find($id);

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
            $bscanners->update($data);
            return redirect()->route('bscanner.index');
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors($exception->getMessage());
        }
    }
}
