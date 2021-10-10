@extends('layouts.frontend')

@section('main')

<div class="row">
    <div class="col-md-0"></div>
    <div class="col-md-13">

        <h3 class="text-center mt-3">Android TAB List</h3>

        <form action="{{ route('tablet.search') }}" method="GET">
            <div class="form-group">
                <a href={{ route('tablet.create') }} class="btn btn-success">Add New Tab</a>
                <a href="{{ route('create.tablet.pdf') }}" class="btn btn-warning btn-sm">PDF Report</a>
                <div class="form-group row"><br>
                    <div class="col-xs-3">

                        <input type="text" class="form-control" name="query" placeholder="User name or Tab serial no."
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
        <th scope="col" style="text-align:center">Tab ID</th>
        <th scope="col" style="text-align:center">Brand</th>
        <th scope="col" style="text-align:center">Model</th>
        <th scope="col" style="text-align:center">Size</th>
        <th scope="col" style="text-align:center">Serial</th>
        <th scope="col" style="text-align:center">IMEI 1</th>
        <th scope="col" style="text-align:center">IMEI 2</th>
        <th scope="col" style="text-align:center">User</th>
        <th scope="col" style="text-align:center">Emp ID</th>
        <th scope="col" style="text-align:center">Title</th>
        <th scope="col" style="text-align:center">Sect.</th>
        <th scope="col" style="text-align:center">Dept.</th>
        <th scope="col" style="text-align:center">Line</th>
        <th scope="col" style="text-align:center">Status</th>
        <th scope="col" style="text-align:center">Action</th>

      </tr>
    </thead>
    <tbody>

      @foreach($tablets as $key=>$tablet)

      <tr>
        <th scope="row" style="text-align:center">{{$key+1}}</th>
        <td style="text-align:center">{{$tablet->tab_id}}</td>
        <td style="text-align:center">{{$tablet->brand}}</td>
        <td style="text-align:center">{{$tablet->model}}</td>
        <td style="text-align:center">{{$tablet->size}}</td>
        <td style="text-align:center">{{$tablet->serial}}</td>
        <td>{{$tablet->imei_1}}</td>
        <td>{{$tablet->imei_2}}</td>
        <td>{{$tablet->user}}</td>
        <td style="text-align:center">{{$tablet->emp_id}}</td>
        <td style="text-align:center">{{$tablet->designation}}</td>
        <td style="text-align:center">{{$tablet->section}}</td>
        <td style="text-align:center">{{$tablet->department}}</td>
        <td style="text-align:center">{{$tablet->line_no}}</td>

        {{-- <td>{{$tablet->notes}}</td> --}}

            @php
            if ( $tablet->status == 'Running'):
            $color = 'green';
            elseif ( $tablet->status == 'In repair'):
            $color = 'red';
            elseif ( $tablet->status == 'In warranty'):
            $color = 'blue';
            elseif ( $tablet->status == 'Idle'):
            $color = 'black';
            else:
            $color = 'gray';
            endif;
            @endphp

<td style="color: {{$color}}; text-align:center">{{$tablet->status}}</td>


        <td style="text-align:center"><a class="btn btn-secondary" href="{{ route('tablet.edit', $tablet->id) }}">Edit</a></td>
      </tr>

      @endforeach

    </tbody>
  </table>
    </div>
</div>
  {{-- {{$tablets->links('pagination::bootstrap-4')}} --}}

@endsection




