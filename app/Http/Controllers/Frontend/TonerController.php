<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Tonerexpense;
use App\Models\Tonerstock;
use Illuminate\Http\Request;

class TonerController extends Controller
{
    public function tonerExpenseIndex()

    {
        $expenses = Tonerexpense::orderBy('id', 'desc')->paginate(100);

        $toner85 = Tonerstock::where('toner_model', '=', '85A')->sum('qty');
        $model85 = Tonerexpense::where('toner_model', '=', '85A')->count();
        $stocks85 = $toner85 - $model85;

        $toner26 = Tonerstock::where('toner_model', '=', '26A')->sum('qty');
        $model26 = Tonerexpense::where('toner_model', '=', '26A')->count();
        $stocks26 = $toner26 - $model26;

        $toner93 = Tonerstock::where('toner_model', '=', '93A')->sum('qty');
        $model93 = Tonerexpense::where('toner_model', '=', '93A')->count();
        $stocks93 = $toner93 - $model93;


        // $stocks = Tonerstock::orderBy('id')->paginate(100);
        return view('Frontend.toner.index', compact('expenses'))->with('stocks85', $stocks85)
        -> with('stocks26', $stocks26)
        -> with('stocks93', $stocks93);

    }

}
