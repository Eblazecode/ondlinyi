<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <title>ONDOLINYI</title>
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

<div class="pre-loader"><div></div></div>

<!-- Start Header -->

@include('includes.header')
<!-- End Header -->

<!-- Hero -->
<section id="hero" class="hero-fullscreen parallax" data-overlay-dark="7">
    <div class="background-image">
        <img src="{{asset('img/backgrounds/linyisw.jfif')}}" alt="#">
    </div>

    <div class="container">
        <div class="row">

            <div class="hero-content-slider mt20" data-autoplay="true" data-speed="4000">

                <div>
                    <h1>Welcome to <br><strong>Ondo linyi </strong></h1>
                    <p class="lead">A hub for industrial revolution.</p>
                    <a href="#about" class="btn btn-lg btn-primary btn-scroll">our products</a>
                </div>

                <div>
                    <h1>Industrializing<br><strong> Ondo state</strong></h1>

                    <p class="lead">We do innovation at large, to engineer a new Ondo and Nigeria </p>

                </div>

                <div>
                    <h1>Our products<br><strong>Exceed expectation</strong></h1>
                    <p class="lead">From ethanol to fabrics we've got industries covered .</p>

                </div>

                <div>
                    <h1>We are making<br><strong>Giant stride</strong></h1>
                    <p class="lead">This time bigger than any !</p>
                </div>

            </div>

        </div>
    </div>
</section>
<!-- End Hero -->
<!-- ABOUT Section -->
<section class="parallax pt40 pb40" data-overlay-light="9">
    <div class="background-image">
        <img src="{{asset('img/backgrounds/linyisw.jfif')}}" alt="#">
    </div>
    <div class="container">
        <div class="row vertical-align">

            <div class="col-md-6 pr30 mt40 mb40">
                <h2><strong>Ondo Linyi</strong><br>An industrial Revolution </h2>
                <p>Fusce faucibus tincidunt nulla, tincidunt sagittis magna venenatis quis. Proin commodo eu ipsum eu suscipit. In dapibus arcu sit amet imperdiet. Praesent condimentum nulla at mauris ornare. Praesent condimentum nulla at mauris ornare, eget consequat felis euismod. Praesent condimentum nulla at mauris ornare.</p>
                <p>Praesent condimentum nulla at mauris ornare, eget consequat felis euismod. Praesent condimentum nulla at mauris ornare. Fusce faucibus tincidunt nulla, tincidunt sagittis magna venenatis quis. Proin commodo eu ipsum eu suscipit.</p>
            </div>

            <div class="col-md-6 mt50 mb50">
                <div class="video-container">
                    <img src="{{asset('img/backgrounds/buhari.jpg')}}" />
                    <iframe data-video-embed="https://www.youtube.com/embed/B08iLAtS3AQ"></iframe>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Video Section -->

