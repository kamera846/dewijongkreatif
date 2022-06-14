@extends('layouts.main')

@section('page-content')
    <section class="page-title" style="background-image: url(assets/images/background/bg-9.jpg)">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>Tentang Kami.</h1>
                    </div>
                    <ul class="bread-crumb">
                        <li><a href="./">Beranda</a></li>
                        <li>Tentang Kami</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- About section -->
    @foreach ($menus as $menu)
    @if($menu->slug === 'about')
    <section class="about-section style-two">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="sec-title mb-30">
                        <h2>Cerita Desa</h2>
                    </div>
                    <div class="content-block">
                        <div class="text">
                            "{{ $menu->description }}"
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="image-block">
                        <div class="row">
                            <div class="col-lg-6 column">
                                <div class="image"><img src="assets/images/resource/image-28.jpg" alt="" /></div>
                                <div class="image"><img src="assets/images/resource/image-29.jpg" alt="" /></div>
                            </div>
                            <div class="col-lg-6 column">
                                <div class="image"><img src="assets/images/resource/image-30.jpg" alt="" /></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    
    <!-- Team section -->
    @if($menu->slug === 'adat')
    <section class="team-section">
        <div class="auto-container">
            <div class="sec-title style-two text-center">
                <div class="big-title">Loha</div>
                <h2>{{ $menu->title }}</h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 team-block">
                    <div class="inner-box">
                        <div class="image"><img src="https://i0.wp.com/rimbakita.com/wp-content/uploads/2019/09/upacara-adat-bali.jpg" class="image-about" alt="" /></div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 team-block">
                    <div class="inner-box">
                        <div class="image"><img src="https://i0.wp.com/rimbakita.com/wp-content/uploads/2019/09/upacara-adat-bali.jpg" class="image-about" alt="" /></div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 team-block">
                    <div class="inner-box">
                        <div class="image"><img src="https://i0.wp.com/rimbakita.com/wp-content/uploads/2019/09/upacara-adat-bali.jpg" class="image-about" alt="" /></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    @endforeach
@endsection