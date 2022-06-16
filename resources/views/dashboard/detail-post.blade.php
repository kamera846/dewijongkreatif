@extends('layouts.admin')

@section('page-header')
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Blog</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Detail Postingan</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page-content')
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-lg-10">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header">
                        <h3 class="mb-0">Detail Postingan</h3>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div>
                                        <img src="{{ asset('storage/' . $blog->gambar_blog) }}" style="width: 100%; max-height:470px; object-fit: cover;" class="rounded mx-auto d-block mb-4" alt="">
                                    </div>
                                    <h1>{{ $blog->judul }}</h1>
                                    <span class="text-xs text-muted">{{ ucwords($blog->penulis) }} | {{ $blog->created_at->isoFormat('dddd, d MMMM Y') }} {{ '(terakhir diubah '. $blog->updated_at->diffForHumans() .')' }}</span>
                                </div>
                                <div class="row text-justify mt-2">
                                    <p>{!! $blog->konten !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        @include('partials.footer-admin')
    </div>
@endsection