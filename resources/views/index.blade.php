<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Avilon Bootstrap Template</title>
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
                <a href="#intro"><img src="{{ asset('assets/frontend/img/logo.png') }}" alt="header logo" title=""></a>
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="#intro" title="Home">Home</a></li>
                    <li><a href="#about" title="Tentang Kami">Tentang Kami</a></li>
                    <li><a href="#pricing" title="Visi & Misi">Visi & Misi</a></li>
                    <li><a href="#features" title="Produk">Produk</a></li>
                    <li><a href="#call-to-action" title="Pengumuman">Pengumuman</a></li>
                    <li class="menu-has-children"><a href="" title="Galeri">Galeri</a>
                        <ul>
                            <li><a href="#gallery" title="Foto">Foto</a></li>
                            <li><a href="#gallery2" title="Video">Video</a></li>
                        </ul>
                    </li>
                    <li><a href="#contact" title="Kontak Kami">Kontak kami</a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </header><!-- #header -->

    <!--==========================
    Intro Section
  ============================-->
    <section id="intro">
        <div class="product-screens mb-5">
            <div class="intro-text">
                <h2>Welcome to Avilon</h2>
                <p>We are team of talanted designers making websites with Bootstrap</p>
                <a href="#about" class="btn-get-started scrollto">Get Started</a>
            </div>
        </div>

    </section><!-- #intro -->

    <main id="main">

    <!--==========================
            About Us Section
    ============================-->
        <section id="about" class="section-bg">
            <div class="container-fluid">
                <div class="section-header">
                    <h3 class="section-title">Tentang Kami</h3>
                    <span class="section-divider"></span>
                    <p class="section-description">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque<br>
                        sunt in culpa qui officia deserunt mollit anim id est laborum
                    </p>
                </div>

                <div class="row">
                    <div class="col-lg-6 about-img wow fadeInLeft">
                        <img src="{{ asset('assets/frontend/img/about-img.jpg') }}" alt="">
                    </div>

                    <div class="col-lg-6 content wow fadeInRight">
                        <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elite storium paralate</h2>
                        <h3>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                            anim id est laborum.</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>

                        <ul>
                            <li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea
                                commodo consequat.</li>
                            <li><i class="ion-android-checkmark-circle"></i> Duis aute irure dolor in reprehenderit in
                                voluptate velit.</li>
                            <li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea
                                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta
                                storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                        </ul>

                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                            sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                            laborum Libero justo laoreet sit amet cursus sit amet dictum sit. Commodo sed egestas
                            egestas fringilla phasellus faucibus scelerisque eleifend donec
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
                        <h3 class="section-title">Visi & Misi</h3>
                        <span class="section-divider"></span>
                        <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque</p>
                    </div>

                    <div class="row">
                        <section id="advanced-features">

                            <div class="features-row bg-white">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <img class="advanced-feature-img-right wow fadeInRight" src="{{ asset('assets/frontend/img/advanced-feature-1.jpg') }}"
                                                 alt="">
                                            <div class="wow fadeInLeft">
                                                <h2>Duis aute irure dolor in reprehenderit in voluptate velit esse</h2>
                                                <h3>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                                    officia deserunt mollit anim id est laborum.</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam.</p>
                                                <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                                                    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                                    cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                                                    id est laborum.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="features-row bg-white">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <img class="advanced-feature-img-left wow fadeInRight" src="{{ asset('assets/frontend/img/advanced-feature-3.jpg') }}"
                                                 alt="">
                                            <div class="wow fadeInRight">
                                                <h2>Duis aute irure dolor in reprehenderit in voluptate velit esse</h2>
                                                <h3>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                                    officia deserunt mollit anim id est laborum.</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam</p>
                                                <i class="ion-ios-albums-outline"></i>
                                                <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                                                    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                                    cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                                                    id est laborum.</p>
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
                            <h3 class="section-title">Produk</h3>
                            <span class="section-divider"></span>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-5 features-img">
                        <img src="{{ asset('assets/frontend/img/product-features.png') }}" alt="" class="wow fadeInLeft">
                    </div>

                    <div class="col-lg-8 col-md-7 ">

                        <div class="row">
                            <div class="col-lg-6 col-md-6 box wow fadeInRight">
                                <a href="{{route('web')}}">
                                    <div class="icon"><i class="ion-social-buffer-outline"></i></div>
                                    <h4 class="title">Faza fruit & Vegetables</h4>
                                    <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas
                                        molestias excepturi sint occaecati cupiditate non provident clarida perendo.</p>
                                </a>
                            </div>
                            <div class="col-lg-6 col-md-6 box wow fadeInRight">
                                    <a href="{{route('web')}}">
                                        <div class="icon"><i class="ion-social-buffer-outline"></i></div>
                                        <h4 class="title">Faza fruit & Vegetables</h4>
                                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas
                                            molestias excepturi sint occaecati cupiditate non provident clarida perendo.</p>
                                    </a>
                                </div>
                            <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.2s">
                                <div class="icon"><i class="ion-social-buffer-outline"></i></div>
                                <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                                <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur teleca starter sinode park ledo.</p>
                            </div>
                            <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.3s">
                                <div class="icon"><i class="ion-social-buffer-outline"></i></div>
                                <h4 class="title"><a href="">Magni Dolores</a></h4>
                                <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                    qui officia deserunt mollit anim id est laborum dinoun trade capsule.</p>
                            </div>
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
                        <h3 class="cta-title">PESAN, KESAN, ATAU PENGUMUMAN</h3>
                        <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="#">Call To Action</a>
                    </div>
                </div>

            </div>
        </section><!-- #PESAN, KESAN ATAU PENGUMUMAN -->

    <!--==========================
            GALERI FOTO
    ============================-->
        <section id="gallery">
            <div class="container-fluid">
                <div class="section-header">
                    <h3 class="section-title">Foto</h3>
                    <span class="section-divider"></span>
                    <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium doloremque</p>
                </div>

                <div class="row no-gutters">

                    <div class="col-lg-4 col-md-6">
                        <div class="gallery-item wow fadeInUp">
                            <a href="{{ asset('assets/frontend/img/gallery/gallery-1.jpg') }}" class="gallery-popup">
                                <img src="{{ asset('assets/frontend/img/gallery/gallery-1.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="gallery-item wow fadeInUp">
                            <a href="{{ asset('assets/frontend/img/gallery/gallery-2.jpg') }}" class="gallery-popup">
                                <img src="{{ asset('assets/frontend/img/gallery/gallery-2.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="gallery-item wow fadeInUp">
                            <a href="{{ asset('assets/frontend/img/gallery/gallery-3.jpg') }}" class="gallery-popup">
                                <img src="{{ asset('assets/frontend/img/gallery/gallery-3.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="gallery-item wow fadeInUp">
                            <a href="{{ asset('assets/frontend/img/gallery/gallery-4.jpg') }}" class="gallery-popup">
                                <img src="{{ asset('assets/frontend/img/gallery/gallery-4.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="gallery-item wow fadeInUp">
                            <a href="{{ asset('assets/frontend/img/gallery/gallery-5.jpg') }}" class="gallery-popup">
                                <img src="{{ asset('assets/frontend/img/gallery/gallery-5.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="gallery-item wow fadeInUp">
                            <a href="{{ asset('assets/frontend/img/gallery/gallery-6.jpg') }}" class="gallery-popup">
                                <img src="{{ asset('assets/frontend/img/gallery/gallery-6.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="gallery-item wow fadeInUp">
                            <a href="{{ asset('assets/frontend/img/gallery/gallery-6.jpg') }}" class="gallery-popup">
                                <img src="{{ asset('assets/frontend/img/gallery/gallery-6.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>

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
                    <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium doloremque</p>
                </div>

                <div class="row no-gutters">
                    <div class="col-lg-4 col-md-6">
                        <div class="fadeInUp gallery-item">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/AyciIyk9jVw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="fadeInUp gallery-item">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/AyciIyk9jVw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="fadeInUp gallery-item">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/AyciIyk9jVw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="fadeInUp gallery-item">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/AyciIyk9jVw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- #GALERI FOTO -->

        <!--==========================
      Contact Section
    ============================-->
        <section id="contact">
            <div class="container">
                <div class="section-header mb-5">
                    <h3 class="section-title">Hubungi Kami</h3>
                    <span class="section-divider"></span>
                </div>
                <div class="row wow fadeInUp">

                    <div class="col-lg-4 col-md-4 text-center">
                        <div class="contact-about">
                            {{-- <h3>LOGO KAMPOENG MALANG</h3> --}}
                            <img src="{{ asset('assets/frontend/img/logo1.png') }}" width="100%" height="200" alt="header logo" title="logo">

                            <div class="social-links">
                                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="info">
                            <div>
                                <i class="ion-ios-location-outline"></i>
                                <p>A108 Adam Street<br>New York, NY 535022</p>
                            </div>

                            <div>
                                <i class="ion-ios-email-outline"></i>
                                <p>info@example.com</p>
                            </div>

                            <div>
                                <i class="ion-ios-telephone-outline"></i>
                                <p>+1 5589 55488 55s</p>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-5 col-md-8">
                        <div class="form">
                            <div id="sendmessage">Your message has been sent. Thank you!</div>
                            <div id="errormessage"></div>
                            <form action="#" method="post" role="form" class="contactForm">
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
                                <div class="text-center"><button type="submit" title="Send Message" onclick="alert('Fitur belum tersedia')">Send Message</button></div>
                            </form>
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
                        <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Avilon
            -->
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
    <script src="{{ asset('assets/frontend/contactform/contactform.js') }}"></script>

    <!-- Template Main Javascript File -->
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>

</body>

</html>
