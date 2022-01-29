@extends('layouts.backend')

@section('main')

    <div class="row">

    <div class="col-md-2"></div>

    <div class="col-md-8">

        <h4 class="text-center mt-3">User Request Section</h4>



            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div style="margin-top: 30px">
                @if(session()->has('message'))
                    <div class="alert alert-success mt-3">
                        {{ session()->get('message') }}
                    </div>
            </div>
                @endif

            <h5>Email ID Request List</h5>
            <table class="table w-auto small text-nowrap">
                <thead>
                <tr>
                    <th scope="col" class="text-center">SL</th>
                    <th scope="col" class="text-center">Emp ID</th>
                    <th scope="col" class="text-center">Emp Name</th>
                    <th scope="col" class="text-center">Designation</th>
                    <th scope="col" class="text-center">Sec</th>
                    <th scope="col" class="text-center">Dept</th>
                    <th scope="col" class="text-center">DOJ</th>
                    <th scope="col" class="text-center">Mobile</th>
                    <th scope="col" class="text-center">Create at</th>
                    <th scope="col" class="text-center">Status</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($email_requests as $key=>$email_request)

                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td class="text-center">{{$email_request->office_id}}</td>
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
                            <a class="btn btn-secondary" href="{{route('view.email.request', $email_request->id)}}">View</a>
                            <a class="btn btn-warning" href="{{route('editForEntry.email.request', $email_request->id)}}">Finish</a>
                        </td>
                    </tr>

                @endforeach

                </tbody>
            </table>

            {{$email_requests->links('pagination::bootstrap-4')}}
    </div>
    </div>
@endsection