<!-- Portfolio -->
<section id="works" class="pt100 pb110">
    <div class="container">
        <div class="row text-center">

            <div class="col-md-12 text-center pb20">
                <h2>Our <br><strong> products </strong></h2>
                <p class="lead">Wide range of <span class="color">successful products</span>
                    adding value.</p>
            </div>

            <div class="portfolio" data-gap="20"><!-- Values: 10, 15, 20, 25, 30 and 35 -->

                <!-- Portfolio Category Filters -->
                <ul class="vossen-portfolio-filters" data-initial-filter="*">
                    <li data-filter="*">Show All</li>
                    <li data-filter="ethanol">Ethanol</li>
                    <li data-filter="textile">Textile</li>
                    <li data-filter="truck">Truck</li>
                    <li data-filter="wood">Wood</li>
                </ul>

                <!-- Portfolio Items Container-->
                <div class="vossen-portfolio">

                    <!-- Portfolio Item -->
                    <div class="col-md-4 col-sm-6" data-filter="wood">
                        <a href="mdf.blade.php">
                            <div class="portfolio-item">
                                <div class="item-caption">
                                    <h4>HDF wood</h4>

                                </div>
                                <div class="item-image">
                                    <img alt="" src="{{asset('img/products/hdf.jpg')}}" />
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Portfolio Item -->
                    <div class="col-md-4 col-sm-6" data-filter="wood">
                        <a href="hdf.blade.php">
                            <div class="portfolio-item">
                                <div class="item-caption">
                                    <h4>Hdf woods</h4>
                                </div>
                                <div class="item-image">
                                    <img alt="" src="{{asset('img/products/hdf2.jpg')}}" />
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Portfolio Item -->
                    <div class="col-md-4 col-sm-12" data-filter="Branding Digital">
                        <a href="trucks">
                            <div class="portfolio-item">
                                <div class="item-caption">
                                    <h4>Trucks</h4>
                                </div>
                                <div class="item-image">
                                    <img alt="#" src="{{asset('img/products/truckwh.jpg')}}" />
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Portfolio Item -->
                    <div class="col-md-8 col-sm-6" data-filter="Branding">
                        <a href="ethanol">
                            <div class="portfolio-item">
                                <div class="item-caption">
                                    <h4>Large ethanol production </h4>

                                </div>
                                <div class="item-image">
                                    <img alt="#" src="{{asset('img/products/ethcolums.jpg')}}" />
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Portfolio Item -->
                    <div class="col-md-4 col-sm-6" data-filter="Print Digital">
                        <a href="<?= url('textile')?>">
                            <div class="portfolio-item">
                                <div class="item-caption">
                                    <h4>Quality threads</h4>
                                </div>
                                <div class="item-image">
                                    <img alt="#" src="{{asset('img/products/thread.jpg')}}" />
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Portfolio Item -->
                    <div class="col-md-4 col-sm-6" data-filter="Print">
                        <a href="<?= url('ethanol')?>">
                            <div class="portfolio-item">
                                <div class="item-caption">
                                    <h4>Ethanol</h4>
                                </div>
                                <div class="item-image">
                                    <img alt="#" src="{{asset('img/products/ethanoldr.jpg')}}" />
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Portfolio Item -->
                    <div class="col-md-4 col-sm-6" data-filter="Print">
                        <a href="<?= url('ethanol')?>">
                            <div class="portfolio-item">
                                <div class="item-caption">
                                    <h4>Fabrics</h4>
                                </div>
                                <div class="item-image">
                                    <img alt="#" src="{{asset('img/products/ethanoldr.jpg')}}" />
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Portfolio Item -->
                    <div class="col-md-4 col-sm-6" data-filter="Branding">
                        <a href="mdf">
                            <div class="portfolio-item">
                                <div class="item-caption">
                                    <h4>MDF Wood</h4>
                                </div>
                                <div class="item-image">
                                    <img alt="product" src="{{asset('img/products/mdf.jpg')}}" />
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Portfolio Item -->
                    <div class="col-md-4 col-sm-6" data-filter="Branding Digital">
                        <a href="<?= url('textile')?>">
                            <div class="portfolio-item">
                                <div class="item-caption">
                                    <h4>Thread</h4>

                                </div>
                                <div class="item-image">
                                    <img alt="product" src="{{asset('img/products/threadss1.jpg')}}" />
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>

            <a href="portfolio-contained.html" class="btn btn-md btn-light btn-appear mt30">
                <span>View All <i class="ion-arrow-right-c"></i></span></a>

        </div>
    </div>
</section>
<!-- End Portfolio -->

