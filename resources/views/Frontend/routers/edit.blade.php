@extends('layouts.frontend')

@section('main')

<div class="row" style="color: rgb(80, 75, 75)">
    <div class="col-md-2"></div>
    <div class="col-md-7">

        <h3 class="text-center mt-3">Edit Record</h3>
        <form action="{{route('router.edit',$routers->id)}}" method="post">
        @csrf
            <div class="mb-3">
                    <label for="router_id" class="form-label">Router ID</label>
                    <input type="text" class="form-control" name="router_id" id="router_id" value="{{ $routers->router_id }}">
                </div>


                <div class="mb-3">
                    <label for="name" class="form-label">Name </label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $routers->name }}">
                </div>


                <div class="mb-3">
                    <label for="brand" class="form-label">Brand</label>
                    <select class="form-control" name="brand">
                        <option value="{{ $routers->brand }}">{{$routers->brand}}</option>
                        <option value="TP-Link">TP-Link</option>
                        <option value="Netgear">Netgear</option>
                        <option value="Mikrotik">Mikrotik</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="model" class="form-label">Model</label>
                    <input type="text" class="form-control" name="model" id="model" value="{{ $routers->model }}">
                </div>

                <div class="mb-3">
                    <label for="ssid" class="form-label">WiFi Name</label>
                    <input type="text" class="form-control" name="ssid" id="ssid" value="{{ $routers->ssid }}">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" class="form-control" name="password" id="password" value="{{ $routers->password }}">
                </div>

                <div class="mb-3">
                    <label for="ip_address" class="form-label">IP Address</label>
                    <input type="text" class="form-control" name="ip_address" id="ip_address" value="{{ $routers->ip_address }}">
                </div>

                <div class="mb-3">
                    <label for="location" class="form-label">Location</label>
                    <input type="text" class="form-control" name="location" id="location" value="{{ $routers->location }}">
                </div>

                <div class="mb-3">
                    <label for="Status" class="form-label">Status</label>
                    <select class="form-control" name="status">
                        <option value="{{ $routers->status }}" >"{{ $routers->status }}"</option>
                        <option value="Active" selected>Active</option>
                        <option value="Inactive">Inactive</option>
                        <option value="Idle">Idle</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="notes" class="form-label">Notes</label>
                    <input type="text" class="form-control" name="notes" id="notes" value="{{ $routers->notes }}">
                </div>


                <button type="submit" class="btn btn-primary">Update</button>
                </form>

                </div>

                </div>

@endsection
