<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\eRequest;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;

class EmailController extends Controller
{
    public function index() {

        $emailrequestforms = eRequest::orderBy('id', 'desc')->paginate(15);
        return view('Frontend.emailForm.index', compact('emailrequestforms'));

    }

    public function create(){

        return view('Frontend.emailForm.create');
    }
    public function store(Request $request)
    {
        try {
            $request->validate([
                'full_name' => 'required',
                'designation' => 'required',
                'office_id'=>'required',
                'department' => 'required',
                'doj'=>'required',
                'mobile'=>'required',
            ]);

            $data = [
                'full_name' => $request->input('full_name'),
                'nick_name' => $request->input('nick_name'),
                'designation' => $request->input('designation'),
                'office_id' => $request->input('office_id'),
                'section' => $request->input('section'),
                'department' => $request->input('department'),
                'doj' => $request->input('doj'),
                'mobile' => $request->input('mobile'),
                'pro_id' => $request->input('pro_id'),
                'mail_group' => $request->input('mail_group'),
                'referred_by' => $request->input('referred_by'),
                'status' => 'Pending',
            ];

            eRequest::create($data);
            return redirect()->route('new.mail.form.create')->with('message', 'Application submitted successfully! You will have to wait a while for your application to be reviewed by the HR and IT department.');

        } catch (\Exception $exception) {
            return redirect()->back()->withErrors($exception->getMessage());
        }
    }

    public function emailAddressList() {

        $allEmailIDs = eRequest::where('created_address','=',!'Null')->orderBy('updated_at', 'desc')->paginate(500);
        return view('Frontend.emailForm.all_mail_Ids', compact('allEmailIDs'));

    }
}

