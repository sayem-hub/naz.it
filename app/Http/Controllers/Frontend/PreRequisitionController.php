<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Prerequi;
use App\Models\Preuser;
use Illuminate\Http\Request;

class PreRequisitionController extends Controller
{

    public function createPreReq()
    {
        return view('Frontend.requestFolder.preRequisition.create');
    }


    public function preReqStore(Request $request)
    {
        $data = ([
            'emp_id'=>$request->input('emp_id'),
            'employee_name'=>$request->input('employee_name'),
            'designation'=>$request->input('designation'),
            'section'=>$request->input('section'),
            'department'=>$request->input('department'),
            'mobile'=>$request->input('mobile'),
            'reference'=>$request->input('reference'),
        ]);

        $preusers = Preuser::create($data);

        $lastId        =   Prerequi::orderBy('id', 'desc')->first();

        $incrementId = new Prerequi();

        if (isset($lastId)) {
            // Sum 1 + last id
            $incrementId2 = 'NIT-PRE-REQ-00'.($lastId->id + 1);
        } else {
            $incrementId2       = 'NIT-PRE-REQ-001';
        }



//        Prerequi::find($id)->increment('$manual_num',1);
//        $manual_num= 'NIT-PRE-REQ-000';


            Prerequi::create([
                'preuser_id'=>$preusers->id,
                'manual_num'=>$incrementId2,
                'item_des'=>$request->input('item_des'),
                'size'=>$request->input('size'),
                'unit'=>$request->input('unit'),
                'qty'=>$request->input('qty'),
                'purpose'=>$request->input('purpose'),
                'remarks'=>$request->input('remarks'),
            ]);
        return redirect()->route('pre.req.print');
        }

        public function print()
        {
            return view ('Frontend.requestFolder.preRequisition.print');
        }

}
