
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
                                <li class="breadcrumb-item active" aria-current="page">Edit Sosial Media</li>
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
                        <h3 class="mb-0">Edit Sosial Media</h3>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form action="/dashboard/social/{{ $social->id }}/update" method="POST">
                                    @csrf
                                    @method('put')
                                    <div class="form-group row">
                                    <label for="tipe_sosmed" class="col-md-3 col-form-label form-control-label">Tipe Sosial Media</label>
                                    <div class="col-md-9">
                                      <select name="tipe_sosmed" id="tipe_sosmed" class="form-control form-control-alternative @error('tipe_sosmed') is-invalid @enderror" required>
                                        <option value="{{ $social->tipe_sosmed }}">{{ $social->tipe_sosmed }}</option>
                                        <option value="Instagram">Instagram</option>
                                        <option value="Twitter">Twitter</option>
                                      </select>
                                      @error('tipe_sosmed')
                                          <div class="invalid-feedback">
                                              {{ $message }}
                                          </div>
                                          @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="link_sosmed" class="col-md-3 col-form-label form-control-label">Link Sosial Media<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('is-invalid') @enderror form-control-alternative" type="text" id="link_sosmed" name="link_sosmed" required value="{{ $social->link_sosmed }}" autocomplete="off">
                                    </div>
                                    @error('link_sosmed')
                                          <div class="invalid-feedback">
                                            {{ $message }}
                                          </div>
                                      @enderror
                                  </div>
                                  <div class="form-group row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                        <a href="/dashboard/social" class="btn btn-secondary">Batal</a>
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