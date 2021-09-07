@extends('layouts.frontend')

@section('main')


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Barcode Link</title>
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/kpi_style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/kpi_responsive.css') }}">
</head>

<body>

    <div class="container">
        <div class="topbar">
            <ul>
                <li class="child-nav"><a target="_blank" href="http://192.168.0.108/OTSNZ/LogIn.aspx">OTS</a></li>
                <li class="child-nav"><a target="_blank" href="http://192.168.0.101/ERP">Specfo</a></li>
                <li class="child-nav"><a target="_blank" href="https://chat.whatsapp.com/KQ0QlTEKJZ169fBiVxBfD3">KPI
                        Group</a></li>
                <li class="child-nav"><a target="_blank"
                        href="https://www.dropbox.com/s/w8x12ecl34iom1b/WhatsApp%20Messenger.apk?dl=0" download
                        rel="noopener noreferrer">Whatsapp</a></li>
                <li class="child-nav"><a target="_blank"
                        href="https://www.dropbox.com/s/u023qks0zayalrx/Ridmik%20Keyboard_v7.0.1.apk?dl=0" download
                        rel="noopener noreferrer">Ridmik</a></li>
                {{-- <li class="child-nav"><a href="{{ route('sewing.machine')}}">S.M ID</a></li> --}}
                <li class="child-nav"><a href="{{ route('tablet.index') }}">TAB List</a></li>
                <li class="child-nav"><a href="{{ route('tablet.index') }}">Scanner List</a></li>
                <li class="child-nav"><a href="{{ route('admin.question.index') }}">Question</a></li>
            </ul>
        </div>
        <h2>
            <marquee behavior="scroll" direction="left" scrollamount="7">Welcome to link library of Worker KPI
                Management Project!</marquee>
        </h2>
        <div class="brief">
            <p> Please click the link below to go your desired page.</p>
        </div>

        <div class="all-link">
            <ol>
                <li><a target="_blank" href="http://192.168.0.108/otsnz/machinebarcodepage.aspx">Machine Barcode
                        Page</a></li>
                <li><a target="_blank" href="http://192.168.0.108/otsnz/employeebarcodepage.aspx">Employee Barcode ID
                        Page</a></li>
                <li><a target="_blank" href="http://192.168.0.108/otsnz/SingleProcessBarcodeBundlePage.aspx">Single
                        Process/Operation Barcode Page</a></li>
                <li><a target="_blank" href="http://192.168.0.108/otsnz/BundleMaster.aspx">Bundle Size Entry Page</a>
                </li>
                <li><a target="_blank" href="http://192.168.0.108/otsnz/BarcodeProductionBundleEntry.aspx">Bundle Size
                        Wise ENTRY Page</a></li>
                <li><a target="_blank" href="http://192.168.0.108/otsnz/barcodeproductionentry.aspx">20 Pieces Wise
                        Production ENTRY Page</a></li>
                <li><a target="_blank" href="http://192.168.0.108/otsnz/prodbarcodedatelinehrs.aspx">Hourly Production
                        Report by Barcode</a></li>
                <li><a target="_blank" href="http://192.168.0.108/otsnz/ProdBarcodeDateLine.aspx">Day Wise Production
                        Report by Barcode</a></li>
            </ol>
        </div>


    </div>
</body>

</html>

@endsection
