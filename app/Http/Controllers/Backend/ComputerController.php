<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Computer;

class ComputerController extends Controller
{
    public function computer()
    {
       $computers = Computer::orderBy('id','desc')->paginate(300);
        return view('Backend.computers.computers',compact('computers'));
    }

    public function create()
{
    return view('backend.computers.create');
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
    ComputerUser::create($data);
    return redirect()->route('admin.computer');
}

public function edit($id)

{
    $computer = ComputerUser::find($id);
    return view('backend.computers.edit',compact('computer'));
}

public function update(Request $request,$id)

{
    $computer = ComputerUser::find($id);

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
    return redirect()->route('admin.computer');
}

    public function delete($id)

    {
        $computer = ComputerUser::find($id);
        $computer->delete();

        return redirect()->back();
    }
}
