@extends('layouts.frontend')

@section('main')

<h3 class="text-center mt-3">PABX Users List</h3>
<a href="{{ route('frontend.pabx.create') }}" class="btn btn-success">Add New PABX</a>
<table class="table table-bordered table-hover" style="font-size: 14px">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Employee Name</th>
            <th scope="col">Designation</th>
            <th scope="col">Section</th>
            <th scope="col">Department</th>
            <th scope="col">PABX No</th>
            <th scope="col">Model</th>
            <th scope="col">Status</th>
            <th scope="col">Remarks</th>
            <th scope="col">Updated at</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach($pabxes as $key=>$pabx)

        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$pabx->employee_name}}
            <td>{{$pabx->designation}}</td>
            <td>{{$pabx->section}}</td>
            <td>{{$pabx->department}}</td>
            <td>{{$pabx->pabx_no}}</td>
            <td>{{$pabx->model}}</td>
            <td>{{$pabx->status}}</td>
            <td>{{$pabx->remarks}}</td>
            <td>{{$pabx->updated_at->format('Y-m-d')}}</td>
            <td>
                <a class="btn btn-secondary" href="{{ route('frontend.pabx.edit', $pabx->id)}}">Edit</a>
            </td>
        </tr>

        @endforeach

    </tbody>
</table>
{{ $pabxes->links('pagination::bootstrap-4')}}

@endsection
