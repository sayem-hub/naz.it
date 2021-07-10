<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\models\Pabx;
use Illuminate\Http\Request;

class PabxController extends Controller
{

    public function index()
    {

        $pabxes = Pabx::orderBy('id')->paginate(100);
        return view('Frontend.pabx.index', compact('pabxes'));
    }

    public function create()
    {
        return view('Frontend.pabx.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'employee_name' => 'required',
                'designation' => 'required',
                'section' => 'required',
                'department' => 'required',
                'pabx_no' => 'required',
                'model' => 'required',
                'status' => 'required',

            ]);

            $data = [
                'employee_name' => $request->input('employee_name'),
                'designation' => $request->input('designation'),
                'section' => $request->input('section'),
                'department' => $request->input('department'),
                'pabx_no' => $request->input('pabx_no'),
                'model' => $request->input('model'),
                'status' => $request->input('status'),
                'remarks' => $request->input('remarks'),

            ];
            Pabx::create($data);

            return redirect()->route('frontend.pabx.index');
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors($exception->getMessage());
        }
    }

    public function edit($id)
    {
        $machines = Pabx::find($id);
        return view('frontend.pabx.edit', compact('machines'));
    }

    public function update(Request $request, $id)
    {

        try {
            $request->validate([
                'employee_name' => 'required',
                'designation' => 'required',
                'section' => 'required',
                'department' => 'required',
                'pabx_no' => 'required',
                'model' => 'required',
                'status' => 'required',

            ]);

            $pabxes = Pabx::find($id);

            $data = [
                'employee_name' => $request->input('employee_name'),
                'designation' => $request->input('designation'),
                'section' => $request->input('section'),
                'department' => $request->input('department'),
                'pabx_no' => $request->input('pabx_no'),
                'model' => $request->input('model'),
                'status' => $request->input('status'),
                'remarks' => $request->input('remarks'),

            ];
            $pabxes->update($data);
            return redirect()->route('frontend.pabx.index');
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors($exception->getMessage());
        }
    }
}
