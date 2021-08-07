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
                <select class="form-control" name="designation">
                        <option value="{{ $machines->designation }}" selected>{{ $machines->designation }}</option>
                        <option value="Officer">Officer</option>
                        <option value="Executive">Executive</option>
                        <option value="Sr. Executive">Sr. Executive</option>
                        <option value="Asst. Manager">Asst. Manager</option>
                        <option value="Deputy Manager">Deputy Manager</option>
                        <option value="Manager">Manager</option>
                        <option value="Sr. Manager">Sr. Manager</option>
                        <option value="AGM">AGM</option>
                        <option value="DGM">DGM</option>
                        <option value="GM">GM</option>
                        <option value="Cheif Business Council">Cheif Business Council</option>
                        <option value="Incharge">Incharge</option>
                        <option value="Peon">Peon</option>
                        <option value="Security">Security</option>
                        <option value="Head of Production">Head of Production</option>
                        </select>
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
                <label for="remarks" class="form-label">Remarks</label>
                <input type="text" class="form-control" name="remarks" id="remarks" value="{{ $machines->remarks }}">
            </div>

            <button type="submit" class="btn btn-secondary">Update</button>
        </form>
    </div>
</div>

@endsection
