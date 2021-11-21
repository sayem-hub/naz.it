@extends('layouts.frontend')
@section('main')


<div class="row">
    <div class="col-md-0"></div>
    <div class="col-md-13">

        <h3 class="text-center mt-3">Issued RF ID List</h3>

        <form action="{{ route('rfid.search') }}" method="GET">
            <div class="form-group">
                <a href={{ route('rfid.create') }} class="btn btn-success">Issue New ID</a>
                <div class="form-group row">
                    <div class="col-xs-3">

                        <input type="text" class="form-control" name="query" placeholder="NAZ ID or RF ID"
                            value="{{ request()->input('query') }}">
                        <span class="text-danger">@error('query'){{ $message }}@enderror</span>


                    </div>
                    <button type="submit" class="btn btn-info">Search</button>
                </div>

            </div>
        </form>


<table class="table table-bordered table-hover" style="font-size: 14px">
    <thead>
      <tr>
        <th scope="col" style="text-align:center">SL</th>
        <th scope="col" style="text-align:center">NAZ ID</th>

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
        <td style="text-align:center"><a class="btn-secondary btn-block" href="{{ route('rfid.edit', $rfid->id) }}">Edit</a></td>
      </tr>

      @endforeach

    </tbody>
  </table>
    </div>
</div>
  {{$rfids->links('pagination::bootstrap-4')}}

@endsection


