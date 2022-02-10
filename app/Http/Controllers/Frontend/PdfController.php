<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Computer;
use App\Models\ComputerUser;
use App\Models\Faceid;
use App\Models\Netswitches;
use App\Models\Pabx;
use App\Models\Printer;
use App\Models\Requisition;
use App\Models\Router;
use App\Models\Scanner;
use App\Models\Tablet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;




class PdfController extends Controller
{

        public function compPdf(Request $request)
    {
        $computers = ComputerUser::all();

        return view('Frontend.computers.compInventory', compact('computers'));
    }

        public function generatePDF()
        {
            $computers = ComputerUser::all();
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

    public function tabPdf(Request $request)
    {
        $tablets = Tablet::all();
        return view('Frontend.kpiproject.tablet.tabletPdf', compact('tablets'));
    }

    public function generateTabPdf(Request $request)
    {
        $tablets = Tablet::all();
        $pdf = PDF::loadView('Frontend.kpiproject.tablet.tabletPdf', compact(('tablets')));
        return $pdf->download('TAB_List.pdf');
    }

    public function generatePReqPdf(Request $request)
    {
        $requisitions = DB::table('requisitions')->where('status', '=', 'Pending')->get();
        $pdf = PDF::loadView('Frontend.requisition.PdfPRequisition', compact(('requisitions')));
        return $pdf->download('Pending_list.pdf');
    }

    public function generateRReqPdf(Request $request)

    {
        $requisitions = DB::table('requisitions')->where('status', '=', 'Received')->get();
        $pdf = PDF::loadView('Frontend.requisition.PdfRRequisition', compact(('requisitions')));
        return $pdf->download('Received_list.pdf');
    }

    public function generateSentPending(Request $request)
    {
        $sentitemspending = DB::table('outitems')->where('Status', '=', 'Pending')->get();
        $pdf = PDF::loadView('Frontend.sent.sentPendingPDF', compact(('sentitemspending')))->setPaper('a4', 'landscape');
        return $pdf->download('Pending_sent_list.pdf');
    }

    public function generateWarrantyPending(Request $request)

    {
        $sentitemswarranty = DB::table('outitems')->where([['Sentfor', '=', 'Warranty'], ['Status', '=', 'Pending']])->get();
        $pdf = PDF::loadView('Frontend.sent.sentWarrantyPDF', compact(('sentitemswarranty')))->setPaper('a4', 'landscape');
        return $pdf->download('Warranty_Pending_list.pdf');
    }

    public function switchPdf(Request $request)
    {
        $switches = Netswitches::all();
        return view('Frontend.switch.pdfSwitch', compact('switches'));
    }

    public function generateSwitchPdf(Request $request)
    {
        $switches = Netswitches::all();
        $pdf = PDF::loadView('Frontend.switch.pdfSwitch', compact(('switches')));
        return $pdf->download('Switch_List.pdf');
    }

    public function generateSwitchSummary(Request $request)
    {
        $switches = Netswitches::all();

        $cisco26 = Netswitches::where('brand', '=', 'Cisco')-> where('port_no', '=' , '26 Port')->count();
        $cisco8 = Netswitches::where('brand', '=', 'Cisco')-> where('port_no', '=' , '8 Port')->count();

        $netgear24 = Netswitches::where('brand', '=', 'Netgear')->where('port_no', '=', '24 Port')->count();
        $netgear16 = Netswitches::where('brand', '=', 'Netgear')->where('port_no', '=', '16 Port')->count();
        $netgear8 = Netswitches::where('brand', '=', 'Netgear')->where('port_no', '=' ,'8 Port')->count();

        $tplink24 = Netswitches::where('brand', '=', 'TP-Link')->where('port_no', '=', '24 Port')->count();
        $tplink16 = Netswitches::where('brand', '=', 'TP-Link')->where('port_no', '=', '16 Port')->count();
        $tplink8 = Netswitches::where('brand', '=', 'TP-Link')->where('port_no', '=' ,'8 Port')->count();

        $belkin24 = Netswitches::where('brand', '=', 'Belkin')->where('port_no', '=', '24 Port')->count();

        $dlink8 = Netswitches::where('brand', '=', 'D-Link')->where('port_no', '=', '8 Port')->count();
        $dlink16 = Netswitches::where('brand', '=', 'D-Link')->where('port_no', '=', '16 Port')->count();

        $tenda16 = Netswitches::where('brand', '=', 'Tenda')->where('port_no', '=', '16 Port')->count();
        $tenda8 = Netswitches::where('brand', '=', 'Tenda')->where('port_no', '=', '8 Port')->count();


        $pdf = PDF::loadView('Frontend.switch.PdfSummarySwitch', compact('switches', 'cisco26', 'cisco8', 'netgear24', 'netgear16', 'netgear8', 'tplink24', 'tplink16', 'tplink8', 'belkin24', 'dlink8', 'dlink16', 'tenda16', 'tenda8'));


        return $pdf->download('Switch_Summary.pdf');
    }
}
