<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComprequestController extends Controller
{
    public function create(){

        return view('Frontend.comLap-request.create');
    }
}
