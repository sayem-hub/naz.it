<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>NIMS</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">





    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/frontend/images/favicon.png') }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap-5.0.0-beta1.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/LineIcons.2.0.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/tiny-slider.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/glightbox.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/main.css')}}">


</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

{{-- ========================= preloader start ========================= --> --}}
<div class="preloader">
    <div class="loader">
        <div class="spinner">
            <div class="spinner-container">
                <div class="spinner-rotator">
                    <div class="spinner-left">
                        <div class="spinner-circle"></div>
                    </div>
                    <div class="spinner-right">
                        <div class="spinner-circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- preloader end --}}

@include('Frontend.Partials.header')




        @yield('main')






@include('Frontend.Partials.footer')



<!-- ========================= JS here ========================= -->
<script src="{{ asset('assets/frontend/js/bootstrap.bundle-5.0.0-beta1.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/contact-form.js')}}"></script>
<script src="{{ asset('assets/frontend/js/count-up.min.js')}}"></script>
<script src="{{ asset('assets/frontend/js/tiny-slider.js')}}"></script>
<script src="{{ asset('assets/frontend/js/isotope.min.js')}}"></script>
<script src="{{ asset('assets/frontend/js/glightbox.min.js')}}"></script>
<script src="{{ asset('assets/frontend/js/wow.min.js')}}"></script>
<script src="{{ asset('assets/frontend/js/imagesloaded.min.js')}}"></script>
<script src="{{ asset('assets/frontend/js/main.js')}}"></script>
<script src="https://kit.fontawesome.com/75a92dfdcc.js" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) { event.preventDefault(); $(this).ekkoLightbox(); });
</script>
<script>
    new WOW().init();
</script>

  </body>
</html>
