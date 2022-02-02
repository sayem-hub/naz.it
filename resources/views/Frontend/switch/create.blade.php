@extends('layouts.frontend')

@section('main')



<section class="contact-section pt-130">
    <div class="container">

<div class="row" style="color: rgb(71, 67, 67)">
    <div class="col-md-3"></div>
    <div class="col-md-5">

        <h4 class="text-center mt-3">Add New Switch</h4>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{route('switch.create')}}" method="post">
          @csrf

            <div class="mb-3">
                <label for="brand" class="form-label">Brand</label>
                <select class="form-control" name="brand">
                    <option value="" selected>---Select Switch Brand---</option>
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
                <input type="text" class="form-control" name="model" id="model" placeholder="Enter model">
            </div>


            <div class="mb-3">
                <label for="port_no" class="form-label">Port No.</label>
                <select class="form-control" name="port_no">
                    <option value="">---Select Port No.---</option>
                    <option value="26 Port">26 Port</option>
                    <option value="24 Port">24 Port</option>
                    <option value="16 Port">16 Port</option>
                    <option value="8 Port">8 Port</option>
                    <option value="5 Port">5 Port</option>
                    <option value="4 Port">4 Port</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="location" class="form-label">Location</label>
                <input type="text" class="form-control" name="location" id="location">
            </div>


            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <select class="form-control" name="type">
                    <option value="0" >Manageable</option>
                    <option value="1" selected>Non-Manageable</option>
                </select>
            </div>

                <div class="mb-3">
                    <label for="Status" class="form-label">Status</label>
                    <select class="form-control" name="status">
                        <option value="Active" selected>Active</option>
                        <option value="Damaged" >Damaged</option>
                        <option value="In-repair">In-repair</option>
                        <option value="Idle">Idle</option>
                        <option value="Spare">Spare</option>
                    </select>
                </div>
            <button type="submit" class="btn btn-primary">Create</button>
          </form>

    </div>

</div>

    </div>
</section>


@endsection
