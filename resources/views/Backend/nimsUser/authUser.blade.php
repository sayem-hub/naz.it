@extends('layouts.backend')

@section('main')

<h3 class="text-center mt-3">Logged in User List</h3>

<table class="table">
    <thead>
      <tr>
        <th scope="col">SL</th>
          <th scope="col">User ID</th>
        <th scope="col">Name</th>
        <th scope="col">Designation</th>
        <th scope="col">Emp ID</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Section</th>
        <th scope="col">Department</th>
          <th scope="col">Role</th>
        <th scope="col">Company</th>
        <th scope="col">Created at</th>


      </tr>
    </thead>
    <tbody>

    @foreach($logged_users as $key=>$logged_user)

      <tr>
        <th scope="row">{{$key+1}}</th>
          <td>{{$logged_user->id}}</td>
        <td>{{$logged_user->name}}</td>
        <td>{{$logged_user->designation}}</td>
        <td>{{$logged_user->office_id}}</td>
        <td>{{$logged_user->email}}</td>
        <td>{{$logged_user->phone}}</td>
        <td>{{$logged_user->section}}</td>
        <td>{{$logged_user->department}}</td>
        <td>{{$logged_user->role}}</td>
        <td>{{$logged_user->company}}</td>
        <td>{{$logged_user->created_at}}</td>


        {
      </tr>

      @endforeach

    </tbody>
  </table>
  {{$logged_users->links('pagination::bootstrap-4')}}

@endsection
