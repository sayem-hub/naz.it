@extends('layouts.backend')

@section('main')

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-6">

        <h3 class="text-center mt-3">Update Record</h3>
        <form action="{{route('admin.incoming.edit',$initems->id)}}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="mb-3">
              <label for="itemname" class="form-label">Item Name</label>
              <input type="text" class="form-control" name="itemname" id="itemname" value="{{$initems->item_name}}">
            </div>

            <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="text" class="form-control" name="quantity" id="quantity" value="{{$initems->quantity}}">
            </div>

            <div class="mb-3">
              <label for="brand" class="form-label">Brand</label>
              <input type="text" class="form-control" name="brand" id="brand" value="{{$initems->brand_name}}">
            </div>

            <div class="mb-3">
              <label for="model" class="form-label">Model</label>
              <input type="text" class="form-control" name="model" id="model" value="{{$initems->model}}">
            </div>

            <div class="mb-3">
              <label for="serial" class="form-label">Serial No.</label>
              <input type="text" class="form-control" name="serial" id="serial" value="{{$initems->serial_no}}">
            </div>

            <div class="mb-3">
                <label for="supplier" class="form-label">Supplier</label>
                <input type="text" class="form-control" name="supplier" id="supplier" value="{{$initems->supplier}}">
            </div>

            <div class="mb-3">
                <label for="pdate" class="form-label">Purchase Date</label>
                <input type="text" class="form-control" name="pdate" id="pdate" value="{{$initems->pur_date}}">
            </div>

            <div class="mb-3">
                <label for="warranty" class="form-label">Warranty</label>
                <input type="text" class="form-control" name="warranty" id="warranty" value="{{$initems->warranty}}">
            </div>

            <div class="mb-3">
                <label for="challan_no" class="form-label">Challan No</label>
                <input type="text" class="form-control" name="challan_no" id="challan_no" value="{{$initems->challan_no}}">
            </div>

            <div class="mb-3">
                <label for="challan_img" class="form-label">Challan</label>
                <input type="file" class="form-control" name="challan_img" id="challan_img" value="{{$initems->challan_img}}">
            </div>

            <div class="mb-3">
                <label for="req_no" class="form-label">Requisition No.</label>
                <input type="text" class="form-control" name="req_no" id="req_no" value="{{$initems->req_no}}">
            </div>

            <div class="mb-3">
            <label for="pur_type" class="form-label">Purchase Type</label>
            <select class="form-control" id="pur_type" name="pur_type">
                <option value="{{$initems->pur_type}}" selected>{{$initems->pur_type}}</option>
                <option value="H/O">H/O</option>
                <option value="Factory">Factory</option>
            </select>
            </div>

            <div class="mb-3">
              <label for="user" class="form-label">User</label>
              <input type="text" class="form-control" name="user" id="user" value="{{$initems->user_name}}">
            </div>

            <div class="mb-3">
              <label for="department" class="form-label">Department</label>
              <input type="text" class="form-control" name="department" id="department" value="{{$initems->department}}">
            </div>

            <div class="mb-3">
                <label for="notes" class="form-label">Notes</label>
                <input type="text" class="form-control" name="notes" id="notes" value="{{$initems->notes}}">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
          </form>

    </div>

</div>


@endsection
