<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KpiController extends Controller
{
    public function kpi(){
        return view('Frontend.kpi');
    }
}
