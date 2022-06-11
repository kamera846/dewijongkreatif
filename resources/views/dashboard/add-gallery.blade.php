@extends('layouts.admin')

@section('page-header')
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Galeri</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tambah Galeri</li>
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
                        <h3 class="mb-0">Tambah Galeri</h3>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form action="/dashboard/gallery/store" method="POST" enctype="multipart/form-data">
                                    @csrf
                                  <div class="form-group row">
                                    <label for="foto" class="col-md-3 col-form-label form-control-label">Foto<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                      <input class="form-control @error('is-invalid')@enderror form-control-alternative" type="file" id="foto" name="foto" required value="{{ old('foto') }}">
                                      @error('foto')
                                          <div class="invalid-feedback">
                                            {{ $message }}
                                          </div>
                                      @enderror
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="judul" class="col-md-3 col-form-label form-control-label">Judul<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                      <input class="form-control @error('is-invalid') @enderror form-control-alternative" type="text" id="judul" name="judul" required value="{{ old('judul') }}" autocomplete="off">
                                    </div>
                                    @error('judul')
                                          <div class="invalid-feedback">
                                            {{ $message }}
                                          </div>
                                      @enderror
                                  </div>
                                  <div class="form-group row">
                                    <label for="deskripsi" class="col-md-3 col-form-label form-control-label">Deskripsi</label>
                                    <div class="col-md-9">
                                      <textarea class="form-control @error('is-invalid') @enderror form-control-alternative" name="deskripsi" id="deskripsi" onkeydown="limit(this);" onkeyup="limit(this);" rows="4">{{ old('deskripsi') }}</textarea>
                                      <span class="text-xs text-danger d-none">
                                        Maksimal 200 karakter diperbolehkan!
                                      </span>
                                        @error('deskripsi')
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
                                        <a href="/dashboard/gallery" class="btn btn-secondary">Batal</a>
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