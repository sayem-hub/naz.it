@extends('layouts.frontend')
@section('main')
{{-- Toner Stock Section --}}

<section class="contact-section pt-130">

    <div class="container-fluid">

<div class="row">

<div class="col-md-1"></div>
    <div class="col-md-4">
        <h5 class="text-center mt-3">Toner Stock</h5>

        <a href="{{ route('toner.stock.create') }}" class="btn btn-outline-primary btn-sm"><i class="fa fa-plus"></i>Add New </a>

        <table class="table table-bordered table-hover">
            <thead>
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
                 <td style="text-align:center">80A/05A</td>
                 <td style="text-align:center">{{$stocks0580}}</td>
             </tr>

                <tr>
                    <td style="text-align:center">4</td>
                    <td style="text-align:center">93A</td>
                    <td style="text-align:center">{{$stocks93}}</td>
                </tr>

             <tr>
                 <td style="text-align:center">5</td>
                 <td style="text-align:center">55A</td>
                 <td style="text-align:center">{{$stocks55}}</td>
             </tr>



            </tbody>
        </table>



{{-- New Toner Receiving Section --}}

        <h5 class="text-center mt-3">Toner receiving record</h5>

        <table class="table table-bordered table-hover  " style="font-size: .85rem; ">
            <thead>
                <tr>
                    <th scope="col" style="text-align:center">SL</th>
                    <th scope="col" style="text-align:center">Date</th>
                    <th scope="col" style="text-align:center">Model</th>
                    <th scope="col" style="text-align:center">Qty</th>
                    <th scope="col" style="text-align:center">GP No.</th>
                    {{-- <th scope="col" style="text-align:center">Notes</th> --}}
                </tr>
            </thead>
            <tbody>

                @foreach($newtoners as $key=>$newtoner)

                <tr>
                    <th scope="row" style="text-align:center">{{$key+1}}</th>
                    <td style="text-align:center">{{date('d-m-y, h:i A', strtotime($newtoner->date))}}</td>
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

    <div class="col-md-1"></div>
    <div class="col-md-5">
<h5 class="text-center mt-3">Toner Consumption</h5>

<a href="{{ route('toner.expense.create') }}" class="btn btn-outline-primary btn-sm"><i class="fa fa-plus"> </i>Expense</a>


<table class="table table-bordered table-hover" style="font-size: .8rem">
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
         <td>{{ date('d-m-y, h:i A', strtotime($expense->date)) }}</td>
            {{-- <td style="text-align:center">{{$expense->date}}</td> --}}
            <td style="text-align:center">{{$expense->toner_model}}</td>
            <td>{{$expense->section}}</td>
            <td style="text-align:center">{{$expense->printer_model}}</td>
            <td style="text-align:center">{{$expense->recipient}}</td>
            {{-- <td>{{$expense->notes}}</td> --}}

        </tr>

        @endforeach

    </tbody>
</table>
{{$expenses->links('pagination::bootstrap-4')}}




<div class="col-md-12">
    <h5 class="text-center mt-3">Month wise consumption/{{\Carbon\Carbon::now()->format('Y')}}</h5>

    <table class="table table-bordered table-hover">
        <thead style="background-color: #07977f">
            <tr>
                <th scope="col" class="text-center">SL</th>
                <th scope="col" class="text-center">Month</th>
                <th scope="col" class="text-center">Model</th>
                <th scope="col" class="text-center">Total</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($allTonerCount as $Key=>$count )
                <tr>
                   {{-- <th scope="row" style="text-align:center">{{$key+1}}</th> --}}
                   <td style="text-align:center; font-weight: bold;">{{$loop->iteration}}</td>
                    <td style="text-align:center">{{ $count->month_name}}</td>
                    <td style="text-align:center">All </td>
                    <td style="text-align:center">{{ $count->count }}</td>
                </tr>

            @endforeach

        </tbody>
    </table>
</div>



</div>
</div>
</div>

</section>


@endsection
