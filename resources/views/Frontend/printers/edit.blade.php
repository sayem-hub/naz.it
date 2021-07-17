@extends('layouts.frontend')

@section('main')

<div class="row" style="color: rgb(80, 75, 75)">
    <div class="col-md-2"></div>
    <div class="col-md-7">

        <h3 class="text-center mt-3">Edit Record</h3>
        <form action="{{route('printer.edit',$printers->id)}}" method="post">
        @csrf
            <div class="mb-3">
                <label for="printer_id" class="form-label">Printer ID</label>
                <input type="text" class="form-control" name="printer_id" id="printer_id" value="{{ $printers->printer_id}}">
            </div>

            <div class="mb-3">
                <label for="printer_brand" class="form-label">Printer Brand</label>
                <select class="form-control" name="printer_brand">
                    <option value="{{ $printers->printer_brand}}"> {{ $printers->printer_brand}}</option>
                    <option value="HP">HP</option>
                    <option value="Canon">Canon</option>
                    <option value="Brother">Brother</option>
                    <option value="Epson">Epson</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="printer_model" class="form-label">Model </label>
                <input type="text" class="form-control" name="printer_model" id="printer_model" value="{{ $printers->printer_model}}">
            </div>

            <div class="mb-3">
                <label for="function" class="form-label">Function</label>
                <select class="form-control" name="function">

                    <option value="{{ $printers->function}}" selected>{{ $printers->function}}</option>
                    <option value="Laser">Laser</option>
                    <option value="Inkjet">Inkjet</option>
                    <option value="Color Laser">Color Laser</option>
                    <option value="Multi Function Inkjet">Multi Function Inkjet</option>
                    <option value="Multi Function Laser">Multi Function Laser</option>
                </select>
            </div>


            <div class="mb-3">
                <label for="section" class="form-label">Section</label>
                <input type="text" class="form-control" name="section" id="section" value= "{{ $printers->section}}">
            </div>

            <div class="mb-3">
                <label for="department" class="form-label">Department</label>
                <input type="text" class="form-control" name="department" id="department" value= "{{$printers->department}}">
            </div>

            <div class="mb-3">
                <label for="user" class="form-label">User</label>
                <input type="text" class="form-control" name="user" id="user" value= "{{ $printers->user}}">
            </div>

            <div class="mb-3">
                <label for="servic_type" class="form-label">Service Type</label>
                <select class="form-control" name="service_type">
                    <option value= "{{ $printers->service_type}}" selected>{{ $printers->service_type}}</option>
                    <option value="Single User">Single User</option>
                    <option value="Shared Printer">Shared</option>
                    <option value="Network Printer">Network Printer</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="Status" class="form-label">Status</label>
                <select class="form-control" name="status">
                    <option value="{{ $printers->status }}" selected>{{ $printers->status}}</option>
                    <option value="Active" selected>Active</option>
                    <option value="Inactive">Inactive</option>
                    <option value="Idle">Idle</option>
                    <option value="In Repair">In Repair</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="remarks" class="form-label">Remarks</label>
                <input type="text" class="form-control" name="remarks" id="remarks" value="{{ $printers->remarks }}">
            </div>


            <button type="submit" class="btn btn-primary">Update</button>
            </form>

            </div>

            </div>


@endsection
