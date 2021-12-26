@extends('layouts.frontend')
@section('main')


<section class="contact-section pt-100">
    <div class="container">


        <div class="row">

<div class="col-md-12">

<h4 class="text-center mt-3">Search results</h4>
<a href={{ route('rfid.create') }} class="btn btn-success">Issue New ID</a>
<table class="table table-bordered table-hover" style="font-size: 15px">
    <thead>
        <tr>
            <th scope="col" class="text-center">SL</th>
            <th scope="col" class="text-center">NAZ ID</th>
            <th scope="col" class="text-center">Name</th>
            <th scope="col" class="text-center">Designation</th>
            <th scope="col" class="text-center">Section</th>
            <th scope="col" class="text-center">RF ID No</th>
            <th scope="col" class="text-center">Issue Date</th>
            <th scope="col" class="text-center">Status</th>
            <th scope="col" class="text-center">Action</th>

        </tr>
    </thead>
    <tbody>

        @foreach($rfids as $key=>$rfid)

        <tr>
            <th scope="row" class="text-center">{{$key+1}}</th>
            <td class="text-center">{{$rfid->naz_id}}</td>
            <td class="text-center">{{$rfid->name}}</td>
            <td class="text-center">{{$rfid->designation}}</td>
            <td class="text-center">{{$rfid->section}}</td>
            <td class="text-center">{{$rfid->rf_id}}</td>
            <td class="text-center">{{$rfid->issue_date}}</td>
            <td class="text-center">{{$rfid->status}}</td>
            <td class="text-center"><a class="btn btn-secondary" href="{{ route('rfid.edit', $rfid->id) }}">Edit</a></td>
        </tr>

        @endforeach

    </tbody>
</table>
{{$rfids->links('pagination::bootstrap-4')}}


</section>
</div>
</div>
</div>

@endsection