<!-- About Us
<section id="about" class="pt100 pb90">
    <div class="container">
        <div class="row">

            <div class="col-md-12 text-center pb20">
                <h2>We Are Wunderkind<br><strong>Something You Love</strong></h2>
                <p class="lead">We create experiences that <span class="color">transform brands</span>, grow businesses<br>and make people’s lives better. Building brands and driving sales with powerful ideas.</p>
            </div>

            <div class="col-sm-6 feature-left">
                <i class="icon-telescope size-3x color"></i>
                <i class="icon-telescope back-icon"></i>
                <div class="feature-left-content">
                    <h4><strong>We're Creative</strong><br>Crafting With Love</h4>
                    <p>Vivamus congue diam vitae tortor imperdiet congue. Nullam sagittis, tristique diam, ut ullamcorper tellus. Cras porttitor massa.</p>
                </div>
            </div>
            <div class="col-sm-6 feature-left">
                <i class="icon-circle-compass size-3x color"></i>
                <i class="icon-circle-compass back-icon"></i>
                <div class="feature-left-content">
                    <h4><strong>We're Cool Nerds</strong><br>Coding With Fun</h4>
                    <p>Duis vel est nec sapien suscipit gravida. Integer vitae tortor dui. Donec libero quam, euismod sit amet enim ac, varius dictum.</p>
                </div>
            </div>
            <div class="col-sm-6 feature-left">
                <i class="icon-genius size-3x color"></i>
                <i class="icon-genius back-icon"></i>
                <div class="feature-left-content">
                    <h4><strong>We're Passionate</strong><br>Available When You Need Us</h4>
                    <p>Maecenas sit amet eros luctus dui volutpat sollicitudin id vitae est. Vivamus laoreet adipiscing metus vel fermentum. Sed velit.</p>
                </div>
            </div>
            <div class="col-sm-6 feature-left">
                <i class="icon-layers size-3x color"></i>
                <i class="icon-layers back-icon"></i>
                <div class="feature-left-content">
                    <h4><strong>We're Professional</strong><br>New York Based</h4>
                    <p>Integer ornare, tellus eget lobortis cursus, metus enim ultricies eros, vitae porttitor elit sapien quis justo. Duis vitae.</p>
                </div>
            </div>

        </div>
    </div>
</section>
End About Us -->

<!-- Who We Are -->
<section id="who-we-are" class="parallax pt40 pb40" data-overlay-dark="8">
    <div class="background-image">
        <img src="img/backgrounds/linyisw.jfif" alt="#">
    </div>
    <div class="container">
        <div class="row vertical-align">

            <div class="col-md-6 pr30 mt40 mb40">
                <h2><strong>Giant Strides </strong><br><span style="color: yellow">Awesome products  addding value</span></h2>
                <p>Fusce faucibus tincidunt nulla, tincidunt sagittis magna venenatis quis. Proin commodo eu ipsum eu suscipit. In dapibus arcu sit amet imperdiet. Praesent condimentum nulla at mauris ornare. Praesent condimentum nulla at mauris ornare, eget consequat felis euismod. Praesent condimentum nulla at mauris ornare.</p>
                <p>Praesent condimentum nulla at mauris ornare, eget consequat felis euismod. Praesent condimentum nulla at mauris ornare. Fusce faucibus tincidunt nulla, tincidunt sagittis magna venenatis quis. Proin commodo eu ipsum eu suscipit.</p>
            </div>

            <div class="col-md-6 pt40 pb30">
                <div class="video-container">
                    <img src="{{asset('img/backgrounds/chiefpres.JPG')}}" />
                    <iframe data-video-embed="https://www.youtube.com/embed/B08iLAtS3AQ"></iframe>
                </div>
            </div>

        </div>
    </div>
    <!-- Fun Facts -->

    <!-- End Fun Facts -->
</section>

<!-- Quotes -->
<section id="quotes" class="parallax pt100 pb90" data-overlay-dark="8">
    <div class="background-image">
        <img src="img/backgrounds/buhariaketi.jpg" alt="#">
    </div>
    <div class="container">
        <section id="fun-facts" data-animate="true">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-sm-3 counter">
                        <h1 class="bold"  style="color: yellow" data-count="4246"></h1>
                        <h5>product unit</h5>
                    </div>
                    <div class="col-sm-3 counter">
                        <h1 class="bold" style="color: yellow" data-count="618"></h1>
                        <h5>Logistics </h5>
                    </div>
                    <div class="col-sm-3 counter">
                        <h1 class="bold"  style="color: yellow" data-count="240"></h1>
                        <h5>clients</h5>
                    </div>
                    <div class="col-sm-3 counter">
                        <h1 class="bold"style="color: yellow" data-count="96"></h1>
                        <h5>Winning Awards</h5>
                    </div>

                </div>
            </div>
        </section>
        <div class="row">

            <div class="col-md-12">
                <div class="quote-slider navigation-thin container white text-center" data-autoplay="true" data-speed="2000">
                    <div>
                        <h2>
                            <i class="vossen-quote color"></i>
                            A Perfect Design is <strong>Passion, Dedication,</strong><br>and a lots of Coffee
                            <i class="vossen-quote color"></i>
                        </h2>
                        <p class="label label-primary">Wunderkind Team</p>
                    </div>
                    <div>
                        <h2>
                            <i class="vossen-quote color"></i>
                            The Difference between ordinary and extraordinary<br>is <strong>just that little extra</strong>
                            <i class="vossen-quote color"></i>
                        </h2>
                        <p class="label label-primary">Albert Einstein</p>
                    </div>
                    <div>
                        <h2>
                            <i class="vossen-quote color"></i>
                            <strong>The Desire to Create</strong> is One of the Deepest Yearnings of the Human Soul
                            <i class="vossen-quote color"></i>
                        </h2>
                        <p class="label label-primary">Dieter F. Uchtdorf</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Quotes -->

