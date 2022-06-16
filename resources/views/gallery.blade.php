@extends('layouts.main')

@section('page-content')
@foreach ($sections as $section)
<?php 
$image = json_decode($section->cover);
?>
@if($section->slug === 'gallery')
    <section class="page-title" style="background-image: url(<?= asset($image != null ? 'storage/'.$image[0] : 'assets/images/background/bg-4.jpg') ?>)">
        <div class="drop-layer-gallery"></div>
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
    <!-- News section Three -->
    <section class="news-section-three">
        <div class="auto-container">

            @if($jumlah_galeri >= 1 )
                
                <div class="row">
                    @foreach($galleries as $gallery)

                        <div class="col-lg-6 news-block">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{ asset('storage/' . $gallery->foto) }}" alt="{{ $gallery->judul }}"/>
                                    <div class="overlay">
                                        <div class="link-btn">
                                            <a target="_blank" href="{{ asset('storage/' . $gallery->foto) }}"><i class="icon-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <h4>{{ $gallery->judul }}</h4>
                                    <div class="text">{{ $gallery->deskripsi }}</div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
                <!-- Post Pagination -->
                {{-- <ul class="post-pagination mt-5 mb-30">
                    <li class="prev-page">
                        <a href="#"><i class="icon-arrow"></i></a>
                    </li>
                    <li class="current"><span> 1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li class="next-page">
                        <a href="#"><i class="icon-arrow"></i></a>
                    </li>
                </ul> --}}

                <div class="row justify-content-center mt-3">
                    {{ $galleries->links() }}
                </div>

            @else

                <div class="col-12">
                    <h3 class="text-center">Belum ada momen yang dapat dibagikan.</h3>
                </div>

            @endif

        </div>
    </section>
@endsection
