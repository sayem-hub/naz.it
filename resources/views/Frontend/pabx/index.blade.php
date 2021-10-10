@extends('layouts.frontend')

@section('main')



<div class="row">
    <div class="col-md-0"></div>
    <div class="col-md-13">

        <h3 class="text-center mt-3">PABX Users List</h3>

        <div class="form-group">
            <a href="{{ route('frontend.pabx.create') }}" class="btn btn-success">Add New Extension</a>
            <a href="{{route('create.pabx.pdf')}}" class="btn btn-warning btn-sm">PDF Report</a>
        </div>

<table class="table table-bordered table-hover" style="font-size: 13px">
    <thead>
        <tr>
            <th scope="col" style="text-align:center">SL</th>
            <th scope="col" style="text-align:center">Employee Name</th>
            <th scope="col" style="text-align:center">Designation</th>
            <th scope="col" style="text-align:center">Section</th>
            <th scope="col" style="text-align:center">Department</th>
            <th scope="col" style="text-align:center">PABX No</th>
            <th scope="col" style="text-align:center">Model</th>
            <th scope="col" style="text-align:center">Status</th>
            {{-- <th scope="col">Remarks</th> --}}
            <th scope="col" style="text-align:center">Updated at</th>
            <th scope="col" style="text-align:center">Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach($pabxes as $key=>$pabx)

        <tr>
            <th scope="row" style="text-align:center">{{$key+1}}</th>
            <td>{{$pabx->employee_name}}
            <td>{{$pabx->designation}}</td>
            <td>{{$pabx->section}}</td>
            <td>{{$pabx->department}}</td>
            <td style="text-align:center">{{$pabx->pabx_no}}</td>
            <td style="text-align:center">{{$pabx->model}}</td>
            <td style="text-align:center">{{$pabx->status}}</td>
            {{-- <td>{{$pabx->remarks}}</td> --}}
            <td style="text-align:center">{{$pabx->updated_at->format('Y-m-d')}}</td>
            <td style="text-align:center">
                <a class="btn btn-secondary" href="{{ route('frontend.pabx.edit', $pabx->id)}}">Edit</a>
            </td>
        </tr>

        @endforeach

    </tbody>
</table>
{{ $pabxes->links('pagination::bootstrap-4')}}

@endsection
