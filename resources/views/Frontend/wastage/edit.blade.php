@extends('layouts.frontend')

@section('main')

<section class="contact-section pt-130">
    <div class="container">

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">

        <h4 class="text-center mt-3">Update record</h4>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{route('wastage.edit', $wastages->id)}}" method="post">
            @csrf
           <div class="mb-3">
            <label for="item_name" class="form-label">Item Name</label>
            <select class="form-control" name="item_name">
                <option value="{{ $wastages->item_name }}" selected>{{ $wastages->item_name }}</option>
                <option value="Motherboard">Motherboard</option>
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
            <input type="text" class="form-control" name="model" id="model" value="{{ $wastages->model }}">
        </div>

        <div class="mb-3">
            <label for="serial_no" class="form-label">Serial No</label>
            <input type="text" class="form-control" name="serial_no" id="serial_no" value="{{ $wastages->serial_no }}">
        </div>

        <div class="mb-3">
            <label for="problem" class="form-label">Problem</label>
            <select class="form-control" name="problem">
                <option value="{{ $wastages->problem }}" selected>{{ $wastages->problem }}</option>
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
                    <input type="text" class="form-control" name="user_name" id="user_name" value="{{ $wastages->user }}">
                </div>


                <div class="mb-3">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="text" class="form-control" name="quantity" id="quantity" value="{{ $wastages->quantity }}">
                </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-control" name="status">
                <option value="{{ $wastages->status }}" selected>{{ $wastages->status }}</option>
                <option value="In house" selected>In house</option>
                 <option value="HO">HO</option>
                    <option value="In store">In store</option>
                    <option value="In store">In store</option>
                    <option value="Repaired">Repaired</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="note" class="form-label">Note</label>
            <input type="text" class="form-control" name="note" id="note" value="{{ $wastages->note }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        </form>
        </div>
        </div>
    </div>
</section>
@endsection
