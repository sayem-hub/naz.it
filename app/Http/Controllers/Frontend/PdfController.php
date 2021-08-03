<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Computer;
use App\Models\Faceid;
use App\Models\Pabx;
use App\Models\Printer;
use App\Models\Router;
use App\Models\Scanner;
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

        public function printPdf(Request $request)
        {
            $printers = Printer::all();
            return view('Frontend.printers.printerpdf', compact('printers'));
        }

        public function generatePrinterPdf(Request $request)
        {
            $printers = Printer::all();
            $pdf = PDF::loadView('Frontend.printers.printerpdf',compact(('printers')));
            return $pdf->download('Printer-list.pdf');
        }

    public function faceidPdf(Request $request)
    {
        $faceids = Faceid::all();
        return view('Frontend.faceID.faceidPdf', compact('faceids'));
    }

    public function generateFaceidPdf(Request $request)
    {
        $faceids = Faceid::all();
        $pdf = PDF::loadView('Frontend.faceID.faceidPdf', compact(('faceids')));
        return $pdf->download('Faceid-list.pdf');
    }


    public function pabxPdf(Request $request)
    {
        $pabxes = Pabx::all();
        return view('Frontend.pabx.pabxPdf', compact('pabxes'));
    }

    public function generatePabxPdf(Request $request)
    {
        $pabxes = Pabx::all();
        $pdf = PDF::loadView('Frontend.pabx.pabxPdf', compact(('pabxes')));
        return $pdf->download('Pabx-list.pdf');
    }

    public function routerPdf(Request $request)
    {
        $routers = Router::all();
        return view('Frontend.routers.routerPdf', compact('routers'));
    }

    public function generateRouterPdf(Request $request)
    {
        $routers = Router::all();
        $pdf = PDF::loadView('Frontend.routers.routerPdf', compact(('routers')));
        return $pdf->download('Router-list.pdf');
    }

    public function scannerPdf(Request $request)
    {
        $scanners = Scanner::all();
        return view('Frontend.scanners.scannerPdf', compact('scanners'));
    }

    public function generateScannerPdf(Request $request)
    {
        $scanners = Scanner::all();
        $pdf = PDF::loadView('Frontend.scanners.scannerPdf', compact(('scanners')));
        return $pdf->download('Scanner-list.pdf');
    }
}
