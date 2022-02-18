@extends('layouts.frontend')
@section('main')

    <section class="contact-section pt-130">

<div class="container">
<div class="row">
    <div class="col-md-12">

        <h4 class="text-center m-3">List of nazdeptheads@nz-bd.com Email Ids </h4>


        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div >
            @if(session()->has('message'))
                <div class="alert alert-success mt-3">
                    {{ session()->get('message') }}
                </div>
            @endif
        </div>

        <a href="{{ route('nazdeptheads.create') }}" class="btn btn-outline-info"><i class="fa fa-plus"></i>Email ID</a>


        <table class="table table-danger table-bordered text-nowrap table-hover" style="font-size: .8rem">

    <thead>
      <tr>
        <th scope="col" class="text-center">SL</th>
        <th scope="col" class="text-center">Emp ID</th>
        <th scope="col" class="text-center">Employee Name</th>
        <th scope="col" class="text-center">Designation</th>
          <th scope="col" class="text-center">Section</th>
          <th scope="col" class="text-center">Department</th>
          <th scope="col" class="text-center">Email ID</th>
{{--        <th scope="col" class="text-center">Mobile No</th>--}}
        <th scope="col" class="text-center">Date of Join</th>
          <th scope="col" class=text-center>Status</th>
          <th scope="col" class=text-center>Action</th>



      </tr>
    </thead>
    <tbody>

    @foreach($nazDeptHeads as $key=>$nazDeptHead)

      <tr class="table-primary">
        <th scope="row" class="text-center">{{$key+1}}</th>
        <td class="text-center">{{$nazDeptHead->emp_id}}</td>
        <td>{{$nazDeptHead->employee_name}}</td>
        <td class="text-center">{{$nazDeptHead->designation}}</td>
          <td class="text-center">{{$nazDeptHead->section}}</td>
          <td class="text-center">{{$nazDeptHead->department}}</td>
          <td>{{$nazDeptHead->email_id}}</td>
{{--          <td class="text-center">{{$nazDeptHead->mobile}}</td>--}}
          <td class="text-center">{{$nazDeptHead->doj}}</td>
          <td class="text-center">{{$nazDeptHead->status}}</td>
          <td class="text-center"><a class="#" href="{{ route('nazdeptheads.edit', $nazDeptHead->id) }}"><i class="fa fa-edit fa-lg"></i></a></td>

      @endforeach

    </tbody>
  </table>
    </div>
</div>

</div>
    </section>
@endsection


