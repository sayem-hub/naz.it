@extends('layouts.backend')

@section('main')

<h3 class="text-center mt-3">Incoming Item List</h3>
<a href="{{route('admin.incoming.create')}}" class="btn btn-success">Add New Item</a>
<table class="table" style="font-size: 11px">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Item Name</th>
        <!--<th scope="col">Quantity</th>-->
        <th scope="col">Brand</th>
        <th scope="col">Model</th>
        <th scope="col">Serial No.</th>
        <th scope="col">Supplier</th>
        <th scope="col">P.Date</th>
        <th scope="col">Warranty</th>
        <th scope="col">Challan No.</th>
        <th scope="col">Challan</th>
        <th scope="col">Req No.</th>
        <th scope="col">P.Type</th>
        <th scope="col">User</th>
        <th scope="col">Department</th>
        <th scope="col">Notes</th>
        <th scope="col">Action</th>

      </tr>
    </thead>
    <tbody>

    @foreach($initems as $key=>$initem)

      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$initem->item_name}}</td>
        <!--<td>{{$initem->quantity}}</td>-->
        <td>{{$initem->brand_name}}</td>
        <td>{{$initem->model}}</td>
        <td>{{$initem->serial_no}}</td>
        <td>{{$initem->supplier}}</td>
        <td>{{$initem->pur_date}}</td>
        <td>{{$initem->warranty}}</td>
        <td>{{$initem->challan_no}}</td>
        <td> <img src="{{asset('upload/challans/'.$initem->challan_img)}}" alt="Not image file" width="100px" height="100px"> </td>
        <td>{{$initem->req_no}}</td>
        <td>{{$initem->pur_type}}</td>
        <td>{{$initem->user_name}}</td>
        <td>{{$initem->department}}</td>
        <td>{{$initem->notes}}</td>
       <!-- <td>{{$initem->created_at}}</td>
        <td>{{$initem->updated_at}}</td>-->

        <td>
          <a class="btn btn-primary" href="{{route('admin.incoming.edit',$initem->id)}}">Edit</a>
          <a class="btn btn-warning" href="{{route('admin.incoming.delete',$initem->id)}}">Delete</a>
        </td>
      </tr>

      @endforeach

    </tbody>
  </table>
  {{$initems->links('pagination::bootstrap-4')}}

@endsection
