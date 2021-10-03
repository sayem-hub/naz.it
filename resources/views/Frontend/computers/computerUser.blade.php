@extends('layouts.frontend')

@section('main')

<div class="row">
    <div class="col-md-0"></div>
    <div class="col-md-13">

        <h3 class="text-center mt-3">Computer Users List</h3>

        <form action="{{ route('computer.search') }}" method="GET">
            <div class="form-group">
                <a href={{ route('computer.user.create') }} class="btn btn-success">Add New Computer</a>
                <a href="{{route('pdf.generate')}}" class="btn btn-warning btn-sm">PDF Report</a>
                <div class="form-group row"><br>
                    <div class="col-xs-3">

                        <input type="text" class="form-control" name="query" placeholder="Name or Computer ID or Department"
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
       <th scope="col">#</th>
        <th scope="col">Computer ID</th>
        <th scope="col">Employee ID</th>
        <th scope="col">Name</th>
        <th scope="col">Designation</th>
        <th scope="col">IP address</th>
        <th scope="col">Email address</th>
        <th scope="col">Section</th>
        <th scope="col">Department</th>
        <th scope="col">Status</th>

        <th scope="col">Action</th>

      </tr>
    </thead>
    <tbody>

      @foreach($computers as $key=>$user)

      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$user->Comid}}</td>
        <td>{{$user->Emp_id}}</td>
        <td>{{$user->User}}</td>
        <td>{{$user->Designation}}</td>
        <td>{{$user->Ipadd}}</td>
        <td>{{$user->Email}}</td>
        <td>{{$user->Section}}</td>
        <td>{{$user->Department}}</td>

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

            <td style="color: {{$color}}">{{ $user->Status }}</td>

        <td>
          <a class="btn btn-secondary" href="{{route('computer.user.edit',$user->id)}}">Edit</a>

        </td>
      </tr>

      @endforeach

    </tbody>
  </table>
    </div>
</div>
  {{-- {{$computers->links('pagination::bootstrap-4')}} --}}

@endsection




