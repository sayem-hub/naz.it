@extends('layouts.frontend')

@section('main')

<h3 class="text-center mt-3">Attendance Machine List</h3>
<a href="{{ route('faceid.create') }}" class="btn btn-success">Add New Machine</a>
<table class="table table-striped table-dark">
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
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>

        {{-- @foreach($ccameras as $key=>$ccamera)

        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$ccamera->camname}}-{{$ccamera->camno}}</td>
            <td>{{$ccamera->camlocation}}</td>
            <td>{{$ccamera->status}}</td>
            <td>{{$ccamera->updated_at}}</td>
            <td>
                <a class="btn btn-primary" href="{{ route('camera.edit', $ccamera->id)}}">Edit</a>
            </td>
        </tr>

        @endforeach --}}

    </tbody>
</table>
{{-- {{$ccameras->links('pagination::bootstrap-4')}} --}}

@endsection