<!-- End Who We Are -->

<!-- Team
<section id="team" class="hero-fullscreen2 pt100 pb90">
    <div class="container">
        <div class="row">

            <div class="col-md-12 text-center">
                <h2>We 're making <strong>Giant Strides </strong></h2>
                <p class="lead">Adding value  <span class="color">awesome products</span>.
                   </p>
            </div>

            <div class="team-slider owl-carousel dark-pagination col-md-12">
                <div class="team">
                    <div class="team-container">
                        <div class="team-image">
                            <img src="img/team/1.jpg" class="img-responsive" alt="#" />
                        </div>
                        <div class="team-caption">
                            <div class="video-container">
                                <img src="img/backgrounds/buhari.jpg" />
                                <iframe data-video-embed="https://www.youtube.com/embed/B08iLAtS3AQ"></iframe>
                            </div>
                        </div>
                    </div>
                    <h6>Founder / CEO</h6>
                    <h5>John Westbrook</h5>
                    <p>Vivamus motestues phasellus enim sed orci eu pharetra. Donec posuere nunc vitae tortor sagittis feugiat in non massa. Quisqueeas sed mi nec.</p>
                </div>
                <div class="team">
                    <div class="team-container">
                        <div class="team-image">
                            <img src="img/team/2.jpg" class="img-responsive" alt="#" />
                        </div>
                        <div class="team-caption">
                            <div>
                                <div>
                                    <ul>
                                        <li class="social-icon"><a href="https://www.facebook.com/" target="_blank"><i class="ion-social-facebook"></i></a></li>
                                        <li class="social-icon"><a href="https://www.twitter.com/" target="_blank"><i class="ion-social-twitter"></i></a></li>
                                        <li class="social-icon"><a href="https://www.youtube.com/" target="_blank"><i class="ion-social-youtube"></i></a></li>
                                        <li class="social-icon"><a href="https://www.dribbble.com/" target="_blank"><i class="ion-social-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h6>Developer</h6>
                    <h5>Kelly Swanson</h5>
                    <p>Vivamus motestues phasellus enim sed orci eu pharetra. Donec posuere nunc vitae tortor sagittis feugiat in non massa. Quisqueeas sed mi nec.</p>
                </div>
                <div class="team">
                    <div class="team-container">
                        <div class="team-image">
                            <img src="img/team/3.jpg" class="img-responsive" alt="#" />
                        </div>
                        <div class="team-caption">
                            <div>
                                <div>
                                    <ul>
                                        <li class="social-icon"><a href="https://www.facebook.com/" target="_blank"><i class="ion-social-facebook"></i></a></li>
                                        <li class="social-icon"><a href="https://www.twitter.com/" target="_blank"><i class="ion-social-twitter"></i></a></li>
                                        <li class="social-icon"><a href="https://www.youtube.com/" target="_blank"><i class="ion-social-youtube"></i></a></li>
                                        <li class="social-icon"><a href="https://www.dribbble.com/" target="_blank"><i class="ion-social-dribbble"></i></a></li>
                                        <li class="social-icon"><a href="https://www.linkedin.com/" target="_blank"><i class="ion-social-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h6>Designer</h6>
                    <h5>Chris Holland</h5>
                    <p>Vivamus motestues phasellus enim sed orci eu pharetra. Donec posuere nunc vitae tortor sagittis feugiat in non massa. Quisqueeas sed mi nec.</p>
                </div>
                <div class="team">
                    <div class="team-container">
                        <div class="team-image">
                            <img src="img/team/4.jpg" class="img-responsive" alt="#" />
                        </div>
                        <div class="team-caption">
                            <div>
                                <div>
                                    <ul>
                                        <li class="social-icon"><a href="https://www.facebook.com/" target="_blank"><i class="ion-social-facebook"></i></a></li>
                                        <li class="social-icon"><a href="https://www.twitter.com/" target="_blank"><i class="ion-social-twitter"></i></a></li>
                                        <li class="social-icon"><a href="https://www.dribbble.com/" target="_blank"><i class="ion-social-dribbble"></i></a></li>
                                        <li class="social-icon"><a href="https://www.linkedin.com/" target="_blank"><i class="ion-social-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h6>Art Director</h6>
                    <h5>Dave Harper</h5>
                    <p>Vivamus motestues phasellus enim sed orci eu pharetra. Donec posuere nunc vitae tortor sagittis feugiat in non massa. Quisqueeas sed mi nec.</p>
                </div>
                <div class="team">
                    <div class="team-container">
                        <div class="team-image">
                            <img src="img/team/5.jpg" class="img-responsive" alt="#" />
                        </div>
                        <div class="team-caption">
                            <div>
                                <div>
                                    <ul>
                                        <li class="social-icon"><a href="https://www.facebook.com/" target="_blank"><i class="ion-social-facebook"></i></a></li>
                                        <li class="social-icon"><a href="https://www.twitter.com/" target="_blank"><i class="ion-social-twitter"></i></a></li>
                                        <li class="social-icon"><a href="https://www.youtube.com/" target="_blank"><i class="ion-social-youtube"></i></a></li>
                                        <li class="social-icon"><a href="https://www.dribbble.com/" target="_blank"><i class="ion-social-dribbble"></i></a></li>
                                        <li class="social-icon"><a href="https://www.linkedin.com/" target="_blank"><i class="ion-social-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h6>Founder</h6>
                    <h5>Tracey Mathis</h5>
                    <p>Vivamus motestues phasellus enim sed orci eu pharetra. Donec posuere nunc vitae tortor sagittis feugiat in non massa. Quisqueeas sed mi nec.</p>
                </div>
                <div class="team">
                    <div class="team-container">
                        <div class="team-image">
                            <img src="img/team/6.jpg" class="img-responsive" alt="#" />
                        </div>
                        <div class="team-caption">
                            <div>
                                <div>
                                    <ul>
                                        <li class="social-icon"><a href="https://www.facebook.com/" target="_blank"><i class="ion-social-facebook"></i></a></li>
                                        <li class="social-icon"><a href="https://www.twitter.com/" target="_blank"><i class="ion-social-twitter"></i></a></li>
                                        <li class="social-icon"><a href="https://www.youtube.com/" target="_blank"><i class="ion-social-youtube"></i></a></li>
                                        <li class="social-icon"><a href="https://www.linkedin.com/" target="_blank"><i class="ion-social-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h6>Developer</h6>
                    <h5>William Beck</h5>
                    <p>Vivamus motestues phasellus enim sed orci eu pharetra. Donec posuere nunc vitae tortor sagittis feugiat in non massa. Quisqueeas sed mi nec.</p>
                </div>
                <div class="team">
                    <div class="team-container">
                        <div class="team-image">
                            <img src="img/team/7.jpg" class="img-responsive" alt="#" />
                        </div>
                        <div class="team-caption">
                            <div>
                                <div>
                                    <ul>
                                        <li class="social-icon"><a href="https://www.facebook.com/" target="_blank"><i class="ion-social-facebook"></i></a></li>
                                        <li class="social-icon"><a href="https://www.twitter.com/" target="_blank"><i class="ion-social-twitter"></i></a></li>
                                        <li class="social-icon"><a href="https://www.youtube.com/" target="_blank"><i class="ion-social-youtube"></i></a></li>
                                        <li class="social-icon"><a href="https://www.linkedin.com/" target="_blank"><i class="ion-social-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h6>Designer</h6>
                    <h5>Steven Griffin</h5>
                    <p>Vivamus motestues phasellus enim sed orci eu pharetra. Donec posuere nunc vitae tortor sagittis feugiat in non massa. Quisqueeas sed mi nec.</p>
                </div>
            </div>

        </div>
    </div>
