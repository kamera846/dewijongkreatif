@extends('layouts.admin')

@section('page-header')
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Menu</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a hrefdashboarddashboard"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data Menu</li>
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
                                <h3 class="mb-0">Data Menu</h3>
                            </div>
                        </div>
                    </div>

                    {{-- isi atribut flashdata sesuai kondisi session untuk menampilan alert berhasil manipulasi(menambahkan, mengubah, menghapus) data, kalo flashdata gagal isi 'gagal' untuk menampilakan alert error --}}
                    <div class="flash-data" data-flashdata="{{ (session()->has('success'))?session('success'):'' }}{{ (session()->has('error'))?session('error'):'' }}"></div>


                    <div class="table-responsive">
                        <table class="table align-items-center table-flush table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th>Title</th>
                                    <th>Slug</th>
                                    {{-- <th>Description</th>
                                    <th>Cover</th> --}}
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($menus as $menu)
                                <tr>
                                    {{-- <td class="table-user" style="object-fit: cover;overflow:hidden !important">
                                    @if ($menu->foto_profil != null)
                                        <img src="{{asset('storage/' . $menu->foto_profil)}}" class="avatar rounded-circle mr-3">
                                    @else
                                        <img src="{{ asset('/storage/foto-profil/defaultmenuimage.png') }}" class="avatar rounded-circle mr-3">
                                    @endif
                                    </td> --}}
                                    <td>
                                        <b>{{ $menu->title }}</b>
                                    </td>
                                    <td>
                                        <b>{{ $menu->slug }}</b>
                                    </td>
                                    {{-- <td>
                                        <span class="font-weight-bold">{{ $menu->description }}</span>
                                    </td>
                                    <td>
                                        <span class="font-weight-bold">{{ $menu->cover }}</span>
                                    </td> --}}
                                    <td class="table-actions">
                                        <a href="/dashboard/menu/{{ $menu->slug }}/edit" class="table-action" data-toggle="tooltip" data-original-title="Edit Menu">
                                            <i class="fas fa-user-edit"></i>
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
