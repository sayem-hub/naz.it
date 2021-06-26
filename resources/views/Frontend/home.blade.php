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
            <a href="#" class="btn-primary app-store">
            <i class="fa fa-apple"></i> <span> Login</span>
            </a>
            <a href="#" class="btn-primary play-market">
            <i class="fa fa-android"></i> <span> Sign up</span>
            </a>
        </div>

    </div>

    <!-- phone image -->
    <div class="col-md-6">
    <img src="{{asset('assets/frontend/images/header-phone.png')}}" alt="phone" class="header-phone img-responsive wow fadeInRight">
    </div>
</div>
</div>
</div>
</div>

<!-- intro section -->
<div id="intro">
<div class="container">
<div class="row">

<!-- feature image -->
<div class="col-md-6 feature-2-pic wow fadeInLeft">
    <img src="{{asset('assets/frontend/images/feature2-image.png')}}" alt="image" class="img-responsive">
</div>

<!-- Computer Records -->
<div class="col-md-6 wow fadeInRight">
    <h2>Computer Users Record</h2>


        <div>
            <button type="button" class="btn btn-outline-info"><a href="{{ route('computer.user') }}">View Full List</a></button>

            <table class="table" style="color: black">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Designation</th>
                    <th scope="col">IP Address</th>
                    <th scope="col">Email</th>
                    <th scope="col">Section</th>
                    <th scope="col">Dept.</th>
                    <th scope="col">Status</th>

                  </tr>
                </thead>
               {{--<tbody>

                  @foreach($computers as $key=>$user)

                  <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$user->Comid}}</td>
                    <td>{{$user->User}}</td>
                    <td>{{$user->Designation}}</td>
                    <td>{{$user->Ipadd}}</td>
                    <td>{{$user->Email}}</td>
                    <td>{{$user->Section}}</td>
                    <td>{{$user->Department}}</td>
                    <td>{{$user->Status}}</td>

                  </tr>

                  @endforeach--}}
        </div>

</div>

</div>

</div>
</div>

<!-- feature section -->
<div id="feature">
<div class="container">
<div class="row">
<div class="col-md-10 col-md-offset-1 col-sm-12 text-center feature-title">

<!-- feature title -->
    <h2>Our Amazing beautiful features</h2>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
</div>
</div>
<div class="row row-feat">

<div class="col-md-12">

    <!-- feature 1 -->
    <div class="col-sm-4 feat-list">
        <i class="fa fa-paint-brush wow fadeInUp"></i>
        <div class="inner">
            <h4>Fully Customizable</h4>
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.
            </p>
        </div>
    </div>

    <!-- feature 2 -->
    <div class="col-sm-4 feat-list">
        <i class="fa fa-rss wow fadeInUp" data-wow-delay="0.2s"></i>
        <div class="inner">
            <h4>Responsive Design</h4>
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.</p>
        </div>
    </div>

    <!-- feature 3 -->
    <div class="col-sm-4 feat-list">
        <i class="fa fa-recycle wow fadeInUp" data-wow-delay="0.4s"></i>
        <div class="inner">
            <h4>Amazing Design</h4>
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.</p>
        </div>
    </div>


</div>
</div>
</div>
</div>
<section id="features">
<div class="container">
<div class="row">
    <div class="col-md-6 col-sm-6 wow fadeInRight animated" data-wow-delay=".8s" style="visibility: visible; animation-delay: 0.8s; -webkit-animation-delay: 0.8s; animation-name: fadeInRight; -webkit-animation-name: fadeInRight;">
        <h2 class="title">Our Focused on Feature</h2>

        <div class="feature-item">

            <div class="media">
                <div class="pull-left icon" href="#">
                    <i class="fa fa-paint-brush"></i>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Reliable and Secure Platform</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisici ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com</p>
                </div>
            </div>
        </div>

        <div class="feature-item">

            <div class="media">
                <div class="pull-left icon" href="#">
                    <i class="fa fa-rss"></i>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Everything is perfectly orgainized</h4>
                    <p>Aipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                </div>
            </div>
        </div>

        <div class="feature-item">

            <div class="media">
                <div class="pull-left icon" href="#">
                    <i class="fa fa-recycle"></i>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Rapid customer support</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 wow fadeInLeft animated" data-wow-delay=".8s" style="visibility: visible; animation-delay: 0.8s; -webkit-animation-delay: 0.8s; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
        <div class="block">
            <img class="img-responsive" src="{{asset('assets/frontend/images/featured-app.png')}}" alt="">
        </div>
    </div>
</div>
</div>
</section>