</section>
End Team -->





<!-- Services -->
<section id="services" class="pt100 pb90">
    <div class="container">
        <div class="row">

            <div class="col-md-12 text-center pb20">
                <h2 class="">What We Do<br><strong>Our Capabilities</strong></h2>
                <p class="lead">A highly skilled professional service with a
                    <span class="">touch of excellence</span>.</p>
            </div>

            <div class="col-md-4 col-sm-6 feature-left">
                <i class="icon-telescope size-3x " style="color: darkblue"></i>
                <i class="icon-telescope back-icon"></i>
                <div class="feature-left-content">
                    <h4><strong>Customer centric</strong><br></h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                        sed diam nonummy nibh euismod tincidunt.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 feature-left">
                <i class="icon-circle-compass size-3x " style="color: darkblue"></i>
                <i class="icon-circle-compass back-icon"></i>
                <div class="feature-left-content">
                    <h4><strong>Top notch security</strong><br>Crafting With Love</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                        nonummy nibh euismod tincidunt.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 feature-left">
                <i class="icon-genius size-3x "  style="color: darkblue"></i>
                <i class="icon-genius back-icon"></i>
                <div class="feature-left-content">
                    <h4><strong>Prompt Delivery </strong><br>Lightning Fast</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, s
                        ed diam nonummy nibh euismod tincidunt.</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 feature-left">
                <i class="icon-layers size-3x "  style="color: darkblue"></i>
                <i class="icon-layers back-icon"></i>
                <div class="feature-left-content">
                    <h4><strong>Quick response</strong><br>Making a New You</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed d
                        iam nonummy nibh euismod tincidunt.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 feature-left">
                <i class="icon-gears size-3x "  style="color: darkblue"></i>
                <i class="icon-gears back-icon"></i>
                <div class="feature-left-content">
                    <h4><strong>24/7 Free Support</strong><br>Free Support</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                        diam nonummy nibh euismod tincidunt.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 feature-left">
                <i class="icon-globe size-3x "  style="color: darkblue"></i>
                <i class="icon-globe back-icon"></i>
                <div class="feature-left-content">
                    <h4><strong>Investor relation</strong><br>Office Surfing</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, s
                        ed diam nonummy nibh euismod tincidunt.</p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Services -->

