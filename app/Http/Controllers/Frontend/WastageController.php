<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Wastage;
use Illuminate\Http\Request;

class WastageController extends Controller
{
    public function index()
    {

        $motherboard = Wastage::where('item_name', '=', 'Motherboard')->count();
        $hdd = Wastage::where('item_name', '=', 'HDD')->count();
        $monitor = Wastage::where('item_name', '=', 'Monitor')->count();
        $casing = Wastage::where('item_name', '=', 'Casing')->sum('quantity');
        $toner = Wastage::where('item_name', '=', 'Toner')->sum('quantity');

        $total = $motherboard+$hdd+$monitor+$casing+$toner;

        $wastages = Wastage::orderBy('id' ,'desc')->paginate(2500);
        return view('Frontend.wastage.index', compact('wastages'))
        ->with('motherboard', $motherboard)
        ->with('hdd', $hdd)
        ->with('monitor', $monitor)
        ->with('casing', $casing)
        ->with('toner', $toner)
        ->with('total', $total);
    }

    public function create()
    {
        return view('Frontend.wastage.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'item_name' => 'required',
                'model' => 'required',
                'serial_no' => 'required',
                'problem' => 'required',
                'user_name' => 'required',
                'status' => 'required',
            ]);

            $data = [
                'item_name' => $request->input('item_name'),
                'model' => $request->input('model'),
                'serial_no' => $request->input('serial_no'),
                'problem' => $request->input('problem'),
                'user' => $request->input('user_name'),
                'quantity' => $request->input('quantity'),
                'notes' => $request->input('note'),
                'status' => $request->input('status'),
            ];
            Wastage::create($data);

            return redirect()->route('wastage.index');
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors($exception->getMessage());
        }
    }

    public function edit($id)
    {
        $wastages = Wastage::find($id);
        return view('Frontend.wastage.edit', compact('wastages'));
    }

    public function update(Request $request, $id)
    {

        try {
            $request->validate([
                'item_name' => 'required',
                'model' => 'required',
                'serial_no' => 'required',
                'problem' => 'required',
                'user_name' => 'required',
                'status' => 'required',
            ]);

            $wastages = Wastage::find($id);

            $data = [
                'item_name' => $request->input('item_name'),
                'model' => $request->input('model'),
                'serial_no' => $request->input('serial_no'),
                'problem' => $request->input('problem'),
                'user' => $request->input('user_name'),
                 'quantity' => $request->input('quantity'),
                'notes' => $request->input('note'),
                'status' => $request->input('status'),
            ];
            $wastages->update($data);
            return redirect()->route('wastage.index');
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors($exception->getMessage());
        }
    }
}
