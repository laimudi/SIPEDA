@extends('layouts.partials.mainLayout')

@section('title', 'Admin | Data Mahasiswa')

@section('content')

<div class="pagetitle">
    <h1>Data Mahasiswa</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Data Mahasiswa</li>
    </ol>
    </nav>
</div>

<section class="section">
    <div class="card">
        <div class="card-header">
            <div class="col-12 col-md-12 order-md-12 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a class="btn btn-outline-danger" data-placement="top" href="{{ route('cetak.pdf') }}" target="_blank">
                                <i class="bi bi-file-earmark-pdf-fill">Cetak PDF</i>
                            </a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="card-body shadow">
            <h5 class="card-title">Data Mahasiswa</h5>
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Perguruan Tinggi/Jurusan</th>
                            <th>Asal Kecamatan/Desa</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pendaftaran as $pendaftar)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $pendaftar->anggota->name }}</td>
                            <td>{{ $pendaftar->universitas }}/{{ $pendaftar->jurusan }}</td>
                            <td>{{ $pendaftar->kecamatan }}/{{ $pendaftar->alamat }}</td>
                            <td>{{ $pendaftar->status }}</td>
                            <td>
                                <button type="button" class="btn btn-outline-warning float-sm-start mb-2 me-2" data-bs-toggle="modal"data-bs-target="#editMahasiswa-{{$pendaftar->id}}">
                                    <i class="ri-edit-box-line"></i>
                                </button>
                            </td>
                        </tr>
                        @include('admin.mahasiswa.modal_mahasiswa_edit')
                        @endforeach
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</section>
    
@endsection