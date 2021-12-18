@extends('layouts.frontend')

@section('main')

<section class="contact-section pt-100">

    <div class="container">

<h3 class="text-center mt-3">CC Camera List</h3>
<a href="{{route('camera.create')}}" class="btn btn-success">Add CC Camera</a>
<a href="{{route('camera.export.excel')}}" class="btn btn-info">Export to Excel</a> <br>
<table class="table table-bordered table-hover" style="font-size: 13px"> <br>
    <thead>
        <tr>
            <th scope="col" style="text-align:center">SL</th>
            <th scope="col" style="text-align:center">Camera Name & No.</th>
            <th scope="col" style="text-align:center">Location</th>
            <th scope="col" style="text-align:center">DVR No</th>
            <th scope="col" style="text-align:center">Status</th>
            <th scope="col" style="text-align:center">Updated at</th>
            <th scope="col" style="text-align:center">Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach($ccameras as $key=>$ccamera)

        <tr>
            <th scope="row" style="text-align:center">{{$key+1}}</th>
            <td>{{$ccamera->camname}}-{{$ccamera->camno}}</td>
            <td>{{$ccamera->camlocation}}</td>
            <td style="text-align:center">{{$ccamera->dvr_no}}</td>
            <td style="text-align:center">{{$ccamera->status}}</td>
            <td style="text-align:center">{{$ccamera->updated_at}}</td>

            <td style="text-align:center">
                <a class="" href="{{ route('camera.edit', $ccamera->id)}}"><i class="fa fa-edit fa-lg"></i></a>

            </td>
        </tr>

        @endforeach

    </tbody>
</table>
{{$ccameras->links('pagination::bootstrap-4')}}

    </div>
</section>
@endsection
