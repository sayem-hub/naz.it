@extends('layouts.frontend')
@section('main')


<div class="row">
<div class="col-md-0"></div>
<div class="col-md-13">

<h3 class="text-center mt-3">Received Items List</h3>

<form action="{{ route('received.goods.search') }}" method="GET">
    <div class="form-group">
        <a  href={{ route('received.goods.new') }} class="btn btn-success">Add New Item</a>
        <div class="form-group row" >
            <div class="col-xs-3">

            <input type="text" class="form-control" name="query" placeholder="Serial No. or User name" value="{{ request()->input('query') }}">
            <span class="text-danger">@error('query'){{ $message }}@enderror</span>


            </div>
            <button type="submit" class="btn btn-info">Search</button>
        </div>

    </div>
</form>

<table class="table table-bordered table-hover" style="font-size: 12px">
    <thead>
      <tr>
        <th scope="col" style="text-align:center">SL</th>
        <th scope="col"style="text-align:center">Item name</th>
        <!--<th scope="col"style="text-align:center">Quantity</th>-->
        <th scope="col"style="text-align:center">Brand</th>
        <th scope="col"style="text-align:center">Model</th>
        <th scope="col"style="text-align:center">Serial no.</th>
        <th scope="col"style="text-align:center">Supplier</th>
        <th scope="col"style="text-align:center">Pur date</th>
        <th scope="col"style="text-align:center">Wty</th>
        <th scope="col"style="text-align:center">Challan no.</th>
        <th scope="col"style="text-align:center">Challan</th>
        <th scope="col"style="text-align:center">Req no.</th>
        <th scope="col"style="text-align:center">P.type</th>
        <th scope="col"style="text-align:center">User</th>
        <th scope="col"style="text-align:center">Dept.</th>
        {{-- <th scope="col"style="text-align:center">Notes</th> --}}
        {{-- <th scope="col"style="text-align:center">Action</th> --}}

      </tr>
    </thead>
    <tbody>

    @foreach($incoming as $key=>$received)

      <tr>
        <th scope="row" style="text-align:center">{{$key+1}}</th>
        <td>{{$received->item_name}}</td>
       {{-- <td>{{$received->quantity}}</td> --}}
        <td style="text-align:center">{{$received->brand_name}}</td>
        <td style="text-align:center">{{$received->model}}</td>
        <td>{{$received->serial_no}}</td>
        <td style="text-align:center">{{$received->supplier}}</td>
        <td style="text-align:center">{{$received->pur_date}}</td>
        <td style="text-align:center">{{$received->warranty}}</td>
        <td style="text-align:center">{{$received->challan_no}}</td>
        <td style="text-align:center"> <img src="{{asset('upload/challans/'.$received->challan_img)}}" alt="Not image file" width="95px" height="60px"> </td>
        <td style="text-align:center">{{$received->req_no}}</td>
        <td style="text-align:center">{{$received->pur_type}}</td>
        <td>{{$received->user_name}}</td>
        <td style="text-align:center">{{$received->department}}</td>
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
@endsection


