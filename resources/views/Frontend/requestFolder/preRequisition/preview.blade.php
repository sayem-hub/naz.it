
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Preview</title>

    <style>

        .custom-container{
            width: 80%;
            margin: 5px auto;
        }

        @page {
            margin: 30px 25px;
        }
        header {
            position: fixed;
            top: 10px;
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
            bottom: 15px;
            left: 0;
            right: 0;
            height: 20px;
            font-size: 8px;
            /** Extra personal styles **/

            color: black;
            text-align: center;
            line-height: 10px;
        }
        table, td, th {
            border: .1px solid #000000;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }
        .styled-table {

            font-size: 0.8em;
            font-family: sans-serif;
            margin: auto;
        }

        .styled-table thead tr {
            background-color: #000000;
            color: #ffffff;
            text-align: center;
            height: 15px;
        }

        .styled-table th,
        .styled-table td {
            padding: 2px 15px  ;
        }


        .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .styled-table tbody tr.active-row {
            font-weight: bold;
            color: #009879;
        }

        h2, h3, h4, h5{
            font-family: sans-serif;
            text-align: center;
            line-height: 40%;
        }

        hr {
            display: block;
            margin-left: auto;
            margin-right: auto;
            border-style: inset;
            border-width: 0.5px;
        }

    </style>

</head>
<body>


<header>
    NIMS (NAZ IT Management System)
</header>
<footer>
    <hr>
    Software (NIMS) generated report. Print date & time: <?php echo date("Y-m-d, h:i:sa");?>. Designed & Developed by Abu Sayem (IT)
</footer>

<div class="custom-container">

<h3>NAZ Bangladesh Ltd.</h3>
<h4>ICT Department</h4>
<h4> <a href="{{route('equipment.pdf.generate', $all_equipment->id)}}"> Pre-requisition Form</a></h4>
<br>

    <p><strong>Request No.</strong>&emsp;{{$all_equipment->manual_num}}
        &#160;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Date: {{\Carbon\Carbon::now()->format('d/m/Y')}}
       </p>




<table class="styled-table" >
    <thead class="thead-dark" >
    <tr>
        <th scope="col">SL</th>
        <th scope="col">Item Name</th>
        <th scope="col">Qty</th>
        <th scope="col">Size</th>
        <th scope="col">Unit</th>
        <th scope="col">Purpose</th>
        <th scope="col">Remarks</th>
    </tr>
    </thead>
    <tbody>

        <tr>
            <th> {{1}} </th>
            <td>{{$all_equipment->item_des}}</td>
            <td style="text-align:center;">{{$all_equipment->qty}}</td>
            <td>{{$all_equipment->size}}</td>
            <td>{{$all_equipment->unit}}</td>
            <td>{{$all_equipment->purpose}}</td>
            <td>{{$all_equipment->remarks}}</td>
        </tr>
    </tbody>
</table>

{{--User info and Signature Part--}}

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


    <div class="signature">
        Request by-&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Approved by-
        <br><br><br><br><br>
        _________________&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;_________________<br>
        {{$all_equipment->preuser->employee_name}}<br>
        {{$all_equipment->preuser->designation}}<br>
        {{$all_equipment->preuser->department}}-{{$all_equipment->preuser->mobile}}

    </div>


</body>
</html>






