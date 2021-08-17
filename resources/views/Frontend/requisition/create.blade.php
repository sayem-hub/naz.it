@extends('layouts.frontend')
@section('main')


<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">

        <h3 class="text-center mt-3">Add requisition</h3>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{route('requisition.add')}}" method="post">
            @csrf

            <div class="mb-3">
                <label for="requisition_no" class="form-label">Requisiton No</label>
                <input type="text" class="form-control" name="requisition_no" id="requisition_no">
            </div>

            <div class="mb-3">
                <label for="item_names" class="form-label">Item Name</label>
                <input type="text" class="form-control" name="item_names" id="item_names">
            </div>

            <div class="mb-3">
                <label for="required_for" class="form-label">Required for</label>
                <input type="text" class="form-control" name="required_for" id="required_for">
            </div>

            <div class="mb-3">
                <label for="designation" class="form-label">Designation</label>
                <input type="text" class="form-control" name="designation" id="designation">
            </div>

            <div class="mb-3">
                <label for="department" class="form-label">Department</label>
                <input type="text" class="form-control" name="department" id="department">
            </div>

            <div class="mb-3">
                <label for="requisition_date" class="form-label">Requisition date</label>
                <input type="date" class="form-control" name="requisition_date" id="requisition_date" value="{{ $today }}">
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-control" name="status">
                 <option value="Pending" selected>Pending</option>
                    <option value="Received">Received</option>
                    <option value="Invalid">Invalid</option>
                    <option value="No need">No need</option>
                    <option value="Cancelled by NAZ">Cancelled by NAZ</option>
                    <option value="Cancelled by HO">Cancelled by HO</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="notes" class="form-label">Notes</label>
                <input type="text" class="form-control" name="notes" id="notes" placeholder="If any">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>

    </div>

</div>
@endsection
