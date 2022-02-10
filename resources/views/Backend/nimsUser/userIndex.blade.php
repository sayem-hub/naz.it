@extends('layouts.backend')

@section('main')

<h3 class="text-center mt-3">NIMS User List</h3>

<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">SL</th>
        <th scope="col">Name</th>
        <th scope="col">Designation</th>
        <th scope="col">Emp ID</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Section</th>
        <th scope="col">Department</th>
          <th scope="col">Role</th>
        <th scope="col">Company</th>
        <th scope="col">Last Login </th>
        <th scope="col">Current Login </th>

      </tr>
    </thead>
    <tbody>

    @foreach($nims_users as $key=>$nims_user)

      <tr class>
        <th scope="row">{{$key+1}}</th>
        <td>{{$nims_user->name}}</td>
        <td>{{$nims_user->designation}}</td>
        <td>{{$nims_user->office_id}}</td>
        <td>{{$nims_user->email}}</td>
        <td>{{$nims_user->phone}}</td>
        <td>{{$nims_user->section}}</td>
        <td>{{$nims_user->department}}</td>
        <td>{{$nims_user->role}}</td>
        <td>{{$nims_user->company}}</td>


          @if($nims_user->last_login_at==!'Null')
        @else
          <td class="text-primary">{{\Carbon\Carbon::parse($nims_user->last_login_at)->diffForHumans()}}</td>
       <td class="text-success">{{\Carbon\Carbon::parse($nims_user->current_login_at)->diffForHumans()}}</td>
          @endif


        {{--<td>
          <a class="btn btn-primary" href="{{route('admin.outgoing.edit',$nims_user->id)}}">Edit</a>
          <a class="btn btn-warning" href="{{route('admin.outgoing.delete',$nims_user->id)}}">Delete</a>
        </td>--}}
      </tr>

      @endforeach

    </tbody>
  </table>
  {{$nims_users->links('pagination::bootstrap-4')}}

@endsection
