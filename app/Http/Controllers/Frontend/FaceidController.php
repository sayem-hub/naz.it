<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Faceid;
use Illuminate\Http\Request;

class FaceidController extends Controller
{
    public function index()
    {

        $machines = Faceid::orderBy('id', 'desc')->paginate(100);
         return view('Frontend.faceID.index', compact('machines'));
    }

    public function create()
    {
        return view('Frontend.faceID.create');

        }

        public function store(Request $request)
        {
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
        }
}
