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



        $toner = Tonerstock::where('model', '=', '85A')->sum('qty');
        $model = Tonerexpense::where('model', '=', '85A')->count();
        $stocks = $toner - $model;
        // $stocks = Tonerstock::orderBy('id')->paginate(100);
        return view('Frontend.toner.index', compact('expenses'));
        return $stocks;
    }




}
