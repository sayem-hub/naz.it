<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Computer;
use Illuminate\Http\Request;
use PDF;




class PdfController extends Controller
{

        public function compPdf(Request $request)
    {
        $computers = Computer::all();
        return view('Frontend.computers.compInventory', compact('computers'));
    }

        public function generatePDF()
        {
            $computers = Computer::all();
            $pdf = PDF::loadView('Frontend.computers.compInventory',compact('computers'));
            return $pdf->download('Comptuer_Inventory.pdf');
        }

}
