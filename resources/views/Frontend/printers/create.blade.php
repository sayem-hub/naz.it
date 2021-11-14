@extends('layouts.frontend')

@section('main')

<div class="row" style="color: rgb(71, 67, 67)">
    <div class="col-md-4"></div>
    <div class="col-md-4">

        <h3 class="text-center mt-3">Add New Printer</h3>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{route('printer.create')}}" method="post">
          @csrf
           <div class="mb-3">
                <label for="printer_id" class="form-label">Printer ID</label>
                <input type="text" class="form-control" name="printer_id" id="printer_id" value="NAZPRN-">
            </div>

            <div class="mb-3">
                <label for="printer_brand" class="form-label">Printer Brand</label>
               <select class="form-control" name="printer_brand">
                <option value="" selected>---Select Printer Brand---</option>
                <option value="HP">HP</option>
                <option value="Canon">Canon</option>
                <option value="Brother">Brother</option>
                <option value="Epson">Epson</option>
            </select>
            </div>

            <div class="mb-3">
                <label for="printer_model" class="form-label">Model </label>
                <input type="text" class="form-control" name="printer_model" id="printer_model">
            </div>

            <div class="mb-3">
                <label for="serial_no" class="form-label">Serial No </label>
                <input type="text" class="form-control" name="serial_no" id="serial_no">
            </div>

            <div class="mb-3">
                <label for="function" class="form-label">Function</label>
                <select class="form-control" name="function">
                    <option value="" selected>---Select Printer Function---</option>
                    <option value="Laser">Laser</option>
                    <option value="Inkjet">Inkjet</option>
                    <option value="Color Laser">Color Laser</option>
                    <option value="MF Inkjet">MF Inkjet</option>
                    <option value="MF Laser">MF Laser</option>
                </select>
            </div>


            <div class="mb-3">
                <label for="section" class="form-label">Section</label>
                <input type="text" class="form-control" name="section" id="section">
            </div>

                    <div class="mb-3">
                <label for="department" class="form-label">Department</label>
                <input type="text" class="form-control" name="department" id="department" placeholder="Enter department name">
            </div>

            <div class="mb-3">
                <label for="user" class="form-label">User</label>
                <input type="text" class="form-control" name="user" id="user" placeholder="Enter user name">
            </div>

            <div class="mb-3">
                <label for="servic_type" class="form-label">Service Type</label>
                <select class="form-control" name="service_type">
                    <option value="" selected>---Select Type---</option>
                    <option value="Single User">Single User</option>
                    <option value="Shared Printer">Shared</option>
                    <option value="Network Printer">Network Printer</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="Status" class="form-label">Status</label>
                <select class="form-control" name="status">
                    <option value="Active" selected>Active</option>
                    <option value="Inactive" >Inactive</option>
                    <option value="Idle">Idle</option>
                    <option value="In repair">In repair</option>
                    <option value="No cartridge">No cartridge</option>
                    <option value="No toner">No toner</option>
                    <option value="Ink empty">Ink empty</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="remarks" class="form-label">Remarks</label>
                <input type="text" class="form-control" name="remarks" id="remarks">
            </div>


            <button type="submit" class="btn btn-primary">Create</button>
          </form>

    </div>

</div>


@endsection
