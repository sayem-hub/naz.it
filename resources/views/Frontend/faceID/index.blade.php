@extends('layouts.frontend')

@section('main')
<section class="contact-section pt-120">
    <div class="container">

<div class="row">
    <div class="col-md-0"></div>
    <div class="col-md-12">

        <h4 class="text-center mt-3">FaceId Machine List</h4>



        <a href="{{ route('faceid.create') }}" class="btn btn-success"><i class="fa fa-plus"></i> Machine</a>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">

                    <a href="{{route('create.faceid.pdf')}}" class="btn btn-warning btn-sm pull-right">PDF Report</a>
            </div>


<table class="table table-bordered table-hover" style="font-size: .8rem">
    <thead>
        <tr>
            <th class="text-center" scope="col">SL</th>
            <th scope="col" class="text-center">Machine Name</th>
            <th scope="col" class="text-center">ID</th>
            <th scope="col" class="text-center">IP address</th>
            <th scope="col" class="text-center">Serial no</th>
            <th scope="col" class="text-center">Type</th>
            <th scope="col" class="text-center">Model</th>
            <th scope="col" class="text-center">Location</th>
            <th scope="col" class="text-center">Status</th>
            {{-- <th scope="col">Updated at</th> --}}
            <th scope="col" class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach($machines as $key=>$machine)

        <tr>
            <th scope="row" class="text-center">{{$key+1}}</th>
            <td >{{$machine->machine_name}}
            <td class="text-center">{{$machine->machine_id}}</td>
            <td class="text-center">{{$machine->ip_address}}</td>
            <td class="text-center">{{$machine->serial_no}}</td>
            <td class="text-center">{{$machine->type}}</td>
            <td class="text-center">{{$machine->model}}</td>
            <td>{{$machine->location}}</td>

            @php
            if ( $machine->status == 'In repair'):
            $color = 'red';
            elseif ( $machine->status == 'Active'):
            $color = 'green';
            elseif ( $machine->status == 'Idle'):
            $color = 'blue';
            elseif ( $machine->status == 'Inactive'):
            $color = 'brown';
            else:
            $color = 'gray';
            endif;
            @endphp

            <td style="color: {{$color}}; text-align:center">{{ $machine->status }}</td>
            {{-- <td>{{$machine->updated_at->format('Y-m-d')}}</td> --}}
            <td class="text-center"><a class="" href="{{ route('faceid.edit', $machine->id)}}" ><i class="fa fa-edit fa-lg"></i></a></td>
        </tr>

        @endforeach

    </tbody>
</table>
{{ $machines->links('pagination::bootstrap-4')}}

    </div>
</div>
    </div>

</section>
@endsection
