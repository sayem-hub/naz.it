<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\eRequest;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function userRequest(){
        $email_requests = eRequest::orderBy('id','desc')->paginate(25);
        return view('Backend.emailform.index',compact('email_requests'));
    }

    public function editEmailRequest($id){
        $eRequest = eRequest::find($id);
        return view('Backend.emailform.edit', compact('eRequest'));

    }

    public function updateEmailRequest(Request $request,$id){
        $eRequest = eRequest::find($id);

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
            'status' => $request->input('status'),
        ];

        $eRequest->update($data);
        return redirect()->route('user.request');
    }

    public function viewEmailRequest($id){
        $all_request = eRequest::find($id);
        return view('Backend.emailform.emailReqView',compact('all_request'));
    }
}
