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
                                <li class="breadcrumb-item active" aria-current="page">Data Pengguna</li>
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
            <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <div class="row">
                            <div class="col-6">
                                <h3 class="mb-0">Data Pengguna</h3>
                            </div>
                            <div class="col-6 text-right">
                                <a href="/insert-user" class="btn btn-sm btn-neutral btn-round btn-icon" data-toggle="tooltip" data-original-title="Tambah pengguna">
                                    <span class="btn-inner--icon"><i class="fas fa-user-plus"></i></span>
                                    <span class="btn-inner--text">Tambah Data</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th>Foto</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Pekerjaan</th>
                                    <th>Nomor HP</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="table-user">
                                        <img src="admin/assets/img/theme/team-1.jpg" class="avatar rounded-circle mr-3">
                                    </td>
                                    <td>
                                        <b>John Michael</b>
                                    </td>
                                    <td>
                                        <a href="mailto:jhonmichael@gmail.com" target="_blank" class="font-weight-bold">jhonmichael@gmail.com</a>
                                    </td>
                                    <td>
                                        <span class="font-weight-bold">Nganggur</span>
                                    </td>
                                    <td>
                                        <span class="font-weight-bold">0234567890</span>
                                    </td>
                                    <td class="table-actions">
                                        <a href="/edit-user" class="table-action" data-toggle="tooltip" data-original-title="Edit pengguna">
                                            <i class="fas fa-user-edit"></i>
                                        </a>
                                        <a href="#" id="delete-user" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Hapus pengguna">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        @include('partials.footer-admin')
    </div>
@endsection
