@extends('layouts.backend')

@section('main')

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">

        <h3 class="text-center mt-3">Update Record</h3>
        <form action="{{route('admin.outgoing.edit',$outitems->id)}}" method="post">
        @csrf
            <div class="mb-3">
              <label for="item-name" class="form-label">Item Name</label>
              <input type="text" class="form-control" name="itemname" id="itemname" value="{{$outitems->Iname}}">

            </div>

            <div class="mb-3">
              <label for="brand" class="form-label">Brand</label>
              <input type="text" class="form-control" name="brand" id="brand" value="{{$outitems->Brand}}">
            </div>


            <div class="mb-3">
              <label for="model" class="form-label">Model</label>
              <input type="text" class="form-control" name="model" id="model" value="{{$outitems->Model}}">
            </div>

            <div class="mb-3">
              <label for="serialno" class="form-label">Serial No.</label>
              <input type="text" class="form-control" name="serial" id="serial" value="{{$outitems->Serial}}">
            </div>

            <div class="mb-3">
              <label for="user" class="form-label">User</label>
              <input type="text" class="form-control" name="user" id="user" value="{{$outitems->User}}">
            </div>

            <div class="mb-3">
              <label for="section" class="form-label">Section</label>
              <input type="text" class="form-control" name="section" id="section" value="{{$outitems->Section}}">
            </div>

            <div class="mb-3">
              <label for="warranty" class="form-label">Warranty</label>
              <input type="number" class="form-control" name="warranty" id="warranty" value="{{$outitems->Warranty}}">
            </div>

            <div class="mb-3">
              <label for="supplier" class="form-label">Supplier</label>
              <input type="text" class="form-control" name="supplier" id="supplier" value="{{$outitems->Supplier}}">
            </div>

            <div class="mb-3">
              <label for="purchase-date" class="form-label">Purchase Date</label>
              <input type="date" class="form-control" name="purdate" id="purdate" value="{{$outitems->Purdate}}">
            </div>

            <div class="mb-3">
              <label for="outgoing-date" class="form-label">Outgoing Date</label>
              <input type="date" class="form-control" name="outdate" id="outdate" value="{{$outitems->Outdate}}">
            </div>

            <div class="mb-3">
              <label for="sentfor" class="form-label">Sent For</label>
              <select class="form-select" id="sentfor" name="sentfor" required>
                    <option value="{{$outitems->Sentfor}}">{{$outitems->Sentfor}}</option>
                    <option value="Warranty">Warranty</option>
                    <option value="Reparing">Reparing</option>
                    <option value="Replace">Replace</option>
                    <option value="Resigned">Resigned</option>
                    <option value="Damaged">Damaged</option>
                    <option value="Wastage">Wastage</option>
                    <option value="Extra(No need)">Extra(No need)</option>
                    </select>
            </div>

            <div class="mb-3">
                <label for="problems" class="form-label">Problems</label>
                <input type="text" class="form-control" name="problems" id="problems" value="{{ $outitems->Problems }}">
            </div>


            <div class="mb-3">
                <label for="Notes" class="form-label">Notes</label>
                <input type="text" class="form-control" name="Notes" id="Notes" value="{{ $outitems->Notes }}">
            </div>

            <div class="mb-3">
              <label for="gate-pass" class="form-label">Gate Pass No.</label>
              <input type="number" class="form-control" name="gpno" id="gpno" value="{{$outitems->Gpno}}">
            </div>


            <div class="mb-3">
                <label for="destination" class="form-label">To</label>
                <select class="form-control" id="status" name="destination" requred>
                    <option value="{{$outitems->To}}" selected>{{$outitems->To}}</option>
                    <option value="HO">HO</option>
                    <option value="CA">CA</option>
                    <option value="Givensee">Givensee</option>
                    <option value="Monipur">Monipur</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="GRN" class="form-label">GRN</label>
                <input type="text" class="form-control" name="GRN" id="GRN" value="{{ $outitems->Grn }}">
            </div>

            <div class="mb-3">
              <label for="status" class="form-label">Status</label>
              <select class="form-select" id="status" name="status" required>
                    <option value="{{ $outitems->Status }}">{{ $outitems->Status }}</option>
                    <option value="Pending">Pending</option>
                    <option value="Solved">Solved</option>
                    <option value="Returned">Returned</option>
                    <option value="Replaced">Replaced</option>
                    <option value="Received">Received</option>
                    <option value="Not Solved">Not Solved</option>
                    </select>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
          </form>

    </div>

</div>


@endsection