<!-- Callout -->

<!-- End Callout -->



<!-- Testimonials
<section id="testimonials" class="parallax pt100 pb90" data-overlay-dark="9">
    <div class="background-image">
        <img src="img/backgrounds/bg-6.jpg" alt="#">
    </div>
    <div class="container">
        <div class="row">

            <div class="col-md-12 text-center pb20">
                <h2>What Clients<br><strong>Say About Us</strong></h2>
            </div>

            <div class="col-md-12 text-center">

                <div class="testimonials quote-icons" data-autoplay="false" data-speed="4000">


                    <div>
                        <p>
                            <i class="vossen-quote color"></i>
                            This guys are amazing! They were so quick to respond and let me tell you, they are all knowing!<br><span class="color">I highly recommend</span> their themes! They are all about making their clients happy!
                            <i class="vossen-quote color"></i>
                        </p>
                        <h5><strong>Jack Westbrook</strong></h5>
                        <p class="occupation">Product Designer</p>
                    </div>

                    <div>
                        <p>
                            <i class="vossen-quote color"></i>
                            I have purchased tens of templates from ThemeForest and this one is undoubtedly the best<br>I ever tried. <span class="color">Easy to edit,</span> nicely coded. You guys, you did a great job here!
                            <i class="vossen-quote color"></i>
                        </p>
                        <h5><strong>Lindsay Swanson</strong></h5>
                        <p class="occupation">Web Designer</p>
                    </div>

                    <div>
                        <p>
                            <i class="vossen-quote color"></i>
                            This is one of the best themes that I bought on ThemeForest. It is well documented and <br>well coded but the best of all is the <span class="color">friendly and quick support</span> behind.
                            <i class="vossen-quote color"></i>
                        </p>
                        <h5><strong>Jared Jackson</strong></h5>
                        <p class="occupation">UX Designer</p>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>
