@extends('layouts.admin')

@section('page-header')
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Setting</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Profil Setting</li>
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
                        <h3 class="mb-0">Profil Setting</h3>
                    </div>
                    {{-- alerts --}}
                    {{-- isi atribut flashdata sesuai kondisi session untuk menampilan alert berhasil mengubah data, kalo flashdata gagal isi 'gagal' untuk menampilakan alert error --}}
                    <div class="flash-data" data-flashdata="{{ (session()->has('success'))?session('success'):'' }}{{ (session()->has('error'))?session('error'):'' }}"></div> 
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="row">
                          <div class="col">
                              @forelse ($settings as $setting)
                              <form action="/dashboard/setting/{{ $setting->id }}/update" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                  <div class="form-group row">
                                    <label for="email" class="col-md-3 col-form-label form-control-label">Alamat Email</label>
                                    <div class="col-md-9">
                                      <input class="form-control form-control-alternative" type="email" id="email" name="email" value="{{ $setting->email }}" >
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="no_telp" class="col-md-3 col-form-label form-control-label">Nomor Telepon</label>
                                    <div class="col-md-9">
                                      <input class="form-control form-control-alternative" type="number" id="no_telp" name="telpon" value="{{ $setting->telpon }}" >
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="logo" class="col-md-3 col-form-label form-control-label">Logo</label>
                                    <input type="hidden" name="oldLogo" value="{{ $setting->logo }}">
                                    <div class="col-md-9">
                                      <input class="form-control form-control-alternative" type="file" id="logo" name="logo" value="{{ $setting->logo }}" >
                                      <div class="box-image bg-primary mt-2" style="width: 45%">
                                        <img id="image-preview-update-2" src="{{ asset('storage/' . $setting->logo) }}" height="100px" width="200px" class="rounded mt-2" alt="..." style="object-fit: cover">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="favicon" class="col-md-3 col-form-label form-control-label">Favicon</label>
                                    <input type="hidden" name="oldFavicon" value="{{ $setting->favicon }}">
                                    <div class="col-md-9">
                                      <input class="form-control form-control-alternative" type="file" id="favicon" name="favicon" value="{{ $setting->favicon }}" >
                                      @if ($setting->favicon)
                                      <img id="image-preview-update-2" src="{{ asset('storage/' . $setting->favicon) }}" height="100px" class="rounded mt-2" alt="...">    
                                      @else
                                      <i class="ni ni-image text-gray" style="font-size:8vmax;"></i>
                                      @endif
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="web_title" class="col-md-3 col-form-label form-control-label">Web Title</label>
                                    <div class="col-md-9">
                                      <input class="form-control form-control-alternative" type="text" id="web_title" name="web_title" value="{{ $setting->web_title }}" >
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="lokasi" class="col-md-3 col-form-label form-control-label">Lokasi</label>
                                    <div class="col-md-9">
                                      <textarea class="form-control form-control-alternative" name="lokasi" id="lokasi" rows="3" >{{ $setting->lokasi }}</textarea>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                      <button type="submit" class="btn btn-primary">Update</button>
                                      <a href="/dashboard/setting" class="btn btn-secondary">Batal</a> 
                                    </div>
                                  </div>
                                </form>
                                @empty
                                <form action="/dashboard/setting/store" method="POST" enctype="multipart/form-data">
                                @csrf
                                  <div class="form-group row">
                                    <label for="email" class="col-md-3 col-form-label form-control-label">Alamat Email</label>
                                    <div class="col-md-9">
                                      <input class="form-control form-control-alternative" type="email" id="email" name="email"  >
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="no_telp" class="col-md-3 col-form-label form-control-label">Nomor Telepon</label>
                                    <div class="col-md-9">
                                      <input class="form-control form-control-alternative" type="number" id="no_telp" name="telpon"  >
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="logo" class="col-md-3 col-form-label form-control-label">Logo</label>
                                    <div class="col-md-9">
                                      <input class="form-control form-control-alternative" type="file" id="logo" name="logo">
                                      <i class="ni ni-image text-gray" style="font-size:8vmax;"></i>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="favicon" class="col-md-3 col-form-label form-control-label">Favicon</label>
                                    <div class="col-md-9">
                                      <input class="form-control form-control-alternative" type="file" id="favicon" name="favicon">
                                      <i class="ni ni-image text-gray" style="font-size:8vmax;"></i>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="web_title" class="col-md-3 col-form-label form-control-label">Web Title</label>
                                    <div class="col-md-9">
                                      <input class="form-control form-control-alternative" type="text" id="web_title" name="web_title"  >
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="lokasi" class="col-md-3 col-form-label form-control-label">Lokasi</label>
                                    <div class="col-md-9">
                                      <textarea class="form-control form-control-alternative" name="lokasi" id="lokasi" rows="3" ></textarea>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                      <button type="submit" class="btn btn-primary">Simpan</button>
                                      <a href="/dashboard/setting" class="btn btn-secondary">Batal</a> 
                                    </div>
                                  </div>
                                </form>
                                @endforelse
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