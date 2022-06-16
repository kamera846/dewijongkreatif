@extends('layouts.main')

@section('page-content')
@foreach ($sections as $section)
    <?php 
    $image = json_decode($section->cover);
    ?>
    @if ($section->slug === 'blog')
    <section class="page-title" style="background-image: url(<?= asset($image != null ? 'storage/'.$image[0] : 'assets/images/background/bg-4.jpg') ?>)">
        <div class="drop-layer-blog"></div>
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
    <!-- Sidebar Page Container -->
    <section class="sidebar-page-container">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-8">

                    @if($jumlah_blog >= 1 )

                        @foreach($blogs as $blog)

                            <div class="news-block-two">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="{{ asset('storage/' . $blog->gambar_blog) }}" alt="{{ $blog->judul }}" />
                                        <div class="overlay">
                                            <div class="link-btn">
                                                <a href="/blog/{{ $blog->slug }}"><i class="icon-arrow"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <h4><a href="/blog/{{ $blog->slug }}">{{ $blog->judul }}</a></h4>
                                        <div class="text">
                                            {{ substr(strip_tags($blog->konten), 0, 285) }}...
                                        </div>
                                        <ul class="post-meta">
                                            <li><i class="far fa-user"></i>{{ ucwords($blog->penulis) }}</li>
                                            {{-- <li><i class="far fa-calendar"></i>{{ $tanggal . ' ' . $bulan}}</li> --}}
                                            {{-- <li><i class="far fa-calendar"></i>{{ date('d-m-Y', strtotime($blog->created_at))}}</li> --}}
                                            <li><i class="far fa-calendar"></i>{{ $blog->created_at->isoFormat('d MMMM Y') }}</li>
                                            <li class="read-more">
                                                <a href="/blog/{{ $blog->slug }}"><i class="icon-arrow"></i>Selengkapnya</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        @endforeach

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

                        <div class="row justify-content-center">
                            {{ $blogs->links() }}
                        </div>

                    @else
                        
                        @if(request('cari'))
                            <h4 class="text-center">Tidak ada hasil.</h3>
                        @else
                            <h4 class="text-center">Belum ada postingan.</h3>
                        @endif

                    @endif

                </div>
                <div class="col-lg-4">
                    <aside class="sidebar blog-sidebar sidebar-style-two">
                        <div class="widget widget_search">
                            <h3 class="widget-title">Cari</h3>
                            <form action="/blog" autocomplete="off" class="search-form">
                                <div class="form-group">
                                    <input type="search" name="cari" placeholder="Cari Postingan ..." value="{{ request('cari') }}"/>
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                </div>
                            </form>
                        </div>

                        @if(request('cari'))

                            <div class="widget widget_popular_post">
                                <h3 class="widget-title">Postingan Terbaru</h3>

                                @foreach($recentPosts as $post)
                                    
                                    <article class="post">
                                        <figure class="post-thumb">
                                            <a href="/blog/{{ $post->slug }}"><img src="{{ asset('storage/' . $post->gambar_blog) }}" alt="{{ $post->judul }}" /></a>
                                        </figure>
                                        <div class="content">
                                            <h5>
                                                <a href="/blog/{{ $post->slug }}"">{{ $post->judul }}</a>
                                            </h5>
                                            <div class="post-info"><i class="far fa-calendar-alt"></i>{{ $post->created_at->isoFormat('d MMMM Y') }}</div>
                                        </div>
                                    </article>
                                
                                @endforeach

                            </div>
                            
                        @endif
                        <!-- <div class="widget widget_categories style-two">
                            <h3 class="widget-title">Blog Categories</h3>
                            <div class="widget-content">
                                <ul class="categories-list">
                                    <li><a href="blog-details.php">Business & Taxation</a></li>
                                    <li><a href="blog-details.php">Law, Justice & Police</a></li>
                                    <li class="current"><a href="blog-details.php"> Government & Elections</a></li>
                                    <li><a href="blog-details.php">Pets & Wildlife Area</a></li>
                                    <li><a href="blog-details.php">Employment & Jobs</a></li>
                                </ul>
                            </div>
                        </div> -->
                        <!-- Tag-cloud Widget -->
                        <!-- <div class="widget widget_tag_cloud">
                            <h3 class="widget-title">Tags Cloud</h3>
                            <ul class="clearfix">
                                <li><a href="#">recreation</a></li>
                                <li><a href="#">activities</a></li>
                                <li><a href="#">administration</a></li>
                                <li><a href="#">city</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">municipal</a></li>
                                <li><a href="#">tourists</a></li>
                                <li><a href="#">food & Drink</a></li>
                            </ul>
                        </div> -->
                        <!-- Contact Widget two -->
                        <!-- <div class="widget contact-widget-two" style="background-image: url(assets/images/resource/image-51.jpg)">
                            <h3 class="widget-title">Municipal Complaints</h3>
                            <div class="widget-content">
                                <ul class="contact-info">
                                    <li>
                                        <a href="#"><i class="pe-7s-headphones"></i> Emergency 9922</a>
                                    </li>
                                    <li>
                                        <a href="mailto:mail@governlia.net"><i class="pe-7s-mail-open"></i> mail@governlia.net</a>
                                    </li>
                                    <li>
                                        <a href="tel:8526105599"><i class="pe-7s-call"></i> Call us 852-610-5599</a>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
                    </aside>
                </div>
            </div>
        </div>
    </section>
@endsection