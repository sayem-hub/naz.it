@extends('layouts.frontend')

@section('main')

<div class="row" style="color: rgb(71, 67, 67)">
    <div class="col-md-2"></div>
    <div class="col-md-7">

        <h3 class="text-center mt-3">Add New Computer</h3>
        <form action="{{route('computer.user.create')}}" method="post">
          @csrf
            <div class="mb-3">
              <label for="ComputerID" class="form-label">Computer ID</label>
              <input type="text" class="form-control" name="ComputerID" id="ComputerID">

            </div>

            <div class="mb-3">
              <label for="User" class="form-label">User Name</label>
              <input type="text" class="form-control" name="User" id="User">
            </div>


            <div class="mb-3">
              <label for="Designation" class="form-label">Designation</label>
              <input type="text" class="form-control" name="Designation" id="Designation">
            </div>

            <div class="mb-3">
              <label for="ComType" class="form-label">Computer Type</label>
              <input type="text" class="form-control" name="ComType" id="ComType">
            </div>

            <div class="mb-3">
              <label for="Monitor" class="form-label">Monitor</label>
              <input type="text" class="form-control" name="Monitor" id="Monitor">
            </div>

            <div class="mb-3">
              <label for="Keyboard" class="form-label">Keyboard</label>
              <input type="text" class="form-control" name="Keyboard" id="Keyboard">
            </div>

            <div class="mb-3">
              <label for="Mouse" class="form-label">Mouse</label>
              <input type="text" class="form-control" name="Mouse" id="Mouse">
            </div>

            <div class="mb-3">
              <label for="UPS" class="form-label">UPS</label>
              <input type="text" class="form-control" name="UPS" id="UPS">
            </div>

            <div class="mb-3">
              <label for="IPAdd" class="form-label">IP Address</label>
              <input type="text" class="form-control" name="IPAdd" id="IPAdd">
            </div>

            <div class="mb-3">
              <label for="EmailAddress" class="form-label">Email Address</label>
              <input type="text" class="form-control" name="EmailAddress" id="EmailAddress">
            </div>

            <div class="mb-3">
              <label for="Section" class="form-label">Section</label>
              <input type="text" class="form-control" name="Section" id="Section">
            </div>

            <div class="mb-3">
              <label for="Department" class="form-label">Department</label>
              <input type="text" class="form-control" name="Department" id="Department">
            </div>

            <div class="mb-3">
              <label for="Status" class="form-label">Status</label>
              <input type="text" class="form-control" name="Status" id="Status">
            </div>

            <div class="mb-3">
              <label for="Remarks" class="form-label">Remarks</label>
              <input type="text" class="form-control" name="Remarks" id="Remarks">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

    </div>

</div>


@endsection
