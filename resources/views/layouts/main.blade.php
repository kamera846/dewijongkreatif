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
        <link rel="stylesheet" href="{{ asset('mycss.css') }}">

        <link href="https://fonts.googleapis.com/css2?family=Arimo:wght@400;700&family=Merriweather:ital@0;1&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="mycss.css">
        @foreach ($settings as $setting)
        @if ($setting->favicon)
        <link rel="icon" href="{{ asset('storage/' . $setting->favicon) }}" type="image/png" />
        @else
        <link rel="icon" href="{{ asset('admin/assets/img/brand/favicon.png') }}" type="image/png" />
        @endif
        @endforeach

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
                            @foreach ($newBlogs as $newBlog)
                            <div class="left-column">
<<<<<<< HEAD
                                <div class="text"><i class="icon-news"></i><a href="/blog/{{ 'tuufkjfkjfskj' }}">Artikel terbaru</a> {{ 'oiofoahofahoi' }}</div>
=======
                                <div class="text"><i class="icon-news"></i><a href="/blog/{{ $newBlog->slug }}">Postingan Terbaru</a> {{ $newBlog->judul }}</div>
>>>>>>> 57550b7595d691257d76951f9c929d1a08d43b17
                            </div>
                            @endforeach
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
<<<<<<< HEAD
                                    <a href="/"><img src="{{ asset('assets/images/tes-logo2.png') }}" alt="desa wisata loha" /></a>
=======
                                    @foreach ($settings as $setting)
                                        <a href="./"><img src="{{ asset('storage/' . $setting->logo) }}" alt="" style="max-height: 60px;" /></a>
>>>>>>> 57550b7595d691257d76951f9c929d1a08d43b17
                                    {{-- <a href="/"><h1 class="text-white">Loha</h1><p class="text-white">Desa Wisata</p></a> --}}
                                    @endforeach
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
<<<<<<< HEAD
                                            <li><a href="/">Beranda</a></li>
                                            <li class="{{ ($judul_halaman === 'Tentang Kami | Desa Wisata Loha')?'current':'' }}"><a href="/about">Tentang Kami</a></li>
                                            <li class="{{ ($judul_halaman === 'Galeri | Desa Wisata Loha')?'current':'' }}"><a href="/gallery">Galeri</a></li>
                                            <li class="{{ ($judul_halaman === 'Blog | Desa Wisata Loha' || isset($tes))?'current':''}}"><a href="/blog">Blog</a></li>
                                            <li class="{{ ($judul_halaman === 'Kontak Kami | Desa Wisata Loha')?'current':'' }}"><a href="/contact">Kontak</a></li>
=======
                                            @foreach ($settings as $setting)
                                            @if($setting->web_title !== null)
                                                <li><a href="{{ isset($tes)?'../':'./' }}">Beranda</a></li>
                                                <li class="<?php if($judul_halaman == 'Tentang Kami | ' . $setting->web_title) echo "current";?>"><a href="/about">Tentang Kami</a></li>
                                                <li class="<?php if($judul_halaman == 'Galeri | ' . $setting->web_title) echo "current";?>"><a href="/gallery">Galeri</a></li>
                                                <li class="<?php if($judul_halaman == 'Blog | ' . $setting->web_title) echo "current";?>"><a href="/blog">Blog</a></li>
                                                <li class="<?php if($judul_halaman == 'Kontak Kami | ' . $setting->web_title) echo "current";?>"><a href="/contact">Kontak</a></li>
                                            @else
                                            <li><a href="{{ isset($tes)?'../':'./' }}">Beranda</a></li>
                                            <li class="{{ ($judul_halaman === 'Tentang Kami')?'current':'' }}"><a href="/about">Tentang Kami</a></li>
                                            <li class="{{ ($judul_halaman === 'Galeri')?'current':'' }}"><a href="/gallery">Galeri</a></li>
                                            <li class="{{ ($judul_halaman === 'Blog' || isset($tes))?'current':''}}"><a href="/blog">Blog</a></li>
                                            <li class="{{ ($judul_halaman === 'Kontak Kami')?'current':'' }}"><a href="/contact">Kontak</a></li>                                        
                                            @endif
                                            @endforeach
>>>>>>> 57550b7595d691257d76951f9c929d1a08d43b17
                                        </ul>
                                    </div>
                                </nav>
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
<<<<<<< HEAD
                                        <a href="/"><img src="{{ asset('assets/images/tes-logo.png') }}" alt="desa wisata loha" /></a>
=======
                                        @foreach ($settings as $setting)
                                        <a href="./"><img src="{{ asset('storage/' . $setting->logo) }}" alt="" style="max-height: 60px;" /></a>
