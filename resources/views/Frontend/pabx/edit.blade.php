@extends('layouts.frontend')

@section('main')

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">

        <h3 class="text-center mt-3">Update record</h3>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{route('frontend.pabx.edit', $machines->id)}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="employee_name" class="form-label">Emplyee Name</label>
                <input type="text" class="form-control" name="employee_name" id="employee_name" value="{{ $machines->employee_name }}">
            </div>

            <div class="mb-3">
                <label for="designation" class="form-label">Designation</label>
                <input type="text" class="form-control" name="designation" id="designation" value="{{ $machines->designation }}">
            </div>

            <div class="mb-3">
                <label for="section" class="form-label">Section</label>
                <input type="text" class="form-control" name="section" id="section" value="{{ $machines->section }}">
            </div>

            <div class="mb-3">
                <label for="department" class="form-label">Department</label>
                <input type="text" class="form-control" name="department" id="department" value="{{ $machines->department }}">
            </div>

                    <div class="mb-3">
                        <label for="pabx_no" class="form-label">PABX No</label>
                        <input type="text" class="form-control" name="pabx_no" id="pabx_no" value="{{ $machines->pabx_no }}">
                    </div>


            <div class="mb-3">
                <label for="model" class="form-label">Model No</label>
                <input type="text" class="form-control" name="model" id="model" value="{{ $machines->model }}">
            </div>


            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-control" name="status">
                    <option value="{{ $machines->status }}" selected>{{ $machines->status }}</option>
                    <option value="Active" >Active</option>
                    <option value="Inactive">Inactive</option>
                    <option value="In Repair">In Repair</option>
                    <option value="Damaged">Damaged</option>
                    <option value="Idle">Idle</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="remarks" class="form-label">Remarks No</label>
                <input type="text" class="form-control" name="remarks" id="remarks" value="{{ $machines->remarks }}">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>

@endsection
