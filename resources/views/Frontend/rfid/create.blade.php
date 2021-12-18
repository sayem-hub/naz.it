@extends('layouts.frontend')
@section('main')

<section class="contact-section pt-100">
    <div class="container">


<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-5">

        <h4 class="text-center mt-3">Issue New RF ID</h4>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{route('rfid.create')}}" method="post">
            @csrf

            <div class="mb-3">
                <label for="naz_id" class="form-label">NAZ ID</label>
                <input type="text" class="form-control" name="naz_id" id="naz_id" value="NAZ-">
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>

            <div class="mb-3">
                <label for="designation" class="form-label">Designation</label>
                <select class="form-control" name="designation">
                    <option value="Asst. Operator" selected>Asst. Operator</option>
                    <option value="Ordinary Operator">Ordinary Operator</option>
                    <option value="Sr. Operator">Sr. Operator</option>
                    <option value="Operator">Operator</option>
                    <option value="Jr. Operator">Jr. Operator</option>

                </select>
            </div>


            <div class="mb-3">
                <label for="section" class="form-label">Section</label>
              <select class="form-control" name="section">
                <option value="Knitting" selected>Knitting</option>
            </select>
            </div>

            <div class="mb-3">
                <label for="rf_id" class="form-label">RF ID No</label>
                <input type="number" class="form-control" name="rf_id" id="rf_id">
            </div>

            <div class="mb-3">
                <label for="issue_date" class="form-label">Issue Date</label>
                <input type="date" class="form-control" name="issue_date" id="issue_date" value="{{ $today }}">
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-control" name="status">

                    <option value="Active">Active</option>
                    <option value="Inactive">Inactive</option>
                    <option value="In Repair">In Repair</option>
                    <option value="Damaged">Damaged</option>
                    <option value="Idle">Idle</option>
                </select>
            </div>


            <div class="mb-3">
                <label for="remarks" class="form-label">Remarks</label>
                <input type="text" class="form-control" name="remarks" id="remarks">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

</div>

    </div>
</section>
@endsection
