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
                                <form action="/dashboard/user/{{ $user->id }}/update" method="POST" enctype="multipart/form-data" autocomplete="off">
                                  @csrf
                                  @method('put')
                                  <div class="form-group row">
                                    <label for="nama" class="col-md-3 col-form-label form-control-label">Nama<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                      <input class="form-control @error('nama') is-invalid @enderror form-control-alternative" type="text" id="nama" name="nama" required value="{{ $user->nama }}">
                                    </div>
                                    @error('nama')
                                      <div class="invalid-feedback">
                                        {{ $message }}
                                      </div>
                                    @enderror
                                  </div>
                                  <div class="form-group row">
                                    <label for="email" class="col-md-3 col-form-label form-control-label">Alamat Email<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                      <input class="form-control @error('email') is-invalid @enderror form-control-alternative" type="email" value="{{ $user->email }}" id="email"  name="email">
                                    </div>
                                    @error('email')
                                        <div class="invalid-feedback">
                                          {{ $message }}
                                        </div>
                                    @enderror
                                  </div>
                                  <div class="form-group row">
                                    <label for="role" class="col-md-3 col-form-label form-control-label">Role<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                      <select name="role" id="role" class="form-control @error('role') is-invalid @enderror form-control-alternative" required>
                                        @if($user->role == 'admin')
                                        <option value="{{ $user->role }}">{{ $user->role }}</option>
                                        <option value="Super-admin">Super-admin</option>
                                        @else
                                        <option value="Admin">Admin</option>
                                        <option value="{{ $user->role }}">{{ $user->role }}</option>
                                        @endif
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
                                      <input class="form-control @error('pekerjaan') is-invalid @enderror form-control-alternative" type="text" value="{{ $user->pekerjaan }}" id="pekerjaan" name="pekerjaan">
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
                                      <input class="form-control @error('no_hp') is-invalid @enderror form-control-alternative" type="number" value="{{ $user->no_hp }}" id="no_hp" name="no_hp">
                                    </div>
                                    @error('no_hp')
                                        <div class="invalid-feedback">
                                          {{ $message }}
                                        </div>
                                    @enderror
                                  </div>
                                  <div class="form-group row">
                                    <label for="foto" class="col-md-3 col-form-label form-control-label">Foto</label>
                                    <input type="hidden" name="oldImage" value="{{ $user->foto_profil }}">
                                    <div class="col-md-9">
                                      <input class="form-control form-control-alternative" type="file"id="foto" name="foto_profil" value="{{ $user->foto_profil }}">
                                      @if($user->foto_profil)
                                        <img id="image-preview-update-2" src="{{ asset('storage/' . $user->foto_profil) }}" height="100px" class="rounded mt-2" alt="...">
                                      @else
                                        <img id="image-preview-update-2" src="{{ asset('storage/foto-profil/defaultuserimage.png') }}" width="100px" height="100px" class="rounded mt-2" alt="...">
                                      @endif
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="alamat" class="col-md-3 col-form-label form-control-label">Alamat<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <textarea class="form-control @error('alamat') is-invalid @enderror form-control-alternative" name="alamat" id="alamat" rows="3" required>{{ $user->alamat }}</textarea>
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
                                      <button type="submit" class="btn btn-primary">Simpan</button>
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
    <script>
    </script>
@endsection