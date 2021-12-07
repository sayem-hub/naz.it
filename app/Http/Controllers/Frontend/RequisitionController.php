<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Requisition;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class RequisitionController extends Controller
{
    public function index()
    {

        $requisitions = Requisition::orderBy('id', 'desc')->paginate(20);
        return view('Frontend.requisition.index', compact('requisitions'));
    }

    public function create()
    {

        $month = date('m');
        $day = date('d');
        $year = date('Y');

        $today = $year . '-' . $month . '-' . $day;
        return view('Frontend.requisition.create', compact('today'));
    }
    public function store(Request $request)
    {
        try {
            $request->validate([
                'requisition_no' => 'required',
                'required_for' => 'required',
                'department' => 'required',
                'status' => 'required',
            ]);

            $data = [
                'requisition_no' => $request->input('requisition_no'),
                'item_names' => $request->input('item_names'),
                'required_for' => $request->input('required_for'),
                'designation' => $request->input('designation'),
                'department' => $request->input('department'),
                'requisition_date' => $request->input('requisition_date'),
                'challan' => 'create.jpg',
                'status' => $request->input('status'),
                'notes' => $request->input('notes'),
            ];

            Requisition::create($data);
            return redirect()->route('requisition.index');
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors($exception->getMessage());
        }
    }

    public function edit($id)
    {
        $requisitions = Requisition::find($id);
        return view('Frontend.requisition.edit', compact('requisitions'));
    }

    public function update(Request $request, $id)
    {

        try {
            $request->validate([
                'requisition_no' => 'required',
                'required_for' => 'required',
                'department' => 'required',
                'status' => 'required',
            ]);

            $requisitions = Requisition::find($id);

            // if ($request->hasFile('challan')){
            // $challan = $request->file('challan');
            // $newName = 'challan' . date('d-m-Y-H-i-s', time()) . '.' . $challan->getClientOriginalExtension();
            //     $request->$challan->move('upload/requisition/challans', $newName);
            //     $challan->update(['requisitions' => $newName]);

            $challan = $request->file('challan');
            if ($challan) {
                if (file_exists('upload/requisition/challans/' . $requisitions->challan)) {
                    unlink('upload/requisition/challans/' . $requisitions->challan);
                }
                $newName = 'challan' . date('d-m-Y-H-i-s', time()) . '.' . $challan->getClientOriginalExtension();
                $request->challan->move('upload/requisition/challans', $newName);
                $requisitions->update(['challan' => $newName]);
            }






            $data = [
                'requisition_no' => $request->input('requisition_no'),
                'item_names' => $request->input('item_names'),
                'required_for' => $request->input('required_for'),
                'designation' => $request->input('designation'),
                'department' => $request->input('department'),
                'requisition_date' => $request->input('requisition_date'),
                'received_date' => $request->input('received_date'),
                'Grn' => $request->input('GRN'),

                'pur_type' => $request->input('pur_type'),
                'status' => $request->input('status'),
                'notes' => $request->input('notes'),
            ];

            $requisitions->update($data);
            return redirect()->route('requisition.index');
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors($exception->getMessage());
        }
    }
}
