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


{{-- ========================= preloader start ========================= --> --}}
    {{--div class="preloader">
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
    </div>--}}
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


<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<script>
    $(function() {
        // Multiple images preview with JavaScript
        var multiImgPreview = function(input, imgPreviewPlaceholder) {

            if (input.files) {
                var filesAmount = input.files.length;

                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();

                    reader.onload = function(event) {
                        $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }

        };

        $('#challan').on('change', function() {
            multiImgPreview(this, 'div.imgPreview');
        });
        });
</script>

  </body>
</html>
