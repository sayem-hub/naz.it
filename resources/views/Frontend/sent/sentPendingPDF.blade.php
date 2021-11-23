
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF View</title>

    <style>

@page {
            margin: 15px 15px;
            }
            header {
            position: fixed;
            top: -8px;
            left: 0px;
            right: 0px;
            height: 10px;
            font-size: 8px;
            /** Extra personal styles **/

            color: black;
            text-align: left;
            line-height: 7px;
            }
           footer {
                position: fixed;
                bottom: -6px;
                left: 0px;
                right: 0px;
                height: 14px;
                font-size: 8px;
                /** Extra personal styles **/

                color: black;
                text-align: center;
                line-height: 8px;
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
        margin: 15px 15px;
        font-size: 0.6em;
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
        NAZ-IMS (NAZ IT Management System)
    </header>
    <footer>
        <hr>
         Copyright © 2021-<?php echo date("Y");?> NAZ-IMS by Abu Sayem; Software generated report. Print date & time: <?php echo date("Y-m-d, h:i:sa");?>
    </footer>

    <h3>NAZ Bangladesh Ltd.</h3>
    <h4>ICT Department</h4>
    <h5>NAZ to HO Sending Item Status (IT)</h5>


    <table class="styled-table" >
        <thead class="thead-dark" >
            <tr>
                <th scope="col" style="text-align:center">SL</th>
                <th scope="col" style="text-align:center">Item</th>
                <th scope="col" style="text-align:center">Brand</th>
                <th scope="col" style="text-align:center">Model</th>
                <th scope="col" style="text-align:center">User</th>

                <th scope="col" style="text-align:center">Wty</th>
                <th scope="col" style="text-align:center">Supplier</th>
                <th scope="col" style="text-align:center">Pur date</th>
                <th scope="col" style="text-align:center">Sent date</th>
                <th scope="col" style="text-align:center">GP</th>
                <th scope="col" style="text-align:center">Sent for</th>
                <th scope="col" style="text-align:center">Status</th>
            </tr>
        </thead>
        <tbody>

            @foreach($sentitemspending as $key=>$sentitempending)

            <tr>
                <th scope="row" style="text-align:center">{{$key+1}}</th>
                <td>{{$sentitempending->Iname}}</td>
                <td style="text-align:center">{{$sentitempending->Brand}}</td>
                <td style="text-align:center">{{$sentitempending->Model}}</td>
                <td>{{$sentitempending->User}}</td>
                <td style="text-align:center">{{$sentitempending->Warranty}}</td>
                <td style="text-align:center">{{$sentitempending->Supplier}}</td>
                <td style="text-align:center">{{$sentitempending->Purdate}}</td>
                <td style="text-align:center">{{$sentitempending->Outdate}}</td>
                <td style="text-align:center">{{$sentitempending->Gpno}}</td>
                <td style="text-align:center">{{$sentitempending->Sentfor}}</td>

                <td style="
                text-align:center">{{ $sentitempending->Status }}</td>

                {{-- <td>{{$item->Status}}</td> --}}
                {{--<td>{{$item->created_at}}</td>--}}
                {{-- <td>{{$item->created_at->format('Y-m-d')}}</td> --}}
                </tr>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>






