@extends('layouts.frontend')
@section('main')

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">

        <h3 class="text-center mt-3">Add New Outgoing Item</h3>
        <form action="{{route('sent.items.create')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="item-name" class="form-label">Item Name</label>
                <input type="text" class="form-control" name="itemname" id="item-name">

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
                <input type="text" class="form-control" name="serial" id="serialno">
            </div>

            <div class="mb-3">
                <label for="user" class="form-label">User</label>
                <input type="text" class="form-control" name="user" id="user">
            </div>

            <div class="mb-3">
                <label for="section" class="form-label">Section</label>
                <input type="text" class="form-control" name="section" id="section">
            </div>

            <div class="mb-3">
                <label for="warranty	" class="form-label">Warranty Days</label>
                <input type="text" class="form-control" name="warranty" id="warranty">
            </div>

            <div class="mb-3">
                <label for="supplier" class="form-label">Supplier</label>
                <input type="text" class="form-control" name="supplier" id="supplier">
            </div>

            <div class="mb-3">
                <label for="purchase-date" class="form-label">Purchase Date</label>
                <input type="date" class="form-control" name="purdate" id="purchase-date">
            </div>

            <div class="mb-3">
                <label for="outgoing-date" class="form-label">Outgoing Date</label>
                <input type="date" class="form-control" name="outdate" id="outgoing-date">
            </div>

            <div class="mb-3">
                <label for="sentfor" class="form-label">Sent For</label>
                <select class="form-control" id="sentfor" name="sentfor" required>
                    <option selected>--Select--</option>
                    <option value="Warranty">Warranty</option>
                    <option value="Reparing">Reparing</option>
                    <option value="Replace">Replace</option>
                    <option value="Resigned">Resigned</option>
                    <option value="Damaged">Damaged</option>
                    <option value="Wastage">Wastage</option>
                    <option value="As needed">As needed</option>
                    <option value="No need">Extra(No need)</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="problems" class="form-label">Problems</label>
                <input type="text" class="form-control" name="problems" id="problems">
            </div>

            <div class="mb-3">
                <label for="gate-pass" class="form-label">Gate Pass No.</label>
                <input type="number" class="form-control" name="gpno" id="gate-pass">
            </div>

                     <div class="mb-3">
                            <label for="destination" class="form-label">To</label>
                            <select class="form-control" id="status" name="destination" requred>
                                <option selected>--Select--</option>
                                <option value="HO">HO</option>
                                <option value="CA">CA</option>
                                <option value="Giv.">Givensee</option>
                                <option value="Mpur">Monipur</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="GRN" class="form-label">GRN</label>
                            <input type="text" class="form-control" name="GRN" id="GRN">
                        </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-control" id="status" name="status" requred>
                    <option selected>--Select--</option>
                    <option value="Pending">Pending</option>
                    <option value="Nreturnable">Non-returnable</option>
                    <option value="Returnable">Returnable</option>
                    <option value="Using">Using</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

</div>

@endsection
