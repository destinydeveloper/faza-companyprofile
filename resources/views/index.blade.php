<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Kampoeng Malang</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{ asset('assets/frontend/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/frontend/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i"
          rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{ asset('assets/frontend/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{ asset('assets/frontend/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/lib/magnific-popup/magnific-popup.css') }}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
    Theme Name: Avilon
    Theme URL: https://bootstrapmade.com/avilon-bootstrap-landing-page-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

<!--==========================
            Header
  ============================-->
    <header id="header">
        <div class="container">

        <div id="logo" class="pull-left">
            {{-- <h1><a href="#intro" class="scrollto">Kampoeng Malang</a></h1> --}}
            <!-- Uncomment below if you prefer to use an image logo -->
            {{-- <img src="{{ url('/') }}{{ $data['aboutUs']->path }}{{ $data['aboutUs']->photo }}" alt=""> --}}
            <a href="#intro"><img src="{{ url('/') }}{{ $data['home']->path }}{{ $data['home']->photo }}" alt="header logo" title="Logo" ></a>
        </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="#intro" class="scrollto" title="{{ $data['menu1']->title }}">{{ $data['menu1']->title }}</a></li>
                    <li><a href="#about" title="{{ $data['menu2']->title }}">{{ $data['menu2']->title }}</a></li>
                    <li><a href="#pricing" title="{{ $data['menu3']->title }}">{{ $data['menu3']->title }}</a></li>
                    <li><a href="#features" title="{{ $data['menu4']->title }}">{{ $data['menu4']->title }}</a></li>
                    <li><a href="#call-to-action" title="{{ $data['menu5']->title }}">{{ $data['menu5']->title }}</a></li>
                    <li class="menu-has-children"><a href="" title="Galeri">Galeri</a>
                        <ul>
                            <li><a href="#gallery" title="Foto">Foto</a></li>
                            <li><a href="#gallery2" title="Video">Video</a></li>
                        </ul>
                    </li>
                    <li><a href="#contact" title="{{ $data['menu6']->title }}">{{ $data['menu6']->title }}</a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </header><!-- #header -->

    <!--==========================
    Intro Section
  ============================-->
    {{-- <section id="intro"> --}}
        <div class="carousel-margin" id="intro">
            <div id="carouselId" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselId" data-slide-to="1"></li>
                    <li data-target="#carouselId" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="{{ url('/') }}{{ $data['aboutUs']->path }}{{ $data['aboutUs']->photo }}" alt="First slide" height="515" width="100%">
                        <div class="carousel-caption ">
                            <h3>Title</h3>
                            <p>Description</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ url('/') }}{{ $data['product']->path }}{{ $data['product']->photo }}" alt="First slide" height="515" width="100%">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Title</h3>
                            <p>Description</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ url('/') }}{{ $data['aboutUs']->path }}{{ $data['aboutUs']->photo }}" alt="First slide" height="515" width="100%">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Title</h3>
                            <p>Description</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        {{-- <div class="product-screens mb-5">
            <div class="intro-text">
                <h2>{{ $data['home']->title }}</h2>
                <p>{{ $data['home']->description }}</p>
                <a href="#about" class="btn-get-started scrollto">Get Started</a>
            </div>
        </div> --}}

    {{-- </section><!-- #intro --> --}}

    <main id="main">

    <!--==========================
            About Us Section
    ============================-->
        <section id="about" class="section-bg">
            <div class="container-fluid">
                <div class="section-header">
                    <h3 class="section-title">{{ $data['menu2']->title }}</h3>
                    <span class="section-divider"></span>
                    <p class="section-description">
                        {{ $data['menu2']->sub_title }}
                    </p>
                </div>

                <div class="row">
                    <div class="col-lg-6 about-img wow fadeInLeft">
                        <img src="{{ url('/') }}{{ $data['aboutUs']->path }}{{ $data['aboutUs']->photo }}" alt="">
                    </div>

                    <div class="col-lg-6 content wow fadeInRight">
                        <h2>{{ $data['aboutUs']->title }}</h2>
                        <p>
                            {{ $data['aboutUs']->description }}
                        </p>
                    </div>
                </div>
            </div>
        </section><!-- #about -->

        <!--==========================
                VISI DAN MISI
        ============================-->
        <section id="pricing" class="bg-white">
                <div class="container ">
                    <div class="section-header">
                        <h3 class="section-title">{{ $data['menu3']->title }}</h3>
                        <span class="section-divider"></span>
                        <p class="section-description">
                            {{ $data['menu3']->title }}
                        </p>
                    </div>

                    <div class="row">
                        <section id="advanced-features">
                            <div class="features-row bg-white">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <img class="advanced-feature-img-right wow fadeInRight" src="{{ url('/') }}{{ $data['visi']->path }}{{ $data['visi']->photo }}"
                                                 alt="">
                                            <div class="wow fadeInLeft">
                                                <h2>{{ $data['visi']->title }}</h2>
                                                <p>
                                                    {{ $data['visi']->description }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="features-row bg-white">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <img class="advanced-feature-img-left wow fadeInRight" src="{{ url('/') }}{{ $data['misi']->path }}{{ $data['misi']->photo }}"
                                                 alt="">
                                            <div class="wow fadeInRight">
                                                 <h2>{{ $data['misi']->title }}</h2>
                                                    <ul>
                                                        @foreach ($data['misi_content'] as $misiContent)
                                                        <table>
                                                            <tr>
                                                                <td style="vertical-align: top;">
                                                                    <i class="ion-android-checkmark-circle"></i>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        {{ $misiContent->description }}
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        &nbsp;
                                                        @endforeach
                                                    </ul>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section><!-- #advanced-features -->

                    </div>
                </div>
            </section><!-- # VISI & MISI -->

    <!--==========================
                Produk
    ============================-->
        <section id="features" class="section-bg">
            <div class="container-fluid">

                <div class="row ">

                    <div class="col-lg-8 offset-lg-4">
                        <div class="section-header wow fadeIn" data-wow-duration="1s">
                            <h3 class="section-title">{{ $data['menu4']->title }}</h3>
                            <span class="section-divider"></span>
                            <p class="section-description">
                                {{ $data['menu4']->sub_title }}
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-5 features-img">
                        <img src="{{ url('/') }}{{ $data['product']->path }}{{ $data['product']->photo }}" alt="" class="wow fadeInLeft">
                    </div>

                    <div class="col-lg-8 col-md-7 ">

                        <div class="row">
                            @foreach ($data['product_content'] as $productContent)
                                @php
                                    $link;
                                    $productContent->link !== '#' ?  $link = 'http://'. "" .$productContent->link : $link = '#features'
                                @endphp

                                <div class="col-lg-6 col-md-6 box wow fadeInRight">
                                    <a href="{{ $link }}">
                                        <div class="icon"><i class="ion-social-buffer-outline"></i></div>
                                        <h4 class="title">{{ $productContent->title }}</h4>
                                        <p class="description">
                                            {{ $productContent->description }}
                                        </p>
                                    </a>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>

        </section><!-- #PRODUK -->

        <!--==========================
      PESAN, KESAN ATAU PENGUMUMAN
    ============================-->
        <section id="call-to-action">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 text-center text-lg-left">
                        <h3 class="cta-title">{{ $data['notice']->title }}</h3>
                        <p class="cta-text">
                            {{ $data['notice']->description }}
                        </p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="#contact">Call To Action</a>

                    </div>
                </div>

            </div>
        </section><!-- #PESAN, KESAN ATAU PENGUMUMAN -->

    <!--==========================
            GALERI FOTO
    ============================-->
        <section id="gallery" class="section-bg">
            <div class="container-fluid">
                <div class="section-header">
                    <h3 class="section-title">Foto</h3>
                    <span class="section-divider"></span>
                    <p class="section-description">

                    </p>
                </div>

                <div class="row no-gutters">
                    @foreach ($data['photo'] as $foto)
                        <div class="col-lg-4 col-md-6" >
                            <div class="gallery-item wow fadeInUp" style="margin: 2.5px">
                                <a href="{{ url('/') }}{{ $foto->path }}{{ $foto->photo }}" class="gallery-popup" >
                                    <img src="{{ url('/') }}{{ $foto->path }}{{ $foto->photo }}" alt="" >
                                </a>
                                <div ></div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section><!-- #GALERI FOTO -->

    <!--==========================
            GALERI VIDEO
    ============================-->
    <section id="gallery2" class="section-bg">
            <div class="container">
                <div class="section-header">
                    <h3 class="section-title">Video</h3>
                    <span class="section-divider"></span>
                    <p class="section-description">

                    </p>
                </div>

                <div class="row no-gutters">
                    @foreach ($data['video'] as $video)
                        <div class="col-lg-4 col-md-6">
                            <div class="fadeInUp gallery-item">
                                {!! $video->embed_file !!}
                                {{-- <iframe width="100%" height="315" src="https://www.youtube.com/embed/AyciIyk9jVw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section><!-- #GALERI FOTO -->

        <!--==========================
      Contact Section
    ============================-->
        <section id="contact">
            <div class="container">
                <div class="section-header mb-5">
                    <h3 class="section-title">{{ $data['menu6']->title }}</h3>
                    <span class="section-divider"></span>
                </div>
                <div class="row wow fadeInUp">

                    <div class="col-lg-4 col-md-4 text-center">
                        <div class="contact-about">
                            {{-- <h3>LOGO KAMPOENG MALANG</h3> --}}
                            <img src="{{ url('/') }}{{ $data['home']->path }}{{ $data['home']->photo }}" width="100%" height="200" alt="header logo" title="logo">

                            <div class="social-links mt-2">
                                <a href="{{ $data['contact']->twitter_link }}" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="{{ $data['contact']->facebook_link }}" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="{{ $data['contact']->instagram_link }}" class="instagram" target="_blank"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="info">
                            <div>
                                <i class="ion-ios-location-outline"></i>
                                <p> {{ $data['contact']->address }}</p>
                            </div>

                            <div>
                                <i class="ion-ios-email-outline"></i>
                                <p><a style="color: #333333" href="mailto:{{ $data['contact']->email }}">{{ $data['contact']->email }}</a></p>
                            </div>

                            <div>
                                <i class="ion-ios-telephone-outline"></i>
                                <p>{{ $data['contact']->telp }}</p>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-5 col-md-8">
                        <div class="form">
                            <div id="sendmessage">Your message has been sent. Thank you!</div>
                            <div id="errormessage"></div>
                            {{-- <form action="#" method="post" role="form" class="contactForm"> --}}
                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                               data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                        {{-- <div class="validation"></div> --}}
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                                               data-rule="email" data-msg="Please enter a valid email" />
                                        {{-- <div class="validation"></div> --}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                           data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                    {{-- <div class="validation"></div> --}}
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" data-rule="required"
                                              data-msg="Please write something for us" placeholder="Message"></textarea>
                                    {{-- <div class="validation"></div> --}}
                                </div>
                                {{-- type="submit" --}}
                                <div class="text-center"><button type="submit" title="Send Message" onclick="alert('Fitur belum tersedia')">Send Message</button></div>
                            {{-- </form> --}}
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- #contact -->

    </main>

    <!--==========================
        Footer
    ============================-->
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-lg-left text-center">
                    <div class="copyright">
                        &copy; Copyright <strong>Kampoeng Malang {{date('Y')}}</strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
                        <a href="#intro" class="scrollto">Home</a>
                        <a href="#about" class="scrollto">About</a>
                        <a href="#">Privacy Policy</a>
                        <a href="#">Terms of Use</a>
                    </nav>
                </div>
            </div>
        </div>
    </footer><!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="{{ asset('assets/frontend/lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/lib/jquery/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/lib/superfish/hoverIntent.js') }}"></script>
    <script src="{{ asset('assets/frontend/lib/superfish/superfish.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/lib/magnific-popup/magnific-popup.min.js') }}"></script>

    <!-- Contact Form JavaScript File -->
    {{-- <script src="{{ asset('assets/frontend/contactform/contactform.js') }}"></script> --}}

    <!-- Template Main Javascript File -->
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>

</body>

</html>
