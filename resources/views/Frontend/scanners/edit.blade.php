@extends('layouts.frontend')

@section('main')

<div class="row" style="color: rgb(80, 75, 75)">
    <div class="col-md-2"></div>
    <div class="col-md-7">

        <h3 class="text-center mt-3">Edit Record</h3>
        <form action="{{route('scanner.edit',$scanners->id)}}" method="post">
        @csrf
            <div class="mb-3">
                        <label for="scanner_id" class="form-label">Scanner ID</label>
                        <input type="text" class="form-control" name="scanner_id" id="scanner_id" value="{{ $scanners->scanner_id }}">
                    </div>

                    <div class="mb-3">
                        <label for="scanner_brand" class="form-label">Scanner Brand</label>
                        <input type="text" class="form-control" name="scanner_brand" id="scanner_brand" value="{{ $scanners->scanner_brand }}">
                    </div>

                    <div class="mb-3">
                        <label for="scanner_model" class="form-label">Model </label>
                        <input type="text" class="form-control" name="scanner_model" id="scanner_model" value="{{ $scanners->scanner_model}}">
                    </div>

                    <div class="mb-3">
                        <label for="section" class="form-label">Section</label>
                        <input type="text" class="form-control" name="section" id="section" value="{{ $scanners->section }}">
                    </div>

                    <div class="mb-3">
                        <label for="department" class="form-label">Department</label>
                        <input type="text" class="form-control" name="department" id="department" value="{{ $scanners->department }}">
                    </div>

                    <div class="mb-3">
                        <label for="Status" class="form-label">Status</label>
                        <select class="form-control" name="status">
                            <option value="{{ $scanners->status }}" selected>{{ $scanners->status }}</option>
                            <option value="Active" >Active</option>
                            <option value="Inactive">Inactive</option>
                            <option value="Idle">Idle</option>
                            <option value="In Repair">In Repair</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="notes" class="form-label">Notes</label>
                        <input type="text" class="form-control" name="notes" id="notes" value= "{{ $scanners->notes }}">
                    </div>


                    <button type="submit" class="btn btn-primary">Update</button>
                    </form>

                    </div>

                    </div>


@endsection
