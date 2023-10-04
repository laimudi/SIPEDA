 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center justify-content-between">
  
      <h1 class="logo"><a href="/"><img src="{{ asset('assets/img/kmi-balut.png') }}" alt=""></a></h1>
  
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link scrollto" href="{{ url('sejarah') }}">Sejarah</a></li>
              <li><a href="#tujuan">Tujuan</a></li>
              @if ($profil != null)
              <li><a href="{{ asset('storage/profil-pdf/pdf-org/'.$profil->struktur_org) }}">Struktur Organisasi</a></li>
              @endif
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#informasi">Informasi</a></li>
          <li><a class="nav-link scrollto" href="#galeri">Galeri</a></li>
          <li><a class="nav-link scrollto " href="#berita">Berita</a></li>
          <li><a class="getstarted" href="{{ route('login') }}">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
  
    </div>
  </header>