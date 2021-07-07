@extends('layouts.frontend')

@section('main')

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">

        <h3 class="text-center mt-3">Add New Machine</h3>
        <form action="{{route('faceid.create')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="machine_name" class="form-label">Machine Name</label>
                <input type="text" class="form-control" name="machine_name" id="machine_name">
            </div>

            <div class="mb-3">
                <label for="machine_id" class="form-label">Machine ID</label>
                <input type="text" class="form-control" name="machine_id" id="machine_id">
            </div>

            <div class="mb-3">
                <label for="ip_address" class="form-label">IP Address</label>
                <input type="text" class="form-control" name="ip_address" id="ip_address">
            </div>

            <div class="mb-3">
            <label for="serial_no" class="form-label">Serial No</label>
            <input type="text" class="form-control" name="serial_no" id="serial_no">
            </div>

            <div class="mb-3">
            <label for="type" class="form-label">Machine Type</label>
            <select class="form-control" name="type">
                <option value="FaceID" selected>FaceID</option>
                <option value="Finger">Finger</option>
            </select>
            </div>

            <div class="mb-3">
            <label for="model" class="form-label">Model No</label>
            <input type="text" class="form-control" name="model" id="model">
            </div>

            <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control" name="location" id="location">
            </div>


            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-control" name="status">
                    <option value="Active" selected>Active</option>
                    <option value="Inactive">Inactive</option>
                    <option value="In Repair">In Repair</option>
                    <option value="Damaged">Damaged</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>

@endsection