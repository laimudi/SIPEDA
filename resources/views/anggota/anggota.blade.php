@extends('layouts.partials.mainLayout')

@section('title', 'Anggota | Profil')

@section('content')

<div class="pagetitle">
    <h1>Profil</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item">Mahasiswa</li>
          <li class="breadcrumb-item active">Profil</li>
    </ol>
    </nav>
</div>

<section class="section profile">
    @if (Session::has('tambah'))
      <div class="alert alert-info alert-dismissible fade show" role="alert">
        {{ Session::get('message') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    @if (Session::has('edit'))
      <div class="alert alert-info alert-dismissible fade show" role="alert">
        {{ Session::get('message') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    <div class="row">
      <div class="col-xl-4">
        <div class="card">
          <div class="card-body shadow profile-card pt-4 d-flex flex-column align-items-center">
            @if ($anggota != null)
            <img src="{{ asset('storage/mahasiswa-gambar/'. $anggota->gambar) }}" alt="Profile" class="rounded-circle">
            <h2>{{ $anggota->name }}</h2>
            @endif
          </div>
        </div>
      </div>

      <div class="col-xl-8">
        <div class="card">
            <div class="card-header">
                <div class="col-12 col-md-12 order-md-12 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                              <button type="button" class="btn btn-outline-warning"
                                    data-bs-toggle="modal" data-bs-target="#editAnggota">
                                    Edit Profil
                              </button>
                              @include('anggota.modal_anggota_edit')
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
          <div class="card-body shadow pt-3">
            @if ($anggota != null)
            <div class="tab-content pt-2">
              <div class="tab-pane fade show active profile-overview" id="profile-overview">
                <h5 class="card-title">Profile Details</h5>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Nama Lengkap</div>
                  <div class="col-lg-9 col-md-8"><strong>{{ $anggota->name }}</strong></div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Jenis Kelamin</div>
                  <div class="col-lg-9 col-md-8"><strong>{{ $anggota->gender }}</strong></div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Tempat Lahir</div>
                  <div class="col-lg-9 col-md-8"><strong>{{ $anggota->tmp_lahir }}</strong></div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Tanggal Lahir</div>
                  <div class="col-lg-9 col-md-8"><strong>{{ $anggota->tgl_lahir }}</strong></div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Asal Sekolah</div>
                    <div class="col-lg-9 col-md-8"><strong>{{ $anggota->sekolah }}</strong></div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Universitas</div>
                  <div class="col-lg-9 col-md-8"><strong>{{ $anggota->universitas }}</strong></div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Jurusan</div>
                  <div class="col-lg-9 col-md-8"><strong>{{ $anggota->jurusan }}</strong></div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Fakultas</div>
                  <div class="col-lg-9 col-md-8"><strong>{{ $anggota->fakultas }}</strong></div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Alamat</div>
                  <div class="col-lg-9 col-md-8"><strong>{{ $anggota->alamat }}</strong></div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Provinsi</div>
                  <div class="col-lg-9 col-md-8"><strong>{{ $anggota->provinsi }}</strong></div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Kabupaten/Kota</div>
                  <div class="col-lg-9 col-md-8"><strong>{{ $anggota->kabupaten }}</strong></div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Asal Kecamatan/Desa</div>
                  <div class="col-lg-9 col-md-8"><strong>{{ $anggota->kecamatan }}</strong></div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-4 label">No. Telepon/HP</div>
                    <div class="col-lg-9 col-md-8"><strong>{{ $anggota->telepon }}</strong></div>
                  </div>
              </div>
            </div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </section>
    
@endsection