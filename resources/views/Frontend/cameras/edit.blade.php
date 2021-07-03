@extends('layouts.frontend')

@section('main')

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-7">

        <h3 class="text-center mt-3">Edit Camera</h3>
        <form action="{{route('edit',$ccamera->id)}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="camera-name" class="form-label">Camera Name</label>
                <input type="text" class="form-control" name="camname" id="camname" value="{{ $ccamera->camname }}">
            </div>

            <div class="mb-3">
                <label for="camno" class="form-label">Camera No.</label>
                <input type="text" class="form-control" name="camno" id="camno" value="{{ $ccamera->camno }}">
            </div>


            <div class="mb-3">
                <label for="cam-location" class="form-label">Camera Location</label>
                <input type="text" class="form-control" name="camlocation" id="camlocation"
                    value="{{ $ccamera->camlocation }}">
            </div>

            <div class="mb-3">
                <label for="camstatus" class="form-label">Status</label>
                <select class="form-select" name="status">
                    <option value="{{ $ccamera->status }}" selected>{{ $ccamera->status }}</option>
                    <option value="Inactive">Inactive</option>
                    <option value="In Repair">In Repair</option>
                    <option value="Damaged">Damaged</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>

    </div>

</div>


@endsection
