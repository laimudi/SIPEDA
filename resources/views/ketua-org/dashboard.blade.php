@extends('layouts.partials.mainLayout')

@section('title', 'Ketua Organisasi | Dashboard')

@section('content')

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        </nav>
    </div>

    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-8">
          <div class="row">

            <!-- Data Mahasiswa -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Data Mahasiswa</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $pendaftaran }}</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Data Pengurus -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">Data Pengurus</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $pengurus }}</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

    <section>
      <div class="card">
        <div class="card-body shadow">
          <h5 class="card-title">Data Profil</h5>
          <ul class="nav nav-tabs d-flex" id="myTabjustified" role="tablist">
              <li class="nav-item flex-fill" role="presentation">
                <button class="nav-link w-100 active" id="sejarah-tab" data-bs-toggle="tab" data-bs-target="#sejarah-justified" type="button" role="tab" aria-controls="sejarah" aria-selected="true">Sejarah</button>
              </li>
              <li class="nav-item flex-fill" role="presentation">
                <button class="nav-link w-100" id="tujuan-tab" data-bs-toggle="tab" data-bs-target="#tujuan-justified" type="button" role="tab" aria-controls="tujuan" aria-selected="false">Tujuan</button>
              </li>
              <li class="nav-item flex-fill" role="presentation">
                <button class="nav-link w-100" id="tentang-tab" data-bs-toggle="tab" data-bs-target="#tentang-justified" type="button" role="tab" aria-controls="tentang" aria-selected="false">Tentang</button>
              </li>
              <li class="nav-item flex-fill" role="presentation">
                <button class="nav-link w-100" id="struktur_org-tab" data-bs-toggle="tab" data-bs-target="#struktur_org-justified" type="button" role="tab" aria-controls="struktur_org" aria-selected="false">Struktur Organisasi</button>
              </li>
          </ul>
          {{-- @foreach ($profil as $data) --}}
          @if ($profil != null)
          <div class="tab-content pt-4" id="myTabjustifiedContent" style="text-align: justify">
            <div class="tab-pane fade show active d-flex justify-content" id="sejarah-justified" role="tabpanel" aria-labelledby="sejarah-tab">
              {!!  nl2br($profil->sejarah) !!}
            </div>
            <div class="tab-pane fade d-flex justify-content" id="tujuan-justified" role="tabpanel" aria-labelledby="tujuan-tab">
              {!!  nl2br($profil->tujuan) !!}
            </div>
            <div class="tab-pane fade d-flex justify-content" id="tentang-justified" role="tabpanel" aria-labelledby="tentang-tab">
              {!!  nl2br($profil->tentang) !!}
            </div>
            <div class="tab-pane fade d-flex justify-content" id="struktur_org-justified" role="tabpanel" aria-labelledby="struktur_org-tab">
              {{-- <iframe src="{{ asset('storage/profil-pdf/pdf-org'.$profil->struktur_org) }}" align="top" height="620" width="100%" scrolling="auto" frameborder="0"></iframe> --}}
              {{-- <embed src="{{ asset('storage/profil-pdf/pdf-org/'.$profil->struktur_org) }}" type="application/pdf" width="100%" height="600px" /> --}}
                <a href="{{ asset('storage/profil-pdf/pdf-org/'.$profil->struktur_org) }}">Download ORG</a>
            </div>
          </div>
          @endif
       
          {{-- @endforeach --}}
        </div>
      </div>
    </section>
    
@endsection