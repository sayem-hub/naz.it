@extends('layouts.backend')

@section('main')
    <div class="row">
        <h4 class="text-center mt-3">User Request Section</h4>

        <div class="col-md-7">


<h5>Email ID Request List</h5>
<table class="table">
    <thead>
      <tr>
        <th scope="col">SL</th>
          <th scope="col">Emp ID</th>
        <th scope="col">Emp Name</th>
        <th scope="col">Designation</th>
        <th scope="col">Sec</th>
        <th scope="col">Dept</th>
        <th scope="col">DOJ</th>
        <th scope="col">Mobile</th>
          <th scope="col">Create</th>
          <th scope="col">Status</th>
        <th scope="col">Action</th>


      </tr>
    </thead>
    <tbody>

    @foreach($email_requests as $key=>$email_request)

      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$email_request->office_id}}</td>
        <td>{{$email_request->full_name}}</td>
        <td>{{$email_request->designation}}</td>
        <td>{{$email_request->section}}</td>
        <td>{{$email_request->department}}</td>
        <td>{{$email_request->doj}}</td>
        <td>{{$email_request->mobile}}</td>
          <td>{{$email_request->created_at}}</td>
        <td>{{$email_request->status}}</td>
    <td>
        <a class="btn btn-primary" href="{{route('edit.email.request', $email_request->id)}}">Edit</a>
        <a class="btn btn-primary" href="{{route('view.email.request', $email_request->id)}}">View</a>

          </td>
            </tr>

    @endforeach



    </tbody>
  </table>
{{$email_requests->links('pagination::bootstrap-4')}}
        </div>

    </div>

@endsection
