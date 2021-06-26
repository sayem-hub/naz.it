@extends('layouts.backend')

@section('main')

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-5">

        <h3 class="text-center mt-3">Add New Camera</h3>
        <form action="{{route('admin.ccam.create')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="camera-name" class="form-label">Camera Name</label>
                <input type="text" class="form-control" name="camname" id="camname">
            </div>

            <div class="mb-3">
                <label for="camno" class="form-label">Camera No.</label>
                <input type="text" class="form-control" name="camno" id="camno">
            </div>


            <div class="mb-3">
                <label for="cam-location" class="form-label">Camera Location</label>
                <input type="text" class="form-control" name="camlocation" id="camlocation">
            </div>

            <div class="mb-3">
                <label for="camstatus" class="form-label">Status</label>
                <select class="form-select" name="status">
                    <option value="Active">Active</option>
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
