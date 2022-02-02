@extends('layouts.frontend')

@section('main')

<section class="contact-section pt-130">
    <div class="container">

<div class="row" style="color: rgb(80, 75, 75)">
    <div class="col-md-3"></div>
    <div class="col-md-5">

        <h4 class="text-center mt-3">Edit Record</h4>
        <form action="{{route('switch.edit',$switches->id)}}" method="post">
        @csrf

            <div class="mb-3">
                <label for="brand" class="form-label">Brand</label>
                <select class="form-control" name="brand">
                    <option value="{{$switches->brand}}" selected>{{$switches->brand}}</option>
                    <option value="Cisco">Cisco</option>
                    <option value="Netgear">Netgear</option>
                    <option value="TP-Link">TP-Link</option>
                    <option value="D-Link">D-Link</option>
                    <option value="Belkin">Belkin</option>
                    <option value="Tenda">Tenda</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="model" class="form-label">Model</label>
                <input type="text" class="form-control" name="model" id="model" value="{{$switches->model}}">
            </div>


            <div class="mb-3">
                <label for="port_no" class="form-label">Port No.</label>
                <select class="form-control" name="port_no">
                    <option value="{{$switches->port_no}}" selected>{{$switches->port_no}}</option>
                    <option value="24 Port">26 Port</option>
                    <option value="24 Port">24 Port</option>
                    <option value="16 Port">16 Port</option>
                    <option value="8 Port">8 Port</option>
                    <option value="5 Port">5 Port</option>
                    <option value="4 Port">4 Port</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="location" class="form-label">Location</label>
                <input type="text" class="form-control" name="location" id="location" value="{{$switches->location}}">
            </div>


            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <select class="form-control" name="type">

                    <option value="{{$switches->type}}" selected>{{$switches->type}}</option>
                    <option value="0">Manageable</option>
                    <option value="1">Non-Manageable</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="Status" class="form-label">Status</label>
                <select class="form-control" name="status">
                    <option value="{{$switches->status}}" selected>{{$switches->status}}</option>
                    <option value="Active" >Active</option>
                    <option value="Damaged" >Damaged</option>
                    <option value="In-repair">In-repair</option>
                    <option value="Idle">Idle</option>
                    <option value="Spare">Spare</option>
                </select>
            </div>

                <button type="submit" class="btn btn-primary">Update</button>
        </form>

                </div>

</div>

    </div>
</section>

@endsection
