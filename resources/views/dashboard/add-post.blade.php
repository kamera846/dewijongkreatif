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
                                <li class="breadcrumb-item active" aria-current="page">Tambah Postingan</li>
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
                        <h3 class="mb-0">Tambah Postingan</h3>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form action="/dashboard/blog/store" method="post" enctype="multipart/form-data" >
                                  @csrf
                                  <div class="form-group row">
                                    <label for="judul" class="col-md-3 col-form-label form-control-label">Judul<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                      <input class="form-control @error('judul') is-invalid @enderror form-control-alternative" type="text" id="judul" name="judul" required  value="{{ old('judul') }}" autocomplete="off">
                                      @error('judul')
                                          <div class="invalid-feedback">
                                            {{ $message }}
                                          </div>
                                      @enderror
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="foto" class="col-md-3 col-form-label form-control-label">Foto<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('is-invalid') @enderror form-control-alternative" type="file" id="gambar_blog" name="gambar_blog" required>
                                        @error('gambar_blog')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    
                                  </div>
                                  {{-- Penulis --}}
                                  <input type="hidden" name="penulis">

                                  {{-- Tanggal Dibuat --}}
                                  <input type="hidden" name="created_at" value="{{ date('Y/m/d') }}">

                                  <div class="form-group row">
                                    <label for="konten" class="col-md-3 col-form-label form-control-label">Konten<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <textarea class="ckeditor @error('konten') is-invalid @enderror" name="konten" id="konten" required >{{ old('konten') }}</textarea>
                                        @error('konten')
                                            <div class="invalid-feedback">
                                              {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                        <button type="submit" class="btn btn-primary">Tambah</button>
                                        <a href="/dashboard/blog" class="btn btn-secondary">Batal</a>
                                    </div>
                                  </div>
                                </form>
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