@extends('layouts.admin')

@section('page-header')
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Kontak</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Profil Kontak</li>
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
            <div class="col-lg-8 col-md-10">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header">
                        <h3 class="mb-0">Profil Kontak</h3>
                    </div>
                    {{-- alerts --}}
                    {{-- isi atribut flashdata sesuai kondisi session untuk menampilan alert berhasil mengubah data, kalo flashdata gagal isi 'gagal' untuk menampilakan alert error --}}
                    <div class="flash-data" data-flashdata=""></div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form>
                                  <div class="form-group row">
                                    <label for="email" class="col-md-3 col-form-label form-control-label">Alamat Email</label>
                                    <div class="col-md-9">
                                      <input class="form-control form-control-alternative" type="email" id="email" name="email" value="desakami@keren.tes" readonly>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="no_telp" class="col-md-3 col-form-label form-control-label">Nomor Telepon</label>
                                    <div class="col-md-9">
                                      <input class="form-control form-control-alternative" type="text" id="no_telp" name="no_telp" value="+62 817 1758 2871" readonly>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="no_wa" class="col-md-3 col-form-label form-control-label">Nomor Whatsapp</label>
                                    <div class="col-md-9">
                                      <input class="form-control form-control-alternative" type="number" id="no_wa" name="no_wa" value="6281717582871" readonly>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="alamat" class="col-md-3 col-form-label form-control-label">Alamat Desa</label>
                                    <div class="col-md-9">
                                      <textarea class="form-control form-control-alternative" name="alamat" id="alamat" rows="3" readonly>Desa kami, kec Apa 86228, prov DKI Djakarta, Indonesia</textarea>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9" id="pembungkus">
                                        <button type="button" class="btn btn-primary" id="edit">Edit</button>
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