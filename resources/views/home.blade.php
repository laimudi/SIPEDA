@extends('layouts.landingpage-pengguna.app')

@section('title', 'Home')
@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container position-relative">
      <h1>Selamat Datang Di Website KMI-BALUT</h1>
      <h2>Keluarga Mahasiswa Indonesia Banggai Laut (KMI-BALUT) Provinsi Gorontalo</h2>
    </div>
  </section>
  <!-- End Hero -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="section-title">
        <h2>Sekilas KMI-BALUT</h2>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <img src="{{ asset('assets/img/kmib.png') }}" class="img-fluid" width="300" height="300" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 mt-5">
          <h3>Keluarga Mahasiswa Indonesia Banggai Laut (KMI-BALUT) Provinsi Gorontalo</h3>
          @if ($profil != null)
          <h5 class="mt-5 justify-content">{!!  nl2br($profil->tentang) !!}</h5>
          @endif
        </div>
      </div>
    </div>
  </section>

  <!-- ======= Profil Section ======= -->
  <section id="tujuan" class="sejarah">
    <div class="container">
      <div class="section-title mt-5">
        <h2>Tujuan KMI-BALUT</h2>
        @if ($profil != null)
        <h5>{!!  nl2br($profil->tujuan) !!}</h5>
        @endif
      </div>
    </div>
  </section>

  <!-- ======= Informasi Section ======= -->
  <section id="informasi" class="services">
    <div class="container">
      <div class="section-title">
        <h2>Informasi</h2>
      </div>

      <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-header">
              <h4>Pengumuman</h4>
            </div>
            <div class="card-body">
              @foreach ($pengumuman as $data)
              <p class="card-text" style="text-align: justify; font-style: italic; color:red;"><strong>{!! nl2br($data->pengumuman) !!}</strong></p>
              <p class="card-text">{{ $data->tanggal }}</p>
              @endforeach
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-header">
              <h4>Agenda</h4>
            </div>
            <div class="card-body">
              @foreach ($agenda as $data)
              <table>
                <tr>
                  <td>Agenda</td>
                  <td>:</td>
                  <td><strong>{{ $data->nm_agenda }}</strong></td>
                </tr>
                <tr>
                  <td>Tempat</td>
                  <td>:</td>
                  <td><strong>{{ $data->tempat }}</strong></td>
                </tr>
                <tr>
                  <td>Tanggal</td>
                  <td>:</td>
                  <td><strong>{{ $data->tanggal }}</strong></td>
                </tr>
                <tr>
                  <td>Jam</td>
                  <td>:</td>
                  <td><strong>{{ $data->jam }}</strong></td>
                </tr>
              </table>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ======= Galeri Section ======= -->
  <section id="galeri" class="portfolio">
    <div class="container">
      <div class="section-title">
        <h2>Galeri</h2>
      </div>
      <div class="row portfolio-container">
        @foreach ($galeri as $data)
        <div class="col-lg-3 col-md-7 portfolio-item filter-app">
          <img src="{{ asset('storage/galeri-gambar/'.$data->gambar) }}" class="img-fluid">
          <div class="portfolio-info">
            <p>{{ $data->judul_gmbr }}</p>
            <a href="{{ asset('storage/galeri-gambar/'.$data->gambar) }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="{{ $data->judul_gmbr }}"><i class="bx bx-plus"></i></a>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- ======= Berita Section ======= -->
  <section id="berita" class="pricing">
    <div class="container">
      <div class="section-title">
        <h2>Berita</h2>
      </div>
      <div class="row">
        @foreach ($berita as $data)
        <div class="col-lg-3 col-md-6">
          <div class="card" style="width: 18rem;">
            <img src="{{ asset('storage/berita-gambar/'. $data->gambar) }}" class="card-img-top" width="200" height="200">
            <div class="card-body">
              <p class="card-title"><strong>{{ $data->judul_berita }}</strong></p>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#bacaberita-{{ $data->id }}">
                Baca Berita
              </button>              
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    {{-- Modal Baca Berita --}}
    @foreach ($berita as $data)
    <div class="modal fade" id="bacaberita-{{ $data->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="bacaberitaLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="bacaberitaLabel">Berita</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <div class="col d-flex justify-content-center">
                <img src="{{ asset('storage/berita-gambar/'.$data->gambar) }}" width="50%" height="50%" alt="">
              </div>
              <div class="row">
                  <div class="d-flex justify-content">
                      <p class="card-title"><strong>{{ $data->judul_berita }}</strong></p>
                  </div>
                  <div class="d-flex justify-content">
                      {!! nl2br($data->isi_berita) !!}
                  </div>
                  <div>
                      <p><strong>{{ $data->tanggal }}</strong></p>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
    {{-- End --}}
  </section>

@endsection