@extends('layouts.frontend')
@section('main')

<section class="contact-section pt-100">

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">

        <h4 class="text-center mt-3">Add toner in stock</h4>
        <form action="{{ route('toner.stock.create') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" name="date" id="date">

            </div>

            <div class="mb-3">
                <label for="toner_model" class="form-label">Toner model</label>
                <select class="form-control" name="toner_model">
                    <option value="" selected>--Select toner model--</option>
                    <option value="85A">85A</option>
                    <option value="26A">26A</option>
                    <option value="93A">93A</option>
                    <option value="55A">55A</option>
                </select>
            </div>


            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="text" class="form-control" name="quantity" id="quantity">
            </div>

            <div class="mb-3">
                <label for="gp_no" class="form-label">Gate pass no.</label>
                <input type="text" class="form-control" name="gp_no" id="gp_no">
            </div>


            <div class="mb-3">
                <label for="notes" class="form-label">Notes</label>
                <input type="text" class="form-control" name="notes" id="notes">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

</div>

</section>

@endsection
