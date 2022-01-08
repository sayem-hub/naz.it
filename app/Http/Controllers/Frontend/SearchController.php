<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{

       public function rfidSearch(Request $request)
        {
            $request->validate([
                'query' => 'required|min:3'
            ]);

            $search_text = $request->input('query');
            $rfids = DB::table('rfids')
            ->where('naz_id', 'LIKE', '%' . $search_text . '%') ->orWhere('rf_id', 'LIKE', '%' . $search_text . '%')
                //   ->orWhere('SurfaceArea','<', 10)
                //   ->orWhere('LocalName','like','%'.$search_text.'%')
                ->paginate(4);
            return view('Frontend.rfid.search', ['rfids' => $rfids])
                ->with('search_text', $search_text);
        }

        public function compSearch(Request $request)
        {

           $request->validate([
            'query' => 'required|min:3'
        ]);

        $search_text = $request->input('query');
        $computers = DB::table('computers')
        ->where('User', 'LIKE', '%' . $search_text . '%')->orWhere('Department', 'LIKE', '%' . $search_text . '%')->orWhere('Comid', 'LIKE', '%' . $search_text . '%')
        //   ->orWhere('SurfaceArea','<', 10)
        //   ->orWhere('LocalName','like','%'.$search_text.'%')
        ->paginate(200);
        return view('Frontend.computers.search', ['computers' => $computers])
            ->with('search_text', $search_text);

        }

    public function receivedSearch(Request $request)
    {

        $request->validate([
            'query' => 'required|min:3'
        ]);

        $search_text = $request->input('query');
        $received_items = DB::table('incomings')
        ->where('serial_no', 'LIKE', '%' . $search_text . '%')->orWhere('user_name', 'LIKE', '%' . $search_text . '%')
            //   ->orWhere('SurfaceArea','<', 10)
            //   ->orWhere('LocalName','like','%'.$search_text.'%')
            ->paginate(200);
        return view('Frontend.received.search', ['received_items' => $received_items])
            ->with('search_text', $search_text);
    }
    public function tabSearch(Request $request)
    {

        $request->validate([
            'query' => 'required|min:3'
        ]);

        $search_text = $request->input('query');
        $tablets = DB::table('tablets')
        ->where('user', 'LIKE', '%' . $search_text . '%')->orWhere('serial', 'LIKE', '%' . $search_text . '%')
            //   ->orWhere('SurfaceArea','<', 10)
            //   ->orWhere('LocalName','like','%'.$search_text.'%')
            ->paginate(200);
        return view('Frontend.kpiproject.tablet.search', ['tablets' => $tablets])
            ->with('search_text', $search_text);
    }

    public function requisitionSearch(Request $request)
{
    $request->validate(([
        'query'=>'required|min:2'
    ]));

    $search_text = $request->input('query');
        $requisitions = DB::table('requisitions')
        ->where('required_for', 'LIKE', '%' . $search_text . '%')->orWhere('status', 'LIKE', '%' . $search_text . '%')
        ->orWhere('requisition_no', 'LIKE', '%' . $search_text . '%')
        ->orWhere('item_names', 'LIKE', '%' . $search_text . '%')
            //   ->orWhere('SurfaceArea','<', 10)
            //   ->orWhere('LocalName','like','%'.$search_text.'%')
            ->paginate(1000);
        return view('Frontend.requisition.search', ['requisitions' => $requisitions])
            ->with('search_text', $search_text);
}

    public function sentSearch(Request $request)
    {
        $request->validate(([
            'query' => 'required|min:3'
        ]));

        $search_text = $request->input('query');
        $sentitems = DB::table('outitems')
        ->where('Iname', 'LIKE', '%' . $search_text . '%')->orWhere('Serial', 'LIKE', '%' . $search_text . '%')->orWhere('User', 'LIKE', '%' . $search_text . '%')
        //   ->orWhere('SurfaceArea','<', 10)
        //   ->orWhere('LocalName','like','%'.$search_text.'%')
        ->paginate(1000);
        return view('Frontend.sent.search', ['sentitems' => $sentitems])
            ->with('search_text', $search_text);
    }

        public function printerSearch(Request $request)

        {
        $request->validate(([
            'query' => 'required|min:3'
        ]));

        $search_text = $request->input('query');
        $printers = DB::table('printers')
        ->where('user', 'LIKE', '%' . $search_text . '%')->orWhere('section', 'LIKE', '%' . $search_text . '%')->orWhere('status', 'LIKE', '%' . $search_text . '%')
            //   ->orWhere('SurfaceArea','<', 10)
            //   ->orWhere('LocalName','like','%'.$search_text.'%')
            ->paginate(1000);
        return view('Frontend.printers.search', ['printers' => $printers])
            ->with('search_text', $search_text);
        }


    public function emailIdSearch(Request $request)

    {
        $request->validate(([
            'query' => 'required|min:3'
        ]));

        $search_text = $request->input('query');
        $emailIds = DB::table('e_requests')
            ->where('full_name', 'LIKE', '%' . $search_text . '%')->orWhere('nick_name', 'LIKE', '%' . $search_text . '%')
            //   ->orWhere('SurfaceArea','<', 10)
            //   ->orWhere('LocalName','like','%'.$search_text.'%')
            ->paginate(1000);
        return view('Frontend.emailForm.search_all_mail_Ids', ['emailIds' => $emailIds])
            ->with('search_text', $search_text);
    }
}

