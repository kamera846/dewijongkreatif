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
                                <li class="breadcrumb-item active" aria-current="page">Edit Postingan</li>
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
                        <h3 class="mb-0">Edit Postingan</h3>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form action="/dashboard/blog/{{ $blog->id }}/update" method="post" enctype="multipart/form-data">
                                  @csrf
                                  @method('put')
                                  <div class="form-group row">
                                    <label for="judul" class="col-md-3 col-form-label form-control-label">Judul<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                      <input class="form-control form-control-alternative" type="text" id="judul" name="judul" value="{{ $blog->judul, old('judul') }}" required autocomplete="off">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="foto" class="col-md-3 col-form-label form-control-label">Foto<span class="text-danger">*</span></label>
                                    <input type="hidden" name="oldBlog" value="{{ $blog->gambar_blog }}">
                                    <div class="col-md-9">
                                      <input class="form-control form-control-alternative" type="file"id="gambar_blog" name="gambar_blog" value="{{ $blog->gambar_blog }}">
                                      <img id="image-preview-update-2" src="{{ asset('storage/' . $blog->gambar_blog) }}" height="100px" class="rounded mt-2" alt="...">
                                    </div>
                                  </div>
                                  {{-- Penulis --}}
                                  <input type="hidden" name="penulis" value="{{ $blog->penulis }}">

                                  {{-- Tanggal Dibuat --}}
                                  <input type="hidden" name="created_at" value="{{ $blog->created_at }}">


                                  <div class="form-group row">
                                    <label for="konten" class="col-md-3 col-form-label form-control-label">Konten<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <textarea class="ckeditor" name="konten" id="konten" required>
                                            {{ $blog->konten, old('konten') }}
                                        </textarea>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <a href="/blog" class="btn btn-secondary">Batal</a>
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