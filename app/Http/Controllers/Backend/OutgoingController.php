<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Outitem;

class OutgoingController extends Controller
{
    public function outgoing()
    {
        $outitems = Outitem::orderBy('id','desc')->paginate(50);
        return view('Backend.outgoing.outitems',compact('outitems'));
    }

    public function create()

    {
        return view('Backend.outgoing.create');
    }

    public function store(Request $request)
    {
        $data =  [
            'Iname'=>$request->input('itemname'),
             'Brand'=>$request->input('brand'),
             'Model'=>$request->input('model'),
             'Serial'=>$request->input('serial'),
             'User'=>$request->input('user'),
             'Section'=>$request->input('section'),
             'Warranty'=>$request->input('warranty'),
             'Supplier'=>$request->input('supplier'),
             'Purdate'=>$request->input('purdate'),
             'Outdate'=>$request->input('outdate'),
             'Sentfor'=>$request->input('sentfor'),
             'Problems'=>$request->input('problems'),
             'Gpno'=>$request->input('gpno'),
             'Status'=>$request->input('status'),


        ];

        Outitem::create($data);

        return redirect()->route('admin.outgoing');
    }

    public function edit($id)

    {
        $outitems = Outitem::find($id);
        return view('backend.outgoing.edit',compact('outitems'));
    }

    public function update(Request $request,$id)

    {
        $outitems = Outitem::find($id);

        $data =  [
            'Iname'=>$request->input('itemname'),
             'Brand'=>$request->input('brand'),
             'Model'=>$request->input('model'),
             'Serial'=>$request->input('serial'),
             'User'=>$request->input('user'),
             'Section'=>$request->input('section'),
             'Warranty'=>$request->input('warranty'),
             'Supplier'=>$request->input('supplier'),
             'Purdate'=>$request->input('purdate'),
             'Outdate'=>$request->input('outdate'),
             'Sentfor'=>$request->input('sentfor'),
            'Problems' => $request->input('problems'),
             'Gpno'=>$request->input('gpno'),
             'Status'=>$request->input('status'),
            'Reason' => $request->input('reason'),
        ];

        $outitems->update($data);
         return redirect()->route('admin.outgoing');
    }

    public function delete($id)

    {
        $outitems = Outitem::find($id);
        $outitems->delete();

        return redirect()->back();
    }
}
