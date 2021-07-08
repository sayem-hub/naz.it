@extends('layouts.frontend')
@section('main')

<h3 class="text-center mt-3">Issued RF ID List</h3>
<a href={{ route('rfid.create') }} class="btn btn-success">Issue New ID</a>
<table class="table table-bordered table-hover" style="font-size: 15px">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">NAZ ID</th>

        <th scope="col">Name</th>
        <th scope="col">Designation</th>
        <th scope="col">Section</th>
        <th scope="col">RF ID No</th>
        <th scope="col">Issue Date</th>
        <th scope="col">Status</th>
        <th scope="col">Remarks</th>
        <th scope="col">Created at</th>
        <th scope="col">Action</th>

      </tr>
    </thead>
    <tbody>

    @foreach($rfids as $key=>$rfid)

      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$rfid->naz_id}}</td>
        <td>{{$rfid->name}}</td>
        <td>{{$rfid->designation}}</td>
        <td>{{$rfid->section}}</td>
        <td>{{$rfid->rf_id}}</td>
        <td>{{$rfid->issue_date}}</td>
        <td>{{$rfid->status}}</td>
        <td>{{$rfid->remarks}}</td>
        <td>{{$rfid->created_at}}</td>
        <td><a class="btn btn-primary" href="{{ route('rfid.edit', $rfid->id) }}">Edit</a></td>
      </tr>

      @endforeach

    </tbody>
  </table>
  {{$rfids->links('pagination::bootstrap-4')}}

@endsection


