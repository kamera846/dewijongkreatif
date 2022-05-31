
 <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Start your development with a Dashboard for Bootstrap 4." />
        <meta name="author" content="Creative Tim" />
        <title>{{ $judul_halaman }}</title>
        <!-- Favicon -->
        <link rel="icon" href="{{ asset('admin/assets/img/brand/favicon.png') }}" type="image/png" />
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" />
        <!-- Icons -->
        <link rel="stylesheet" href="{{ asset('admin/assets/vendor/nucleo/css/nucleo.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('admin/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css" />
        {{-- boostrap css --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Argon CSS -->
        <link rel="stylesheet" href="{{ asset('admin/assets/css/argon.css?v=1.1.0') }}" type="text/css" />
    </head>

    <body>
        <!-- Sidenav -->
        <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
            <div class="scrollbar-inner">
                <!-- Brand -->
                <div class="sidenav-header d-flex align-items-center">
                    <a class="navbar-brand" href="/dashboard">
                        <img src="{{ asset('admin/assets/img/brand/blue.png') }}" class="navbar-brand-img" alt="..." />
                    </a>
                    <div class="ml-auto">
                        <!-- Sidenav toggler -->
                        <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="navbar-inner">
                    <!-- Collapse -->
                    <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                        <!-- Nav items -->
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link {{ ( $judul_halaman === 'Admin | Dashboard' ) ? 'active' : '' }} " href="/dashboard">
                                    <i class="ni ni-shop text-primary"></i>
                                    <span class="nav-link-text">Dashboard</span>
                                </a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="#navbar-maps" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-maps">
                                    <i class="ni ni-map-big text-primary"></i>
                                    <span class="nav-link-text">Maps</span>
                                </a>
                                <div class="collapse" id="navbar-maps">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="./pages/maps/google.html" class="nav-link">Google</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="./pages/maps/vector.html" class="nav-link">Vector</a>
                                        </li>
                                    </ul>
                                </div>
                            </li> -->
                        </ul>

                        <!-- Divider -->
                        <hr class="my-3">

                        <h6 class="navbar-heading p-0 text-primary">DATA</h6>
                        <ul class="navbar-nav mb-md-3">
                            <li class="nav-item">
                                <a 
                                class="nav-link {{ ( $judul_halaman === 'Admin | Data Pengguna' || $judul_halaman === 'Admin | Edit Pengguna' || $judul_halaman === 'Admin | Tambah Pengguna' || $judul_halaman === 'Admin | Detail Pengguna' ) ? 'active' : '' }}" 
                                href="/dashboard/user">
                                    <i class="ni ni-circle-08 text-green"></i>
                                    <span class="nav-link-text">Pengguna</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a 
                                class="nav-link {{ ( $judul_halaman === 'Admin | Data Postingan' || $judul_halaman === 'Admin | Edit Postingan' || $judul_halaman === 'Admin | Tambah Postingan' || $judul_halaman === 'Admin | Detail Postingan' ) ? 'active' : '' }}" 
                                href="/dashboard/blog">
                                    <i class="ni ni-single-copy-04 text-orange"></i>
                                    <span class="nav-link-text">Blog</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a 
                                class="
                                    nav-link {{ ( $judul_halaman === 'Admin | Data Galeri' || $judul_halaman === 'Admin | Edit Galeri' || $judul_halaman === 'Admin | Tambah Galeri' ) ? 'active' : '' }}" 
                                href="/dashboard/gallery">
                                    <i class="ni ni-album-2 text-info"></i>
                                    <span class="nav-link-text">Galeri</span>
                                </a>
                            </li>
                        </ul>

                        <!-- Divider -->
                        {{-- <hr class="my-3">

                        <h6 class="navbar-heading p-0 text-primary">PROFIL</h6>
                        <ul class="navbar-nav mb-md-3">
                            <li class="nav-item">
                                <a 
                                class="nav-link {{ ( $judul_halaman === 'Admin | Profil Kontak') ? 'active' : '' }}" 
                                href="/dashboard/contact">
                                    <i class="ni ni-email-83 text-red"></i>
                                    <span class="nav-link-text">Kontak</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a 
                                class="nav-link {{ ( $judul_halaman === 'Admin | Profil Sosial Media') ? 'active' : '' }}" 
                                href="/dashboard/social">
                                    <i class="ni ni-like-2 text-purple"></i>
                                    <span class="nav-link-text">Sosial Media</span>
                                </a>
                            </li>
                        </ul> --}}

                        <!-- Divider -->
                        <hr class="my-3">

                        <ul class="navbar-nav mb-md-3">
                            <li class="nav-item">
                                
                                <form action="/logout" method="post" class="d-inline">
                                    @csrf
                                    <button type="submit" id="logout" class="nav-link border-0" data-toggle="tooltip" style="background:none; width:100%;">
                                        <i class="ni ni-button-power text-red"></i>
                                        <span class="nav-link-text ml-2">Keluar</span>
                                    </button>
                                </form>
                                {{-- <a 
                                id="logout"
                                class="nav-link" 
                                href="/logout">
                                    <i class="ni ni-button-power text-red"></i>
                                    <span class="nav-link-text">Keluar</span>
                                </a> --}}
                            </li>
                        </ul>
                        <!-- <hr class="my-3" /> -->
                    </div>
                </div>
            </div>
        </nav>
        <!-- Main content -->
        <div class="main-content" id="panel">
            <!-- Topnav -->
            <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Navbar links -->
                        <ul class="navbar-nav align-items-center ml-md-auto">
                            <li class="nav-item d-xl-none">
                                <!-- Sidenav toggler -->
                                <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                                    <div class="sidenav-toggler-inner">
                                        <i class="sidenav-toggler-line"></i>
                                        <i class="sidenav-toggler-line"></i>
                                        <i class="sidenav-toggler-line"></i>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="navbar-nav align-items-center ml-auto ml-md-0">
                            <li class="nav-item dropdown">
                                @auth
                                    <a class="nav-link pr-0" href="#"data-toggle="modal" data-target="#profil-saya">
                                        <div class="media align-items-center">
                                            <div class="media-body mr-2 d-none d-lg-block">
                                                <span class="mb-0 text-sm font-weight-bold">{{ Auth::user()->nama }}</span>
                                            </div>
                                            @if (Auth::user()->foto_profil != null)
                                                <span class="avatar avatar-sm rounded-circle">
                                                    <img alt="Image placeholder" src="{{ asset('storage/' . Auth::user()->foto_profil)}}" />
                                                </span>
                                            @else
                                                <img src="/storage/foto-profil/defaultuserimage.png" class="avatar rounded-circle mr-3">
                                            @endif
                                        </div>
                                    </a>
                                @endauth
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            
            <!-- Header -->
            @yield('page-header')
            
            <!-- Page content -->
            @yield('page-content')

        </div>

        {{-- Modal Profil --}}
        <div class="modal fade" id="profil-saya" tabindex="-1" role="dialog" aria-labelledby="profil-saya" aria-hidden="true">
            <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="modal-title-default">Profil Saya</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body text-sm">
                        @if (Auth::user()->foto_profil != null)
                            <img src="{{ asset('storage/' . Auth::user()->foto_profil)}}" alt="" class="rounded d-block mx-auto mb-4" width="150ox" height="150px">
                        @else
                            <img src="/storage/foto-profil/defaultuserimage.png" alt="" class="rounded d-block mx-auto mb-4" width="150ox" height="150px">
                        @endif
                        <div class="row mb-3">
                            <div class="col-4">Nama</div>
                            <div class="col-8 font-weight-bold">{{ Auth::user()->nama }}</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-4">Email</div>
                            <div class="col-8 font-weight-bold">{{ Auth::user()->email }}</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-4">Pekerjaan</div>
                            <div class="col-8 font-weight-bold">{{ Auth::user()->pekerjaan }}</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-4">No. HP</div>
                            <div class="col-8 font-weight-bold">{{ Auth::user()->no_hp }}</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-4">Alamat</div>
                            <div class="col-8 font-weight-bold">{{ Auth::user()->alamat }}</div>
                        </div>
                    </div>
                    <div class="modal-footer text-end">
                        <a href="/dashboard/user/{{ Auth::user()->id }}/profile-edit" class="btn btn-primary">Edit</a>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- boostrap js --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!-- Argon Scripts -->
        <!-- Core -->
        <script src="{{ asset('admin/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('admin/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('admin/assets/vendor/js-cookie/js.cookie.js') }}"></script>
        <script src="{{ asset('admin/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
        <script src="{{ asset('admin/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
        <!-- Optional JS -->
        <script src="{{ asset('admin/assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
        <script src="{{ asset('admin/assets/vendor/chart.js/dist/Chart.extension.js') }}"></script>
        
        <!-- Argon JS -->
        <script src="{{ asset('admin/assets/js/argon.js?v=1.1.0') }}"></script>

        {{-- SweetAlert2 --}}
        <script src="{{ asset('admin/assets/js/sweetalert.js') }}"></script>

        {{-- Custom JS --}}
        <script src="{{ asset('admin/assets/js/script.js') }}"></script>
        
        {{-- CK Editor --}}
        <script src="//cdn.ckeditor.com/4.18.0/basic/ckeditor.js"></script>

    </body>
</html>