End Testimonials -->

<!-- Clients Section
<section class="pt70 pb70">
    <div class="container">
        <div class="row">

            <div class="clients-slider" data-autoplay="false" data-speed="4000">
                <div><img src="img/clients/1.png" class=" " alt="#"></div>
                <div><img src="img/clients/2.png" class="img-responsive" alt="#"></div>
                <div><img src="img/clients/3.png" class="img-responsive" alt="#"></div>
                <div><img src="img/clients/4.png" class="img-responsive" alt="#"></div>
                <div><img src="img/clients/5.png" class="img-responsive" alt="#"></div>
                <div><img src="img/clients/6.png" class="img-responsive" alt="#"></div>
                <div><img src="img/clients/7.png" class="img-responsive" alt="#"></div>
                <div><img src="img/clients/8.png" class="img-responsive" alt="#"></div>
                <div><img src="img/clients/9.png" class="img-responsive" alt="#"></div>
            </div>

        </div>
    </div>
</section>
End Clients -->

<!-- Get Connected -->
<section class="parallax pt100 pb100" data-overlay-dark="9">
    <div class="background-image">
        <img src="img/backgrounds/PresidentialVisit.jpg" alt="#">
    </div>
    <div class="container">
        <div class="row">

            <div class="col-sm-8 mr-auto text-center">
                <h2>Get Connected<br><strong>Follow Us</strong></h2>
                <p class="lead">Get connected with us on social networks!</p>
            </div>

            <div class="col-md-12">
                <div class=" details white text-center">
                    <div class="phone-number mb10">
                        <h1 class="bold">48-1516-2342</h1>
                    </div>
                    <div class="col-lg-12">
                        <h3 style="color: yellow">hello@<span >ondolinyi.com</span></h3>
                        <h4>Omotosho <span class="color">Ondo Nigeria</span></h4>
                    </div>
                </div>
                <ul class="connected-icons social-icons">

                    <li class="connected-icon">
                        <a target="_blank" href="#">
                            <i class="ion-social-facebook"></i>
                            <h5>Facebook</h5>
                            <p>Be Our Friend</p>
                        </a>
                    </li>

                    <li class="connected-icon">
                        <a target="_blank" href="#">
                            <i class="ion-social-youtube"></i>
                            <h5>Youtube</h5>
                            <p>Watch Our Videos</p>
                        </a>
                    </li>

                    <li class="connected-icon">
                        <a target="_blank" href="#">
                            <i class="ion-social-twitter"></i>
                            <h5>Twitter</h5>
                            <p>Follow Us</p>
                        </a>
                    </li>

                    <li class="connected-icon">
                        <a target="_blank" href="#">
                            <i class="ion-social-instagram"></i>
                            <h5>Instagram</h5>
                            <p>See Our Pictures</p>
                        </a>
                    </li>



                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End Get Connected -->

