@extends('layouts.frontend')

@section('main')

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">

        <h3 class="text-center mt-3">Add New Camera</h3>
        <form action="{{route('camera.create')}}" method="post">
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
                        <label for="dvr_no" class="form-label">DVR No</label>
                        <select class="form-control" name="dvr_no">
                            <option value="">---Select DVR No---</option>
                            <option value="N/A">N/A</option>
                            <option value="DVR-201">DVR-201</option>
                            <option value="DVR-203">DVR-203</option>
                            <option value="DVR-204">DVR-204</option>
                            <option value="DVR-205">DVR-205</option>
                            <option value="DVR-206">DVR-206</option>
                            <option value="DVR-207">DVR-207</option>
                        </select>
                    </div>

            <div class="mb-3">
                <label for="camstatus" class="form-label">Status</label>
                <select class="form-control" name="status">
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
