@extends('layouts.main')


@section('page-content')
    <!-- Bnner Section -->
    <section class="banner-section">
        <div class="swiper-container banner-slider">
            <div class="swiper-wrapper">
                <!-- Slide Item -->
                @foreach ($menus as $menu)
                @if($menu->slug === 'carousel-1' && $menu->isActive == 'true')
                <?php 
                    $image = json_decode($menu->cover);
                ?>
                <div class="swiper-slide" style="background-image: url(<?= asset('storage/'.$image[0]) ?>)">
                    <div class="content-outer">
                        <div class="content-box justify-content-center">
                            <div class="inner text-center">
                                <h1>
                                    {{ $menu->title }}
                                    <br />
                                    
                                </h1>
                                <div class="text">
                                   {{ $menu->description }}<br />
                                   
                                </div>
                                <!-- <div class="link-box">
                                    <a href="#" class="theme-btn btn-style-one"><span>Read More</span></a>
                                    <a href="#" class="theme-btn btn-style-one style-two"><span>Virtual tour</span></a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
                <!-- Slide Item -->
                @if ($menu->slug === 'carousel-2' && $menu->isActive == 'true')
                <?php 
                    $image = json_decode($menu->cover);
                ?>
                <div class="swiper-slide" style="background-image: url(<?= asset('storage/'.$image[0]) ?>)">
                    <div class="content-outer">
                        <div class="content-box justify-content-center">
                            <div class="inner text-center">
                                <h1>
                                    {{ $menu->title }}
                                    <br />
                                    
                                </h1>
                                <div class="text">
                                   {{ $menu->description }}<br />
                                   
                                </div>
                                <!-- <div class="link-box">
                                    <a href="#" class="theme-btn btn-style-one"><span>Read More</span></a>
                                    <a href="#" class="theme-btn btn-style-one style-two"><span>Virtual tour</span></a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                <!-- Slide Item -->
                @if ($menu->slug === 'carousel-3' && $menu->isActive == 'true')
                <div class="swiper-slide" style="background-image: url(assets/images/main-slider/image-3.jpg)">
                    <div class="content-outer">
                        <div class="content-box">
                            <div class="inner">
                                <h1>
                                    {{ $menu->slug }} <br />
                                </h1>
                                <div class="text">
                                    {{ $menu->description }}<br />
                                </div>
                                <!-- <div class="link-box">
                                    <a href="#" class="theme-btn btn-style-one"><span>Read More</span></a>
                                    @endforeach
                                    <a href="#" class="theme-btn btn-style-one style-two"><span>Virtual Tour</span></a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>

        </div>
        <div class="banner-slider-nav">
            <div class="banner-slider-control banner-slider-button-prev">
                <span><i class="icon-arrow"></i></span>
            </div>
            <div class="banner-slider-control banner-slider-button-next">
                <span><i class="icon-arrow"></i></span>
            </div>
        </div>
    </section>
    <!-- End Bnner Section -->

