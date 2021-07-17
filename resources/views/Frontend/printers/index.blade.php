@extends('layouts.frontend')

@section('main')

<div class="row">
    <div class="col-md-0"></div>
    <div class="col-md-13">

        <h3 class="text-center mt-3">Printer List</h3>

        <form action="" method="GET">
            <div class="form-group">
                <a href={{ route('printer.create') }} class="btn btn-success">Add New Printer</a>


            </div>
        </form>



<table class="table table-bordered table-hover" style="font-size: 14px">
    <thead class="thead-dark">
      <tr>
       <th scope="col">#</th>
        <th scope="col">Printer ID</th>
        <th scope="col">Brand</th>
        <th scope="col">Model</th>
        <th scope="col">Function</th>
        <th scope="col">Section</th>
        <th scope="col">Department</th>
        <th scope="col">User</th>
        <th scope="col">Service Type</th>
        <th scope="col">Status</th>
        <th scope="col">Remarks</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>

      @foreach($printers as $key=>$print)

      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$print->printer_id}}</td>
        <td>{{$print->printer_brand}}</td>
        <td>{{$print->printer_model}}</td>
        <td>{{$print->function}}</td>
        <td>{{$print->section}}</td>
        <td>{{$print->department}}</td>
        <td>{{$print->user}}</td>
        <td>{{$print->service_type}}</td>
        <td>{{$print->status}}</td>
        <td>{{$print->remarks}}</td>
        <td>
          <a class="btn btn-secondary" href="{{route('printer.edit',$print->id)}}">Edit</a>

        </td>
      </tr>

      @endforeach

    </tbody>
  </table>
    </div>
</div>
  {{ $printers->links('pagination::bootstrap-4')}}

@endsection




