@extends('layouts.main')

@section('page-content')
    <section class="page-title" style="background-image: url(assets/images/background/bg-9.jpg)">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>Kontak Kami.</h1>
                    </div>
                    <ul class="bread-crumb">
                        <li><a href="./">Beranda</a></li>
                        <li>Kontak Kami</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form section -->
    <section class="contact-form-section">
        <div class="auto-container">
            <div class="wrapper-box">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="our-facts" style="background-image: url(assets/images/resource/image-54.jpg)">
                            <div class="column counter-column">
                                <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="icon-outer">
                                        <div class="icon"><span class="icon-ambulance"></span></div>
                                    </div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="345">0</span>
                                    </div>
                                    <div class="text">
                                        For Any Type of <br />
                                        Medical Emergency
                                    </div>
                                </div>
                            </div>
                            <div class="column counter-column">
                                <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="icon-outer">
                                        <div class="icon"><span class="icon-police"></span></div>
                                    </div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="911">0</span>
                                    </div>
                                    <div class="text">
                                        For Police and <br />
                                        Law Enforcement
                                    </div>
                                </div>
                            </div>
                            <div class="column counter-column">
                                <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="icon-outer">
                                        <div class="icon"><span class="icon-recyclebin"></span></div>
                                    </div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="667">0</span>
                                    </div>
                                    <div class="text">
                                        For Recycling And <br />
                                        Garbage Related
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="contact-form-area">
                            <div class="sec-title mb-30">
                                <h2>
                                    Mencari Bantuan <br />
                                    Atau Punya Pertanyaan
                                </h2>
                            </div>
                            <div class="text mb-30">
                                Enim ad minim veniam quis nostrud exercitation ullamco laboris aliquip <br />
                                ex ea reprehenderit sint occaecat cupidata proids.
                            </div>
                            <!--Contact Form-->
                            <div class="contact-form">
                                <form method="post" target="_blank" id="contact-form">
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <input type="text" name="nama" placeholder="Your Name" required />
                                        </div>
                                        <div class="form-group col-md-12">
                                            <input type="email" name="email" placeholder="Your Email" required />
                                        </div>
                                        <div class="form-group col-md-12">
                                            <input type="text" name="subjek" placeholder="Subject" required />
                                        </div>
                                        <div class="form-group col-md-12">
                                            <textarea name="pesan" placeholder="Message"></textarea>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <button class="theme-btn btn-style-one" type="submit" name="submit" data-loading-text="Please wait..."><span>Send Message</span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
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
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58425.99808385405!2d120.12797910318749!3d-8.505105885592616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2db47f56982b004d%3A0xb945a6dc254731d5!2sLoha%2C%20Macang%20Pacar%2C%20West%20Manggarai%20Regency%2C%20East%20Nusa%20Tenggara!5e0!3m2!1sen!2sid!4v1654243517231!5m2!1sen!2sid"
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
                        <h3>City Muncipal Office</h3>
                        <div class="text mb-30">
                            Fugiat nulla pariatur excepteur sint occaecat proident <br />
                            sunt in culp mollit anim id est laborum.
                        </div>
                        <ul class="contact-info">
                            <li>
                                <div class="icon"><img src="assets/images/icons/icon-1.png" alt="" /></div>
                                <div class="text"><strong>Lokasi</strong> Desa Loha, kecamatan pacar, kabupaten Manggarai Barat - NTT</div>
                            </li>
                            <li>
                                <div class="icon"><img src="assets/images/icons/icon-2.png" alt="" /></div>
                                <div class="text">
                                    <strong>Telepon</strong>
                                    <a href="tel:+1(345)2067849">+ 1 (345) 206 7849</a>
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
    </section>
@endsection