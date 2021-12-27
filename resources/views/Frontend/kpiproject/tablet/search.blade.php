@extends('layouts.frontend')
@section('main')

    <section class="contact-section pt-130">
        <div class="container-fluid">

<h4 class="text-center mt-3">Search results by "{{$search_text}}"</h4>
<a href="{{route('tablet.create')}}" class="btn btn-success">Add New Tab</a>
<table class="table table-bordered table-hover" style="font-size: .8rem">
    <thead class="thead-dark">
        <tr>

            <th scope="col" class="text-center">SL</th>
            <th scope="col" class="text-center">Tab ID</th>
            <th scope="col" class="text-center">Brand</th>
            <th scope="col" class="text-center">Model</th>
            <th scope="col" class="text-center">Size</th>
            <th scope="col" class="text-center">Serial</th>
            <th scope="col" class="text-center">IMEI 1</th>
            <th scope="col" class="text-center">IMEI 2</th>
            <th scope="col" class="text-center">User</th>
            <th scope="col" class="text-center">Emp ID</th>
            <th scope="col" class="text-center">Title</th>
            <th scope="col" class="text-center">Sec</th>
            <th scope="col" class="text-center">Dept.</th>
            <th scope="col" class="text-center">Line</th>
            <th scope="col" class="text-center">Status</th>
            <th scope="col" class="text-center">Action</th>

        </tr>
        </thead>
        <tbody>

            @foreach($tablets as $key=>$tablet)

            <tr>
                <th scope="row" class="text-center">{{$key+1}}</th>
                <td class="text-center">{{$tablet->tab_id}}</td>
                <td class="text-center">{{$tablet->brand}}</td>
                <td class="text-center">{{$tablet->model}}</td>
                <td class="text-center">{{$tablet->size}}</td>
                <td class="text-center">{{$tablet->serial}}</td>
                <td class="text-center">{{$tablet->imei_1}}</td>
                <td class="text-center">{{$tablet->imei_2}}</td>
                <td class="text-center">{{$tablet->user}}</td>
                <td class="text-center">{{$tablet->emp_id}}</td>
                <td class="text-center">{{$tablet->designation}}</td>
                <td class="text-center">{{$tablet->section}}</td>
                <td class="text-center">{{$tablet->department}}</td>
                <td class="text-center">{{$tablet->line_no}}</td>
                <td class="text-center">{{$tablet->status}}</td>
                {{-- <td>{{$tablet->notes}}</td> --}}
                <td class="text-center">
                    <a class="btn btn-secondary" href="{{ route('tablet.edit', $tablet->id) }}">Edit</a>

                </td>
            </tr>

            @endforeach

        </tbody>
        </table>
        </div>

    </section>

        @endsection
