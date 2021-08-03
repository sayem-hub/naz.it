@extends('layouts.frontend')

@section('main')

<div class="row" style="color: rgb(71, 67, 67)">
    <div class="col-md-3"></div>
    <div class="col-md-6">

        <h3 class="text-center mt-3">Add New Tablet</h3>
        <form action="{{route('tablet.create')}}" method="post">
          @csrf
           <div class="mb-3">
                <label for="tab_id" class="form-label">Tab ID</label>
                <input type="text" class="form-control" name="tab_id" id="tab_id">
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
                <label for="size" class="form-label">Size</label>
                <input type="text" class="form-control" name="size" id="size">
            </div>

            <div class="mb-3">
                <label for="serial" class="form-label">Serial No</label>
               <input type="text" class="form-control" name="serial" id="serial">
            </div>

            <div class="mb-3">
                <label for="imei_1" class="form-label">IMEI 1</label>
                <input type="text" class="form-control" name="imei_1" id="imei_1">
            </div>

            <div class="mb-3">
                     <label for="imei_2" class="form-label">IMEI 2</label>
                    <input type="text" class="form-control" name="imei_2" id="imei_2">
            </div>

            <div class="mb-3">
                <label for="user" class="form-label">User</label>
                <input type="text" class="form-control" name="user" id="user" placeholder="Write user name">
            </div>

            <div class="mb-3">
                <label for="emp_id" class="form-label">Office ID</label>
                <input type="text" class="form-control" name="emp_id" id="emp_id" placeholder="Write employee ID no.">
            </div>

            <div class="mb-3">
                <label for="designation" class="form-label">Designation</label>
                <input type="text" class="form-control" name="designation" id="designation" placeholder="">
            </div>

                <div class="mb-3">
                        <label for="Section" class="form-label">Section</label>
                        <select class="form-control" name="section">
                            <option value="MIS" selected>MIS</option>
                            <option value="Quality">Quality</option>
                         </select>
                </div>

            <div class="mb-3">
                <label for="department" class="form-label">Department</label>
                <select class="form-control" name="department">
                    <option value="ICT" selected>ICT</option>
                    <option value="Knitting">Knitting</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="Status" class="form-label">Status</label>
                <select class="form-control" name="Status">
                    <option value="Running" selected>Running</option>
                    <option value="Idle">Idle</option>
                    <option value="In Repair">In Repair</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="notes" class="form-label">Notes</label>
                <input type="text" class="form-control" name="notes" id="notes">
            </div>





            <button type="submit" class="btn btn-primary">Create</button>
          </form>

    </div>

</div>


@endsection
