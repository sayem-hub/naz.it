<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Prerequi;
use App\Models\Preuser;
use Illuminate\Http\Request;
use DB;

class PreRequisitionController extends Controller
{

    public function createPreReq()
    {
        return view('Frontend.requestFolder.preRequisition.create');
    }


    public function preReqStore(Request $request)
    {

//        try {
//            $request->validate([
//                'emp_id' => 'required',
//                'employee_name' => 'required',
//                'designation' => 'required',
//                'section' => 'required',
//                'department' => 'required',
//                'mobile' => 'required',
//            ]);


            $data = ([
                'emp_id' => $request->input('emp_id'),
                'employee_name' => $request->input('employee_name'),
                'designation' => $request->input('designation'),
                'section' => $request->input('section'),
                'department' => $request->input('department'),
                'mobile' => $request->input('mobile'),
                'reference' => $request->input('reference'),
            ]);

            $preusers = Preuser::create($data);
            $lastId = Prerequi::orderBy('id', 'desc')->first();

//        $incrementId = new Prerequi();


            if (isset($lastId)) {
                // Sum 1 + last id
                $incrementId2 = 'NIT-MAN-REQ-00' . ($lastId->id + 1);
            } else {
                $incrementId2 = 'NIT-MAN-REQ-001';
            }

            $item_des = $request->item_des;
            $size = $request->size;
            $unit = $request->unit;
            $qty = $request->qty;
            $purpose = $request->purpose;
            $remarks = $request->remarks;


//            for($i=0; $i < count($item_des); $i++) {
//                $saveRecord=[
//                    'preuser_id' => $preusers->id,
//                    'manual_num' => $incrementId2,
//                    'item_des' =>$item_des[$i],
//                    'size' =>$size[$i],
//                    'unit' =>$unit[$i],
//                    'qty' =>$qty[$i],
//                    'purpose' =>$purpose[$i],
//                    'remarks' =>$remarks[$i],
//                ];
//
//                DB::table('prerequis')->insert($saveRecord);
//            }
//
//            return redirect()->route('pre.req.print')->with('message', "Your data has submit successfully!");;
//        } catch (\Exception $exception) {
//            return redirect()->back()->withErrors($exception->getMessage());
//        }
    }

    public function print()
    {
        return view ('Frontend.requestFolder.preRequisition.print');
    }


    public function viewEquipForm($id)
    {
        $all_equipment = Prerequi::find($id);
        return view('Frontend.requestFolder.preRequisition.preview', compact('all_equipment'));
    }

}
