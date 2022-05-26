@extends('layouts.admin')

@section('page-header')
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Blog</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data Postingan</li>
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
                                <h3 class="mb-0">Data Postingan</h3>
                            </div>
                            <div class="col-6 text-right">
                                <a href="/dashboard/blog-create" class="btn btn-sm btn-primary">
                                    <span class="btn-inner--icon"><i class="fas fa-plus"></i></span>
                                    <span class="btn-inner--text">Tambah Data</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    {{-- alerts --}}
                    {{-- isi atribut flashdata sesuai kondisi session untuk menampilan alert berhasil manipulasi(menambahkan, mengubah, menghapus) data, kalo flashdata gagal isi 'gagal' untuk menampilakan alert error --}}
                    <div class="flash-data" data-flashdata="{{ (session()->has('success'))?session('success'):'' }}"></div>
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th>Foto</th>
                                    <th>Judul</th>
                                    <th>Tanggal Dibuat</th>
                                    <th>Penulis</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $blog)
                                <tr>
                                    <td>
                                        <img src="{{ asset('storage/' . $blog->gambar_blog) }}" width="70px" class="rounded">
                                    </td>
                                    <td>
                                        <b>{{ $blog->judul }}</b>
                                    </td>
                                    <td>
                                        <span class="font-weight-bold">{{  $blog->created_at }}</span>
                                    </td>
                                    <td>
                                        <span class="font-weight-bold">{{ $blog->penulis }}</span>
                                    </td>
                                    <td class="table-actions">
                                        <a href="/dashboard/blog-details/{{ $blog->id }}" class="table-action" data-toggle="tooltip" data-original-title="Detail postingan">
                                            <i class="fas fa-info-circle"></i>
                                        </a>
                                        <a href="/dashboard/blog-edit/{{ $blog->id }}" class="table-action" data-toggle="tooltip" data-original-title="Edit postingan">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="/dashboard/blog-delete/{{ $blog->id }}" class="table-action table-action-delete" id="hapus" data-toggle="tooltip" data-original-title="Hapus postingan">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
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