<!-- About section -->
@foreach ($menus as $menu)
@if ($menu->slug === 'about' && $menu->isActive == 'true')
<section class="about-section">
    <div class="auto-container">
            <div class="sec-title text-center">
                <!-- <div class="sub-title">City With Equity - Efficiency - Opportunity</div> -->
                <h2>{{$menu->title}}</h2>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <div class="content-block wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="text">
                            "{{ $menu->description }}"
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="image-block wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="row">
                            <?php $image = json_decode($menu->cover); ?>
                            <div class="col-lg-6 column">
                                @foreach($image as $index => $item)
                                    @if($index < 2)
                                        <div class="image"><img src="{{asset('storage/' . $item)}}" alt="" style="height: 190px;object-fit: cover;"/></div>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-lg-6 column">
                                @foreach($image as $index => $item)
                                    @if($index === 2)
                                        <div class="image"><img src="{{asset('storage/' . $item)}}" alt="" style="height: 390px;object-fit: cover;"/></div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    @endforeach
    
    <!-- Projects section -->
    <section class="projects-section">
        <div class="auto-container">
            <div class="row no-gutters">
                <div class="col-xl-3 col-lg-6 project-block">
                    <div class="inner-box">
                        <div class="image"><img src="assets/images/resource/image-5.jpg" alt="" /></div>
                        <div class="content">
                            @foreach($settings as $item)
                            <h4>{{$item->web_title}}</h4>
                            @endforeach
                            <h3>Our City Guides</h3>
                            <!-- <div class="link-btn">
                                <a href="#"><i class="icon-arrow"></i></a>
                            </div> -->
                        </div>
                        <div class="overlay">
                            <div class="content-two">
                                @foreach($settings as $item)
                                <h4>{{$item->web_title}}</h4>
                                @endforeach
                                <h3>Our City Guides</h3>
                                <div class="text">
                                    Veniam quis nostrud exercitation sed llamco <br />
                                    conseqa rure dolorn repreh derit ...
                                </div>
                                <!-- <div class="link-btn">
                                    <a href="#"><i class="icon-arrow"></i></a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 project-block">
                    <div class="inner-box">
                        <div class="image"><img src="assets/images/resource/image-6.jpg" alt="" /></div>
                        <div class="content">
                            <h4>Explore Loha</h4>
                            <h3>Main Tourist Spots</h3>
                            <div class="link-btn">
                                <a href="#"><i class="icon-arrow"></i></a>
                            </div>
                        </div>
                        <div class="overlay">
                            <div class="content-two">
                                <h4>Explore Loha</h4>
                                <h3>Main Tourist Spots</h3>
                                <div class="text">
                                    Veniam quis nostrud exercitation sed llamco <br />
                                    conseqa rure dolorn repreh derit ...
                                </div>
                                <div class="link-btn">
                                    <a href="#"><i class="icon-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 project-block">
                    <div class="inner-box">
                        <div class="image"><img src="assets/images/resource/image-7.jpg" alt="" /></div>
                        <div class="content">
                            <h4>Explore Loha</h4>
                            <h3>Experience Now</h3>
                            <div class="link-btn">
                                <a href="#"><i class="icon-arrow"></i></a>
                            </div>
                        </div>
                        <div class="overlay">
                            <div class="content-two">
                                <h4>Explore Loha</h4>
                                <h3>Experience Now</h3>
                                <div class="text">
                                    Veniam quis nostrud exercitation sed llamco <br />
                                    conseqa rure dolorn repreh derit ...
                                </div>
                                <div class="link-btn">
                                    <a href="#"><i class="icon-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 project-block">
                    <div class="inner-box">
                        <div class="image"><img src="assets/images/resource/image-8.jpg" alt="" /></div>
                        <div class="content">
                            <h4>Explore Loha</h4>
                            <h3>Culture & History</h3>
                            <div class="link-btn">
                                <a href="#"><i class="icon-arrow"></i></a>
                            </div>
                        </div>
                        <div class="overlay">
                            <div class="content-two">
                                <h4>Explore Loha</h4>
                                <h3>Culture & History</h3>
                                <div class="text">
                                    Veniam quis nostrud exercitation sed llamco <br />
                                    conseqa rure dolorn repreh derit ...
                                </div>
                                <div class="link-btn">
                                    <a href="#"><i class="icon-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Highlights section -->
    @if($jumlah_galeri >= 2)
        
        <section class="highlights-section">
            <div class="auto-container">
                <div class="sec-title">
                    <!-- <div class="sub-title">City With Equity - Efficiency - Opportunity</div> -->
                    <h2>Galeri Desa</h2>
                </div>
                <div class="highlight-block-area">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="text-blcok">
                                <div class="text">
                                    Hiusmod tempor incididunt ut labore et dolore magna aliqua. Ut minim veniay <br />
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ela reprehenderit in <br />
                                    voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </div>
                                <div class="link-btn">
                                    <a href="/gallery" class="theme-btn btn-style-one"><span>Selengkapnya</span></a>
                                </div>
                            </div>
                            <div class="swiper-container highlight-thumbs">
                                <div class="swiper-wrapper">
                                    @foreach($galleries as $gallery)
                                        <div class="swiper-slide">
                                            <div class="thumb"><img src="{{ asset('storage/'.$gallery->foto) }}" alt="" /></div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="highlight-slider-nav">
                                <div class="highlight-slider-control highlight-slider-button-prev">
                                    <span><i class="icon-arrow"></i></span>
                                </div>
                                <div class="highlight-slider-control highlight-slider-button-next">
                                    <span><i class="icon-arrow"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <!-- Swiper -->
                            <div class="swiper-container highlight-image">
                                <div class="swiper-wrapper">
                                    @foreach($galleries as $gallery)
                                        <div class="swiper-slide">
                                            <div class="image"><img src="{{ asset('storage/'.$gallery->foto) }}" alt="" /></div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    @endif

    <!-- Contact Info section -->
    <section class="contact-info-section" style="margin-top: 210px; padding: 0">
        <div class="auto-container">
            <div class="wrapper-box" style="background-image: url(assets/images/background/bg-4.jpg)">
                <div class="top-content">
                    <h2>Untuk Bantuan atau Pertanyaan</h2>
                    <div class="text">
                        Tempor incididunt ut labore et dolore magna aliqua. Ut minim veniay quis nostrud <br />
                        exercitation ullamco laboris nisi ut aliquip ex ela reprehenderit
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6 contact-info-block">
                        <div class="inner-box">
                            <div class="icon"><span class="pe-7s-call"></span></div>
                            <h5>Call us</h5>
                            <h4><a href="tel:8526105599">852-610-5599</a></h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 contact-info-block">
                        <div class="inner-box">
                            <div class="icon"><span class="pe-7s-mail-open"></span></div>
                            <h5>Send Email</h5>
                            <h4><a href="mailto:mail@govern.net">mail@govern.net</a></h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 contact-info-block">
                        <div class="inner-box">
                            <div class="icon"><span class="pe-7s-stopwatch"></span></div>
                            <h5>Office Hours</h5>
                            <h4>0900am - 0600pm</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section class="news-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <!-- <div class="sub-title">City With Equity - Efficiency - Opportunity</div> -->
                <h2>Blog Terbaru</h2>
            </div>
            <div class="row">

                @if($jumlah_blog >= 1)
                    
                    @foreach($blogs as $blog)

                        <div class="col-lg-4 col-md-6 news-block">
                            <div class="inner-box">
                                <div class="image-two">
                                    <img src="{{ asset('storage/'.$blog->gambar_blog) }}" alt="{{ $blog->judul }}" class="img"/>
                                    <div class="overlay">
                                        <div class="link-btn">
                                            <a href="/blog/{{ $blog->slug }}"><i class="icon-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <!-- <div class="category"><a href="#">Health & Fitness</a></div> -->
                                    <h4>
                                        <a href="/blog/{{ $blog->slug }}">{{ $blog->judul }}</a>
                                    </h4>
                                    <div class="text">
                                        {{ substr(strip_tags($blog->konten), 0, 79) }}...
                                    </div>
                                    <ul class="post-meta">
                                        <li><i class="far fa-user"></i>{{ ucwords($blog->penulis) }}</li>
                                        <li><i class="far fa-calendar"></i>{{ $blog->created_at->isoFormat('d MMMM') }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    @endforeach

                @else

                    <div class="col-12">
                        <h3 class="text-center">(Belum ada postingan)</h3>
                    </div>

                @endif

            </div>
        </div>
    </section>
@endsection