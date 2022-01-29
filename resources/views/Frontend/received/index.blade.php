@extends('layouts.frontend')
@section('main')

<section class="contact-section pt-130">
    <div class="container-fluid">


<div class="row">
<div class="col-md-0"></div>
<div class="col-md-13">

<h4 class="text-center mt-3">Received Items List</h4>


    <form action="{{ route('received.goods.search') }}" method="GET">

        <a href="{{ route('received.goods.new') }}" class="btn btn-success"><i class="fa fa-plus"></i>Add New </a>



        <div class="col-xs-6 col-md-4">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Serial No. or User name" name="query" id="txtSearch"
                       value="{{ request()->input('query') }}">

                <div class="input-group-btn">
                    <button class="btn btn-primary" type="submit">
                        <span class="search"><i class="fa fa-search fa-fw"></i>Search</span>
                    </button>

                </div>
                <div class="text-danger">@error('query'){{ $message }}@enderror</div>
            </div>
        </div>
    </form>

<table class="table table-bordered table-hover" style="font-size: .8rem;">
    <thead>
      <tr>
        <th scope="col" class="text-center">SL</th>
        <th scope="col" class="text-center">Item name</th>
        <!--<th scope="col"class="text-center">Quantity</th>-->
        <th scope="col" class="text-center">Brand</th>
        <th scope="col" class="text-center">Model</th>
        <th scope="col" class="text-center">Serial no.</th>
        <th scope="col" class="text-center">Supplier</th>
        <th scope="col" class="text-center">Pur date</th>
        <th scope="col" class="text-center">Wty</th>
        <th scope="col" class="text-center">Challan no.</th>
        <th scope="col" class="text-center">Challan</th>
        <th scope="col" class="text-center">Req no.</th>
        <th scope="col" class="text-center">P.type</th>
        <th scope="col" class="text-center">User</th>
        <th scope="col" class="text-center">Dept.</th>
        {{-- <th scope="col"class="text-center">Notes</th> --}}
        {{-- <th scope="col"class="text-center">Action</th> --}}

      </tr>
    </thead>
    <tbody>

    @foreach($incoming as $key=>$received)

      <tr>
        <th scope="row" class="text-center">{{$key+1}}</th>
        <td>{{$received->item_name}}</td>
       {{-- <td>{{$received->quantity}}</td> --}}
        <td class="text-center">{{$received->brand_name}}</td>
        <td class="text-center">{{$received->model}}</td>
        <td class="text-wrap">{{$received->serial_no}}</td>
        <td class="text-center ">{{$received->supplier}}</td>
        <td class="text-center text-nowrap">{{$received->pur_date}}</td>
        <td class="text-center">{{$received->warranty}}</td>
        <td class="text-center">{{$received->challan_no}}</td>
        <td class="text-center"> <img src="{{asset('upload/challans/'.$received->challan_img)}}" alt="Not image file" width="95px" height="60px"> </td>
        <td class="text-center">{{$received->req_no}}</td>
        <td class="text-center">{{$received->pur_type}}</td>
        <td class="text-wrap">{{$received->user_name}}</td>
        <td class="text-center">{{$received->department}}</td>
        {{-- <td>{{$received->notes}}</td> --}}
       {{-- <td>{{$received->created_at}}</td> --}}
        {{-- <td>{{$received->updated_at}}</td>--> --}}

        {{-- <td>
          <a class="btn btn-secondary" href="#">Edit</a>
        </td>--}}
      </tr>

      @endforeach

    </tbody>
  </table>
</div>
</div>

{{ $incoming->links('pagination::bootstrap-4')}}

</div>
</section>
@endsection


