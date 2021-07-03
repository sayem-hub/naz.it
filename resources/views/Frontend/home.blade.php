@extends('layouts.frontend')

@section('main')

<div class="row">



        <div class="col-md-7">

                    <h1 class="wow fadeInLeft">
                    Welcome to NIMS!
                    </h1>

                    <div class="landing-text wow fadeInLeft">
                        <p>You are in the NAZ IT data bank! To access all the information in one place you need to login first! Couldn't login? Then you have to sign up!</p>
                 </div>

                <!-- header button -->
                <div class="head-btn wow fadeInLeft">
                        @if(auth()->user())
                        <a href="{{ route('logout') }}" class="btn-primary play-market">
                            <i class="fa fa-android"></i> <span>Logout</span>
                        </a>

                        @else
                        <a href="{{ route('login') }}" class="btn-primary app-store">
                            <i class="fa fa-apple"></i> <span> Login</span>
                        </a>
                        <a href="{{ route('registration') }}" class="btn-primary play-market">
                            <i class="fa fa-android"></i> <span> Sign up</span>
                        </a>
                        @endif

                </div>
        </div>
</div>

@endsection
