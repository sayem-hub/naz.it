
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
        font-size: 0.7em;
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
    <h5>Network Switch List</h5>




    <table class="styled-table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">SL</th>
            <th scope="col">Brand</th>
            <th scope="col">Model</th>
            <th scope="col">Port</th>
            <th scope="col">Location</th>
            <th scope="col">Type</th>
            <th scope="col">Status</th>
        </tr>
        </thead>
        <tbody>

        @foreach($switches as $key=>$switch)

            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$switch->brand}}</td>
                <td>{{$switch->model}}</td>
                <td>{{$switch->port_no}}</td>
                <td style="text-align:center;">{{$switch->location}}</td>
                <td style="text-align:center;">{{$switch->type}}</td>
                <td>{{$switch->status}}</td>
            </tr>

        @endforeach

        </tbody>
    </table>

</body>
</html>






