
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF View</title>

    <style>

        @page {
            margin: 25px 25px;
        }
        header {
            position: fixed;
            top: -10px;
            left: 0px;
            right: 0px;
            height: 10px;
            font-size: 8px;
            /** Extra personal styles **/

            color: black;
            text-align: left;
            line-height: 5px;
        }
        footer {
            position: fixed;
            bottom: -7px;
            left: 0px;
            right: 0px;
            height: 10px;
            font-size: 8px;
            /** Extra personal styles **/

            color: black;
            text-align: center;
            line-height: 10px;
        }

        hr {
            display: block;
            margin-left: auto;
            margin-right: auto;
            border-style: inset;
            border-width: 0.5px;
        }

        .styled-table {
            border-collapse: collapse;
            margin: 15px 0;
            font-size: 0.9em;
            font-family: sans-serif;
            min-width: 400px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            margin: auto;
        }

        .styled-table thead tr {
            background-color: #009879;
            color: #ffffff;
            text-align: left;
        }

        .styled-table th,
        .styled-table td {
            padding: 12px 15px;
        }

        .styled-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }

        .styled-table tbody tr.active-row {
            font-weight: bold;
            color: #009879;
        }

        h2, h3, h4, h5{
            text-align: center;
            line-height: 40%;
        }


    </style>

</head>
<body>


<header>
    NAZ-IMS (NAZ IT Management System)
</header>
<footer>
    <hr>
    Copyright © 2021-<?php echo date("Y");?> NAZ-IMS by Abu Sayem; Software generated report. Print date & time: <?php echo date("Y-m-d, h:i:sa");?>
</footer>

<h3>NAZ Bangladesh Ltd.</h3>
<h4>ICT Department</h4>
<h4>Network Switch Summary</h4>




<table class="styled-table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">SL</th>
        <th scope="col">Brand/Port</th>
        <th scope="col">26-Port</th>
        <th scope="col">24-Port</th>
        <th scope="col">16-Port</th>
        <th scope="col">8-Port</th>
        <th scope="col">5-Port</th>
        <th scope="col">Total</th>
    </tr>
    </thead>
    <tbody>


        <tr>
            <td> 1 </td>
            <td> Cisco</td>
            <td  style="text-align:center;">{{$cisco26}}</td>
            <td  style="text-align:center;">-</td>
            <td  style="text-align:center;">-</td>
            <td  style="text-align:center;">{{$cisco8}}</td>
            <td  style="text-align:center;">-</td>
            <td  style="text-align:center;">{{$switches->where('brand','=','Cisco')->count()}}</td>
        </tr>

        <tr>
            <td> 2 </td>
            <td> Netgear</td>
            <td  style="text-align:center;">-</td>
            <td  style="text-align:center;">{{$netgear24}}</td>
            <td  style="text-align:center;">{{$netgear16}}</td>
            <td  style="text-align:center;">-</td>
            <td  style="text-align:center;">-</td>
            <td  style="text-align:center;">{{$switches->where('brand','=','Netgear')->count()}}</td>
        </tr>

        <tr>
            <td> 3 </td>
            <td> TP-Link</td>
            <td  style="text-align:center;">-</td>
            <td  style="text-align:center;">{{$tplink24}}</td>
            <td  style="text-align:center;">{{$tplink16}}</td>
            <td  style="text-align:center;">{{$tplink8}}</td>
            <td  style="text-align:center;">-</td>
            <td  style="text-align:center;">{{$switches->where('brand','=','TP-Link')->count()}}</td>
        </tr>

        <tr>
            <td> 4 </td>
            <td> Belkin</td>
            <td  style="text-align:center;">-</td>
            <td  style="text-align:center;">{{$belkin24}}</td>
            <td  style="text-align:center;">-</td>
            <td  style="text-align:center;">-</td>
            <td  style="text-align:center;">-</td>
            <td  style="text-align:center;">{{$switches->where('brand','=','Belkin')->count()}}</td>
        </tr>

        <tr>
            <td> 5 </td>
            <td> D-Link</td>
            <td  style="text-align:center;">-</td>
            <td  style="text-align:center;">-</td>
            <td  style="text-align:center;">{{$dlink16}}</td>
            <td  style="text-align:center;">{{$dlink8}}</td>
            <td  style="text-align:center;">-</td>
            <td  style="text-align:center;">{{$switches->where('brand','=','D-Link')->count()}}</td>
        </tr>

        <tr>
            <td> 6 </td>
            <td> Tenda</td>
            <td  style="text-align:center;">-</td>
            <td  style="text-align:center;">-</td>
            <td  style="text-align:center;">{{$tenda16}}</td>
            <td  style="text-align:center;">{{$tenda8}}</td>
            <td  style="text-align:center;">-</td>
            <td  style="text-align:center;">{{$switches->where('brand','=','Tenda')->count()}}</td>
        </tr>

        <tr style="font-weight:bold">
            <td colspan="2" style="text-align:center;"> Grand Total </td>
            <td  style="text-align:center;">{{$switches->where('port_no','=','26 Port')->count()}}</td>
            <td  style="text-align:center;">{{$switches->where('port_no','=','24 Port')->count()}}</td>
            <td  style="text-align:center;">{{$switches->where('port_no','=','16 Port')->count()}}</td>
            <td  style="text-align:center;">{{$switches->where('port_no','=','8 Port')->count()}}</td>
            <td  style="text-align:center;">{{$switches->where('port_no','=','5 Port')->count()}}</td>
            <td  style="text-align:center;">{{$switches->count()}}</td>
        </tr>


    </tbody>
</table>

</body>
</html>






