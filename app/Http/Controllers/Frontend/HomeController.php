<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Computer;

class HomeController extends Controller
{
    public function index ()
    {
        //$computer = Computer::find($id);
        //$computers= Computer::orderBy('id','desc')->where('id','!=',$id)->take(3)->get();

        return view('Frontend.home');

}

}
