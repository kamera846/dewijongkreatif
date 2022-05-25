@extends('layouts.admin')

@section('page-header')
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Sosial Media</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Profil Sosial Media</li>
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
                        <h3 class="mb-0">Profil Sosial Media</h3>
                    </div>
                    {{-- alerts --}}
                    {{-- isi atribut flashdata sesuai kondisi session untuk menampilan alert berhasil mengubah data, kalo flashdata gagal isi 'gagal' untuk menampilakan alert error, kalo kosong alertnya nggak muuncul--}}
                    <div class="flash-data" data-flashdata=""></div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form>
                                    <div class="form-group row">
                                        <label for="twitter" class="col-md-3 col-form-label form-control-label">Link Twitter</label>
                                        <div class="col-md-9">
                                            <input class="form-control form-control-alternative" type="text" id="twitter" name="twitter" value="https://twitter.com/desakeren" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="facebook" class="col-md-3 col-form-label form-control-label">Link Facebook</label>
                                        <div class="col-md-9">
                                            <input class="form-control form-control-alternative" type="text" id="facebook" name="facebook" value="https://facebook.com/desakeren" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="instagram" class="col-md-3 col-form-label form-control-label">Link Instagram</label>
                                        <div class="col-md-9">
                                            <input class="form-control form-control-alternative" type="text" id="instagram" name="instagram" value="https://instagram.com/desakeren" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="youtube" class="col-md-3 col-form-label form-control-label">Link Youtube</label>
                                        <div class="col-md-9">
                                            <input class="form-control form-control-alternative" type="text" id="youtube" name="youtube" value="https://youtube.com/desakeren" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pinterest" class="col-md-3 col-form-label form-control-label">Link Pinterest</label>
                                        <div class="col-md-9">
                                            <input class="form-control form-control-alternative" type="text" id="pinterest" name="pinterest" value="https://pinterest.com/desakeren" readonly>
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