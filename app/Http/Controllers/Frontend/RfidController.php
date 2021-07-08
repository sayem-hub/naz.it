<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Rfid;
use Illuminate\Http\Request;

class RfidController extends Controller
{
    public function index()
    {
          $rfids = Rfid::orderBy('id')->paginate(200);
        return view('Frontend.rfid.index', compact('rfids'));
        }
        public function create()
        {

        $month = date('m');
        $day = date('d');
        $year = date('Y');

        $today = $year . '-' . $month . '-' . $day;

        return view('Frontend.rfid.create', compact('today'));
        }

        public function store(Request $request)
    {
        try {
            $request->validate([
                'naz_id' => 'required',
                'name' => 'required',
                'rf_id' => 'required',
            ]);

            $data = [
                'naz_id' => $request->input('naz_id'),
                'name' => $request->input('name'),
                'designation' => $request->input('designation'),
                'section' => $request->input('section'),
                'rf_id' => $request->input('rf_id'),
                'issue_date' => $request->input('issue_date'),
                'status' => $request->input('status'),
                'remarks' => $request->input('remarks'),
            ];

            Rfid::create($data);
            return redirect()->route('rfid.index');
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors($exception->getMessage());
        }
    }

    public function edit($id)
    {

        return view('Frontend.rfid.edit', compact('rfids'));
    }

    public function update(Request $request, $id)
    {

        try {
            $request->validate([
                'naz_id' => 'required',
                'name' => 'required',
                'rf_id' => 'required',
            ]);

            $rfids = Rfid::find($id);

            $data = [
                'naz_id' => $request->input('naz_id'),
                'name' => $request->input('name'),
                'designation' => $request->input('designation'),
                'section' => $request->input('section'),
                'rf_id' => $request->input('rf_id'),
                'issue_date' => $request->input('issue_date'),
                'status' => $request->input('status'),
                'remarks' => $request->input('remarks'),
            ];
            $rfids->update($data);
            return redirect()->route('rfid.index');
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors($exception->getMessage());
        }
    }
}


