<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Tonerexpense;
use App\Models\Tonerstock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TonerController extends Controller
{
    public function tonerIndex()

    {
        $expenses = Tonerexpense::orderBy('id', 'desc')->paginate(15);
        $newtoners = Tonerstock::orderBy('id', 'desc')->paginate(15);
        $toner85 = Tonerstock::where('toner_model', '=', '85A')->sum('qty');
        $model85 = Tonerexpense::where('toner_model', '=', '85A')->count();
        $stocks85 = $toner85 - $model85;

        $toner26 = Tonerstock::where('toner_model', '=', '26A')->sum('qty');
        $model26 = Tonerexpense::where('toner_model', '=', '26A')->count();
        $stocks26 = $toner26 - $model26;

        $toner93 = Tonerstock::where('toner_model', '=', '93A')->sum('qty');
        $model93 = Tonerexpense::where('toner_model', '=', '93A')->count();
        $stocks93 = $toner93 - $model93;

        $toner55 = Tonerstock::where('toner_model', '=', '55A')->sum('qty');
        $model55 = Tonerexpense::where('toner_model', '=', '55A')->count();
        $stocks55 = $toner55 - $model55;

        $toner0580 = Tonerstock::where('toner_model', '=', '80A/05A')->sum('qty');
        $model0580 = Tonerexpense::where('toner_model', '=', '80A/05A')->count();
        $stocks0580 = $toner0580 - $model0580;

        $currentMonth = date('F');

        $allTonerCount = Tonerexpense::select(
            DB::raw("(COUNT(*)) as count"),
            DB::raw("MONTHNAME(created_at) as month_name")
        )
            ->whereYear('created_at', date('Y'))
            ->groupBy('month_name')
            ->get();


        // $current_data85 = Tonerexpense::Where('toner_model', '=', '85A')
        //     ->SelectRaw('YEAR(date), MONTH(date)')
        //     ->count();



        // $stocks = Tonerstock::orderBy('id')->paginate(100);
        return view('Frontend.toner.index', compact('expenses', 'newtoners', 'currentMonth'))
        ->with('stocks85', $stocks85)
        ->with('stocks26', $stocks26)
        ->with('stocks93', $stocks93)
        ->with('allTonerCount', $allTonerCount)
        ->with('stocks55', $stocks55)
        ->with('stocks0580', $stocks0580);

    }

        public function tonerReceive(){
        return view('Frontend.toner.stockCreate');

        }

        public function tonerReceiveStore(Request $request){
            $data = [
            'date' => $request->input('date'),
            'toner_model' => $request->input('toner_model'),
            'qty' => $request->input('quantity'),
            'gp_no' => $request->input('gp_no'),
            'notes' => $request->input('notes'),
            ];


        Tonerstock::create($data);
        return redirect()->route('toner.status');
        }

        public function tonerExpense(){
            return view('Frontend.toner.expenseCreate');
        }

        public function tonerExpenseStore(Request $request){
        $data = [
            'date' => $request->input('date'),
            'toner_model' => $request->input('toner_model'),
            'section' => $request->input('section'),
            'printer_model' => $request->input('printer_model'),
            'recipient' => $request->input('recipient'),
            'notes' => $request->input('notes'),
        ];

        Tonerexpense::create($data);
        return redirect()->route('toner.status');
        }


}
