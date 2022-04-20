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
                                <li class="breadcrumb-item"><a href="/admin/dashboard"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Pengguna</li>
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
                        <h3 class="mb-0">Edit Pengguna</h3>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form>
                                  <div class="form-group row">
                                    <label for="nama" class="col-md-3 col-form-label form-control-label">Nama</label>
                                    <div class="col-md-9">
                                      <input class="form-control form-control-alternative" type="text" value="John Snow" id="nama" name="nama" required>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="role" class="col-md-3 col-form-label form-control-label">Role</label>
                                    <div class="col-md-9">
                                      <select name="role" id="role" class="form-control form-control-alternative" required>
                                        <option value="">-- Pilih Role --</option>
                                        <option value="admin" selected>Admin</option>
                                        <option value="super-admin">Super-admin</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="pekerjaan" class="col-md-3 col-form-label form-control-label">Pekerjaan</label>
                                    <div class="col-md-9">
                                      <input class="form-control form-control-alternative" type="text" value="Tidur" id="pekerjaan" name="pekerjaan">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="no_hp" class="col-md-3 col-form-label form-control-label">Nomor HP</label>
                                    <div class="col-md-9">
                                      <input class="form-control form-control-alternative" type="number" value="123456789" id="no_hp" name="no_hp">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="foto" class="col-md-3 col-form-label form-control-label">Foto</label>
                                    <div class="col-md-9">
                                      <input class="form-control form-control-alternative" type="file"id="foto" name="foto">
                                      <img id="image-preview-update-2" src="{{ asset('admin/assets/img/theme/team-4.jpg') }}" width="100px" height="100px" class="rounded mt-2" alt="...">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="alamat" class="col-md-3 col-form-label form-control-label">Alamat</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control form-control-alternative" name="alamat" id="alamat" rows="3">Jalan-jalan</textarea>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                      <button type="submit" class="btn btn-primary">Simpan</button>
                                      <a href="/admin/user" class="btn btn-secondary">Batal</a> 
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