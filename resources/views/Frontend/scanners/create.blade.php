@extends('layouts.frontend')

@section('main')

<section class="contact-section pt-130">
    <div class="container">

<div class="row" style="color: rgb(71, 67, 67)">
    <div class="col-md-2"></div>
    <div class="col-md-7">

        <h3 class="text-center mt-3">Add New Scanner</h3>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{route('scanner.create')}}" method="post">
          @csrf
           <div class="mb-3">
                <label for="scanner_id" class="form-label">Scanner ID</label>
                <input type="text" class="form-control" name="scanner_id" id="scanner_id" value="NAZSCN-">
            </div>

            <div class="mb-3">
                <label for="scanner_brand" class="form-label">Scanner Brand</label>
                <input type="text" class="form-control" name="scanner_brand" id="scanner_brand">
            </div>

            <div class="mb-3">
                <label for="scanner_model" class="form-label">Model </label>
                <input type="text" class="form-control" name="scanner_model" id="scanner_model">
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
                <label for="Status" class="form-label">Status</label>
                <select class="form-control" name="status">
                    <option value="Active" selected>Active</option>
                    <option value="Inactive" >Inactive</option>
                    <option value="Idle">Idle</option>
                    <option value="In Repair">In Repair</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="notes" class="form-label">Notes</label>
                <input type="text" class="form-control" name="notes" id="notes" placeholder="If any">
            </div>


            <button type="submit" class="btn btn-primary">Create</button>
          </form>

    </div>

</div>

    </div>
</section>


@endsection
