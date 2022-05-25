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
                            <div class="col-12 text-center">
                                <img src="{{ asset('storage/' . $blog->gambar_blog) }}" height="300px" width="500px" class="rounded mx-auto d-block mb-4" alt="">
                                <h1 class="text-center">{{ $blog->judul }}</h1>
                              <div class="row justify-content-center">
                                <span class="text-xs text-muted" style="text-transform: capitalize">{{ $blog->penulis }}</span>
                                <span class="text-xs text-muted mx-2">|</span>
                                <span class="text-xs text-muted">{{ $blog->created_at }}</span>
                              </div>
                              <div class="row px-3 py-4">
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