@extends('layouts.frontend')

@section('main')

<div class="row">
    <div class="col-md-0"></div>
    <div class="col-md-13">

        <h3 class="text-center mt-3">Printer List</h3>

       <form action="{{ route('printer.search') }}" method="GET">
        <div class="form-group">
            <a href={{ route('printer.create') }} class="btn btn-success">Add New Printer</a>
            <a href={{route('create.printer.pdf')}} class="btn btn-warning btn-sm">PDF Report</a>
            <div class="form-group row">
                <div class="col-xs-3">

                    <input type="text" class="form-control" name="query" placeholder="User name or section or status"
                        value="{{ request()->input('query') }}">
                    <span class="text-danger">@error('query'){{ $message }}@enderror</span>
                </div>
                <button type="submit" class="btn btn-info">Search</button>
            </div>

        </div>
    </form>



<table class="table table-bordered table-hover" style="font-size: 12px">
    <thead class="thead-dark">
      <tr>
       <th scope="col" style="text-align:center">SL</th>
        <th scope="col" style="text-align:center">Printer ID</th>
        <th scope="col" style="text-align:center">Brand</th>
        <th scope="col" style="text-align:center">Model</th>
        <th scope="col" style="text-align:center">Serial No</th>
        <th scope="col" style="text-align:center">Function</th>
        <th scope="col" style="text-align:center">Section</th>
        <th scope="col" style="text-align:center">Department</th>
        <th scope="col" style="text-align:center">User</th>
        <th scope="col" style="text-align:center">Service Type</th>
        <th scope="col" style="text-align:center">Status</th>
        {{-- <th scope="col">Remarks</th> --}}
        <th scope="col" style="text-align:center">Action</th>
      </tr>
    </thead>
    <tbody>

      @foreach($printers as $key=>$print)

      <tr>
        <th scope="row" style="text-align:center">{{$key+1}}</th>
        <td style="text-align:center">{{$print->printer_id}}</td>
        <td style="text-align:center"> {{$print->printer_brand}}</td>
        <td style="text-align:center">{{$print->printer_model}}</td>
        <td style="text-align:center">{{$print->serial_no}}</td>
        <td style="text-align:center">{{$print->function}}</td>
        <td style="text-align:center">{{$print->section}}</td>
        <td style="text-align:center">{{$print->department}}</td>
        <td style="text-align:center">{{$print->user}}</td>
        <td style="text-align:center">{{$print->service_type}}</td>

            @php
            if ( $print->status == 'In repair'):
            $color = 'red';
            elseif ( $print->status == 'Active'):
            $color = 'green';
            elseif ( $print->status == 'Idle'):
            $color = 'blue';
            else:
            $color = 'gray';
            endif;
            @endphp

            <td style="color: {{$color}}; text-align:center">{{ $print->status }}</td>


        {{-- <td>{{$print->remarks}}</td> --}}
        <td style="text-align:center">
          <a class="btn-secondary btn-block" href="{{route('printer.edit',$print->id)}}">Edit</a>

        </td style="text-align:center">
      </tr>

      @endforeach

    </tbody>
  </table>
    </div>
</div>
  {{ $printers->links('pagination::bootstrap-4')}}

@endsection