<!-- subscribe section -->
<div id="subscribe">
<div class="subscribe fullscreen parallax" style="background-image:url('images/bg.jpg');" data-img-width="1920" data-img-height="1281" data-diff="100">
<div class="overlay">
<div class="container">

    <!-- mail icon -->
    <div class="col-md-4 col-md-offset-4 text-center">
    <i class="fa fa-envelope-o letter wow fadeInUp"></i>
    </div>
    <div class="col-md-8 col-md-offset-2 text-center">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>

        <!-- subscribe form -->
        <div class="subscribe-form wow fadeInUp">
            <form class="news-letter mailchimp" action="" role="form" method="POST">
            <input type="hidden" name="u" value="">
            <input type="hidden" name="id" value="">
            <input class="form-control" type="email" name="" placeholder="Your email..." required="">
                <button type="submit" class="subscribe-btn btn">SUBSCRIBE</button>
            </form>
        </div>
    </div>

</div>
</div>
</div>
</div>

<!-- screenshot section -->
<div id="screenshot">
<div class="container">
<div class="text-center">
<h2 class="wow fadeInLeft">Screenshots</h2>
<div class="title-line wow fadeInRight"></div>
</div>
<div class="row screenshots">

<div id="screenshots" class="owl-carousel">

    <!-- screenshot images -->
    <div class="screen wow fadeInUp">
        <a href="images/img1.jpg" data-toggle="lightbox"><img src="{{asset('assets/frontend/images/img1.jpg')}}" alt="Screenshot"></a>
    </div>

    <div class="screen wow fadeInUp" data-wow-delay="0.1s">
        <a href="images/img2.jpg" data-toggle="lightbox"><img src="{{asset('assets/frontend/images/img2.jpg')}}" alt="Screenshot"></a>
    </div>

    <div class="screen wow fadeInUp" data-wow-delay="0.2s">
        <a href="images/img3.jpg" data-toggle="lightbox"><img src="{{asset('assets/frontend/images/img3.jpg')}}" alt="Screenshot"></a>
    </div>

    <div class="screen wow fadeInUp" data-wow-delay="0.3s">
        <a href="images/img4.jpg" data-toggle="lightbox"><img src="{{asset('assets/frontend/images/img4.jpg')}}" alt="Screenshot"></a>
    </div>

    <div class="screen wow fadeInUp" data-wow-delay="0.4s">
        <a href="images/img5.jpg" data-toggle="lightbox"><img src="{{asset('assets/frontend/images/img5.jpg')}}" alt="Screenshot"></a>
    </div>

    <div class="screen wow fadeInUp" data-wow-delay="0.5s">
        <a href="images/img6.jpg" data-toggle="lightbox"><img src="{{asset('assets/frontend/images/img6.jpg')}}" alt="Screenshot"></a>
    </div>

    <div class="screen wow fadeInUp" data-wow-delay="0.6s">
        <a href="images/img7.jpg" data-toggle="lightbox"><img src="{{asset('assets/frontend/images/img7.jpg')}}" alt="Screenshot"></a>
    </div>

    <div class="screen wow fadeInUp" data-wow-delay="0.7s">
        <a href="images/img8.jpg" data-toggle="lightbox"><img src="{{asset('assets/frontend/images/img8.jpg')}}" alt="Screenshot"></a>
    </div>
</div>
</div>
</div>
</div>

<!-- Clients section -->
<div id="clients">
<div class="container">
<div class="text-center">
<h2 class="wow fadeInLeft">Clients</h2>
<div class="title-line wow fadeInRight"></div>
</div>
<div class="row">
<div class="col-sm-10 col-sm-offset-1">
   <div id="owl-clients" class="owl-carousel owl-theme wow fadeInUp">

        <!-- Clients 1 -->
        <div class="clients-item">
            <div class="client-pic text-center">

                <!-- client photo -->
                <img src="images/client.jpg" alt="client">
            </div>
            <div class="box">

                <!-- Clients content -->
                <p class="message text-center">"Printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type dummy text of the printing."</p>
            </div>
            <div class="client-info text-center">

            <!-- client name -->
                John Doe, <span class="company">Google</span>
            </div>
        </div>

        <!-- Clients 2 -->
        <div class="clients-item">
            <div class="client-pic text-center">

                <!-- client photo -->
                <img src="images/client2.jpg" alt="client">
            </div>
            <div class="box">

                <!-- Clients content -->
                <p class="message text-center">"Lorem Ipsum is simply dummy text of the printing and when an unknown printer took a galley of type dummy text of the printing and typesetting industry and scrambled."</p>
            </div>
            <div class="client-info text-center">

                <!-- client name -->
                Glen Micheal, <span class="company">CN Technology</span>
            </div>
        </div>

        <!-- Clients 3 -->
        <div class="clients-item">
            <div class="client-pic text-center">

                <!-- client photo -->
                <img src="images/client3.jpg" alt="client">
            </div>
            <div class="box">

                <!-- Clients content -->
                <p class="message text-center">"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer."</p>
            </div>
            <div class="client-info text-center">

                <!-- client name -->
                Chris Russel, <span class="company">Facebook</span>
            </div>
        </div>

    </div>
