@extends('layouts.frontend')
@section('main')

<section class="contact-section pt-130">
    <div class="container">

<div class="row">
    <div class="col-md-0"></div>
    <div class="col-md-12">
        <h4 class="text-center mt-3">Issued RFID List</h4>
        <form action="{{ route('rfid.search') }}" method="GET">

                <a href={{ route('rfid.create') }} class="btn btn-success">Issue New ID</a>

                <div class="col-xs-6 col-md-4">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search by Emp ID or Rfid" name="query" id="txtSearch"
                            value="{{ request()->input('query') }}">

                        <div class="input-group-btn">
                            <button class="btn btn-primary" type="submit">
                                <span class="search"><i class="fa fa-search fa-fw"></i>Search</span>
                            </button>
                        </div>
                        <div class="text-danger">@error('query'){{ $message }}@enderror</div>
                    </div>
                </div>
        </form>


<table class="table table-bordered table-hover" style="font-size: 14px">
    <thead>
      <tr>
        <th scope="col" style="text-align:center">SL</th>
        <th scope="col" style="text-align:center">Emp ID</th>

        <th scope="col" style="text-align:center">Name</th>
        <th scope="col" style="text-align:center">Designation</th>
        <th scope="col" style="text-align:center">Section</th>
        <th scope="col" style="text-align:center">RF ID No</th>
        <th scope="col" style="text-align:center">Issue Date</th>
        <th scope="col" style="text-align:center">Status</th>
        {{-- <th scope="col">Remarks</th> --}}
        {{-- <th scope="col">Created at</th> --}}
        <th scope="col" style="text-align:center">Action</th>

      </tr>
    </thead>
    <tbody>

    @foreach($rfids as $key=>$rfid)

      <tr>
        <th scope="row" style="text-align:center">{{$key+1}}</th>
        <td style="text-align:center">{{$rfid->naz_id}}</td>
        <td>{{$rfid->name}}</td>
        <td style="text-align:center">{{$rfid->designation}}</td>
        <td style="text-align:center">{{$rfid->section}}</td>
        <td style="text-align:center">{{$rfid->rf_id}}</td>
        <td style="text-align:center">{{$rfid->issue_date}}</td>
        <td style="text-align:center">{{$rfid->status}}</td>
        {{-- <td>{{$rfid->remarks}}</td> --}}
        {{-- <td>{{$rfid->created_at}}</td> --}}
        <td style="text-align:center"><a class="" href="{{ route('rfid.edit', $rfid->id) }}"><i class="fa fa-edit fa-lg"></i></a></td>
      </tr>

      @endforeach

    </tbody>
  </table>
    </div>
</div>
  {{$rfids->links('pagination::bootstrap-4')}}

  </div>
</section>

@endsection