<!-- Start Price List
<section class="pt100 pb100 pricing-1">
    <div class="container">
        <div class="row">

            <div class="col-md-12 text-center pb20">
                <h2>Pick Some of<br><strong>Our Latest Offers</strong></h2>
                <p class="lead">Try for <span class="color">free</span> - Start paying when you're ready.</p>
            </div>

            <div class="col-lg-10 col-md-12 mr-auto">

                <div class="col-md-4 price-table">
                    <div class="price-box">
                        <h5><strong>Starter</strong></h5>
                        <h1 class="bold price-price">
                            <span>Free</span>
                        </h1>
                        <div class="price-features">
                            <p class="lead">25,000 Visits</p>
                            <p>Limited Email Support</p>
                            <p><i class="ion-close-round"></i></p>
                            <p><i class="ion-close-round"></i></p>
                            <p><i class="ion-close-round"></i></p>
                        </div>
                        <a href="#" class="btn btn-primary btn-md btn-appear"><span>Sign Up Now <i class="ion-android-arrow-forward"></i></span></a>
                    </div>
                </div>

                <div class="col-md-4 price-table-featured">
                    <div class="price-box">
                        <h5><strong>Growth</strong></h5>
                        <h1 class="bold price-price">
                            <sup>$</sup>
                            <span>19</span>
                        </h1>
                        <div class="price-features">
                            <p class="lead">75,000 Visits</p>
                            <p>Email Support</p>
                            <p>24/7 Free Support</p>
                            <p>5GB Bandwidth</p>
                            <p>100GB Storage</p>
                            <p>Free Upgrades</p>
                        </div>
                        <a href="#" class="btn btn-primary btn-md btn-appear"><span>Sign Up Now <i class="ion-android-arrow-forward"></i></span></a>
                    </div>
                </div>

                <div class="col-md-4 price-table">
                    <div class="price-box">
                        <h5><strong>Premium</strong></h5>
                        <h1 class="bold price-price">
                            <sup>$</sup>
                            <span>59</span>
                        </h1>
                        <div class="price-features">
                            <p class="lead">225,000 Visits</p>
                            <p>Phone Support</p>
                            <p>24/7 Free Support</p>
                            <p>900GB Bandwidth</p>
                            <p>1000TB Storage</p>
                        </div>
                        <a href="#" class="btn btn-primary btn-md btn-appear"><span>Sign Up Now <i class="ion-android-arrow-forward"></i></span></a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
End Price List -->

<!-- Contact Info
<section class="parallax pt110 pb70" data-overlay-dark="8">
    <div class="background-image">
        <img src="img/backgrounds/bg-8.jpg" alt="#">
    </div>
    <div class="container">
        <div class="row">

            <div class="col-md-12 details white text-center">
                <div class="phone-number mb10">
                    <h1 class="bold">48-1516-2342</h1>
                </div>
                <div class="col-lg-12">
                    <h3>hello@<span class="color">domain.com</span></h3>
                    <h4>124 Central West, Manhattan, <span class="color">New York</span></h4>
                </div>
            </div>

        </div>
    </div>
</section>
End Contact Info -->

<!-- Contact Form -->
<section id="contact" class="pt120 pb100">
    <div class="container">
        <div class="row">

            <div class="col-md-12 text-center pb20">
                <h2>Get In Touch<br><strong>Contact Us</strong></h2>
                <p class="lead">We would like to <span class="color">hear from you</span></p>
            </div>

            <div class="col-md-8 col-md-offset-2 contact box-style">
                <div id="message-info"></div>
                <!-- Forms can be functional only on server. Upload to your server when testing. -->
                <form  method="post">

                    <div class="col-sm-12">
                        <input name="name" id="name" placeholder="Your Name *"/>
                    </div>
                    <div class="col-sm-6">
                        <input name="email" id="email" placeholder="Your Email *"/>
                    </div>
                    <div class="col-sm-6">
                        <input name="phone" id="phone" placeholder="Your Phone"/>
                    </div>
                    <div class="col-sm-12">
                        <textarea name="message" rows="9" id="message" placeholder="Your Message *"></textarea>
                    </div>
                    <div class="col-md-12">
                        <input type="submit" class="submit btn btn-lg btn-primary" id="submit" value="Send Message"/>
                    </div>

                </form>
            </div>

        </div>
    </div>
</section>
<!-- End Contact Form -->

<!-- Map
<section class="vossen-map">
Paste your map iframe here
    <iframe height="550" src="https://maps.google.com/maps?q=Renaissance%20New%20York%20Hotel%2057%2C%20New%20York%2C%20USA&amp;t=m&amp;z=17&amp;output=embed&amp;iwloc=near" border="0" marginwidth="0" marginheight="0"></iframe>
</section>
End Map -->

<!-- Start Footer -->

@include('includes.footer')
<!-- End Footer -->

<script src="{{asset('/js/jquery.js')}}"></script>
<script src="{{asset('/js/init.js')}}"></script>
<script src="{{asset('/js/scripts.js')}}"></script>

</body>

</html>
