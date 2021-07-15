@extends('layouts.frontend')

@section('main')

<h3 class="text-center mt-3">Computer Users List</h3>


<div class="col-md-0"></div>
    <div class="col-md-1">

<div class="pdf" style=margin-top:10px;>
    <a href="{{route('computer.user.create')}}" class="btn btn-success">Add New Computer</a>
    {{-- <a href="{{route('computer.pdf')}}" class="btn btn-danger btn-sm">Preview PDF</a> --}}
    <a href="{{route('pdf.generate')}}" class="btn btn-warning btn-sm">Generate PDF</a>
</div>
</div>



    <div class="row">
            <div class="col-md-9" ></div>
            <div class="col-md-0">
<form action="{{ route('computer.search') }}" method="GET">

                <div class="input-group">
                    <input type="text" class="form-control rounded" name= "query" placeholder="Name or Department" aria-label="Search"
                        aria-describedby="search-addon" value="{{ request()->input('query') }}"/>
                    <button type="submit" class="btn btn-outline-primary">Search</button>
                    <span class="text-danger">@error('query'){{ $message }}@enderror</span>
                </div>
                </div>
        </form>
            </div>



<table class="table table-bordered table-hover" style="font-size: 14px">
    <thead class="thead-dark">
      <tr>
       <th scope="col">#</th>
        <th scope="col">Computer ID</th>
        <th scope="col">Employee ID</th>
        <th scope="col">Name</th>
        <th scope="col">Designation</th>
        <th scope="col">IP Address</th>
        <th scope="col">Email Address</th>
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
        <td>{{$user->Status}}</td>
        <td>
          <a class="btn btn-secondary" href="{{route('computer.user.edit',$user->id)}}">Edit</a>

        </td>
      </tr>

      @endforeach

    </tbody>
  </table>
  {{-- {{$computers->links('pagination::bootstrap-4')}} --}}

@endsection




