
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
                        <img src="admin/assets/img/brand/blue.png" class="navbar-brand-img" alt="..." />
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
                        <hr class="my-3">
                        <h6 class="navbar-heading p-0 text-primary">DATA</h6>
                        <ul class="navbar-nav mb-md-3">
                            <li class="nav-item">
                                <a 
                                class="nav-link {{ ( $judul_halaman === 'Admin | Data Pengguna' || $judul_halaman === 'Admin | Edit Pengguna' || $judul_halaman === 'Admin | Tambah Pengguna' || $judul_halaman === 'Admin | Detail Pengguna' ) ? 'active' : '' }}" 
                                href="/user">
                                    <i class="ni ni-circle-08 text-green"></i>
                                    <span class="nav-link-text">Pengguna</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a 
                                class="nav-link {{ ( $judul_halaman === 'Admin | Data Blog' || $judul_halaman === 'Admin | Edit Postingan' || $judul_halaman === 'Admin | Tambah Postingan' || $judul_halaman === 'Admin | Detail Postingan' ) ? 'active' : '' }}" 
                                href="/blog">
                                    <i class="ni ni-single-copy-04 text-orange"></i>
                                    <span class="nav-link-text">Blog</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a 
                                class="
                                    nav-link {{ ( $judul_halaman === 'Admin | Data Galeri' || $judul_halaman === 'Admin | Edit Galeri' || $judul_halaman === 'Admin | Tambah Galeri' ) ? 'active' : '' }}" 
                                href="/gallery">
                                    <i class="ni ni-album-2 text-red"></i>
                                    <span class="nav-link-text">Galeri</span>
                                </a>
                            </li>
                        </ul>
                        <!-- Divider -->
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
                                <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="media align-items-center">
                                        <div class="media-body mr-2 d-none d-lg-block">
                                            <span class="mb-0 text-sm font-weight-bold">John Snow</span>
                                        </div>
                                        <span class="avatar avatar-sm rounded-circle">
                                            <img alt="Image placeholder" src="admin/assets/img/theme/team-4.jpg" />
                                        </span>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" data-toggle="modal" data-target="#exampleModalCenter" class="dropdown-item">
                                        <i class="ni ni-single-02"></i>
                                        <span>Profil Saya</span>
                                    </a>
                                    <a href="#" id="logout" class="dropdown-item">
                                        <i class="ni ni-user-run"></i>
                                        <span>Keluar</span>
                                    </a>
                                </div>
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

        <!-- Modal Profil -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Profil Saya</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" method="" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <img src="admin/assets/img/theme/team-4.jpg" width="200px" height="200px" class="rounded mx-auto d-block mb-2" alt="...">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-6">
                                            <input class="form-control form-control-alternative" type="hidden" name="foto_profil" id="modal-foto">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label class="form-control-label" for="modal-nama">Nama</label>
                                    <input class="form-control form-control-alternative" type="text" name="nama" id="modal-nama" value="Umam Alfarizi" readonly>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label class="form-control-label" for="modal-email">Alamat Email</label>
                                    <input class="form-control form-control-alternative" type="email" name="email" id="modal-email" value="alfariziuchiha@gmail.con" readonly>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label class="form-control-label" for="modal-pekerjaan">Pekerjaan</label>
                                    <input class="form-control form-control-alternative" type="text" name="pekerjaan" id="modal-pekerjaan" value="Nganggur" readonly>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label class="form-control-label" for="modal-no-hp">Nomor HP</label>
                                    <input class="form-control form-control-alternative" type="number" name="no_hp" id="modal-no-hp" value="081717582871" readonly>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label class="form-control-label" for="modal-alamat">Alamat</label>
                                    <textarea class="form-control form-control-alternative" name="alamat" id="modal-alamat" rows="3" readonly>Jln R Sangapati</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary tutup" data-dismiss="modal">Tutup</button>
                            <button type="button" class="btn btn-primary edit-profil">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

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
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        {{-- Custom JS --}}
        <script src="{{ asset('admin/assets/js/script.js') }}"></script>

    </body>
</html>
