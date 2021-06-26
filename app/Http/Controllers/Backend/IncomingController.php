<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Incoming;

class IncomingController extends Controller
{
    public function incoming(){
        
        $initems = Incoming::orderBy('id','desc')->paginate(10);
        return view('Backend.incoming.incoming',compact('initems'));
    }
    
    public function create()

    {
        return view('Backend.incoming.create');
    }
    
     public function store(Request $request)
    {
         $challan = $request->file('challan');
         $newName = 'challan'.date('d-m-Y-H-i-s',time()).'.'.$challan->getClientOriginalExtension();
         $request->challan->move('upload/challans',$newName);
        $data =  [
            'item_name'=>$request->input('itemname'),
            'quantity'=>$request->input('quantity'),
            'brand_name'=>$request->input('brand'),
            'model'=>$request->input('model'),
            'serial_no'=>$request->input('serial'),
            'supplier'=>$request->input('supplier'),
            'pur_date'=>$request->input('purdate'),
            'warranty'=>$request->input('warranty'),
            'challan_no'=>$request->input('challanno'),
            'challan_img'=> $newName,
            'req_no'=>$request->input('reqisitionno'),
            'pur_type'=>$request->input('purtype'),
            'user_name'=>$request->input('user'),
            'department'=>$request->input('department'),
            'notes'=>$request->input('notes'),
                        
        ];
        
         Incoming::create($data);
         return redirect()->route('admin.incoming');
    }
    
    public function edit($id)

    {
        $initems = Incoming::find($id);
        return view('backend.incoming.edit',compact('initems'));
    }
    
     public function update(Request $request,$id)

    {
        $initems = Incoming::find($id);
            
        $data =  [
            'item_name'=>$request->input('itemname'),
            'quantity'=>$request->input('quantity'),
            'brand_name'=>$request->input('brand'),
            'model'=>$request->input('model'),
            'serial_no'=>$request->input('serial'),
            'supplier'=>$request->input('supplier'),
            'pur_date'=>$request->input('purdate'),
            'warranty'=>$request->input('warranty'),
            'challan_no'=>$request->input('challanno'),
            'challan_img'=>$request->input('challan'),
            'req_no'=>$request->input('reqisitionno'),
            'pur_type'=>$request->input('purtype'),
            'user_name'=>$request->input('user'),
            'department'=>$request->input('department'),
            'notes'=>$request->input('notes'),
        ];
        
        $initems->update($data);
         return redirect()->route('admin.incoming');
    }
    
     public function delete($id)

    {
        $initems = Incoming::find($id);
        $initems->delete();

        return redirect()->back();
    }
     
}