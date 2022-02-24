<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\HREmailIdNotification;
use App\Models\Requisition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Expr\FuncCall;
use App\Mail\RequisitionMail;

class RequisitionController extends Controller
{
    public function index()
    {

        $requisitions = Requisition::orderBy('id', 'desc')->paginate(20);
        $pendingCount = Requisition::where('status', '=', 'Pending')->count();
        $receivedCount = Requisition::where('status', '=', 'Received')->count();
        return view('Frontend.requisition.index', compact('requisitions'))
            ->with('pendingCount', $pendingCount)
            ->with('receivedCount', $receivedCount);



    }

    public function create()
    {

        $month = date('m');
        $day = date('d');
        $year = date('Y');

        $today = $year . '-' . $month . '-' . $day;
        return view('Frontend.requisition.create', compact('today'));
    }
    public function store(Request $request)
    {
        try {
            $request->validate([
                'requisition_no' => 'required',
                'required_for' => 'required',
                'department' => 'required',
                'status' => 'required',
            ]);

            $data = [
                'requisition_no' => $request->input('requisition_no'),
                'item_names' => $request->input('item_names'),
                'required_for' => $request->input('required_for'),
                'designation' => $request->input('designation'),
                'department' => $request->input('department'),
                'requisition_date' => $request->input('requisition_date'),
                'challan' => 'create.jpg',
                'status' => $request->input('status'),
                'notes' => $request->input('notes'),
            ];

            Requisition::create($data);

            Mail::to(['wajed@nz-bd.com', 'hasan.scm@nz-bd.com'])->cc(['jahangir.scm@nz-bd.com', 'ahsanul@nz-bd.com' ,'sayed.it@nz-bd.com', 'anait@nz-bd.com', 'kalam@nz-bd.com', 'generalstore@nz-bd.com','sayem.it@nz-bd.com'])->send(new RequisitionMail($data));
            return redirect()->route('requisition.index')->with('message', "Updated and Email has sent Successfully!");

        } catch (\Exception $exception) {
            return redirect()->back()->withErrors($exception->getMessage());
        }
    }

    public function edit($id)
    {
        $requisitions = Requisition::find($id);
        return view('Frontend.requisition.edit', compact('requisitions'));
    }

    public function update(Request $request, $id)
    {

        try {
            $request->validate([
                'requisition_no' => 'required',
                'required_for' => 'required',
                'department' => 'required',
                'status' => 'required',
            ]);

            $requisitions = Requisition::find($id);

            // if ($request->hasFile('challan')){
            // $challan = $request->file('challan');
            // $newName = 'challan' . date('d-m-Y-H-i-s', time()) . '.' . $challan->getClientOriginalExtension();
            //     $request->$challan->move('upload/requisition/challans', $newName);
            //     $challan->update(['requisitions' => $newName]);

             $challan = $request->file('challan');
          if ($challan) {
                 if (file_exists('upload/requisition/challans/' . $requisitions->challan)) {
                     unlink('upload/requisition/challans/' . $requisitions->challan);
                }
               $newName = 'challan' . date('d-m-Y-H-i-s', time()) . '.' . $challan->getClientOriginalExtension();
                $request->challan->move('upload/requisition/challans', $newName);
                $requisitions->update(['challan' => $newName]);
             }

                                        //     if($request->hasfile('challan')) {
                                        //     foreach($request->file('challan') as $file)
                                        //     {
                                        //         $name = $file->getClientOriginalName();
                                        //         // $newName = 'challan' . date('d-m-Y-H-i-s', time()).'.'.$name;
                                        //         $file->move(public_path().'/upload/requisition/challans', $name);
                                        //         $imgData[] = $name;
                                        //     }

                                        //     $fileModal = new Requisition();
                                        //     // $fileModal->name = json_encode($imgData);
                                        //     $fileModal->challan = json_encode($imgData);

                                        //     // $requisitions->update(['challan' => $fileModal]);
                                        //     $fileModal->update();
                                        // }




            $data = [
                'requisition_no' => $request->input('requisition_no'),
                'item_names' => $request->input('item_names'),
                'required_for' => $request->input('required_for'),
                'designation' => $request->input('designation'),
                'department' => $request->input('department'),
                'requisition_date' => $request->input('requisition_date'),
                'received_date' => $request->input('received_date'),
                'Grn' => $request->input('GRN'),

                'pur_type' => $request->input('pur_type'),
                'status' => $request->input('status'),
                'notes' => $request->input('notes'),
            ];

            $requisitions->update($data);
            return redirect()->back()->with('status', 'Updated successfully!');
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors($exception->getMessage());
        }
    }
}
