@extends('layouts.frontend')

@section('main')


<div class="row">
    <div class="col-md-0"></div>
    <div class="col-md-13">

        <h3 class="text-center mt-3">Attendance Machine List</h3>


            <div class="form-group">
                <a href="{{ route('faceid.create') }}" class="btn btn-success">Add New Machine</a>
                <a href="{{route('create.faceid.pdf')}}" class="btn btn-warning btn-sm">PDF Report</a>
            </div>

<table class="table table-bordered table-hover" style="font-size: 13px">
    <thead>
        <tr>
            <th style="text-align:center" scope="col">SL</th>
            <th scope="col" style="text-align:center">Machine Name</th>
            <th scope="col" style="text-align:center">ID</th>
            <th scope="col" style="text-align:center">IP address</th>
            <th scope="col" style="text-align:center">Serial no</th>
            <th scope="col" style="text-align:center">Type</th>
            <th scope="col" style="text-align:center">Model</th>
            <th scope="col" style="text-align:center">Location</th>
            <th scope="col" style="text-align:center">Status</th>
            {{-- <th scope="col">Updated at</th> --}}
            <th scope="col" style="text-align:center">Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach($machines as $key=>$machine)

        <tr>
            <th scope="row" style="text-align:center">{{$key+1}}</th>
            <td >{{$machine->machine_name}}
            <td style="text-align:center">{{$machine->machine_id}}</td>
            <td style="text-align:center">{{$machine->ip_address}}</td>
            <td style="text-align:center">{{$machine->serial_no}}</td>
            <td style="text-align:center">{{$machine->type}}</td>
            <td style="text-align:center">{{$machine->model}}</td>
            <td>{{$machine->location}}</td>

            @php
            if ( $machine->status == 'In repair'):
            $color = 'red';
            elseif ( $machine->status == 'Active'):
            $color = 'green';
            elseif ( $machine->status == 'Idle'):
            $color = 'blue';
            elseif ( $machine->status == 'Inactive'):
            $color = 'brown';
            else:
            $color = 'gray';
            endif;
            @endphp

            <td style="color: {{$color}}; text-align:center">{{ $machine->status }}</td>
            {{-- <td>{{$machine->updated_at->format('Y-m-d')}}</td> --}}
            <td style="text-align:center"><a class="btn btn-secondary" href="{{ route('faceid.edit', $machine->id)}}" >Edit</a></td>
        </tr>

        @endforeach

    </tbody>
</table>
{{ $machines->links('pagination::bootstrap-4')}}

@endsection
