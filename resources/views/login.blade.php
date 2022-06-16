@extends('layouts.sign-admin')

@section('main-content')
<!-- Main content -->
<div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                        <h1 class="text-white">Selamat Datang!</h1>
                        <p class="text-lead text-white">Masukkan email dan password untuk ke halaman dashboard.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5 mt-3">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card bg-secondary border-0 mb-0">
                    <div class="card-header bg-transparent pb-5">
                        <div class="text-muted text-center mt-2"><small>Masuk</small></div>
                    </div>
                    <div class="card-body px-lg-5 py-lg-5">
                        <form role="form" action="/login" method="post">
                            @csrf
                            <div class="form-group mb-3">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input class="form-control " placeholder="Email" type="email" id="email" name="email" autofocus />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Password" type="password" name="password" id="password"/>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4">Masuk</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <a href="./" class="text-light"><small>Ke halaman beranda</small></a>
                    </div>
                </div>

                {{-- alert --}}
                {{-- isi kondisi gagal di atribut flash data dengan "gagal" --}}
                <div class="flash-data" data-flashdata="{{ (session()->has('loginfail') ? 'gagal' : '' )  }}"></div>
            </div>
        </div>
    </div>
</div>
@endsection