@extends('layouts.frontend')
@section('main')

<h3 class="text-center mt-3">Received Items List</h3>
<a href={{ route('received.goods.new') }} class="btn btn-success">Add New Item</a>
<table class="table table-bordered" style="font-size: 15px">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Item Name</th>
        <!--<th scope="col">Quantity</th>-->
        <th scope="col">Brand</th>
        <th scope="col">Model</th>
        <th scope="col">Serial No.</th>
        <th scope="col">Supplier</th>
        <th scope="col">Puchase Date</th>
        <th scope="col">Warranty</th>
        <th scope="col">Challan No.</th>
        <th scope="col">Challan</th>
        <th scope="col">Req No.</th>
        <th scope="col">P.Type</th>
        <th scope="col">User</th>
        <th scope="col">Department</th>
        <th scope="col">Notes</th>
        {{-- <th scope="col">Action</th> --}}

      </tr>
    </thead>
    <tbody>

    @foreach($incoming as $key=>$received)

      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$received->item_name}}</td>
        <!--<td>{{$received->quantity}}</td>-->
        <td>{{$received->brand_name}}</td>
        <td>{{$received->model}}</td>
        <td>{{$received->serial_no}}</td>
        <td>{{$received->supplier}}</td>
        <td>{{$received->pur_date}}</td>
        <td>{{$received->warranty}}</td>
        <td>{{$received->challan_no}}</td>
        <td> <img src="{{asset('upload/challans/'.$received->challan_img)}}" alt="Not image file" width="100px" height="100px"> </td>
        <td>{{$received->req_no}}</td>
        <td>{{$received->pur_type}}</td>
        <td>{{$received->user_name}}</td>
        <td>{{$received->department}}</td>
        <td>{{$received->notes}}</td>
       <!-- <td>{{$received->created_at}}</td>
        <td>{{$received->updated_at}}</td>-->

        {{-- <td>
          <a class="btn btn-primary" href="#">Edit</a>
        </td>--}}
      </tr>

      @endforeach

    </tbody>
  </table>
  {{$incoming->links('pagination::bootstrap-4')}}

@endsection


