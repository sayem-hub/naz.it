@extends('layouts.frontend')
@section('main')

<h3 class="text-center mt-3">Search results</h3>
<a href={{ route('received.goods.new') }} class="btn btn-success">Add New Item</a>
<table class="table table-bordered table-hover" style="font-size: 12px">
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

        @foreach($received_items as $key=>$r_item)

        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$r_item->item_name}}</td>
            <!--<td>{{$r_item->quantity}}</td>-->
            <td>{{$r_item->brand_name}}</td>
            <td>{{$r_item->model}}</td>
            <td>{{$r_item->serial_no}}</td>
            <td>{{$r_item->supplier}}</td>
            <td>{{$r_item->pur_date}}</td>
            <td>{{$r_item->warranty}}</td>
            <td>{{$r_item->challan_no}}</td>
            <td> <img src="{{asset('upload/challans/'.$r_item->challan_img)}}" alt="Not image file" width="95px"
                    height="60px"> </td>
            <td>{{$r_item->req_no}}</td>
            <td>{{$r_item->pur_type}}</td>
            <td>{{$r_item->user_name}}</td>
            <td>{{$r_item->department}}</td>
            <td>{{$r_item->notes}}</td>
            <!-- <td>{{$r_item->created_at}}</td>
        <td>{{$r_item->updated_at}}</td>-->

            {{-- <td>
          <a class="btn btn-primary" href="#">Edit</a>
        </td>--}}
        </tr>

        @endforeach

    </tbody>
</table>
{{$received_items->links('pagination::bootstrap-4')}}

@endsection
