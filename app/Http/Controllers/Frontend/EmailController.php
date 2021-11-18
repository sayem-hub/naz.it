<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\eRequest;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function index() {

        $emailrequestforms = eRequest::orderBy('id', 'desc')->paginate(15);
        return view('Frontend.emailform.index', compact('emailrequestforms'));

    }

    public function create(){

        return view('Frontend.emailform.create');
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
                'referred_by'=>'required',
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
                'approved_by' => $request->input('approved_by'),
            ];

            eRequest::create($data);
            return redirect()->route('new.mail.form.create')->with('message', 'Application successful! You have to wait some time for revewing your application by HR and IT Dept.');

        } catch (\Exception $exception) {
            return redirect()->back()->withErrors($exception->getMessage());
        }
    }
}

