@extends('layouts.frontend')

@section('main')

<h3 class="text-center mt-3">Attendance Machine List</h3>
<a href="{{ route('faceid.create') }}" class="btn btn-success">Add New Machine</a>
<table class="table table-bordered table-hover">
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
            <td>{{$machine->updated_at}}</td>
            <td>
                <a class="btn btn-primary" href="{{ route('faceid.edit', $machine->id)}}">Edit</a>
            </td>
        </tr>

        @endforeach

    </tbody>
</table>
{{ $machines->links('pagination::bootstrap-4')}}

@endsection
