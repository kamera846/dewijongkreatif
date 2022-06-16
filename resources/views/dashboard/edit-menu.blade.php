@extends('layouts.admin')

@section('page-header')
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Section</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Section</li>
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
                        <h3 class="mb-0">Edit Section</h3>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form action="/dashboard/section/{{ $section->slug }}/update" method="POST" enctype="multipart/form-data">
                                  @csrf
                                  @method('put')
                                  <div class="form-group row">
                                    <label for="slug" class="col-md-3 col-form-label form-control-label">slug</label>
                                    <div class="col-md-9">
                                      <input class="form-control @error('slug') is-invalid @enderror form-control-alternative" type="text" id="slug" name="slug" readonly disabled value="{{ $section->slug }}">
                                    </div>  
                                    @error('slug')
                                      <div class="invalid-feedback">
                                        {{ $message }}
                                      </div>
                                    @enderror
                                  </div>
                                  <div class="form-group row">
                                    <label for="title" class="col-md-3 col-form-label form-control-label">Title</label>
                                    <div class="col-md-9">
                                      <input class="form-control @error('title') is-invalid @enderror form-control-alternative" type="text" id="title" name="title" required value="{{ $section->title }}">
                                    </div>  
                                    @error('title')
                                      <div class="invalid-feedback">
                                        {{ $message }}
                                      </div>
                                    @enderror
                                  </div>
                                  <div class="form-group row">
                                    <label for="foto" class="col-md-3 col-form-label form-control-label">Foto</label>
                                    <div class="col-md-9">
                                      <input class="form-control form-control-alternative" type="file" id="foto" name="cover[]" multiple value="{{ $section->cover }}">
                                      @if($covers)
                                        @foreach($covers as $index => $cover)
                                        <img id="image-preview-update-2-{{$index}}" src="{{ asset('storage/' . $cover) }}" height="100px" class="rounded mt-2" alt="...">
                                        @endforeach
                                      @else
                                        <img id="image-preview-update-2" src="{{ asset('storage/foto-profil/defaultsectionimage.png') }}" width="100px" height="100px" class="rounded mt-2" alt="...">
                                      @endif
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="role" class="col-md-3 col-form-label form-control-label">Status<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                      <select name="isActive" id="isActive" class="form-control @error('role') is-invalid @enderror form-control-alternative" required>
                                        <option value="Pilih section" disabled>Pilih Status</option>
                                        @if($section->isActive === 'true')
                                        <option value="true" selected>Aktif</option>
                                        <option value="false">Nonaktif</option>
                                        @else
                                        <option value="true">Aktif</option>
                                        <option value="false" selected>Nonaktif</option>
                                        @endif
                                      </select>
                                      @error('isActive')
                                        <div class="invalid-feedback">
                                          {{ $message }}
                                        </div>
                                    @enderror
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="description" class="col-md-3 col-form-label form-control-label">Description</label>
                                    <div class="col-md-9">
                                        <textarea class="ckeditor @error('description') is-invalid @enderror form-control-alternative" name="description" id="description" rows="8" >{!! $section->description !!}</textarea>
                                    </div>
                                    @error('description')
                                      <div class="invalid-feedback">
                                        {{ $message }}
                                      </div>
                                    @enderror
                                  </div>
                                  <div class="form-group row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                      <button type="submit" class="btn btn-primary">Simpan</button>
                                      <a href="/dashboard/section" class="btn btn-secondary">Batal</a> 
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