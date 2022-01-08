@extends('layouts.frontend')
@section('main')

    <section class="contact-section pt-130">

<div class="container">
<div class="row">
    <div class="col-md-12">

        <h4 class="text-center mt-3">Search Results by "{{$search_text}}"</h4>

        <form class="" action="#" method="GET">



            {{--<div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="{{route('create.preq.pdf')}}" class="btn btn-danger btn-sm">Pending report</a>
                <a href="{{route('create.rreq.pdf')}}" class="btn btn-warning btn-sm">Receipt report</a>
            </div>--}}

            <div class="col-xs-6 col-md-4">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search by name" name="query" id="txtSearch" value="{{ request()->input('query') }}">

                    <div class="input-group-btn">
                        <button class="btn btn-primary" type="submit">
                            <span class="search"><i class="fa fa-search fa-fw"></i>Search</span>
                        </button>

                    </div>
                    <div class="text-danger">@error('query'){{ $message }}@enderror</div>
                </div>
            </div>
        </form>



        <table class="table table-bordered text-nowrap table-hover">
    <thead>
      <tr>
        <th scope="col" style="text-align:center">SL</th>
        <th scope="col" style="text-align:center">Emp ID</th>
        <th scope="col" style="text-align:center">Employee Name</th>
        <th scope="col" style="text-align:center">Designation</th>
        <th scope="col" style="text-align:center">Email ID</th>
        <th scope="col" style="text-align:center">Department</th>
        <th scope="col" style="text-align:center">Created at</th>
{{--        <th scope="col" style="text-align:center">Status</th>--}}

      </tr>
    </thead>
    <tbody>

    @foreach($emailIds as $key=>$emailId)

      <tr>
        <th scope="row" style="text-align:center">{{$key+1}}</th>
        <td style="text-align:center">{{$emailId->office_id}}</td>
        <td>{{$emailId->full_name}}</td>
        <td>{{$emailId->designation}}</td>
        <td>{{$emailId->created_address}}</td>
        <td>{{$emailId->department}}</td>
        <td style="text-align:center">{{$emailId->updated_at}}</td>
        {{-- <td>{{date('d/m/Y', strtotime($emailId>requisition_date))}}</td> --}}


       {{-- @php
        if ( $emailId->status == 'Pending'):
        $color = 'red';
        elseif ( $emailId->status == 'Received'):
        $color = 'green';
        else:
        $color = 'gray';
        endif;
        @endphp

        <td style="color: {{$color}}; text-align:center">{{ $emailId->status }}</td>--}}

      </tr>

      @endforeach

    </tbody>
  </table>
    </div>
</div>
  {{$emailIds->links('pagination::bootstrap-4')}}
</div>
    </section>
@endsection


