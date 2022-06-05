<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clipboard;

class ClipboardController extends Controller
{
    public function index(){
        $all_clip = Clipboard::all();
        return view('Frontend.publicFolder.clipboard.index',compact('all_clip'));
    }
}
