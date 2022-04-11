
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
                    <a class="navbar-brand" href="dashboard">
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
                                <a class="nav-link {{ ( $judul_halaman === 'Admin | Dashboard' ) ? 'active' : '' }}" href="dashboard">
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
                            <li class="nav-item">
                                <a class="nav-link" href="user">
                                    <i class="ni ni-circle-08 text-green"></i>
                                    <span class="nav-link-text">Data Pengguna</span>
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
            <!-- Header -->
            <div class="header bg-primary pb-6">
                <div class="container-fluid">
                    <div class="header-body">
                        <div class="row align-items-center py-4">
                            <div class="col-lg-6 col-7">
                                <h6 class="h2 text-white d-inline-block mb-0">Dashboard</h6>
                                <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                        <li class="breadcrumb-item"><a href="dashboard"><i class="fas fa-home"></i></a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page content -->
            <div class="container-fluid mt--6">

                {{-- Admin Main Content --}}
                @yield('main-content')

                <!-- Footer -->
                <footer class="footer pt-0">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-6">
                            <div class="copyright text-center text-lg-left text-muted">&copy; 2019 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a></div>
                        </div>
                        <div class="col-lg-6">
                            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/license" class="nav-link" target="_blank">License</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </footer>
            </div>
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
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <img id="image-preview-update" src="admin/assets/img/theme/team-4.jpg" width="200px" height="200px" class="rounded mx-auto d-block mb-2" alt="...">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-6">
                                            <input class="form-control" type="hidden" name="foto" id="foto" value="admin/assets/img/theme/team-4.jpg">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label class="form-control-label" for="nama">Nama</label>
                                    <input class="form-control" type="text" name="nama" id="nama" placeholder="Nama lengkap" value="Umam Alfarizi" readonly>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label class="form-control-label" for="email">Email</label>
                                    <input class="form-control" type="email" name="email" id="email" placeholder="Alamat email" value="alfariziuchiha@gmail.con" readonly>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label class="form-control-label" for="pekerjaan">Pekerjaan</label>
                                    <input class="form-control" type="text" name="pekerjaan" id="pekerjaan" placeholder="Pekerjaan" value="Nganggur" readonly>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label class="form-control-label" for="no-hp">Nomor HP</label>
                                    <input class="form-control" type="number" name="no-hp" id="no-hp" placeholder="Nomor HP" value="081717582871" readonly>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label class="form-control-label" for="alamat">Alamat</label>
                                    <textarea class="form-control" name="alamat" id="alamat" placeholder="Alamat lengkap" readonly>Jln R Sangapati</textarea>
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
        <script src="admin/assets/vendor/jquery/dist/jquery.min.js"></script>
        <script src="admin/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="admin/assets/vendor/js-cookie/js.cookie.js"></script>
        <script src="admin/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
        <script src="admin/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
        <!-- Optional JS -->
        <script src="admin/assets/vendor/chart.js/dist/Chart.min.js"></script>
        <script src="admin/assets/vendor/chart.js/dist/Chart.extension.js"></script>
        <!-- Argon JS -->
        <script src="admin/assets/js/argon.js?v=1.1.0"></script>
        <!-- Demo JS - remove this in your project -->
        <script src="admin/assets/js/demo.min.js"></script>

        {{-- SweetAlert2 --}}
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        {{-- Custom JS --}}
        <script src="admin/assets/js/script.js"></script>

    </body>
</html>
