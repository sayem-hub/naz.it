@extends('layouts.frontend')

@section('main')


<div class="row">
    <div class="col-md-0"></div>
    <div class="col-md-13">

        <h3 class="text-center mt-3">Wastage Item List (IT)</h3>


            <div class="form-group">
                <a href="{{ route('wastage.create') }}" class="btn btn-success">Add wastage</a>
                <a href="#" class="btn btn-warning btn-sm">PDF Report</a>
            </div>

<table class="table table-bordered table-hover" style="font-size: 12px">
    <thead>
        <tr>
            <th scope="col" style="text-align:center">SL</th>
            <th scope="col" style="text-align:center">Item name</th>
            <th scope="col" style="text-align:center">Model</th>
            <th scope="col" style="text-align:center">Serial no</th>
            <th scope="col" style="text-align:center">Problem</th>
            <th scope="col" style="text-align:center">User</th>
            {{-- <th scope="col">Note</th> --}}
            <th scope="col" style="text-align:center">Status</th>
            {{-- <th scope="col">Updated at</th> --}}
            <th scope="col" style="text-align:center">Notes</th>
            <th scope="col" style="text-align:center">Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach($wastages as $key=>$wastage)

        <tr>
            <th scope ="row" style="text-align:center">{{$key+1}}</th>
            <td>{{$wastage->item_name}}
            <td>{{$wastage->model}}</td>
            <td style="text-align:center">{{$wastage->serial_no}}</td>
            <td>{{$wastage->problem}}</td>
            <td>{{$wastage->user}}</td>
            {{-- <td>{{$wastage->note}}</td> --}}
            <td style="text-align:center">{{$wastage->status}}</td>
            <td>{{$wastage->notes}}</td>
            {{-- <td>{{$wastage->updated_at->format('Y-m-d')}}</td> --}}
            <td style="text-align:center">
                <a class="btn btn-secondary" href="{{ route('wastage.edit', $wastage->id)}}">Edit</a>
            </td>
        </tr>

        @endforeach

    </tbody>
</table>
{{ $wastages->links('pagination::bootstrap-4')}}

@endsection
