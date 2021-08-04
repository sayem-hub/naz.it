@extends('layouts.frontend')
@section('main')

<h3 class="text-center mt-3">Search Results</h3>
<a href="{{route('tablet.create')}}" class="btn btn-success">Add New Tab</a>
<table class="table table-bordered table-hover" style="font-size: 14px">
    <thead class="thead-dark">
        <tr>

            <th scope="col">#</th>
            <th scope="col">Tab ID</th>
            <th scope="col">Brand</th>
            <th scope="col">Model</th>
            <th scope="col">Size</th>
            <th scope="col">Serial</th>
            <th scope="col">IMEI 1</th>
            <th scope="col">IMEI 2</th>
            <th scope="col">User</th>
            <th scope="col">Emp ID</th>
            <th scope="col">Designation</th>
            <th scope="col">Section</th>
            <th scope="col">Dept.</th>
            <th scope="col">Line</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>

        </tr>
        </thead>
        <tbody>

            @foreach($tablets as $key=>$tablet)

            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$tablet->tab_id}}</td>
                <td>{{$tablet->brand}}</td>
                <td>{{$tablet->model}}</td>
                <td>{{$tablet->size}}</td>
                <td>{{$tablet->serial}}</td>
                <td>{{$tablet->imei_1}}</td>
                <td>{{$tablet->imei_2}}</td>
                <td>{{$tablet->user}}</td>
                <td>{{$tablet->emp_id}}</td>
                <td>{{$tablet->designation}}</td>
                <td>{{$tablet->section}}</td>
                <td>{{$tablet->department}}</td>
                <td>{{$tablet->line_no}}</td>
                <td>{{$tablet->status}}</td>
                {{-- <td>{{$tablet->notes}}</td> --}}
                <td>
                    <a class="btn btn-secondary" href="{{ route('tablet.edit', $tablet->id) }}">Edit</a>

                </td>
            </tr>

            @endforeach

        </tbody>
        </table>
        </div>
        </div>
        {{-- {{$computers->links('pagination::bootstrap-4')}} --}}

        @endsection
