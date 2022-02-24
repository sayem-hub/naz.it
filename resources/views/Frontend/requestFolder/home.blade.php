@extends('layouts.frontend')
@section('main')
    <section class="contact-section pt-130">
        <div class="container">


            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action">Please choose your option.</a>

                <a href="{{route('create.pre.req')}}" class="list-group-item list-group-item-action list-group-item-primary">IT Equipment</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">Desktop/Laptop</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-warning">Email ID</a>
            </div>




        </div>
</section>
@endsection
