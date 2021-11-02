@extends('layouts.frontend')
@section('main')
{{-- Toner Stock Section --}}

<div class="row">

    <div class="col-md-1"></div>
    <div class="col-md-4">
        <h4 class="text-center mt-3">Toner Stock</h4>

        <a href="{{ route('toner.stock.create') }}" class="btn btn-success">Add new stock</a>

        <table class="table table-bordered table-hover" style="font-size: 14px";>
            <thead style= "background-color: #FFD67B" >
                <tr >
                    <th scope="col" style="text-align:center">SL</th>
                    <th scope="col" style="text-align:center">Model</th>
                    <th scope="col" style="text-align:center">Quantity</th>
                </tr>
            </thead>
            <tbody>

             <tr>
                   <td style="text-align:center">1</td>
                    <td style="text-align:center">85A</td>
                    <td style="text-align:center">{{$stocks85}}</td>
                </tr>

                <tr>
                    <td style="text-align:center">2</td>
                    <td style="text-align:center">26A</td>
                    <td style="text-align:center">{{$stocks26}}</td>
                </tr>

                <tr>
                    <td style="text-align:center">3</td>
                    <td style="text-align:center">93A</td>
                    <td style="text-align:center">{{$stocks93}}</td>
                </tr>

            </tbody>
        </table>

{{-- New Toner Receiving Section --}}
    <br>
        <h4 class="text-center mt-3">Toner receiving record</h4>

        <table class="table table-bordered table-hover  " style="font-size: 11.5px; ">
            <thead>
                <tr>
                    <th scope="col" style="text-align:center">SL</th>
                    <th scope="col" style="text-align:center">Date</th>
                    <th scope="col" style="text-align:center">Model</th>
                    <th scope="col" style="text-align:center">Quantity</th>
                    <th scope="col" style="text-align:center">GP No.</th>
                    {{-- <th scope="col" style="text-align:center">Notes</th> --}}
                </tr>
            </thead>
            <tbody>

                @foreach($newtoners as $key=>$newtoner)

                <tr>
                    <th scope="row" style="text-align:center">{{$key+1}}</th>
                    <td style="text-align:center">{{$newtoner->date}}</td>
                    <td style="text-align:center">{{$newtoner->toner_model}}</td>
                    <td style="text-align:center">{{$newtoner->qty}}</td>
                    <td style="text-align:center">{{$newtoner->gp_no}}</td>
                </tr>

                @endforeach

            </tbody>
        </table>
        {{$newtoners->links('pagination::bootstrap-4')}}
</div>




{{-- Toner Expenses Section --}}
<div class = "row">
    <div class="col-md-1"></div>
    <div class="col-md-5">
<h4 class="text-center mt-3">Toner Consumption</h4>

<a href="{{ route('toner.expense.create') }}" class="btn btn-success">Expense entry</a>


<table class="table table-bordered table-hover" style="font-size: 11px">
    <thead>
        <tr>
            <th scope="col" style="text-align:center">SL</th>
            <th scope="col" style="text-align:center">Date & Time</th>
            <th scope="col" style="text-align:center">Model</th>
            <th scope="col" style="text-align:center">Section</th>
            <th scope="col" style="text-align:center">Printer Model</th>
            <th scope="col" style="text-align:center">Recipient</th>
            {{-- <th scope="col" style="text-align:center">Notes</th> --}}
        </tr>
    </thead>
    <tbody>

        @foreach($expenses as $key=>$expense)

        <tr >
         <th scope="row" style="text-align:center">{{$key+1}}</th>
         <td style="text-align:center">{{ date('Y-m-d, h:i A', strtotime($expense->date)) }}</td>
            {{-- <td style="text-align:center">{{$expense->date}}</td> --}}
            <td style="text-align:center">{{$expense->toner_model}}</td>
            <td style="text-align:center">{{$expense->section}}</td>
            <td style="text-align:center">{{$expense->printer_model}}</td>
            <td style="text-align:center">{{$expense->recipient}}</td>
            {{-- <td>{{$expense->notes}}</td> --}}

        </tr>

        @endforeach

    </tbody>
</table>
{{$expenses->links('pagination::bootstrap-4')}}

</div>
</div>





@endsection
