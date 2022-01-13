@extends('layouts.frontend')

@section('main')

<section id="service" class="service-section pt-130 ">

<div class="container">
    <div class="row">
        <div class="col-lg-12">

        <h4 class="text-center ">Computer Users List</h4>

                <form class="" action="{{ route('computer.search') }}" method="GET">

                    <a href="{{ route('computer.user.create') }}" class="btn btn-success"><i class="fa fa-plus"></i>New User</a>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="{{route('pdf.generate')}}" class="btn btn-warning btn-sm pull-right"> PDF Report</a>

                    </div>

                    <div class="col-xs-6 col-md-4">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Name, Computer ID, Department" name="query"
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




        {{-- <form action="{{ route('computer.search') }}" method="GET">
                <div class="form-group">
                    <a href={{ route('computer.user.create') }} class="btn btn-success"><i class="fa fa-plus"></i>New User</a>
                    <a href="{{route('pdf.generate')}}" class="btn btn-warning btn-sm pull-right"> PDF Report</a>

                    <div class="form-group row">
                        <div class="col-xs-3">
                            <input type="text" class="form-control" name="query" placeholder="Name, Computer ID, Department"
                                value="{{ request()->input('query') }}">
                            <span class="text-danger">@error('query'){{ $message }}@enderror</span>
                        </div>
                        <button type="submit" class="btn btn-info">Search</button>

                    </div>
                </div>
            </form> --}}


    <table class="table table-bordered text-nowrap w-auto small table-hover">
    <thead class="thead-dark">
    <tr>
       <th scope="col" style="text-align:center">SL</th>
        <th scope="col" style="text-align:center">Com ID</th>
        <th scope="col" style="text-align:center">Emp ID</th>
        <th scope="col" style="text-align:center">Name</th>
        <th scope="col" style="text-align:center">Designation</th>
        <th scope="col" style="text-align:center">Type</th>
        <th scope="col" style="text-align:center">IP address</th>
        <th scope="col" style="text-align:center">Email address</th>
        <th scope="col" style="text-align:center">Section</th>
        {{-- <th scope="col" style="text-align:center">Department</th> --}}
        <th scope="col" style="text-align:center">Status</th>
        <th scope="col" style="text-align:center">KP Status</th>
        <th scope="col" style="text-align:center">Action</th>

      </tr>
    </thead>
    <tbody>

      @foreach($computers as $key=>$user)

      <tr>
        <th scope="row" style="text-align:center">{{$key+1}}</th>
        <td style="text-align:center">{{$user->Comid}}</td>
        <td style="text-align:center">{{$user->Emp_id}}</td>
        <td class="text-wrap">{{$user->User}}</td>
        <td class="text-wrap">{{$user->Designation}}</td>
        <td style="text-align:center">{{$user->Comtype}}</td>
        <td style="text-align:center">{{$user->Ipadd}}</td>
        <td>{{$user->Email}}</td>
        <td class="text-wrap">{{$user->Section}}</td>
        {{-- <td>{{$user->Department}}</td> --}}

            @php
            if ( $user->Status == 'In repair'):
            $color = 'red';
            elseif ( $user->Status == 'Running'):
            $color = 'green';
            elseif ( $user->Status == 'Idle'):
            $color = 'blue';
            else:
            $color = 'gray';
            endif;
            @endphp

            <td style="color: {{$color}}; text-align:center">{{ $user->Status }}</td>
            <td class="text-wrap" style="text-align:center">{{$user->Kp_status}}</td>

        <td style="text-align:center">
          <a class="" href="{{route('computer.user.edit',$user->id)}}"><i class="fa fa-edit fa-lg"></i></a>

        </td>
      </tr>

      @endforeach

    </tbody>
  </table>

  {{-- {{$computers->links('pagination::bootstrap-4')}} --}}

</div>
  </div>
</div>
</section>

@endsection




