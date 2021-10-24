@extends('layouts.frontend')

@section('main')

<div class="row">



    <div class="col-md-7">



        <h1 class="wow fadeInLeft" style="font-size: 3em">
            Welcome to NAZ-IMS!
        </h1>

        <div class="landing-text wow fadeInLeft">
            <p>You are in the <strong>NAZ IT</strong> data bank! To access all the information at one place you need to login first!</p>
        </div>

        <!-- header button -->
        <!-- header button -->
        <div class="head-btn wow fadeInLeft">
            @if(auth()->user())
            <a href="{{ route('logout') }}" class="btn-primary play-market">
                <i class="fa fa-arrow-circle-left"></i> <span>Logout</span>
            </a>

            @else
            <a href="{{ route('login') }}" class="btn-primary">
                <i class="fa fa-sign-in"></i> <span> Login</span>
            </a>
            <a href="{{ route('registration') }}" class="btn-primary play-market">
                <i class="fa fa-unlock-alt"></i> <span>Register</span>
            </a>
            @endif

        </div>

    </div>

    <!-- phone image -->
    <div class="col-md-6">
        <img src="{{asset('assets/frontend/images/header-phone.png')}}" alt="image-missing"
            class="header-phone img-responsive wow fadeInRight">
    </div>
</div>
</div>
</div>
</div>


            </div>
            </div>
            </div>
            </div>

            @endsection
