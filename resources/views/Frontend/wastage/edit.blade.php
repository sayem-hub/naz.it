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
            <input type="text" class="form-control" name="problem" id="problem" value="{{ $wastages->problem }}">
        </div>

        <div class="mb-3">
            <label for="note" class="form-label">Note</label>
            <input type="text" class="form-control" name="note" id="note" value="{{ $wastages->note }}">
        </div>


        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-control" name="status">
                <option value="{{ $wastages->status }}" selected>{{ $wastages->status }}</option>
                <option value="In house">In house</option>
                <option value="Delivered">Delivered</option>
                <option value="In store">In store</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        </form>
        </div>
        </div>

@endsection
