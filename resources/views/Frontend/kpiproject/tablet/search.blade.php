@extends('layouts.frontend')
@section('main')

<h3 class="text-center mt-3">Search Results</h3>
<a href="{{route('computer.user.create')}}" class="btn btn-success">Add New Computer</a>
<table class="table table-bordered table-hover" style="font-size: 14px">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">ComID</th>
            <th scope="col">EmpID</th>
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
{{$computers->links('pagination::bootstrap-4')}}
@endsection
