<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rfid;
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
            return view('Frontend.rfid.search', ['rfids' => $rfids]);
        }

        public function compSearch(Request $request)
        {

           $request->validate([
            'query' => 'required|min:3'
        ]);

        $search_text = $request->input('query');
        $computers = DB::table('computers')
        ->where('User', 'LIKE', '%' . $search_text . '%')->orWhere('Department', 'LIKE', '%' . $search_text . '%')
        //   ->orWhere('SurfaceArea','<', 10)
        //   ->orWhere('LocalName','like','%'.$search_text.'%')
        ->paginate(200);
        return view('Frontend.computers.search', ['computers' => $computers]);

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
        return view('Frontend.received.search', ['received_items' => $received_items]);
    }
    }

