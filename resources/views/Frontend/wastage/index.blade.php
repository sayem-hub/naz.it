@extends('layouts.frontend')

@section('main')
<section class="contact-section pt-100"></section>

<div class="row">
    <div class="col-md-7"></div>
    <div class="col-md-3">
                <p class="text-center">Item Summary</p>
<table class="table table-bordered bg-danger bg-gradient ">
    <thead class="text-dark">
        <tr >

            <th class="text-center">MB</th>
            <th class="text-center">HDD</th>
            <th class="text-center">Monitor</th>
            <th class="text-center">Casing</th>
            <th class="text-center">Toner</th>
            <th class="text-center">Total</th>

        </tr>
    </thead>
    <tbody>

        <tr class="text-white">

            <td class="text-center">{{$motherboard}}</td>
            <td class="text-center">{{$hdd}}</td>
            <td class="text-center">{{$monitor}}</td>
            <td class="text-center">{{$casing}}</td>
            <td class="text-center">{{$toner}}</td>
            <td class="text-center">{{$total}}</td>
        </tr>
    </tbody>
</table>
    </div>
</div>



    <div class="container">

<div class="row">
    <div class="col-md-0"></div>
    <div class="col-md-12">

        <h4 class="text-center mt-3">Wastage Item List (IT)</h4>


            <div class="form-group">
                <a href="{{ route('wastage.create') }}" class="btn btn-success">Add wastage</a>
                {{-- <a href="#" class="btn btn-warning btn-sm">PDF Report</a> --}}
            </div>

<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th scope="col" class="text-center"">SL</th>
            <th scope="col" class="text-center"">Item name</th>
            <th scope="col" class="text-center"">Model</th>
            <th scope="col" class="text-center"">Serial no</th>
            <th scope="col" class="text-center"">Problem</th>
            <th scope="col" class="text-center"">User</th>
            <th scope="col" class="text-center"">Qty</th>
            {{-- <th scope="col">Note</th> --}}
            <th scope="col" class="text-center"">Status</th>
            {{-- <th scope="col">Updated at</th> --}}
            {{-- <th scope="col" class="text-center"">Notes</th> --}}
            <th scope="col" class="text-center"">Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach($wastages as $key=>$wastage)

        <tr>
            <th scope ="row" class="text-center">{{$key+1}}</th>
            <td>{{$wastage->item_name}}
            <td>{{$wastage->model}}</td>
            <td class="text-center">{{$wastage->serial_no}}</td>
            <td>{{$wastage->problem}}</td>
            <td>{{$wastage->user}}</td>
            <td class="text-center">{{$wastage->quantity}}</td>
            {{-- <td>{{$wastage->note}}</td> --}}
            <td style="text-align:center">{{$wastage->status}}</td>
            {{-- <td>{{$wastage->notes}}</td> --}}
            {{-- <td>{{$wastage->updated_at->format('Y-m-d')}}</td> --}}
            <td class="text-center">
                <a  href="{{ route('wastage.edit', $wastage->id)}}"><i class="fa fa-edit fa-lg"></i></a>
            </td>
        </tr>

        @endforeach

    </tbody>
</table>


{{ $wastages->links('pagination::bootstrap-4')}}

</div>
</section>

@endsection
