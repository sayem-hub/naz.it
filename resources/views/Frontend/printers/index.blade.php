@extends('layouts.frontend')

@section('main')

<section class="contact-section pt-130">
    <div class="container">

<div class="row">
    <div class="col-md-0"></div>
    <div class="col-md-13">

        <h4 class="text-center mt-3">Printer List</h4>

        <form class="" action="{{ route('printer.search') }}" method="GET">
            <a href="{{ route('printer.create') }}" class="btn btn-success"><i class="fa fa-plus"></i>New Printer</a>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="{{route('create.printer.pdf')}}" class="btn btn-warning btn-sm pull-right"> PDF Report</a>
            </div>
            <div class="col-xs-6 col-md-4">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search by Serial/Section/Status"
                           id="txtSearch" name="query" value="{{ request()->input('query') }}">

                    <div class="input-group-btn">
                        <button class="btn btn-primary" type="submit">
                            <span class="search"><i class="fa fa-search fa-fw"></i>Search</span>
                        </button>
                    </div>
                    <div class="text-danger">@error('query'){{ $message }}@enderror</div>
                </div>
            </div>
        </form>



<table class="table table-bordered table-hover" style="font-size: .8rem">
    <thead class="thead-dark">
      <tr>
       <th scope="col" style="text-align:center">SL</th>
        <th scope="col" style="text-align:center">Printer ID</th>
        <th scope="col" style="text-align:center">Brand</th>
        <th scope="col" style="text-align:center">Model</th>
        <th scope="col" style="text-align:center">Serial No</th>
        <th scope="col" style="text-align:center">Function</th>
        <th scope="col" style="text-align:center">Section</th>
{{--        <th scope="col" style="text-align:center">Department</th>--}}
        <th scope="col" style="text-align:center">User</th>
        <th scope="col" style="text-align:center">Type</th>
          <th scope="col" style="text-align:center">Pur Date</th>
        <th scope="col" style="text-align:center">Status</th>
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
{{--        <td style="text-align:center">{{$print->department}}</td>--}}
        <td style="text-align:center">{{$print->user}}</td>
        <td style="text-align:center">{{$print->service_type}}</td>

          @if($print->pur_date==!'Null')
        <td class="text-center">{{'-'}}</td>
          @else
              <td class="text-center">{{\Carbon\Carbon::parse($print->pur_date)->format('d-M-y')}}</td>
          @endif

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
          <a class="" href="{{route('printer.edit',$print->id)}}"><i class="fa fa-edit fa-lg"></i></a>

        </td style="text-align:center">
      </tr>

      @endforeach

    </tbody>
  </table>
    </div>
</div>
  {{ $printers->links('pagination::bootstrap-4')}}

    </div>
</section>

@endsection




