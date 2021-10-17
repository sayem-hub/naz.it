@extends('layouts.frontend')
@section('main')
{{-- Toner Stock Section --}}

<div class="row">

    <div class="col-md-1"></div>
    <div class="col-md-3">
        <h4 class="text-center mt-3">Toner Stock</h4>

        <a href="" class="btn btn-success">Add New Stock</a>


        <table class="table table-bordered table-hover" style="font-size: 14px">
            <thead>
                <tr>
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



                {{-- @foreach($stocks as $key=>$stock)

                <tr>
                    <th scope="row" style="text-align:center">{{$key+1}}</th>
                    <td style="text-align:center">{{$stock->toner_model}}</td>
                    <td style="text-align:center">{{$stock}}</td>
                </tr>

                @endforeach--}}
            </tbody>
        </table>
    </div>








{{-- Toner Expenses Section --}}

<div class="row">

    <div class="col-md-6"></div>
    <div class="col-md-4">
<h4 class="text-center mt-3">Toner Expenses</h4>

<a href="" class="btn btn-success">Enter expenses</a>


<table class="table table-bordered table-hover" style="font-size: 14px">
    <thead>
        <tr>
            <th scope="col" style="text-align:center">SL</th>
            <th scope="col" style="text-align:center">Date</th>
            <th scope="col" style="text-align:center">Model</th>
            <th scope="col" style="text-align:center">Section</th>
            <th scope="col" style="text-align:center">Printer Model</th>
            {{-- <th scope="col" style="text-align:center">Notes</th> --}}
        </tr>
    </thead>
    <tbody>

        @foreach($expenses as $key=>$expense)

        <tr >
            <th scope="row" style="text-align:center">{{$key+1}}</th>
            <td>{{$expense->date}}</td>
            <td style="text-align:center">{{$expense->toner_model}}</td>
            <td style="text-align:center">{{$expense->section}}</td>
            <td>{{$expense->printer_model}}</td>
            {{-- <td>{{$expense->notes}}</td> --}}

        </tr>

        @endforeach

    </tbody>
</table>
{{$expenses->links('pagination::bootstrap-4')}}

</div>

</div>
@endsection
