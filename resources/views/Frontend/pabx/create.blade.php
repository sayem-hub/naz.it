@extends('layouts.frontend')

@section('main')

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">

        <h3 class="text-center mt-3">Add New PABX</h3>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif


        <form action="{{route('frontend.pabx.create')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="employee_name" class="form-label">Employee Name</label>
                <input type="text" class="form-control" name="employee_name" id="employee_name" placeholder="Enter employee name">
            </div>

            <div class="mb-3">
                <label for="designation" class="form-label">Designation</label>
                <select class="form-control" name="designation">
                    <option value="Officer" selected>Officer</option>
                    <option value="Executive">Executive</option>
                    <option value="Asst. Manager">Asst. Manager</option>
                    <option value="Deputy Manager">Deputy Manager</option>
                    <option value="Manager">Manager</option>
                    <option value="Sr. Manager">Sr. Manager</option>
                    <option value="AGM">AGM</option>
                    <option value="DGM">DGM</option>
                    <option value="GM">GM</option>
                    <option value="Incharge">Incharge</option>

                </select>
            </div>

            <div class="mb-3">
                <label for="section" class="form-label">Section</label>
                <input type="text" class="form-control" name="section" id="section" placeholder="Enter Section">
            </div>

            <div class="mb-3">
            <label for="department" class="form-label">Department</label>
            <input type="text" class="form-control" name="department" id="department" placeholder="Enter Department">
            </div>

            <div class="mb-3">
            <label for="pabx_no" class="form-label">PABX No</label>
            <input type="number" class="form-control" name="pabx_no" id="pabx_no" placeholder="Enter PABX No">
            </div>

            <div class="mb-3">
                <label for="model" class="form-label">Model</label>
                <input type="model" class="form-control" name="model" id="model" placeholder="Enter Model">
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-control" name="status">
                    <option value="Active" selected>Active</option>
                    <option value="Inactive">Inactive</option>
                    <option value="In Repair">In Repair</option>
                    <option value="Damaged">Damaged</option>
                    <option value="Idle">Idle</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="remarks" class="form-label">Remarks</label>
                <input type="text" class="form-control" name="remarks" id="remarks" placeholder="">
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>

@endsection
