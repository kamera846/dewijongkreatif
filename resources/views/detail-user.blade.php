@extends('layouts.admin')

@section('page-header')
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Pengguna</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Detail Pengguna</li>
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
                        <h3 class="mb-0">Detail Pengguna</h3>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                      <div class="row justify-content-center">
                          <div class="col-lg-8 col-md-10">
                              <form action="" method="" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                  <label for="nama" class="col-md-3 col-form-label form-control-label">Nama</label>
                                  <div class="col-md-9">
                                    <input class="form-control form-control-alternative" type="text" id="nama" name="nama" required value="{{ $user->nama }}" disabled>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="email" class="col-md-3 col-form-label form-control-label">Alamat Email</label>
                                  <div class="col-md-9">
                                    <input class="form-control form-control-alternative" type="email" value="{{ $user->email }}" id="email"  name="email" disabled>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="role" class="col-md-3 col-form-label form-control-label">Role</label>
                                  <div class="col-md-9">
                                    <select name="role" id="role" class="form-control form-control-alternative" required>
                                      <option value="">-- Pilih Role --</option>
                                      <option value="admin">Admin</option>
                                      <option value="superadmin">Super-admin</option>
                                    </select disabled>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="pekerjaan" class="col-md-3 col-form-label form-control-label">Pekerjaan</label>
                                  <div class="col-md-9">
                                    <input class="form-control form-control-alternative" type="text" value="{{ $user->pekerjaan }}" id="pekerjaan" name="pekerjaan" disabled>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="no_hp" class="col-md-3 col-form-label form-control-label">Nomor HP</label>
                                  <div class="col-md-9">
                                    <input class="form-control form-control-alternative" type="number" value="{{ $user->no_hp }}" id="no_hp" name="no_hp" disabled>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="foto" class="col-md-3 col-form-label form-control-label">Foto</label>
                                  <div class="col-md-9">
                                    <input class="form-control form-control-alternative" type="file"id="foto" name="foto_profil" disabled>
                                    <img id="image-preview-update-2" src="{{ asset('storage/' . $user->foto_profil) }}" width="100px" height="100px" class="rounded mt-2" alt="...">
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="alamat" class="col-md-3 col-form-label form-control-label">Alamat</label>
                                  <div class="col-md-9">
                                      <textarea class="form-control form-control-alternative" name="alamat" id="alamat" rows="3" disabled>{{ $user->alamat }}</textarea>
                                  </div>
                                </div>
                                <div class="form-group row">
                                <div class="col-md-3"></div>
                                  <div class="col-md-9">
                                    <a href="/user/{{ $user->id }}/edit" class="btn btn-primary">Edit</a>
                                    <a href="/user" class="btn btn-secondary">Kembali</a> 
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