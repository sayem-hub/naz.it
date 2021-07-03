<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Ccamera;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class CcameraController extends Controller
{
    public function index(){
        $ccameras = Ccamera::orderBy('id')->paginate(300);
        return view('Backend.ccamera.ccameras',compact('ccameras'));
    }

    public function create(){
        return view('Backend.ccamera.create');
    }
    public function store(Request $request){
       $data = [
           'camname'=>$request->input('camname'),
           'camno'=>$request->input('camno'),
           'camlocation'=>$request->input('camlocation'),
           'status'=>$request->input('status'),
       ];

       Ccamera::create($data);

       return redirect()->route('admin.ccam');
    }
    public function edit($id){
        $ccamera = Ccamera::find($id);
        return view('Backend.ccamera.edit', compact('ccamera'));
    }
    public function update(Request $request,$id){
         $ccamera = Ccamera::find($id);
         $data = [
            'camname' => $request->input('camname'),
            'camno' => $request->input('camno'),
            'camlocation' => $request->input('camlocation'),
            'status' => $request->input('status'),
         ];
         $ccamera->update($data);
        return redirect()->route('admin.ccam');
    }
    public function delete($id)
    {
        $ccamera = Ccamera::find($id);
        $ccamera->delete();

        return redirect()->back();
    }
}