>>>>>>> 57550b7595d691257d76951f9c929d1a08d43b17
                                        {{-- <a href="/"><h1 class="text-white">Loha</h1><p class="text-white">Desa Wisata</p></a> --}}
                                        @endforeach
                                    </div>
                                </div>
                                <!--Nav Box-->
                                <div class="nav-outer">
                                    <!--Mobile Navigation Toggler-->
                                    <div class="mobile-nav-toggler"><img src="assets/images/icons/icon-bar-2.png" alt="" /></div>
                                    <!-- Main Menu -->
                                    <nav class="main-menu navbar-expand-md navbar-light"></nav>
                                </div>
                                <!-- <div class="navbar-right">
                                    <div class="search-form-two">
                                        <form>
                                            <input type="search" placeholder="Ketikkan sesuatu ..." />
                                            <button type="submit"><i class="icon-search"></i></button>
                                        </form>
                                    </div>
                                </div> -->
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
                            <a href="/"><img src="{{ asset('assets/images/tes-logo.png') }}" alt="desa wisata loha" title="" /></a> 
                            {{-- <a href="/">Desa Wisata Loha</a> --}}
                        </div>
                        <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                        <!--Social Links-->
                        <div class="social-links">
                            <ul class="clearfix">
                                {{-- @foreach ($socials as $social)   --}}
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
                                {{-- @endforeach --}}
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

            {{-- page content --}}
            @yield('page-content')

            <!-- Main  Footer -->
            @foreach ($sections as $section)
            @if($section->slug === 'footer')
            <footer class="main-footer">
                <div class="auto-container">
                    <!--Widgets Section-->
                    <div class="widgets-section">
                        <div class="row clearfix">
                            <!--Column-->
                            <div class="column col-lg-4 col-md-6">
                                <div class="widget about-widget">
                                    @foreach ($sections as $section)
                                    @if ($section->slug === 'footer')
                                    <h3 class="widget-title">{{ $section->title }}</h3>
                                    <div class="text">{{ $section->description }}</div>
                                    @endif
                                    @endforeach
                                    <ul class="social-links">
                                        @foreach ($socials as $social)
                                        @if ($social->tipe_sosmed === 'Facebook')
                                            <li>
                                                <a href="{{ $social->link_sosmed }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                        @endif
                                        @if ($social->tipe_sosmed === 'Twitter')
                                            <li>
                                                <a href="{{ $social->link_sosmed }}" target="_blank"><i class="fab fa-twitter"></i></a>
                                            </li>
                                        @endif
                                        @if ($social->tipe_sosmed === 'Instagram')
                                            <li>
                                                <a href="{{ $social->link_sosmed }}" target="_blank"><i class="fab fa-instagram"></i></a>
                                            </li>
                                        @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="column col-lg-4 col-md-6">
                                <div class="widget links-widget">
                                    <h3 class="widget-title">Navigasi</h3>
                                    <div class="widget-content">
                                        <ul>
                                            <li><a href="/">Beranda</a></li>
                                            <li><a href="/about">Tentang Kami</a></li>
                                            <li><a href="/gallery">Galeri</a></li>
                                            <li><a href="/blog">Blog</a></li>
                                            <li><a href="/contact">Kontak</a></li>
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
                                                @foreach ($settings as $setting)
                                                <div class="icon"><img src="assets/images/icons/icon-1.png" alt="" /></div>
                                                <div class="text">
                                                    <strong>Lokasi</strong>{{ $setting->lokasi }} <br />
                                                    
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon"><img src="assets/images/icons/icon-2.png" alt="" /></div>
                                                <div class="text">
                                                    <strong>Telepon</strong>
                                                    <a href="tel:+62 823 3976 5401">{{ $setting->telpon }}</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon"><img src="assets/images/icons/icon-3.png" alt="" /></div>
                                                <div class="text">
                                                    <strong>Email</strong>
                                                    <a href="mailto:munciple@example.net">{{ $setting->email }}</a>
                                                </div>
                                                @endforeach
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
<<<<<<< HEAD
                                <div class="text">© 2022 <a href="/">LOHA</a> - Powered by <a target="_blank" href="https://jongkreatif.id/">JongKreatif</a>.</div>
=======
                                <div class="text">© {{ date('Y') }} <a href="/">{{ $section->title }}</a> - Powered by <a href="https://jongkreatif.id/">JongKreatif</a>.</div>
>>>>>>> 57550b7595d691257d76951f9c929d1a08d43b17
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            @endif
            @endforeach
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
