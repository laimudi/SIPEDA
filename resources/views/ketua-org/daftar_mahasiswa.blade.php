@extends('layouts.partials.mainLayout')

@section('title', 'Ketua Organisasi | Daftar Mahasiswa')

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
        <div class="card-body shadow">
            <h5 class="card-title">Daftar Mahasiswa</h5>
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Perguruan Tinggi/Jurusan</th>
                            <th>Asal Kecamatan/Desa</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pendaftaran as $pendaftar)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $pendaftar->anggota->name }}</td>
                            <td>{{ $pendaftar->universitas }}/{{ $pendaftar->jurusan }}</td>
                            <td>{{ $pendaftar->kecamatan }}/{{ $pendaftar->alamat }}</td>
                            <td></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</section>
    
@endsection