@extends('layouts.frontend')

@section('main')

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">

        <h3 class="text-center mt-3">Add Wastage Item</h3>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif


        <form action="{{ route('wastage.create') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="item_name" class="form-label">Item Name</label>
                <select class="form-control" name="item_name">
                    <option value="Motherboard" selected>Motherboard</option>
                    <option value="HDD">HDD</option>
                    <option value="SSD">SSD</option>
                    <option value="Monitor">Monitor</option>
                    <option value="RAM">RAM</option>
                    <option value="Casing">Casing</option>
                    <option value="Printer">Printer</option>
                    <option value="Scanner">Scanner</option>
                    <option value="Router">Router</option>
                    <option value="Switch">Switch</option>
                    <option value="Attendance Machine">Attendance Machine</option>
                    <option value="CC Camera">CC Camera</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="model" class="form-label">Model</label>
                <input type="text" class="form-control" name="model" id="model" placeholder="Enter model">
            </div>

            <div class="mb-3">
            <label for="serial_no" class="form-label">Serial No</label>
            <input type="text" class="form-control" name="serial_no" id="serial_no" placeholder="Enter serial no.">
            </div>

            <div class="mb-3">
            <label for="problem" class="form-label">Problem</label>
            <select class="form-control" name="problem">
                <option value= "" selected>---Select problem---</option>
                <option value="No power">No power</option>
                <option value="No display">No display</option>
                <option value="Hang problem">Hang problem</option>
                <option value="Power problem">Power problem</option>
                <option value="Blue screen">Blue screen</option>
                <option value="Auto restart">Auto restart</option>
                <option value="Auto shutdown">Auto shutdown</option>
                <option value="OS/Soft not installed">OS/Soft not installed</option>
                <option value="Panel problem">Panel problem</option>
                <option value="Unknown">Unknown</option>
                <option value="Other">Other</option>
            </select>
            </div>

            <div class="mb-3">
                <label for="user_name" class="form-label">User</label>
                <input type="text" class="form-control" name="user_name" id="user_name" placeholder="Enter user name">
            </div>

            <div class="mb-3">
                <label for="note" class="form-label">Note</label>
                <input type="text" class="form-control" name="note" id="note" placeholder="If any">
            </div>


            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-control" name="status">
                    <option value="In house" selected>In house</option>
                    <option value="Delivered">Delivered</option>
                    <option value="In store">In store</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>

@endsection
