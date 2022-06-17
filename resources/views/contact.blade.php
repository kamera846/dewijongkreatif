@extends('layouts.main')

@section('page-content')
@foreach ($sections as $section)
    <?php 
        $image = json_decode($section->cover);
    ?>
    @if ($section->slug === 'contact')
    <section class="page-title" style="background-image: url(<?= asset($image != null ? 'storage/'.$image[0] : 'assets/images/background/bg-4.jpg') ?>)">
        <div class="drop-layer-contact"></div>
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1 style="z-index: 3">{{ $section->title }}</h1>
                    </div>
                    <ul class="bread-crumb" style="z-index: 3">
                        <li><a href="./">Beranda</a></li>
                        <li>{{ $section->title }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    @endif
@endforeach
    <!-- Contact Form section -->
    <section class="contact-form-section">
        <div class="auto-container">
            <div class="wrapper-box">
                @foreach ($sections as $section)
                @if ($section->slug === 'help')
                <div class="row">
                    <div class="col-lg-5">
                        <?php 
                            $imageHelp = json_decode($section->cover);
                        ?>
                        <div class="our-facts" style="background-image: url(<?= asset($imageHelp != null ? 'storage/'.$imageHelp[0] : 'assets/images/background/bg-4.jpg') ?>);height: 100% !important">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="contact-form-area">
                            <div class="sec-title mb-30">
                                <h2>{{ $section->title }}</h2>
                            </div>
                            <div class="text mb-30">
                                {!! $section->description !!}
                            </div>
                            <!--Contact Form-->
                            <div class="contact-form">
                                <form method="post" target="_blank" id="contact-form" autocomplete="off">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <input type="text" name="nama" placeholder="Nama" required />
                                        </div>
                                        <div class="form-group col-md-12">
                                            <input type="email" name="email" placeholder="Email" required />
                                        </div>
                                        
                                        {{-- nomor --}}
                                        @foreach ($settings as $setting)
                                        <input type="hidden" name="nomor" value="{{ $setting->telpon }}" />
                                        @endforeach
                                        
                                        <div class="form-group col-md-12">
                                            <textarea name="pesan" placeholder="Isi pesan" required></textarea>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <button class="theme-btn btn-style-one" type="submit"><span>Kirim Pesan</span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </section>

    <!-- Contact Info section -->
    <section class="contact-info-section">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-info-block">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11160.046290709839!2d120.14141150700297!3d-8.531169585666012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2db47f68c228c91f%3A0xd9ee4fa3474613c!2sDESA%20LOHA!5e0!3m2!1sid!2slk!4v1654579427339!5m2!1sid!2slk"
                            width="100%"
                            height="450"
                            style="border: 0"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                        ></iframe>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-info-block">
                        @foreach ($sections as $section)
                            
                        @if ($section->slug === 'maps')
                        <h3>{{ $section->title }}</h3>
                        <div class="text mb-30">
                            {!! $section->description !!} <br />
                        </div>
                        @endif
                        @endforeach
                        <ul class="contact-info">
                            <li>
                                @foreach ($settings as $setting)
                                    
                                <div class="icon"><img src="{{asset('assets/images/icons/icon-1.png')}}" alt="" /></div>
                                <div class="text">
                                    <strong>Lokasi</strong>{{ $setting->lokasi }}<br />
                                </div>
                            </li>
                            <li>
                                <div class="icon"><img src="{{asset('assets/images/icons/icon-2.png')}}" alt="" /></div>
                                <div class="text">
                                    <strong>Telepon</strong>
                                    <a href="tel:+62 823 3976 5401">{{ $setting->telpon }}</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon"><img src="{{asset('assets/images/icons/icon-3.png')}}" alt="" /></div>
                                <div class="text">
                                    <strong>Email</strong>
                                    <a href="mailto:munciple@example.net">{{ $setting->email}}</a>
                                </div>
                                @endforeach
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection