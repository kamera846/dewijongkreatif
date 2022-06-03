@extends('layouts.admin')

@section('page-header')
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Galeri</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data Galeri</li>
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
                                <h3 class="mb-0">Data Galeri</h3>
                            </div>
                            <div class="col-6 text-right">
                                <a href="/gallery/create" class="btn btn-sm btn-primary">
                                    <span class="btn-inner--icon"><i class="fas fa-plus"></i></span>
                                    <span class="btn-inner--text">Tambah Data</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    {{-- alerts --}}
                        <div class="px-4">
                            @if (session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <span class="alert-text">{{ session('success') }}</span>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                                @endif
                                                @if(session()->has('error'))
                                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                        <span class="alert-text">{{ session('error') }}</span>
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                @endif
                                            </div>
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th>Foto</th>
                                    <th>Judul</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($galleries as $gallery)
                                <tr>
                                    <td>
                                        <img src="{{ asset('storage/' . $gallery->foto) }}" width="70px" class="rounded">
                                    </td>
                                    <td>
                                        <b>{{ $gallery->judul }}</b>
                                    </td>
                                    <td class="table-actions">
                                        <a href="/gallery/{{ $gallery->id }}/edit" class="table-action" data-toggle="tooltip" data-original-title="Edit galeri">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="/gallery/{{ $gallery->id }}/delete" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button onclick="return confirm('apakah anda ingin menghapus data ini?')" style="background: none; border:none; color:#adb5bd;"><i class="fas fa-trash"></i></button>
                                        </form>
                                        {{-- <a href="#" class="table-action table-action-delete" id="hapus" data-toggle="tooltip" data-original-title="Hapus galeri">
                                            <i class="fas fa-trash"></i>
                                        </a> --}}
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
