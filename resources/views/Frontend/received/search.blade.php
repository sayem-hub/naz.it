@extends('layouts.frontend')
@section('main')

    <section class="contact-section pt-130">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">

<h4 class="text-center mt-3">Search results by "{{$search_text}}"</h4>
<a href="{{ route('received.goods.new') }}" class="btn btn-success">Add New</a>
<table class="table table-bordered table-hover" style="font-size: .8rem;">
    <thead>
        <tr>
            <th scope="col" class="text-center">SL</th>
            <th scope="col" class="text-center">Item Name</th>
            <!--<th scope="col">Quantity</th>-->
            <th scope="col" class="text-center">Brand</th>
            <th scope="col" class="text-center">Model</th>
            <th scope="col" class="text-center">Serial No.</th>
            <th scope="col" class="text-center">Supplier</th>
            <th scope="col" class="text-center">Puchase Date</th>
            <th scope="col" class="text-center">Warranty</th>
            <th scope="col" class="text-center">Challan No.</th>
            <th scope="col" class="text-center">Challan</th>
            <th scope="col" class="text-center">Req No.</th>
            <th scope="col" class="text-center">P.Type</th>
            <th scope="col" class="text-center">User</th>
            <th scope="col" class="text-center">Department</th>
            <th scope="col" class="text-center">Notes</th>
            {{-- <th scope="col">Action</th> --}}

        </tr>
    </thead>
    <tbody>

        @foreach($received_items as $key=>$r_item)

        <tr>
            <th scope="row" class="text-center">{{$key+1}}</th>
            <td class="text-center">{{$r_item->item_name}}</td>
            <!--<td>{{$r_item->quantity}}</td>-->
            <td class="text-center">{{$r_item->brand_name}}</td>
            <td class="text-center">{{$r_item->model}}</td>
            <td class="text-center">{{$r_item->serial_no}}</td>
            <td class="text-center">{{$r_item->supplier}}</td>
            <td class="text-center">{{$r_item->pur_date}}</td>
            <td class="text-center">{{$r_item->warranty}}</td>
            <td class="text-center">{{$r_item->challan_no}}</td>
            <td class="text-center"> <img src="{{asset('upload/challans/'.$r_item->challan_img)}}" alt="Not image file" width="95px"
                    height="60px"> </td>
            <td class="text-center">{{$r_item->req_no}}</td>
            <td class="text-center">{{$r_item->pur_type}}</td>
            <td class="text-center">{{$r_item->user_name}}</td>
            <td class="text-center">{{$r_item->department}}</td>
            <td class="text-center">{{$r_item->notes}}</td>
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

            </div>
        </div>
        </div>

@endsection
