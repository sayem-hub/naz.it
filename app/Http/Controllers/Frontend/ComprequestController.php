<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Comprequest;
use Illuminate\Http\Request;

class ComprequestController extends Controller
{
    public function create(){

        return view('Frontend.comLap-request.create');
    }

    public function store(Request $request)
    {
         $data = [
                'emp_id' =>$request->input('emp_id'),
                'emp_name' => $request->input('emp_name'),
                'designation' => $request->input('designation'),
                'department' => $request->input('department'),
                'section' => $request->input('section'),
                'doj' => $request->input('doj'),
                'report_to' => $request->input('report_to'),
                'mobile' => $request->input('mobile'),
                'current_comp' => $request->input('current_comp'),
                'is_checked' => $request->input('is_checked'),
                'reason_for' => implode(', ' , $request->reason_for),
                'device_type' => $request->input('device_type'),
                'primary_use' => implode(', ' , $request->primary_use),
                'display_size' => $request->input('display_size'),
                'accessories' => $request->input('accessories'),
            ];

            Comprequest::create($data);
            return redirect()->route('new.mail.form.create')->with('message', 'Application successful! You have to wait some time for revewing your application by HR and IT Dept.');
    }
}
