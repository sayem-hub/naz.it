@extends('layouts.frontend')

@section('main')

        <section class="contact-section pt-100">
        <div class="container-fluid">

<div class="row">
    <div class="col-lg-12">

        <h4 class="text-center mt-3">Android TAB List</h4>


        <form class="" action="{{ route('tablet.search') }}" method="GET">

            <a href="{{ route('tablet.create') }}" class="btn btn-success"><i class="fa fa-plus"></i>New Tab</a>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="{{ route('create.tablet.pdf') }}" class="btn btn-warning btn-sm pull-right"> PDF Report</a>

            </div>

            <div class="col-xs-6 col-md-4">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="User name or Tab serial no." name="query"
                           id="txtSearch" value="{{ request()->input('query') }}">

                    <div class="input-group-btn">
                        <button class="btn btn-primary" type="submit">
                            <span class="search"><i class="fa fa-search fa-fw"></i>Search</span>
                        </button>

                    </div>
                    <div class="text-danger">@error('query'){{ $message }}@enderror</div>
                </div>
            </div>
        </form>


<table class="table table-bordered table-hover" style="font-size: .75rem">
    <thead class="thead-dark">
      <tr>
       <th scope="col" style="text-align:center">SL</th>
        <th scope="col" style="text-align:center">Tab ID</th>
        {{-- <th scope="col" style="text-align:center">Brand</th> --}}
        <th scope="col" style="text-align:center">Model</th>
        {{-- <th scope="col" style="text-align:center">Size</th> --}}
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
        {{-- <td style="text-align:center">{{$tablet->brand}}</td> --}}
        <td style="text-align:center">{{$tablet->model}}</td>
        {{-- <td style="text-align:center">{{$tablet->size}}</td> --}}
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


        <td style="text-align:center"><a class="" href="{{ route('tablet.edit', $tablet->id) }}"><i class="fa fa-edit fa-lg"></i></a></td>
      </tr>

      @endforeach

    </tbody>
  </table>
    </div>
</div>
  {{-- {{$tablets->links('pagination::bootstrap-4')}} --}}

        </div>
        </section>

@endsection




