@extends('layouts.partials.mainLayout')

@section('title', 'Anggota | Pendftaran')

@section('content')

<div class="pagetitle">
    <h1>Pendaftaran</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item">Mahasiswa</li>
          <li class="breadcrumb-item active">Pendaftaran</li>
    </ol>
    </nav>
</div>

<section class="section">
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
  
  {{-- {{ $user->anggota }} --}}
  <div class="row">
    <div class="col-xl-4">
        <div class="card">
          <div class="card-body shadow profile-card pt-4 d-flex flex-column align-items-center">
            @if ($anggota->pendaftaran !== null)
            <img src="{{ asset('storage/pendaftaran-gambar/'. $user->anggota->pendaftaran->gambar) }}" alt="Profile" class="rounded-circle" width="200" height="200">
            <h2>{{ $user->anggota->name }}</h2>
            <h6>Status Keanggotaan: {{ $user->anggota->pendaftaran->status }}</h6>
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
                              @if ($anggota->pendaftaran == null)
                              <button type="button" class="btn btn-outline-primary"
                                  data-bs-toggle="modal" data-bs-target="#tambahPendaftaran">
                                  Daftar
                              </button>
                              @include('anggota.modal_pendaftaran_tambah')
                              @else
                              <a class="btn btn-outline-danger" data-placement="top" href="{{ route('cetak.formulir', $anggota->id) }}" target="_blank">
                                <i class="bi bi-file-earmark-pdf-fill">Cetak Formulir</i>
                              </a>   
                              @endif
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="card-body shadow pt-3">
                <div class="tab-content pt-2">
                  <div class="tab-pane fade show active profile-overview" id="profile-overview">
                    <h5 class="card-title">Pendaftaran</h5>
                    @if ($anggota->pendaftaran !== null)
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Jenis Kelamin</div>
                      <div class="col-lg-9 col-md-8"><strong>{{ $user->anggota->pendaftaran->gender }}</strong></div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Tempat Lahir</div>
                      <div class="col-lg-9 col-md-8"><strong>{{ $user->anggota->pendaftaran->tmp_lahir }}</strong></div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Tanggal Lahir</div>
                      <div class="col-lg-9 col-md-8"><strong>{{ $user->anggota->pendaftaran->tgl_lahir }}</strong></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Agama</div>
                        <div class="col-lg-9 col-md-8"><strong>{{ $user->anggota->pendaftaran->agama ?? '' }}</strong></div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Universitas</div>
                      <div class="col-lg-9 col-md-8"><strong>{{ $user->anggota->pendaftaran->universitas }}</strong></div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Jurusan</div>
                      <div class="col-lg-9 col-md-8"><strong>{{ $user->anggota->pendaftaran->jurusan }}</strong></div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Kecamatan</div>
                      <div class="col-lg-9 col-md-8"><strong>{{ $user->anggota->pendaftaran->kecamatan }}</strong></div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Alamat</div>
                      <div class="col-lg-9 col-md-8"><strong>{{ $user->anggota->pendaftaran->alamat }}</strong></div>
                    </div>
                    <div class="row"> 
                        <div class="col-lg-3 col-md-4 label">Riwayat Penyakit</div>
                        <div class="col-lg-9 col-md-8"><strong>{{ $user->anggota->pendaftaran->penyakit  ?? '' }}</strong></div>
                    </div>
                    <div class="row">
                          <div class="col-lg-3 col-md-4 label">No. Telepon/HP Orang Tua</div>
                          <div class="col-lg-9 col-md-8"><strong>{{ $user->anggota->pendaftaran->telepon_ortu ?? '' }}</strong></div>
                    </div>
                    @endif
                  </div>
                </div>
              </div>
        </div>
    </div>
  </div>
</section>

@endsection