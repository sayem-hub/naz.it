<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Mail\AutoMail;
use App\Mail\HREmailIdNotification;
use App\Models\eRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function userRequest()
    {
        $email_requests = eRequest::orderBy('id', 'desc')->paginate(25);
        return view('Backend.emailform.index', compact('email_requests'));
    }

    public function editEmailRequest($id)
    {
        $eRequest = eRequest::find($id);
        return view('Backend.emailform.edit', compact('eRequest'));

    }

    public function updateEmailRequest(Request $request, $id)
    {
        $eRequest = eRequest::find($id);

        try {
            $request->validate([
                'full_name' => 'required',
                'designation' => 'required',
                'office_id' => 'required',
                'department' => 'required',
                'doj' => 'required',
                'mobile' => 'required',
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
                'status' => $request->input('status'),
            ];


            $eRequest->update($data);
            Mail::to('ahsanul@nz-bd.com')->cc(['wajed@nz-bd.com', 'sayed.it@nz-bd.com', 'anait@nz-bd.com', 'sayem.it@nz-bd.com'])->send(new AutoMail($eRequest));
            return redirect()->route('user.request')->with('message', "Email has sent Successfully!");

        } catch (\Exception $exception) {
            return redirect()->back()->withErrors($exception->getMessage());
        }
    }

    public function viewEmailRequest($id)
    {
        $all_request = eRequest::find($id);
        return view('Backend.emailform.emailReqView', compact('all_request'));
    }


    public function editForCreatedID($id)
    {
        $createdIds = eRequest::find($id);
        return view('Backend.emailform.editForCreatedID', compact('createdIds'));

    }

    public function updateForCreatedID(Request $request, $id)
    {
        $createdIds = eRequest::find($id);

        try {
            $request->validate([
                'full_name' => 'required',
                'designation' => 'required',
                'office_id' => 'required',
                'department' => 'required',
                'doj' => 'required',
                'mobile' => 'required',
                'created_address' => 'required',
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
                'status' => $request->input('status'),
                'created_address' => $request->input('created_address'),
            ];


            $createdIds->update($data);
            Mail::to(['sumon-hr@nz-bd.com', 'masum.hr@nz-bd.com', 'aminul.payroll@nz-bd.com', 'khalid@nz-bd.com', 'mahadi.hasan@nz-bd.com', 'anis.hr@nz-bd.com'])->cc(['ahsanul@nz-bd.com', 'anait@nz-bd.com', 'asadujjaman@nz-bd.com', 'tanvirsohel@nz-bd.com', 'sayem.it@nz-bd.com'])->send(new HREmailIdNotification($createdIds));
            return redirect()->route('user.request')->with('message', "Updated and Email has sent Successfully!");

            //->cc(['wajed@nz-bd.com', 'sayed.it@nz-bd.com', 'anait@nz-bd.com','sayem.it@nz-bd.com'])

        } catch (\Exception $exception) {
            return redirect()->back()->withErrors($exception->getMessage());
        }

    }
}
