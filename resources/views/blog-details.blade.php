@extends('layouts.main')

@section('page-content')
    <section class="page-title style-two" style="background-image: url({{ asset('assets/images/background/bg-11.jpg') }})">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>Judul Postingan</h1>
                        <ul class="post-meta">
                            <li><i class="far fa-user"></i>City Admin</li>
                            <li><i class="far fa-calendar"></i>Sep 3, 2020</li>
                        </ul>
                    </div>
                    <ul class="bread-crumb">
                        <li><a href="index.php">Beranda</a></li>
                        <li><a href="blog-2.php">Blog</a></li>
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
                            <div class="image mb-5"><img src="{{ asset('assets/images/resource/news-23.jpg') }}" alt="" /></div>
                            <h4>
                                Eabore dolore magn aliqua enim veniam quis nostrud exercitas reprehenderit sint voluptate <br />
                                cillum dolore fugiat nulla pariatur excepteur sint occaecat cupidats.
                            </h4>
                            <div class="text">
                                <p>
                                    Dolore magna aliquat minim veniay quis nos exercitation ullamco laboris aliquip ipsum dolor sit amet,consectetur adipisicing elit, sed eiusmod tempor incididunt labore magna aliqua. Ut enim quis
                                    nostrud exercitation ullamco laboris aliquip lorem sed ipsum dolor sit.
                                </p>
                                <p>
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum doloreu fugiat nulla
                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit animid.
                                </p>
                            </div>
                            <div class="row mb-30">
                                <div class="col-md-6">
                                    <div class="image mb-30"><img src="{{ asset('assets/images/resource/news-24.jpg') }}" alt="" /></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="image mb-30"><img src="{{ asset('assets/images/resource/news-25.jpg') }}" alt="" /></div>
                                </div>
                            </div>
                            <h3>Start An Evening With Drinks At Rooftop Bars</h3>
                            <div class="text">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium tom rem aperiam, eaque ipsa quae ab illo inventore veritatiset quasi architecto beatae vitae dicta sunt
                                explic abo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut.
                            </div>
                            <blockquote style="background-image: url({{ asset('assets/images/resource/news-26.jpg') }})">
                                <div class="quote"><span class="icon-quote"></span></div>
                                <p>
                                    Fugiat nula pariatur excepteur sint ocaecat cupidata proident euntin <br />
                                    culp qui officia deserunt mollit anim esta laborum sed.
                                </p>
                                <cite>-- Governlia City Mayor</cite>
                            </blockquote>
                            <div class="text">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.
                            </div>
                            <h3>Recreation Of Watery Landscapes</h3>
                            <div class="text">
                                Quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi
                                tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                            </div>
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
                            <form action="#" method="post" class="search-form">
                                <div class="form-group">
                                    <input type="search" name="search-field" placeholder="Cari Postingan ..." required="" />
                                    <button type="search"><i class="fas fa-search"></i></button>
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
                        <!--Popular Posts-->
                        <div class="widget widget_popular_post">
                            <h3 class="widget-title">Postingan Terpopuler</h3>

                            <article class="post">
                                <figure class="post-thumb">
                                    <a href="blog-details.php"><img src="assets/images/resource/news-19.jpg" alt="" /></a>
                                </figure>
                                <div class="content">
                                    <h5>
                                        <a href="blog-details.php"
                                            >Recreation Programs <br />
                                            From Landscapes</a
                                        >
                                    </h5>
                                    <div class="post-info"><i class="far fa-calendar-alt"></i> Sep 3, 2020</div>
                                </div>
                            </article>
                            <article class="post">
                                <figure class="post-thumb">
                                    <a href="blog-details.php"><img src="assets/images/resource/news-20.jpg" alt="" /></a>
                                </figure>
                                <div class="content">
                                    <h5>
                                        <a href="blog-details.php"
                                            >Start An Evening With <br />
                                            Drinks At Rooftop</a
                                        >
                                    </h5>
                                    <div class="post-info"><i class="far fa-calendar-alt"></i> Sep 3, 2020</div>
                                </div>
                            </article>
                            <article class="post">
                                <figure class="post-thumb">
                                    <a href="blog-details.php"><img src="assets/images/resource/news-21.jpg" alt="" /></a>
                                </figure>
                                <div class="content">
                                    <h5>
                                        <a href="blog-details.php"
                                            >Self-Guided Driving & <br />
                                            Tours Walk Of City</a
                                        >
                                    </h5>
                                    <div class="post-info"><i class="far fa-calendar-alt"></i> Sep 3, 2020</div>
                                </div>
                            </article>
                            <article class="post">
                                <figure class="post-thumb">
                                    <a href="blog-details.php"><img src="assets/images/resource/news-22.jpg" alt="" /></a>
                                </figure>
                                <div class="content">
                                    <h5>
                                        <a href="blog-details.php"
                                            >Recreation Programs <br />
                                            From Landscapes</a
                                        >
                                    </h5>
                                    <div class="post-info"><i class="far fa-calendar-alt"></i> Sep 3, 2020</div>
                                </div>
                            </article>
                        </div>
                        <div class="widget widget_popular_post">
                            <h3 class="widget-title">Postingan Terbaru</h3>

                            <article class="post">
                                <figure class="post-thumb">
                                    <a href="blog-details.php"><img src="assets/images/resource/news-19.jpg" alt="" /></a>
                                </figure>
                                <div class="content">
                                    <h5>
                                        <a href="blog-details.php"
                                            >Recreation Programs <br />
                                            From Landscapes</a
                                        >
                                    </h5>
                                    <div class="post-info"><i class="far fa-calendar-alt"></i> Sep 3, 2020</div>
                                </div>
                            </article>
                            <article class="post">
                                <figure class="post-thumb">
                                    <a href="blog-details.php"><img src="assets/images/resource/news-20.jpg" alt="" /></a>
                                </figure>
                                <div class="content">
                                    <h5>
                                        <a href="blog-details.php"
                                            >Start An Evening With <br />
                                            Drinks At Rooftop</a
                                        >
                                    </h5>
                                    <div class="post-info"><i class="far fa-calendar-alt"></i> Sep 3, 2020</div>
                                </div>
                            </article>
                            <article class="post">
                                <figure class="post-thumb">
                                    <a href="blog-details.php"><img src="assets/images/resource/news-21.jpg" alt="" /></a>
                                </figure>
                                <div class="content">
                                    <h5>
                                        <a href="blog-details.php"
                                            >Self-Guided Driving & <br />
                                            Tours Walk Of City</a
                                        >
                                    </h5>
                                    <div class="post-info"><i class="far fa-calendar-alt"></i> Sep 3, 2020</div>
                                </div>
                            </article>
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