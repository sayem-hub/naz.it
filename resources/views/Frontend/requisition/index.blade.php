@extends('layouts.frontend')
@section('main')

<section class="contact-section pt-130">

    <div class="container-fluid">

        <div class="row">

            <div class="col-md-12">

             <h4 class="text-center">Requisition Status</h4>

                <form class="" action="{{ route('requisition.search') }}" method="GET">

                        <a href="{{ route('requisition.add') }}" class="btn btn-success"><i class="fa fa-plus"></i>Requisition</a>

                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="{{route('create.preq.pdf')}}">
                                    <button type="button" class="btn btn-warning btn-sm position-relative">Pending
                                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                            {{$pendingCount}}<span class="visually-hidden">
                                                unread messages</span></span></button></a>

                                <a href="{{route('create.rreq.pdf')}}">
                                    <button type="button" class="btn btn-success btn-sm position-relative">Received
                                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">
                                            {{$receivedCount}}<span class="visually-hidden">
                                                unread messages</span></span></button></a>
                            </div>

                        <div class="col-xs-6 col-md-4">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="User, item, req no, or status" name="query" id="txtSearch" value="{{ request()->input('query') }}">

                                <div class="input-group-btn">
                                  <button class="btn btn-primary" type="submit">
                                        <span class="search"><i class="fa fa-search fa-fw"></i>Search</span>
                                    </button>

                                </div>
                                <div class="text-danger">@error('query'){{ $message }}@enderror</div>
                            </div>
                        </div>
                </form>


                <table class="table table-bordered table-hover" style="font-size: .785rem">
                        <thead>
                          <tr>
                            <th scope="col" class="text-center">SL</th>
                            <th scope="col" class="text-center">Requisition</th>
                            <th scope="col" class="text-center">Item(s)</th>
                            <th scope="col" class="text-center">Required for</th>
                            {{-- <th scope="col" class="text-center">Designation</th> --}}
                            <th scope="col" class="text-center">Section</th>
                            <th scope="col" class="text-center">Req date</th>
                            <th scope="col" class="text-center">Status</th>
                            <th scope="col" class="text-center">Rcv date</th>
                            <th scope="col" class="text-center">GRN</th>
                            <th scope="col" class="text-center">Challan</th>
                            <th scope="col" class="text-center">Top</th>

                            {{-- <th scope="col">Notes</th> --}}
                            <th scope="col" class="text-center">Action</th>

                          </tr>
                        </thead>
                        <tbody>

                        @foreach($requisitions as $key=>$requisition)

                          <tr>
                            <th scope="row" class="text-center">{{$key+1}}</th>
                            <td class="text-center">{{$requisition->requisition_no}}</td>
                            <td >{{$requisition->item_names}}</td>
                            <td>{{$requisition->required_for}}</td>
                            {{-- <td>{{$requisition->designation}}</td> --}}
                            <td>{{$requisition->department}}</td>
                            <td class="text-center">{{\Carbon\Carbon::parse($requisition->requisition_date)->format('d-M-y')}}</td>

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

                              @if($requisition->received_date==!'Null')
                                  <td class="text-center">{{'-'}}</td>
                              @else
                            <td class="text-center">{{\Carbon\Carbon::parse($requisition->received_date)->format('d-M-y')}}</td>
                                @endif

                              <td class="text-center">{{$requisition->Grn}}</td>


                            @if ($requisition->challan==!'Null')
                            <td class="text-center"><a href="{{ asset('upload/requisition/challans/'.$requisition->challan) }}"></a></td>
                            @elseif ($requisition->challan=='create.jpg')

                            <td class="text-center"><a href="{{ asset('upload/requisition/challans/'.$requisition->challan) }}"></a></td>
                            @else

                            <td style="text-align:center;"><a href="{{ asset('upload/requisition/challans/'.$requisition->challan) }}"><i
                                        class="fa fa-eye fa-lg"></i></a>
                            </td>
                            @endif



                            <td class="text-center">{{$requisition->pur_type}}</td>



                            {{-- <td>{{$requisition->status}}</td> --}}
                            {{-- <td>{{$requisition->notes}}</td> --}}
                            {{-- <td>{{date('d/m/Y', strtotime($requisition->created_at))}}</td> --}}
                            <td class="text-center"><a class="#" href="{{ route('requisition.edit', $requisition->id) }}"><i class="fa fa-edit fa-lg"></i></a></td>
                          </tr>

                          @endforeach

                        </tbody>
                </table>
                {{$requisitions->links('pagination::bootstrap-4')}}
    </div>
</div>



</section>

@endsection


