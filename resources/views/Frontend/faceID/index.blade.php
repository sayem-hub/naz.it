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
            <th scope="col">#</th>
            <th scope="col">Machine Name</th>
            <th scope="col">ID</th>
            <th scope="col">IP Address</th>
            <th scope="col">Serial No</th>
            <th scope="col">Type</th>
            <th scope="col">Model</th>
            <th scope="col">Location</th>
            <th scope="col">Status</th>
            <th scope="col">Updated at</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach($machines as $key=>$machine)

        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$machine->machine_name}}
            <td>{{$machine->machine_id}}</td>
            <td>{{$machine->ip_address}}</td>
            <td>{{$machine->serial_no}}</td>
            <td>{{$machine->type}}</td>
            <td>{{$machine->model}}</td>
            <td>{{$machine->location}}</td>
            <td>{{$machine->status}}</td>
            <td>{{$machine->updated_at->format('Y-m-d')}}</td>
            <td>
                <a class="btn btn-secondary" href="{{ route('faceid.edit', $machine->id)}}">Edit</a>
            </td>
        </tr>

        @endforeach

    </tbody>
</table>
{{ $machines->links('pagination::bootstrap-4')}}

@endsection
