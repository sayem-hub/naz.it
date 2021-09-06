@extends('layouts.frontend')
@section('main')

<h3 class="text-center mt-3">Search results</h3>
<a href={{ route('rfid.create') }} class="btn btn-success">Add new requisition</a>
<table class="table table-bordered table-hover" style="font-size: 13px">
    <thead>
        <tr>
           <th scope="col">#</th>
            <th scope="col">Requisition No</th>
            <th scope="col">Item(s)</th>
            <th scope="col">Required for</th>
            <th scope="col">Designation</th>
            <th scope="col">Section/Dept.</th>
            <th scope="col">Requisition Date</th>
            <th scope="col">Status</th>
            {{-- <th scope="col">Notes</th> --}}
            {{-- <th scope="col">Entry at</th> --}}
            <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>

                @foreach($requisitions as $key=>$requisition)

                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$requisition->requisition_no}}</td>
                    <td>{{$requisition->item_names}}</td>
                    <td>{{$requisition->required_for}}</td>
                    <td>{{$requisition->designation}}</td>
                    <td>{{$requisition->department}}</td>
                    <td>{{date('d/m/Y', strtotime($requisition->requisition_date))}}</td>
                        @php
                        if ( $requisition->status == 'Pending'):
                        $color = 'red';
                        elseif ( $requisition->status == 'Received'):
                        $color = 'green';
                        else:
                        $color = 'gray';
                        endif;
                        @endphp
                    <td style="color: {{$color}}">{{ $requisition->status }}</td>

                    {{-- <td>{{$requisition->notes}}</td> --}}
                    {{-- <td>{{date('d/m/Y', strtotime($requisition->created_at))}}</td> --}}
                    <td><a class="btn btn-secondary" href="{{ route('requisition.edit', $requisition->id) }}">Edit</a></td>
                </tr>

                @endforeach

            </tbody>
            </table>
            </div>
            </div>
            {{$requisitions->links('pagination::bootstrap-4')}}

            @endsection
