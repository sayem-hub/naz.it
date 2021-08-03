@extends('layouts.frontend')

@section('main')

<div class="row">
    <div class="col-md-0"></div>
    <div class="col-md-13">

        <h3 class="text-center mt-3">Scanner List</h3>

        <div class="form-group">
            <a href="{{ route('scanner.create') }}" class="btn btn-success">Add New Scanner</a>
            <a href="{{route('create.scanner.pdf')}}" class="btn btn-warning btn-sm">PDF Report</a>
        </div>


<table class="table table-bordered table-hover" style="font-size: 14px">
    <thead class="thead-dark">
      <tr>
       <th scope="col">#</th>
        <th scope="col">Scanner ID</th>
        <th scope="col">Brand</th>
        <th scope="col">Model</th>
        <th scope="col">Section</th>
        <th scope="col">Department</th>
        <th scope="col">Status</th>
        <th scope="col">Notes</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>

      @foreach($scanners as $key=>$scanner)

      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$scanner->scanner_id}}</td>
        <td>{{$scanner->scanner_brand}}</td>
        <td>{{$scanner->scanner_model}}</td>
        <td>{{$scanner->section}}</td>
        <td>{{$scanner->department}}</td>
        <td>{{$scanner->status}}</td>
        <td>{{$scanner->remarks}}</td>
        <td>
          <a class="btn btn-secondary" href="{{route('scanner.edit',$scanner->id)}}">Edit</a>

        </td>
      </tr>

      @endforeach

    </tbody>
  </table>
    </div>
</div>
  {{ $scanners->links('pagination::bootstrap-4')}}

@endsection




