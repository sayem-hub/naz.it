@extends('layouts.backend')

@section('main')

<h3 class="text-center mt-3">CC Camera List</h3>
<a href="{{route('admin.ccam.create')}}" class="btn btn-success">Add CC Camera</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Camera Name & No.</th>
            <th scope="col">Location</th>
            <th scope="col">Status</th>
            <th scope="col">Updated at</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach($ccameras as $key=>$ccamera)

        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$ccamera->camname}}-{{$ccamera->camno}}</td>
            <td>{{$ccamera->camlocation}}</td>
            <td>{{$ccamera->status}}</td>
            <td>{{$ccamera->updated_at}}</td>

            <td>
                <a class="btn btn-primary" href="{{ route('admin.ccam.edit', $ccamera->id)}}">Edit</a>
                <a class="btn btn-warning" href="{{ route('admin.ccam.delete', $ccamera->id) }}">Delete</a>
            </td>
        </tr>

        @endforeach

    </tbody>
</table>
{{$ccameras->links('pagination::bootstrap-4')}}

@endsection