</div>
</div>
</div>
</div>
<div id="package">
<div class="container">
<div class="text-center">

<!-- pricing title -->
<h2 class="wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">Packages</h2>
<div class="title-line wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight; -webkit-animation-name: fadeInRight;"></div>
</div>
<div class="row package-option">

<!-- package 1 -->
<div class="col-sm-4">
  <div class="price-box wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp; -webkit-animation-name: fadeInUp;">
   <div class="price-heading text-center">


        <!-- package name -->
        <h3>Basic</h3>
   </div>

   <!-- price -->
    <div class="price-group text-center">
        <span class="dollar">$</span>
        <span class="price">12</span>
        <span class="time">/mo</span>
    </div>

    <!-- package features -->
   <ul class="price-feature text-center">
      <li><strong>300MB</strong> Disk Space</li>
      <li><strong>200MB</strong> Bandwidth</li>
      <li><strong>4</strong> Subdomains</li>
      <li><strong>6</strong> Email Accounts</li>
      <li><strike>Webmail Support</strike></li>
   </ul>

   <!-- package button -->
   <div class="price-footer text-center">
     <a class="btn btn-price" href="#">BUY NOW</a>
    </div>
  </div>
</div>

<!-- package 2 -->
<div class="col-sm-4">
  <div class="price-box wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; -webkit-animation-delay: 0.2s; animation-name: fadeInUp; -webkit-animation-name: fadeInUp;">
   <div class="price-heading text-center">


   <!-- package name -->
    <h3>Standard</h3>
   </div>

   <!-- price -->
    <div class="price-group text-center">
        <span class="dollar">$</span>
        <span class="price">16</span>
        <span class="time">/mo</span>
    </div>

    <!-- package features -->
   <ul class="price-feature text-center">
      <li><strong>600MB</strong> Disk Space</li>
      <li><strong>300MB</strong> Bandwidth</li>
      <li><strong>4</strong> Subdomains</li>
      <li><strong>12</strong> Email Accounts</li>
      <li><strike>Webmail Support</strike></li>
   </ul>

    <!-- package button -->
   <div class="price-footer text-center">
     <a class="btn btn-price" href="#">BUY NOW</a>
    </div>
  </div>
</div>

<!-- package 3 -->
<div class="col-sm-4">
  <div class="price-box wow fadeInUp animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; -webkit-animation-delay: 0.4s; animation-name: fadeInUp; -webkit-animation-name: fadeInUp;">
   <div class="price-heading text-center">



        <!-- package name -->
        <h3>Advance</h3>
   </div>

   <!-- price -->
    <div class="price-group text-center">
        <span class="dollar">$</span>
        <span class="price">24</span>
        <span class="time">/mo</span>
    </div>

    <!-- package features -->
   <ul class="price-feature text-center">
      <li><strong>1.5GB</strong> Disk Space</li>
      <li><strong>1.2GB</strong> Bandwidth</li>
      <li><strong>14</strong> Subdomains</li>
      <li><strong>26</strong> Email Accounts</li>
      <li>Webmail Support</li>
   </ul>

   <!-- package button -->
   <div class="price-footer text-center">
     <a class="btn btn-price" href="#">BUY NOW</a>
    </div>
  </div>
</div>



</div>
</div>
</div>
<!-- download section -->
<div id="download">
<div class="action fullscreen parallax" style="background-image:url('images/bg.jpg');" data-img-width="2000" data-img-height="1334" data-diff="100">
<div class="overlay downloadSection">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 col-sm-12 text-center">
            <h2 class="wow fadeInLeft">Get Your free Download of Razor App today!</h2>
            <p class="download-text wow fadeInRight">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type dummy text of the printing and typesetting industry and scrambled.</p>
            <div class="btn-section">

            <a href="#" class="btn-primary app-store">
            <i class="fa fa-apple"></i> <span> App Store</span>
            </a>
            <a href="#" class="btn-primary play-market">
            <i class="fa fa-android"></i> <span> Google Play</span>
            </a>

            </div>
        </div>
    </div>
</div>

@endsection
