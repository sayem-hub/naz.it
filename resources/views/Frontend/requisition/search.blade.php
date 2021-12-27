@extends('layouts.frontend')
@section('main')

<section class="contact-section pt-130">
    <div class="container">
        <div class="row">

            <div class="col-md-12">

<h4 class="text-center mt-3">Search results by "{{$search_text}}"</h4>
<a href={{ route('requisition.add') }} class="btn btn-success"><i class="fa fa-plus"></i> Requisition</a>
<table class="table table-bordered table-hover">
    <thead>
        <tr>
           <th scope="col">SL</th>
            <th scope="col">Requisition</th>
            <th scope="col">Item(s)</th>
            <th scope="col">Required for</th>
            <th scope="col">Designation</th>
            <th scope="col">Section/Dept.</th>
            <th scope="col">Req Date</th>
            <th scope="col">Status</th>
            <th scope="col">Rcv Date</th>
            <th scope="col">GRN</th>
            <th scope="col">Challan</th>
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

                    <td>{{$requisition->received_date}}</td>
                    <td>{{$requisition->Grn}}</td>
                    <td style="text-align:center"><a href="{{ asset('upload/requisition/challans/'.$requisition->challan) }}"><i
                                class="fa fa-eye fa-lg"></i><i class="fa fa-eye fa-lg"></i></a>
                    </td>

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

        </div>
    </div>
</section>

            @endsection
