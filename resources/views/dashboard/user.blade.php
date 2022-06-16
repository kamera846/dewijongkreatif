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
                                <li class="breadcrumb-item"><a hrefdashboarddashboard"><i class="fas fa-home"></i></a></li>
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
                                <a href="/dashboard/user/create" class="btn btn-sm btn-primary">
                                    <span class="btn-inner--icon"><i class="fas fa-user-plus"></i></span>
                                    <span class="btn-inner--text">Tambah Data</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- isi atribut flashdata sesuai kondisi session untuk menampilan alert berhasil manipulasi(menambahkan, mengubah, menghapus) data, kalo flashdata gagal isi 'gagal' untuk menampilakan alert error --}}
                    <div class="flash-data" data-flashdata="{{ (session()->has('success'))?session('success'):'' }}{{ (session()->has('error'))?session('error'):'' }}"></div>


                    <div class="table-responsive">
                        <table class="table align-items-center table-flush table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th>Foto</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>alamat</th>
                                    <th>Pekerjaan</th>
                                    <th>Nomor HP</th>
                                    <th>Role</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                @if ($user->role !== 'super-admin')
                                <tr>
                                    <td class="table-user" style="object-fit: cover;overflow:hidden !important">
                                    @if ($user->foto_profil != null)
                                        <img src="{{asset('storage/' . $user->foto_profil)}}" class="avatar rounded-circle mr-3">
                                    @else
                                        <img src="{{ asset('/storage/foto-profil/defaultuserimage.png') }}" class="avatar rounded-circle mr-3">
                                    @endif
                                    </td>
                                    <td>
                                        <b>{{ ucwords($user->nama) }}</b>
                                    </td>
                                    <td>
                                        <a href="mailto:jhonmichael@gmail.com" target="_blank" class="font-weight-bold">{{ $user->email }}</a>
                                    </td>
                                    <td>
                                        <span class="font-weight-bold">{{ $user->alamat }}</span>
                                    </td>
                                    <td>
                                        <span class="font-weight-bold">{{ ucwords($user->pekerjaan) }}</span>
                                    </td>
                                    <td>
                                        <span class="font-weight-bold">{{ $user->no_hp }}</span>
                                    </td>
                                    <td>
                                        <span class="font-weight-bold">{{ $user->role }}</span>
                                    </td>
                                    <td class="table-actions">
                                        {{-- <a href="/dashboard/user/{{ $user->id }}/detail" class="table-action" data-toggle="tooltip" data-original-title="Detail pengguna">
                                            <i class="fas fa-info-circle"></i>
                                        </a> --}}
                                        <a href="/dashboard/user/{{ $user->id }}/edit" class="table-action" data-toggle="tooltip" data-original-title="Edit pengguna">
                                            <i class="fas fa-user-edit"></i>
                                        </a>
                                        <form action="/dashboard/user/{{ $user->id }}/delete" method="post" class="p-0 m-0 d-inline" id="form">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" id="hapus" class="table-action table-action-delete border-0 p-0 m-0" data-toggle="tooltip" data-original-title="Hapus pengguna" style="background:none;">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endif
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
