<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Printer;
use App\Models\Scanner;
use Illuminate\Http\Request;

class PrinterScannerController extends Controller
{
    public function printerIndex()
{
        $printers = Printer::orderBy('id', 'desc')->paginate(200);
        return view('Frontend.printers.index', compact('printers'));
}

    public function printerCreate()
    {

        return view('Frontend.printers.create');
    }

    public function printerStore(Request $request)
    {
        try {
            $request->validate([
                'printer_id' => 'required',
                'printer_brand' => 'required',
                'printer_model' => 'required',
                'function' => 'required',
                'service_type' => 'required',
                'status' => 'required',
            ]);

            $data = [
                'printer_id' => $request->input('printer_id'),
                'printer_brand' => $request->input('printer_brand'),
                'printer_model' => $request->input('printer_model'),
                'serial_no' => $request->input('serial_no'),
                'function' => $request->input('function'),
                'section' => $request->input('section'),
                'department' => $request->input('department'),
                'user' => $request->input('user'),
                'service_type' => $request->input('service_type'),
                'status' => $request->input('status'),
                'pur_date' => $request->input('pur_date'),
            ];

            Printer::create($data);
            return redirect()->route('printer.index');
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors($exception->getMessage());
        }
    }

    public function printerEdit($id)
    {
        $printers = Printer::find($id);
        return view('Frontend.printers.edit', compact('printers'));
    }

    public function printerUpdate(Request $request, $id)
    {

        try {
            $request->validate([
                'printer_id' => 'required',
                'printer_brand' => 'required',
                'printer_model' => 'required',
                'function' => 'required',
                'service_type' => 'required',
                'status' => 'required',
            ]);

            $printers = Printer::find($id);

            $data = [
                'printer_id' => $request->input('printer_id'),
                'printer_brand' => $request->input('printer_brand'),
                'printer_model' => $request->input('printer_model'),
                'serial_no' => $request->input('serial_no'),
                'function' => $request->input('function'),
                'section' => $request->input('section'),
                'department' => $request->input('department'),
                'user' => $request->input('user'),
                'service_type' => $request->input('service_type'),
                'status' => $request->input('status'),
                'pur_date' => $request->input('pur_date'),
            ];
            $printers->update($data);
            return redirect()->route('printer.index');
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors($exception->getMessage());
        }
    }




// Scanner controller

    public function scannerIndex()
    {
        $scanners = scanner::orderBy('id')->paginate(15);
        return view('Frontend.scanners.index', compact('scanners'));
}

    public function scannerCreate()
    {

        return view('Frontend.scanners.create');
    }

    public function scannerStore(Request $request)
    {
        try {
            $request->validate([
                'scanner_id' => 'required',
                'scanner_brand' => 'required',
                'scanner_model' => 'required',
                'section' => 'required',
                'department' => 'required',
                'status' => 'required',
            ]);

            $data = [
                'scanner_id' => $request->input('scanner_id'),
                'scanner_brand' => $request->input('scanner_brand'),
                'scanner_model' => $request->input('scanner_model'),
                'section' => $request->input('section'),
                'department' => $request->input('department'),
                'status' => $request->input('status'),
                'notes' => $request->input('notes'),
            ];

            Scanner::create($data);
            return redirect()->route('scanner.index');
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors($exception->getMessage());
        }
    }

    public function scannerEdit($id)
    {
        $scanners = Scanner::find($id);
        return view('Frontend.scanners.edit', compact('scanners'));
    }

    public function scannerUpdate(Request $request, $id)
    {

        try {
            $request->validate([
                'scanner_id' => 'required',
                'scanner_brand' => 'required',
                'scanner_model' => 'required',
                'section' => 'required',
                'department' => 'required',
                'status' => 'required',
            ]);

            $scanners = Scanner::find($id);

            $data = [
                'scanner_id' => $request->input('scanner_id'),
                'scanner_brand' => $request->input('scanner_brand'),
                'scanner_model' => $request->input('scanner_model'),
                'section' => $request->input('section'),
                'department' => $request->input('department'),
                'status' => $request->input('status'),
                'notes' => $request->input('notes'),
            ];

            $scanners->update($data);
            return redirect()->route('scanner.index');
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors($exception->getMessage());
        }
    }
}
