<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Computer;

class ComputerFrontController extends Controller
{
    public function computerUser()
    {
        $computers = Computer::orderBy('id','desc')->paginate(250);
        return view('Frontend.computers.computerUser',compact('computers'));
    }

    public function create()
    {
        return view('Frontend.computers.createCom');
    }

    public function store(Request $request)
    {

        $data = [
            'Comid'=>$request->input('ComputerID'),
            'User'=>$request->input('User'),
            'Designation'=>$request->input('Designation'),
            'Comtype'=>$request->input('ComType'),
            'Monitor'=>$request->input('Monitor'),
            'Keyboard'=>$request->input('Keyboard'),
            'Mouse'=>$request->input('Mouse'),
            'ups'=>$request->input('UPS'),
            'Ipadd'=>$request->input('IPAdd'),
            'Email'=>$request->input('EmailAddress'),
            'Section'=>$request->input('Section'),
            'Department'=>$request->input('Department'),
            'Status'=>$request->input('Status'),
            'Remarks'=>$request->input('Remarks'),

        ];
        Computer::create($data);

        return redirect()->route('computer.user');
}
    public function edit($id)
    {
        $computer = Computer::find($id);
        return view('Frontend.computers.editCom',compact('computer'));
    }
    public function update(Request $request,$id)

    {
        $computer = Computer::find($id);

        $data = [
            'Comid'=>$request->input('ComputerID'),
            'User'=>$request->input('User'),
            'Designation'=>$request->input('Designation'),
            'ComType'=>$request->input('ComType'),
            'Monitor'=>$request->input('Monitor'),
            'Keyboard'=>$request->input('Keyboard'),
            'Mouse'=>$request->input('Mouse'),
            'UPS'=>$request->input('UPS'),
            'IPAdd'=>$request->input('IPAdd'),
            'Email'=>$request->input('EmailAddress'),
            'Section'=>$request->input('Section'),
            'Department'=>$request->input('Department'),
            'Status'=>$request->input('Status'),
            'Remarks'=>$request->input('Remarks'),
        ];
        $computer->update($data);
        return redirect()->route('computer.user');
    }
}
