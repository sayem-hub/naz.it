@extends('layouts.frontend')

@section('main')

    <section id="service" class="service-section pt-130 ">

        <div class="container">

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">

        <h4 class="text-center mt-3">Add New Machine</h4>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif


        <form action="{{route('faceid.create')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="machine_name" class="form-label">Machine Name</label>
                <input type="text" class="form-control" name="machine_name" id="machine_name" placeholder="Enter machine name">
            </div>

            <div class="mb-3">
                <label for="machine_id" class="form-label">Machine ID</label>
                <input type="text" class="form-control" name="machine_id" id="machine_id" placeholder="Enter machine ID">
            </div>

            <div class="mb-3">
                <label for="ip_address" class="form-label">IP Address</label>
                <input type="text" class="form-control" name="ip_address" id="ip_address" placeholder="Enter IP Address">
            </div>

            <div class="mb-3">
            <label for="serial_no" class="form-label">Serial No</label>
            <input type="text" class="form-control" name="serial_no" id="serial_no" placeholder="Enter Serial No.">
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
            <input type="text" class="form-control" name="model" id="model" placeholder="Enter Model">
            </div>

            <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control" name="location" id="location" placeholder="Enter location">
            </div>


            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-control" name="status">
                    <option value="Active" selected>Active</option>
                    <option value="Inactive">Inactive</option>
                    <option value="In repair">In repair</option>
                    <option value="Damaged">Damaged</option>
                    <option value="Idle">Idle</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>
        </div>
    </section>

@endsection
