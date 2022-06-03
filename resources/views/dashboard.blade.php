@extends('layouts.admin')
@section('page-header')
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Dashboard</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                @can('isSuperAdmin')
                <div class="row">
                  <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                      <!-- Card body -->
                      <a href="/user">
                        <div class="card-body">
                          <div class="row">
                            <div class="col">
                              <h5 class="card-title text-uppercase text-muted mb-0">Pengguna</h5>
                              <span class="h2 font-weight-bold mb-0">{{ $jumlahUsers }}</span>
                            </div>
                            <div class="col-auto">
                              <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                <i class="ni ni-circle-08"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                      
                    </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                      <!-- Card body -->
                      <a href="/blog">
                        <div class="card-body">
                          <div class="row">
                            <div class="col">
                              <h5 class="card-title text-uppercase text-muted mb-0">Post Blog</h5>
                              <span class="h2 font-weight-bold mb-0">{{ $jumlahBlogs }}</span>
                            </div>
                            <div class="col-auto">
                              <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                <i class="ni ni-single-copy-04"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                      <!-- Card body -->
                      <a href="/gallery">
                        <div class="card-body">
                          <div class="row">
                            <div class="col">
                              <h5 class="card-title text-uppercase text-muted mb-0">Galeri</h5>
                              <span class="h2 font-weight-bold mb-0">{{ $jumlahGalleries }}</span>
                            </div>
                            <div class="col-auto">
                              <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                <i class="ni ni-album-2"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                @elsecan('isAdmin')
                <div class="row">
                  <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                      <!-- Card body -->
                      <a href="/blog">
                        <div class="card-body">
                          <div class="row">
                            <div class="col">
                              <h5 class="card-title text-uppercase text-muted mb-0">Post Blog</h5>
                              <span class="h2 font-weight-bold mb-0">{{ $jumlahBlogs }}</span>
                            </div>
                            <div class="col-auto">
                              <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                <i class="ni ni-single-copy-04"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                      <!-- Card body -->
                      <a href="/gallery">
                        <div class="card-body">
                          <div class="row">
                            <div class="col">
                              <h5 class="card-title text-uppercase text-muted mb-0">Galeri</h5>
                              <span class="h2 font-weight-bold mb-0">{{ $jumlahGalleries }}</span>
                            </div>
                            <div class="col-auto">
                              <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                <i class="ni ni-album-2"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                @endcan
                
            </div>
        </div>
    </div>
@endsection

@section('page-content')
    <div class="container-fluid mt--6">
        <!-- Footer -->
        @include('partials.footer-admin')
    </div>
@endsection