<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Computer;
use App\Models\Ccamera;
use App\Models\Incoming;

class HomeController extends Controller
{
    public function index ()
    {
        //$computer = Computer::find($id);
        //$computers= Computer::orderBy('id','desc')->where('id','!=',$id)->take(3)->get();

        return view('Frontend.home');

}

    public function computerUser()
    {
        $computers = Computer::orderBy('id','desc')->paginate(300);
        return view('Frontend.computers.computerUser',compact('computers'));
    }

    public function create()
    {
        return view('Frontend.computers.createCom');
    }

    public function store(Request $request)
    {

        $data = [
            'Comid' => $request->input('ComputerID'),
            'User' => $request->input('User'),
            'Designation' => $request->input('Designation'),
            'Comtype' => $request->input('ComType'),
            'Monitor' => $request->input('Monitor'),
            'Keyboard' => $request->input('Keyboard'),
            'Mouse' => $request->input('Mouse'),
            'ups' => $request->input('UPS'),
            'Ipadd' => $request->input('IPAdd'),
            'Email' => $request->input('EmailAddress'),
            'Section' => $request->input('Section'),
            'Department' => $request->input('Department'),
            'Status' => $request->input('Status'),
            'Remarks' => $request->input('Remarks'),


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
            'Comid' => $request->input('ComputerID'),
            'User' => $request->input('User'),
            'Designation' => $request->input('Designation'),
            'ComType' => $request->input('ComType'),
            'Monitor' => $request->input('Monitor'),
            'Keyboard' => $request->input('Keyboard'),
            'Mouse' => $request->input('Mouse'),
            'UPS' => $request->input('UPS'),
            'IPAdd' => $request->input('IPAdd'),
            'Email' => $request->input('EmailAddress'),
            'Section' => $request->input('Section'),
            'Department' => $request->input('Department'),
            'Status' => $request->input('Status'),
            'Remarks' => $request->input('Remarks'),
        ];
        $computer->update($data);
        return redirect()->route('computer.user');
    }

    public function ccamera(){

        $ccameras = Ccamera::orderBy('id')->paginate(300);
        return view('Frontend.cameras.ccameras', compact('ccameras'));
    }

    public function cam_create()
    {
        return view('Frontend.cameras.create');
    }
    public function cam_store(Request $request)
    {
        $data = [
            'camname' => $request->input('camname'),
            'camno' => $request->input('camno'),
            'camlocation' => $request->input('camlocation'),
            'status' => $request->input('status'),
        ];

        Ccamera::create($data);

        return redirect()->route('cc-camera');
    }
    public function cam_edit($id)
    {
        $ccamera = Ccamera::find($id);
        return view('Frontend.cameras.edit', compact('ccamera'));
    }
    public function cam_update(Request $request, $id)
    {
        $ccamera = Ccamera::find($id);
        $data = [
            'camname' => $request->input('camname'),
            'camno' => $request->input('camno'),
            'camlocation' => $request->input('camlocation'),
            'status' => $request->input('status'),
        ];
        $ccamera->update($data);
        return redirect()->route('cc-camera');
    }
        public function received()
        {

        $incoming = Incoming::orderBy('id')->paginate(300);
        return view('Frontend.received.index', compact('incoming'));

        }
        public function goodsCreate()
        {
            return view('Frontend.received.create');
        }

        public function goodsStore(Request $request)
        {
        $challan = $request->file('challan');
        $newName = 'challan' . date('d-m-Y-H-i-s', time()) . '.' . $challan->getClientOriginalExtension();
        $request->challan->move('upload/challans', $newName);
        $data =  [
            'item_name' => $request->input('itemname'),
            'quantity' => $request->input('quantity'),
            'brand_name' => $request->input('brand'),
            'model' => $request->input('model'),
            'serial_no' => $request->input('serial'),
            'supplier' => $request->input('supplier'),
            'pur_date' => $request->input('purdate'),
            'warranty' => $request->input('warranty'),
            'challan_no' => $request->input('challanno'),
            'challan_img' => $newName,
            'req_no' => $request->input('reqisitionno'),
            'pur_type' => $request->input('purtype'),
            'user_name' => $request->input('user'),
            'department' => $request->input('department'),
            'notes' => $request->input('notes'),

        ];

        Incoming::create($data);
        return redirect()->route('received.goods');
        }
}


