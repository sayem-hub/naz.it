@extends('layouts.frontend')
@section('main')


<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">

        <h3 class="text-center mt-3">Add New Received Item</h3>
        @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif
        <form action="{{route('received.goods.new')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="item-name" class="form-label">Item Name</label>
                <input type="text" class="form-control" name="itemname" id="itemname">
            </div>

            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="number" class="form-control" name="quantity" id="quantity">
            </div>

            <div class="mb-3">
                <label for="brand" class="form-label">Brand</label>
                <input type="text" class="form-control" name="brand" id="brand">
            </div>


            <div class="mb-3">
                <label for="model" class="form-label">Model</label>
                <input type="text" class="form-control" name="model" id="model">
            </div>

            <div class="mb-3">
                <label for="serialno" class="form-label">Serial No.</label>
                <input type="text" class="form-control" name="serial" id="serial">
            </div>

            <div class="mb-3">
                <label for="supplier" class="form-label">Supplier Name</label>
                <input type="text" class="form-control" name="supplier" id="supplier">
            </div>

            <div class="mb-3">
                <label for="purchasedate" class="form-label">Purchase Date</label>
                <input type="date" class="form-control" name="purdate" id="purdate">
            </div>


            <div class="mb-3">
                <label for="warranty" class="form-label">Warranty Days</label>
                <input type="number" class="form-control" name="warranty" id="warranty">
            </div>

            <div class="mb-3">
                <label for="challan-no" class="form-label">Challan No.</label>
                <input type="text" class="form-control" name="challanno" id="challanno">
            </div>

            <div class="mb-3">
                <label for="challan" class="form-label">Challan</label>
                <input type="file" class="form-control" name="challan" id="challan">
            </div>

            <div class="mb-3">
                <label for="requisition-no" class="form-label">Requisition No.</label>
                <input type="text" class="form-control" name="reqisitionno" id="reqno">
            </div>

            <div class="mb-3">
                <label for="purchase-type" class="form-label">Purchase Type</label>
                <select class="form-control" id="purtype" name="purtype">

                    <option value="H/O" selected>H/O</option>
                    <option value="Factory">Factory</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="user" class="form-label">User</label>
                <input type="text" class="form-control" name="user" id="user">
            </div>

            <div class="mb-3">
                <label for="department" class="form-label">Department</label>
                <input type="text" class="form-control" name="department" id="dept">
            </div>

            <div class="mb-3">
                <label for="notes" class="form-label">Notes</label>
                <input type="text" class="form-control" name="notes" id="notes">

            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

</div>
@endsection
