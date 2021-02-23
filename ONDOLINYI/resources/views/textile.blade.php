<!DOCTYPE html>
<html lang="en">

<!-- project-slides12:55-->
<head>

    <meta charset="utf-8">
    <title>ONDO-LINYI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('/img/logos/4x/Asset%201Logo.png')}}" rel="icon" type="image/png">
    <link href="{{asset('/css/init.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/css/ion-icons.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/css/etline-icons.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/css/theme.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/css/custom.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/css/colors/purple.css')}}" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700%7CRaleway:400,100,200,300%7CHind:400,300"
          rel="stylesheet" type="text/css">
</head>
<body data-fade-in="true">

<!-- Start Header -->

@include('includes.header')
<!-- End Header -->
<section id="hero" class="hero-fullwidth parallax" data-overlay-dark="8">
    <div class="background-image">
        <img src="img/backgrounds/Industry-hub.jpg" alt="#">
    </div>

    <div class="container">
        <div class="row">

            <div class="col-md-12 text-center">
                <h1>Our <strong>product</strong> Works</h1>
                <p class="lead">We are producing a world class quality products in our hub.</p>
            </div>

        </div>
    </div>
</section>
<!-- End Hero -->
<!-- Project -->
<section class="pt140 pb50">
    <div class="container">
        <div class="row">

            <div class="col-md-12 text-center">
                <h1><strong>Textile </strong>of high quality</h1>
                <p class="lead">Digital advertising campaigns and product design,
                    we approach<br>our projects with strategic and creative thinking</p>
            </div>

            <div class="col-md-8 mt20 mb40">
                <div class="carousel lightbox" data-autoplay="false" data-speed="4000" data-touch-drag="true" data-loop="false">
                    <div><a href="img/backgrounds/threadss.jpg"><img src="img/backgrounds/threadss.jpg" class="img-responsive width100" alt="#"></a></div>
                    <div><a href="img/backgrounds/textilenice.jpg"><img src="img/backgrounds/textilenice.jpg" class="img-responsive width100" alt="#"></a></div>
                    <div><a href="img/backgrounds/testsweet.png"><img src="img/backgrounds/testsweet.png" class="img-responsive width100" alt="#"></a></div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-md-4 project-sidebar">

                <div>
                    <h4><strong>Product  Info</strong></h4>
                    <p>Vivamus congue diam vitae tortor imperdiet congue. Nullam
                        sagittis, tristique diam,
                        ut ullamcorper tellus. Cras porttitor massa. Duis vel est
                        nec sapien suscipit gravida. Integer vitae tortor dui.
                        Donec libero quam, euismod sit amet enim ac, varius dictum.</p>


                </div>

                <div class="project-info">
                    <h4><strong>How to order</strong></h4>
                    <p><strong>Vivamus congue diam vitae tortor imperdiet congue. Nullam
                    <p>E-mail</p>
                    <p>call </p>
                    </strong></p>
                    <div>

                        <p><a href="order-ethanol.php" class="btn btn-primary btn-md btn-appear"><span>start
									now <i class="ion-android-arrow-forward"></i></span></a></p>
                    </div>
                    <div>


                    </div>

                </div>

                <div class="sidebar-share">
                    <ul class="list-inline">

                    </ul>
                </div>

            </div>
            <!-- End Sidebar -->

        </div>
    </div>
</section>
<!-- End Project -->

<section class="project-nav">
    <a href="project-video.html"><i class="ion-android-arrow-back"></i><h5><strong>Previous</strong></h5></a>
    <a href="portfolio-contained.html"><h5><strong>All Projects</strong></h5></a>
    <a href="project-gallery.html"><h5><strong>Next</strong></h5><i class="ion-android-arrow-forward"></i></a>
</section>

@include('includes.footer')
<!-- End Footer -->

<script src="{{asset('/js/jquery.js')}}"></script>
<script src="{{asset('/js/init.js')}}"></script>
<script src="{{asset('/js/scripts.js')}}"></script>
</body>

<!-- project-slides12:55-->
</html>
