@extends('layouts.frontend')
@section('main')


<div class="row">
    <div class="col-md-0"></div>
    <div class="col-md-13">

        <h3 class="text-center mt-3">Requisition Status</h3>

        <form action="{{ route('requisition.search') }}" method="GET">
            <div class="form-group">
                <a href={{ route('requisition.add') }} class="btn btn-success">Add requisition</a>
                <a href={{route('create.preq.pdf')}} class="btn btn-danger btn-sm">Pending report</a>
                <a href={{route('create.rreq.pdf')}} class="btn btn-warning btn-sm">Receipt report</a>
                <div class="form-group row">
                    <div class="col-xs-3">

                        <input type="text" class="form-control" name="query" placeholder="User, item, req no, or status"
                            value="{{ request()->input('query') }}">
                        <span class="text-danger">@error('query'){{ $message }}@enderror</span>
                    </div>
                    <button type="submit" class="btn btn-info">Search</button>
                </div>

            </div>
        </form>


<table class="table table-bordered table-hover" style="font-size: 11px">
    <thead>
      <tr>
        <th scope="col" style="text-align:center">SL</th>
        <th scope="col" style="text-align:center">Requisition</th>
        <th scope="col" style="text-align:center">Item(s)</th>
        <th scope="col" style="text-align:center">Required for</th>
        {{-- <th scope="col" style="text-align:center">Designation</th> --}}
        <th scope="col" style="text-align:center">Section</th>
        <th scope="col" style="text-align:center">Req date</th>
        <th scope="col" style="text-align:center">Rcvd date</th>
        <th scope="col" style="text-align:center">GRN</th>
        <th scope="col" style="text-align:center">Challan</th>
        <th scope="col" style="text-align:center">Top</th>
        <th scope="col" style="text-align:center">Status</th>

        {{-- <th scope="col">Notes</th> --}}
        {{-- <th scope="col">Entry at</th> --}}
        <th scope="col" style="text-align:center">Action</th>

      </tr>
    </thead>
    <tbody>

    @foreach($requisitions as $key=>$requisition)

      <tr>
        <th scope="row" style="text-align:center">{{$key+1}}</th>
        <td style="text-align:center">{{$requisition->requisition_no}}</td>
        <td>{{$requisition->item_names}}</td>
        <td>{{$requisition->required_for}}</td>
        {{-- <td>{{$requisition->designation}}</td> --}}
        <td>{{$requisition->department}}</td>
        <td style="text-align:center">{{$requisition->requisition_date}}</td>
        {{-- <td>{{date('d/m/Y', strtotime($requisition->requisition_date))}}</td> --}}
        <td style="text-align:center">{{$requisition->received_date}}</td>
        <td style="text-align:center">{{$requisition->Grn}}</td>



        @if ($requisition->challan==!'Null')

            <td style="text-align:center"><a href="{{ asset('upload/requisition/challans/'.$requisition->challan) }}"></a>
        </td>
        @else

        <td style="text-align:center"><a href="{{ asset('upload/requisition/challans/'.$requisition->challan) }}"><i class="fa fa-eye fa-lg"></i><i class="fa fa-eye fa-lg"></i></a>
        </td>
        @endif




        <td style="text-align:center">{{$requisition->pur_type}}</td>


        @php
        if ( $requisition->status == 'Pending'):
        $color = 'red';
        elseif ( $requisition->status == 'Received'):
        $color = 'green';
        else:
        $color = 'gray';
        endif;
        @endphp

        <td style="color: {{$color}}; text-align:center">{{ $requisition->status }}</td>
        {{-- <td>{{$requisition->status}}</td> --}}
        {{-- <td>{{$requisition->notes}}</td> --}}
        {{-- <td>{{date('d/m/Y', strtotime($requisition->created_at))}}</td> --}}
        <td style="text-align:center"><a class=" btn-secondary btn-block" href="{{ route('requisition.edit', $requisition->id) }}">Edit</a></td>
      </tr>

      @endforeach

    </tbody>
  </table>
    </div>
</div>
  {{$requisitions->links('pagination::bootstrap-4')}}

@endsection


