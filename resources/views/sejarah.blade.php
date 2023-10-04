<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sejarah</title>

    @include('layouts.landingpage-pengguna.style')
</head>
<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-transparent">
        <div class="container d-flex align-items-center justify-content-between">
    
            <h1 class="logo"><a href="/"><img src="{{ asset('assets/img/kmi-balut.png') }}" alt=""></a></h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="/">Home</a></li>
                    <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
                      <ul>
                        <li><a class="nav-link scrollto active" href="{{ url('sejarah') }}">Sejarah</a></li>
                        <li><a href="/#tujuan">Tujuan</a></li>
                        @if ($profil != null)
                        <li><a href="{{ asset('storage/profil-pdf/pdf-org/'.$profil->struktur_org) }}">Struktur Organisasi</a></li>
                        @endif
                      </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="/#informasi">Informasi</a></li>
                    <li><a class="nav-link scrollto" href="/#galeri">Galeri</a></li>
                    <li><a class="nav-link scrollto " href="/#berita">Berita</a></li>
                    <li><a class="getstarted" href="{{ route('login') }}">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
        <div class="container position-relative">
            <h1>Sejarah KMI-BALUT</h1>
        </div>
    </section>
    <!-- End Hero -->
    <section id="about" class="about">
        <div class="container">
            <div class="section-title">
                <h2>Sejarah KMI-BALUT</h2>
            </div>
          <div class="row">
            <div class="d-flex justify-center">
            @if ($profil != null)
              <h5 class="mt-5" style="text-align: justify">{!! nl2br($profil->sejarah) !!}</h5>
            @endif
            </div>
          </div>
        </div>
    </section>
  
    @include('layouts.landingpage-pengguna.footer')
      
  
    @include('layouts.landingpage-pengguna.script')
    
</body>
</html>