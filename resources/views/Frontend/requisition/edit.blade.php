@extends('layouts.frontend')
@section('main')
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">

        <h3 class="text-center mt-3">Update Record</h3>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{route('requisition.edit', $requisitions->id)}}" method="post" enctype="multipart/form-data">
            @csrf

           <div class="mb-3">
                <label for="requisition_no" class="form-label">Requisiton No</label>
                <input type="text" class="form-control" name="requisition_no" id="requisition_no" value="{{ $requisitions->requisition_no }}">
            </div>

            <div class="mb-3">
                <label for="item_names" class="form-label">Item Name</label>
                <input type="text" class="form-control" name="item_names" id="item_names" value="{{ $requisitions->item_names }}">
            </div>

            <div class="mb-3">
                <label for="required_for" class="form-label">Required for</label>
                <input type="text" class="form-control" name="required_for" id="required_for" value="{{ $requisitions->required_for }}">
            </div>

            <div class="mb-3">
                <label for="designation" class="form-label">Designation</label>
                <input type="text" class="form-control" name="designation" id="designation" value="{{ $requisitions->designation }}">
            </div>

            <div class="mb-3">
                <label for="department" class="form-label">Department</label>
                <input type="text" class="form-control" name="department" id="department" value="{{ $requisitions->department }}">
            </div>

            <div class="mb-3">
                <label for="requisition_date" class="form-label">Requisition date</label>
                <input type="date" class="form-control" name="requisition_date" id="requisition_date" value="{{ $requisitions->requisition_date }}">
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-control" name="status">
                    <option value="{{ $requisitions->status }}" selected>{{ $requisitions->status }}</option>
                    <option value="Pending">Pending</option>
                    <option value="Received">Received</option>
                    <option value="Invalid">Invalid</option>
                    <option value="No need">No need</option>
                    <option value="Cancelled by NAZ">Cancelled by NAZ</option>
                    <option value="Cancelled by HO">Cancelled by HO</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="received_date" class="form-label">Receiving date</label>
                <input type="date" class="form-control" name="received_date" id="received_date" value="{{ $requisitions->received_date }}">
            </div>

            <div class="mb-3">
                <label for="GRN" class="form-label">GRN</label>
                <input type="text" class="form-control" name="GRN" id="GRN" value="{{ $requisitions->Grn }}">
            </div>

            <div class="mb-3">
                <label for="challan" class="form-label">Challan</label>
                <input type="file" class="form-control" name="challan" id="challan" value="{{$requisitions->challan}}">
            </div>

            <div class="mb-3">
                <label for="pur_type" class="form-label">Pur type</label>
                    <select class="form-control" name="pur_type">
                        <option value="{{ $requisitions->pur_type }}" selected>{{ $requisitions->pur_type }}</option>
                        <option value="HO">Head Office</option>
                        <option value="Fact">Factory</option>
                        <option value="Hstk">HO Stock</option>
                    </select>
            </div>

            <div class="mb-3">
                <label for="notes" class="form-label">Notes</label>
                <input type="text" class="form-control" name="notes" id="notes" value="{{ $requisitions->notes }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            </form>

            </div>

            </div>
            @endsection
