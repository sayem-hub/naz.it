<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Faceid;
use Illuminate\Http\Request;

class FaceidController extends Controller
{
    public function index()
    {

        $machines = Faceid::orderBy('id')->paginate(100);
         return view('Frontend.faceID.index', compact('machines'));
    }

    public function create()
    {
        return view('Frontend.faceID.create');

        }

        public function store(Request $request)
        {
       try {
           $request->validate([
               'machine_name'=> 'required',
               'machine_id'=> 'required',
               'ip_address'=> 'required',
               'serial_no'=> 'required',
               'type'=> 'required',
               'model'=> 'required',
               'location'=> 'required',
               'status'=> 'required',
           ]);

            $data = [
                'machine_name' => $request->input('machine_name'),
                'machine_id' => $request->input('machine_id'),
                'ip_address' => $request->input('ip_address'),
                'serial_no' => $request->input('serial_no'),
                'type' => $request->input('type'),
                'model' => $request->input('model'),
                'location' => $request->input('location'),
                'status' => $request->input('status'),
            ];
            Faceid::create($data);

            return redirect()->route('faceid.index');

       }catch (\Exception $exception) {
           return redirect()->back()->withErrors($exception->getMessage());
       }

    }

        public function edit($id)
        {
        $machines = Faceid::find($id);
        return view('Frontend.faceID.edit', compact('machines'));
        }

    public function update(Request $request, $id)
    {

        try {
            $request->validate([
                'machine_name' => 'required',
                'machine_id' => 'required',
                'ip_address' => 'required',
                'serial_no' => 'required',
                'type' => 'required',
                'model' => 'required',
                'location' => 'required',
                'status' => 'required',
            ]);

            $machines = Faceid::find($id);

            $data = [
                'machine_name' => $request->input('machine_name'),
                'machine_id' => $request->input('machine_id'),
                'ip_address' => $request->input('ip_address'),
                'serial_no' => $request->input('serial_no'),
                'type' => $request->input('type'),
                'model' => $request->input('model'),
                'location' => $request->input('location'),
                'status' => $request->input('status'),
            ];
            $machines->update($data);
            return redirect()->route('faceid.index');


        } catch (\Exception $exception) {
            return redirect()->back()->withErrors($exception->getMessage());
        }
    }
}
