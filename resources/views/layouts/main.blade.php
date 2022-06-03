<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>{{ $judul_halaman }}</title>
        <!-- Stylesheets -->
        <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
        <!-- Responsive File -->
        <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" />
        <!-- Color File -->
        <link href="{{ asset('assets/css/color.css') }}" rel="stylesheet" />

        <link href="https://fonts.googleapis.com/css2?family=Arimo:wght@400;700&family=Merriweather:ital@0;1&display=swap" rel="stylesheet" />

        <!-- <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon" />
        <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon" /> -->

        <!-- Responsive -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
        <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    </head>

    <body>
        <div class="page-wrapper">
            <!-- Preloader -->
            <div class="loader-wrap">
                <div class="preloader"><div class="preloader-close">Preloader Close</div></div>
                <div class="layer layer-one"><span class="overlay"></span></div>
                <div class="layer layer-two"><span class="overlay"></span></div>
                <div class="layer layer-three"><span class="overlay"></span></div>
            </div>

            <!-- Main Header -->
            <header class="main-header header-style-one">
                <!-- Header Top -->
                <div class="header-top">
                    <div class="auto-container">
                        <div class="inner-container">
                            <div class="left-column">
                                <div class="text"><i class="icon-news"></i><a href="#">Latest City News</a> Coronavirus: Restrictions eased in parts of some islands</div>
                            </div>
                            <div class="right-column">
                                <div class="phone">
                                    <a href="tel:+18526105599"><i class="fas fa-phone-volume"></i>+1 852-610-5599</a>
                                </div>
                                <ul class="header-top-menu">
                                    <li><a href="#">City Tour</a></li>
                                    <li><a href="#">Join Us</a></li>
                                    <li><a href="#">Get In Touch</a></li>
                                </ul>
                                <ul class="social-icon">
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Header Upper -->
                <div class="header-upper">
                    <div class="auto-container">
                        <div class="inner-container">
                            <!--Logo-->
                            <div class="logo-box">
                                <div class="logo">
                                    <!-- <a href="./"><img src="{{ asset('assets/images/tes.png') }}" alt="" /></a> -->
                                    <a href="/"><h1 class="text-white">Loha</h1><p class="text-white">Desa Wisata</p></a>
                                </div>
                            </div>
                            <!--Nav Box-->
                            <div class="nav-outer">
                                <!--Mobile Navigation Toggler-->
                                <div class="mobile-nav-toggler"><img src="{{ asset('assets/images/icons/icon-bar-2.png') }}" alt="" /></div>

                                <!-- Main Menu -->
                                <nav class="main-menu navbar-expand-md navbar-light">
                                    <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                        <ul class="navigation">
                                            <li><a href="./">Beranda</a></li>
                                            <li class="{{ ($judul_halaman === 'Tentang Kami | Desa Wisata Loha')?'current':'' }}"><a href="/about">Tentang Kami</a></li>
                                            <li class="{{ ($judul_halaman === 'Galeri | Desa Wisata Loha')?'current':'' }}"><a href="/gallery">Galeri</a></li>
                                            <li class="{{ ($judul_halaman === 'Blog | Desa Wisata Loha')?'current':'' }}"><a href="/blog">Blog</a></li>
                                            <li class="{{ ($judul_halaman === 'Kontak Kami | Desa Wisata Loha')?'current':'' }}"><a href="/contact">Kontak</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="navbar-right">
                                <div class="search-form-two">
                                    <form>
                                        <input type="search" placeholder="Ketikkan sesuatu ..." />
                                        <button type="submit"><i class="icon-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Header Upper-->

                <!-- Sticky Header  -->
                <div class="sticky-header">
                    <div class="header-upper">
                        <div class="auto-container">
                            <div class="inner-container">
                                <!--Logo-->
                                <div class="logo-box">
                                    <div class="logo">
                                        <!-- <a href="./"><img src="{{ asset('assets/images/logo.png') }}" alt="" /></a> -->
                                        <a href="/"><h1 class="text-white">Loha</h1><p class="text-white">Desa Wisata</p></a>
                                    </div>
                                </div>
                                <!--Nav Box-->
                                <div class="nav-outer">
                                    <!--Mobile Navigation Toggler-->
                                    <div class="mobile-nav-toggler"><img src="assets/images/icons/icon-bar-2.png" alt="" /></div>
                                    <!-- Main Menu -->
                                    <nav class="main-menu navbar-expand-md navbar-light"></nav>
                                </div>
                                <div class="navbar-right">
                                    <div class="search-form-two">
                                        <form>
                                            <input type="search" placeholder="Ketikkan sesuatu ..." />
                                            <button type="submit"><i class="icon-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Sticky Menu -->

                <!-- Mobile Menu  -->
                <div class="mobile-menu">
                    <div class="menu-backdrop"></div>
                    <div class="close-btn"><span class="icon far fa-times-circle"></span></div>

                    <nav class="menu-box">
                        <div class="nav-logo">
                            <!-- <a href="./"><img src="{{ asset('assets/images/logo.png') }}" alt="" title="" /></a> -->
                            <a href="/">Desa Wisata Loha</a>
                        </div>
                        <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                        <!--Social Links-->
                        <div class="social-links">
                            <ul class="clearfix">
                                <li>
                                    <a href="#"><span class="fab fa-twitter"></span></a>
                                </li>
                                <li>
                                    <a href="#"><span class="fab fa-facebook-square"></span></a>
                                </li>
                                <li>
                                    <a href="#"><span class="fab fa-pinterest-p"></span></a>
                                </li>
                                <li>
                                    <a href="#"><span class="fab fa-instagram"></span></a>
                                </li>
                                <li>
                                    <a href="#"><span class="fab fa-youtube"></span></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <!-- End Mobile Menu -->

                <div class="nav-overlay">
                    <div class="cursor"></div>
                    <div class="cursor-follower"></div>
                </div>
            </header>
            <!-- End Main Header -->

            <!--Search Popup-->
            <div id="search-popup" class="search-popup">
                <div class="close-search theme-btn"><span class="far fa-times-circle"></span></div>
                <div class="popup-inner">
                    <div class="overlay-layer"></div>
                    <div class="search-form">
                        <form method="post" action="index.php">
                            <div class="form-group">
                                <fieldset>
                                    <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required />
                                    <input type="submit" value="Search Now!" class="theme-btn" />
                                </fieldset>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            {{-- page content --}}
            @yield('page-content')

            <!-- Main  Footer -->
            <footer class="main-footer">
                <div class="auto-container">
                    <!--Widgets Section-->
                    <div class="widgets-section">
                        <div class="row clearfix">
                            <!--Column-->
                            <div class="column col-lg-4 col-md-6">
                                <div class="widget about-widget">
                                    <h3 class="widget-title">Tentang Kami</h3>
                                    <div class="text">Adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</div>
                                    <ul class="social-links">
                                        <li>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-youtube"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="column col-lg-4 col-md-6">
                                <div class="widget links-widget">
                                    <h3 class="widget-title">Navigasi</h3>
                                    <div class="widget-content">
                                        <ul>
                                            <li><a href="index.php">Beranda</a></li>
                                            <li><a href="about.php">Tentang Kami</a></li>
                                            <li><a href="gallery.php">Galeri</a></li>
                                            <li><a href="blog.php">Blog</a></li>
                                            <li><a href="contact.php">Kontak</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="column col-lg-4 col-md-6">
                                <div class="widget contact-widget">
                                    <h3 class="widget-title">Kontak Kami</h3>
                                    <div class="widget-content">
                                        <ul class="contact-info">
                                            <li>
                                                <div class="icon"><img src="assets/images/icons/icon-1.png" alt="" /></div>
                                                <div class="text">
                                                    <strong>Lokasi</strong> Desa Loha, kecamatan Pacar,<br />
                                                    kabupaten Manggarai Barat - NTT
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon"><img src="assets/images/icons/icon-2.png" alt="" /></div>
                                                <div class="text">
                                                    <strong>Telepon</strong>
                                                    <a href="tel:+62 823 3976 5401">+62 823 3976 5401</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon"><img src="assets/images/icons/icon-3.png" alt="" /></div>
                                                <div class="text">
                                                    <strong>Email</strong>
                                                    <a href="mailto:munciple@example.net">munciple@example.net</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Bottom -->
                <div class="footer-bottom">
                    <div class="auto-container">
                        <div class="wrapper-box">
                            <div class="copyright">
                                <div class="text">© 1995-2020 <a href="#">GOVERNLIA</a> - The City Govt All rights reserved.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!--End pagewrapper-->

        <!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon-arrow"></span></div>

        <script src="{{ asset('assets/js/jquery.js') }}"></script>
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
        <script src="{{ asset('assets/js/isotope.js') }}"></script>
        <script src="{{ asset('assets/js/owl.js') }}"></script>
        <script src="{{ asset('assets/js/appear.js') }}"></script>
        <script src="{{ asset('assets/js/wow.js') }}"></script>
        <script src="{{ asset('assets/js/lazyload.js') }}"></script>
        <script src="{{ asset('assets/js/scrollbar.js') }}"></script>
        <script src="{{ asset('assets/js/TweenMax.min.js') }}"></script>
        <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.polyglot.language.switcher') }}.js"></script>
        <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('assets/js/parallax-scroll.js') }}"></script>

        <script src="{{ asset('assets/js/script.js') }}"></script>
    </body>
</html>
