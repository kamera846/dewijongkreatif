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
                                <li class="breadcrumb-item"><a href="/admin/dashboard"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Galeri</li>
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
                        <h3 class="mb-0">Edit Galeri</h3>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form>
                                  <div class="form-group row">
                                    <label for="foto" class="col-md-3 col-form-label form-control-label">Foto</label>
                                    <div class="col-md-9">
                                      <input class="form-control form-control-alternative" type="file" id="foto" name="foto" required>
                                      <img id="image-preview-update-2" src="{{ asset('admin/assets/img/theme/team-4.jpg') }}" width="100px" height="100px" class="rounded mt-2" alt="...">

                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="judul" class="col-md-3 col-form-label form-control-label">Judul</label>
                                    <div class="col-md-9">
                                      <input class="form-control form-control-alternative" type="text" id="judul" name="judul" value="Persatuan Sepak Bola Kampung" required>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="deskripsi" class="col-md-3 col-form-label form-control-label">Deskripsi</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores atque impedit maxime provident soluta molestias voluptatem amet, cupiditate cum accusamus non sequi illo quam enim dolorem obcaecati incidunt! Quaerat, unde.</textarea>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                        <button type="submit" class="btn btn-primary">Tambah</button>
                                        <a href="/admin/gallery" class="btn btn-secondary">Batal</a>
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