@extends('layouts.frontend')

@section('main')

<div class="row">

    <div class="col-12">


        <h3 class="text-center mt-3">Computer Users List</h3>

        <form action="{{ route('computer.search') }}" method="GET">

            <form action="{{ route('computer.search') }}" method="GET">
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
            </form>





    <table class="table table-bordered table-hover" style="font-size: 12px">
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
        <td>{{$user->User}}</td>
        <td>{{$user->Designation}}</td>
        <td style="text-align:center">{{$user->Comtype}}</td>
        <td style="text-align:center">{{$user->Ipadd}}</td>
        <td>{{$user->Email}}</td>
        <td>{{$user->Section}}</td>
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
            <td style="text-align:center">{{$user->Kp_status}}</td>

        <td style="text-align:center">
          <a class="" href="{{route('computer.user.edit',$user->id)}}"><i class="fa fa-edit fa-lg"></i></a>

        </td>
      </tr>

      @endforeach

    </tbody>
  </table>
    </div>
</div>
  {{-- {{$computers->links('pagination::bootstrap-4')}} --}}

@endsection




