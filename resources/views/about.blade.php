@extends('layouts.main')

@section('page-content')
@foreach ($sections as $section)    
@if($section->slug === 'header-about' && $section->isActive === 'true')
    <?php 
      $image = json_decode($section->cover);
    ?>
    <section class="page-title" style="background-image: url(<?= asset($image != null ? 'storage/'.$image[0] : 'assets/images/background/bg-4.jpg') ?>)"> 
    <div class="drop-layer-about"></div>
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
    <!-- About section -->
    @foreach ($sections as $section )
    <?php 
        $image = json_decode($section->cover);
    ?>
    @if($section->slug === 'about')
    <section class="about-section style-two">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="sec-title mb-30">
                        <h2>{{ $section->title }}</h2>
                    </div>
                    <div class="content-block">
                        <div class="text" style="text-align:justify; text-indent: 2rem">
                            "{!! $section->description !!}"
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="image-block">
                        <div class="row">
                            <div class="col-lg-6 column">
                                <div class="image"><img src="<?= asset($image != null ? 'storage/'.$image[0] : 'assets/images/background/bg-4.jpg') ?>" alt="" style="height: 190px;object-fit: cover;" width="100%" /></div>
                                <div class="image"><img src="<?= asset($image != null ? 'storage/'.$image[1] : 'assets/images/background/bg-4.jpg') ?>" alt="" style="height: 190px;object-fit: cover;" width="100%" /></div>
                            </div>
                            <div class="col-lg-6 column">
                                <div class="image"><img src="<?= asset($image != null ? 'storage/'.$image[2] : 'assets/images/background/bg-4.jpg') ?>" alt="" style="height: 396px;object-fit: cover;" width="100%" /></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    @endforeach
    <!-- Team section -->
    @foreach ($sections as $section)
    <?php 
        $image = json_decode($section->cover);
    ?>
    @if($section->slug === 'event')
    <section class="team-section">
        <div class="auto-container">
            <div class="sec-title style-two text-center">
                <div class="big-title">Loha</div>
                <h2>{{ $section->title }}</h2>
            </div>
            <div class="row">
                <?php $images = json_decode($section->cover) ?>
                @if($images != null)
                @foreach($images as $image)
                <div class="col-xl-4 col-md-6 team-block">
                    <div class="inner-box">
                        <div class="image"><img src="{{ asset('storage/' . $image) }}" class="image-about" alt="" /></div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </section>
    @endif
@endforeach
@endsection