@extends('layouts.frontend')

@section('main')

<section class="contact-section pt-130">
    <div class="container">

<div class="row" style="color: rgb(71, 67, 67)">
    <div class="col-md-2"></div>
    <div class="col-md-7">

        <h4 class="text-center mt-3">Add New Router</h4>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{route('router.create')}}" method="post">
          @csrf
           <div class="mb-3">
                <label for="router_id" class="form-label">Router ID</label>
                <input type="text" class="form-control" name="router_id" id="router_id" value="NAZRT-">
            </div>


            <div class="mb-3">
                <label for="name" class="form-label">Name </label>
                <input type="text" class="form-control" name="name" id="name">
            </div>


            <div class="mb-3">
                <label for="brand" class="form-label">Brand</label>
                <select class="form-control" name="brand">
                    <option value="">---Select Router Brand---</option>
                    <option value="TP-Link">TP-Link</option>
                    <option value="Netgear">Netgear</option>
                    <option value="Mikrotik">Mikrotik</option>
                </select>
            </div>

                    <div class="mb-3">
                <label for="model" class="form-label">Model</label>
                <input type="text" class="form-control" name="model" id="model" placeholder="Enter model name">
            </div>

            <div class="mb-3">
                <label for="ssid" class="form-label">WiFi Name</label>
                <input type="text" class="form-control" name="ssid" id="ssid" placeholder="Enter wifi name">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="text" class="form-control" name="password" id="password">
            </div>

            <div class="mb-3">
                <label for="ip_address" class="form-label">IP Address</label>
                <input type="text" class="form-control" name="ip_address" id="ip_address">
            </div>

            <div class="mb-3">
                <label for="location" class="form-label">Location</label>
                <input type="text" class="form-control" name="location" id="location">
            </div>

                <div class="mb-3">
                    <label for="Status" class="form-label">Status</label>
                    <select class="form-control" name="status">
                        <option value="" selected>---Select status---</option>
                        <option value="Active" selected>Active</option>
                        <option value="Inactive">Inactive</option>
                        <option value="Idle">Idle</option>
                    </select>
                </div>

            <div class="mb-3">
                <label for="notes" class="form-label">Notes</label>
                <input type="text" class="form-control" name="notes" id="notes">
            </div>


            <button type="submit" class="btn btn-primary">Create</button>
          </form>

    </div>

</div>

    </div>
</section>


@endsection
