@extends('layouts.frontend')

@section('main')



<!-- ========================= hero-section start ========================= -->
<section id="home" class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5 col-lg-6">
                <div class="hero-content-wrapper">
                    <h2  class="mb-25 wow fadeInDown" data-wow-delay=".2s">NIMS v2.0</h2>
                    <h3 class="mb-25 wow fadeInDown" data-wow-delay=".2s">NAZ IT Management System</h3>
                    <p class="mb-35 wow fadeInLeft" data-wow-delay=".4s">You are in the IT section data bank! To access all the information you need to login first!</p>


                    <div class="">
                                @if(auth()->user())
                                <a href="{{ route('logout') }}" class="theme-btn">
                                    <i class="fa fa-arrow-circle-left"></i> <span>Logout</span>
                                </a>

                                @else
                                <a href="{{ route('login') }}" class="theme-btn">
                                    <i class="fa fa-sign-in"></i> <span> Login</span>
                                </a>
                                <a href="{{ route('registration') }}" class="theme-btn">
                                    <i class="fa fa-unlock-alt"></i> <span>Register</span>
                                </a>
                                @endif

                            </div>
                </div>
                        </div>





            </div>
            <div class="col-xl-7 col-lg-6">
                <div class="hero-img">
                    <div class="d-inline-block hero-img-right">
                        <img src="{{ asset('assets/frontend/images/hero/hero-img.png') }}" alt="" class="image wow fadeInRight"
                            data-wow-delay=".5s">
                        <img src="{{ asset ('assets/frontend/images/hero/dots.shape.svg')}}" alt="" class="dot-shape">
                        <div class="video-btn">
                            <a href="{{ route('admin.login') }}"
                                class="glightbox"><i class="lni lni-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


</section>
<!-- ========================= hero-section end ========================= -->

@endsection
