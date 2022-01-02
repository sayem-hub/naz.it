<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


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
            font-size: 1rem;
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
            padding: 10px 13px;
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
            font-family: sans-serif;
            text-align: center;
            line-height: 40%;

        }


    </style>

</head>
<body>


<header>

</header>
<footer>
    <hr>
    Copyright © 2021-<?php echo date("Y");?> Software generated mail. Verified by Abu Sayem (IT). Print date & time: <?php echo date("Y-m-d, h:i:sa");?>
</footer>

<h3>NAZ Bangladesh Ltd.</h3>
<h4>ICT Department</h4>
<h5>Email ID Opening Request</h5>


<table class="styled-table" >

    <div>

        <p style="color: black">Dear Sir, <br> Please open a mail account as per below info. <br><br></p>

            <tr><td>Employee ID</td> <td>{{$data->office_id}}</td></tr>
            <tr><td>Employee Name</td> <td>{{$data->full_name}}</td></tr>
            <tr><td>Nick Name</td> <td>{{$data->nick_name}}</td></tr>
            <tr><td>Designation</td> <td>{{$data->designation}}</td></tr>
            <tr><td>Section</td> <td>{{$data->section}}</td></tr>
            <tr><td>Department</td> <td>{{$data->department}}</td></tr>
            <tr><td>Joining Date</td> <td>{{$data->doj}}</td></tr>
            <tr><td>Mobile</td> <td>{{$data->mobile}}</td></tr>
            <tr><td class="fw-bold">Proposed ID</td> <td class="fw-bold">{{$data->pro_id}}</td></tr>
            <tr><td class="fw-bold">Proposed Group</td> <td class="fw-bold">{{$data->mail_group}}</td></tr>
            <tr><td>Common Group</td> <td>all_emp@nz-bd.com</td></tr>

        <p style="color: black"><br> Thanks & Regards, <br>Abu Sayem-IT</p>

    </div>

</table>

</body>
</html>
