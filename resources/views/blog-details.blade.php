@extends('layouts.main')

@section('page-content')
    <section class="page-title style-two" style="background-image: url(<?= asset('storage/'.$blog->gambar_blog) ?>)">
        <div class="drop-layer-detail"></div>
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>{{ $blog->judul }}</h1>
                        <ul class="post-meta">
                            <li><i class="far fa-user"></i>{{ ucwords($blog->penulis) }}</li>

                            <li><i class="far fa-calendar"></i>{{ $blog->created_at->isoFormat('dddd, d MMMM Y') }}</li>
                            {{-- <li><i class="far fa-calendar"></i>{{ $blog->created_at->isoFormat('d MMMM Y') }}</li> --}}
                        </ul>
                    </div>
                    <ul class="bread-crumb">
                        <li><a href="../">Beranda</a></li>
                        <li><a href="/blog">Blog</a></li>
                        <li>Detail blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Sidebar Page Container -->
    <section class="sidebar-page-container">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-single-post">
                        <div class="top-content">
                            <div class="image mb-5"><img src="{{ asset('storage/'.$blog->gambar_blog) }}" alt="" /></div>
                            <p>{!! $blog->konten !!}</p>
                        </div>
                        <!-- <div class="author-box">
                            <div class="image"><img src="assets/images/resource/author-6.jpg" alt="" /></div>
                            <div class="content">
                                <h4>Robert Christopher</h4>
                                <h5>Writer, Blogger, Tourist (www.governlia.org)</h5>
                                <div class="text">Fugiat nulla pariatur excepteur sint occaecat cupidatat non proident sunt in culp quis officia deserunt mollit anim id est laborum.</div>
                                <ul class="social-links">
                                    <li>
                                        <a href="#"><span class="fab fa-twitter"></span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="fab fa-facebook-f"></span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="fab fa-linkedin-in"></span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="fab fa-google-plus-g"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar blog-sidebar sidebar-style-two">
                        <div class="widget widget_search">
                            <h3 class="widget-title">Cari</h3>
                            <form action="/blog" autocomplete="off" class="search-form">
                                <div class="form-group">
                                    <input type="search" name="cari" placeholder="Cari Postingan ..."/>
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                </div>
                            </form>
                        </div>
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