@extends('layouts.backend')

@section('main')

<h3 class="text-center mt-3">Computer User List</h3>
<a href="{{route('admin.computer.create')}}" class="btn btn-success">Add New Computer</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Computer ID</th>
        <th scope="col">Name</th>
        <th scope="col">Designation</th>
        <th scope="col">IP Address</th>
        <th scope="col">Email Address</th>
        <th scope="col">Section</th>
        <th scope="col">Department</th>
        <th scope="col">Status</th>
        <th scope="col">Updated at</th>
        <th scope="col">Action</th>
        
      </tr>
    </thead>
    <tbody>
      
      @foreach($computers as $key=>$user)
          
      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$user->Comid}}</td>
        <td>{{$user->User}}</td>
        <td>{{$user->Designation}}</td>
        <td>{{$user->Ipadd}}</td>
        <td>{{$user->Email}}</td>
        <td>{{$user->Section}}</td>
        <td>{{$user->Department}}</td>
        <td>{{$user->Status}}</td>
        <td>{{$user->updated_at}}</td>
        
        <td>
          <a class="btn btn-primary" href="{{route('admin.computer.edit',$user->id)}}">Edit</a>
          <a class="btn btn-warning" href="{{route('admin.computer.delete',$user->id)}}">Delete</a>
        </td>
      </tr>

      @endforeach

    </tbody>
  </table>
  {{$computers->links('pagination::bootstrap-4')}}

@endsection