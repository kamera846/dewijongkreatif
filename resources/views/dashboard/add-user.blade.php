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
                                <li class="breadcrumb-item active" aria-current="page">Tambah Pengguna</li>
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
                        <h3 class="mb-0">Tambah Pengguna</h3>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form action="/dashboard/user/store" method="post" enctype="multipart/form-data" autocomplete="off">
                                  @csrf
                                  <div class="form-group row">
                                    <label for="nama" class="col-md-3 col-form-label form-control-label">Nama<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                      <input class="form-control form-control-alternative @error('nama') is-invalid @enderror" type="text" id="nama" name="nama" required value="{{ old('nama') }}">
                                      @error('nama')
                                        <div class="invalid-feedback">
                                          {{ $message }}
                                        </div>
                                      @enderror
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="email" class="col-md-3 col-form-label form-control-label">Alamat Email<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                      <input class="form-control form-control-alternative @error ('email') is-invalid @enderror" type="email" id="email" name="email" required value="{{ old('email') }}">
                                      @error('email')
                                        <div class="invalid-feedback">
                                          {{ $message }}
                                        </div>
                                      @enderror
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="password" class="col-md-3 col-form-label form-control-label">Password<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                      <input class="form-control @error('password') is-invalid @enderror form-control-alternative" type="password" id="password" name="password" required>
                                      @error('password')
                                          <div class="invalid-feedback">
                                            {{ $message }}
                                          </div>
                                      @enderror
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="role" class="col-md-3 col-form-label form-control-label">Role<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                      <select name="role" id="role" class="form-control form-control-alternative @error('role') is-invalid @enderror" required>
                                        <option value="">-- Pilih Role --</option>
                                        <option value="admin">Admin</option>
                                        <option value="super-admin">Super-admin</option>
                                      </select>
                                      @error('role')
                                          <div class="invalid-feedback">
                                            {{ $message }}
                                          </div>
                                      @enderror
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="pekerjaan" class="col-md-3 col-form-label form-control-label">Pekerjaan</label>
                                    <div class="col-md-9">
                                      <input class="form-control @error('pekerjaan') is-invalid  @enderror form-control-alternative" type="text" id="pekerjaan" name="pekerjaan" value="{{ old('pekerjaan') }}">
                                    </div>
                                    @error('pekerjaan')
                                        <div class="invalid-feedback">
                                          {{ $message }}
                                        </div>
                                    @enderror
                                  </div>
                                  <div class="form-group row">
                                    <label for="no_hp" class="col-md-3 col-form-label form-control-label">Nomor HP</label>
                                    <div class="col-md-9">
                                      <input class="form-control form-control-alternative @error('no_hp') is-invalid @enderror" type="number" id="no_hp" name="no_hp" value="{{ old('no_hp') }}">
                                    </div>
                                    @error('no_hp')
                                        <div class="invalid-feedback">
                                          {{ $message }}
                                        </div>
                                    @enderror
                                  </div>
                                  <div class="form-group row">
                                    <label for="foto" class="col-md-3 col-form-label form-control-label">Foto</label>
                                    <div class="col-md-9">
                                      <input class="form-control form-control-alternative @error('foto_profil') is-invalid @enderror" type="file" id="foto" name="foto_profil" value="{{ old('foto_profil') }}">
                                    </div>
                                    @error('foto_profile')
                                        <div class="invalid-feedback">
                                          {{ $message }}
                                        </div>
                                    @enderror
                                  </div>
                                  <div class="form-group row">
                                    <label for="alamat" class="col-md-3 col-form-label form-control-label">Alamat<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <textarea class="form-control form-control-alternative @error('alamat') is-invalid @enderror" name="alamat" id="alamat" rows="3" required>{{ old('alamat') }}</textarea>
                                    </div>
                                    @error('alamat')
                                        <div class="invalid-feedback">
                                          {{ $message }}
                                        </div>
                                    @enderror
                                  </div>
                                  <div class="form-group row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                        <button type="submit" class="btn btn-primary">Tambah</button>
                                        <a href="/dashboard/user" class="btn btn-secondary">Batal</a> 
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