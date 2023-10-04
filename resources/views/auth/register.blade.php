<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    @include('layouts.partials.style')
</head>
<body>


    <main>
        <div class="container">
    
          <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
    
                  <div class="d-flex justify-content-center py-4">
                    <a href="{{ url('/') }}" class="logo d-flex align-items-center w-auto">
                      <img src="{{ asset('assets/img/kmib.png') }}" alt="">
                      <span class="d-none d-lg-block">KMI-BALUT</span>
                    </a>
                  </div><!-- End Logo -->
    
                  <div class="card shadow mb-3">
    
                    <div class="card-body">
    
                      <div class="pt-4 pb-2">
                        <h5 class="card-title text-center pb-0 fs-4">Buat Akun</h5>
                      </div>
    
                      <form action="{{ route('register') }}" method="POST" class="row g-3 needs-validation" novalidate>
                        @csrf
                          <div class="mb-3">
                              <label for="name">Name Lengkap</label>
                              <div class="form-group">
                                <input class="form-control" type="text" name="name" id="name" required>
                              </div>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="gender">Jenis Kelamin</label>
                            <select class="form-select" name="gender" id="gender">
                                <option selected>Jenis Kelamin</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuna</option>
                            </select>
                          </div>
                          <div class="mb-3">
                              <label for="tmp_lahir">Tempat Lahir</label>
                              <div class="form-group">
                                <input class="form-control" type="text" name="tmp_lahir" id="tmp_lahir" required>
                              </div>
                          </div>
                          <div class="mb-3">
                              <label for="tgl_lahir">Tanggal Lahir</label>
                              <div class="form-group">
                                <input class="form-control" type="date" id="tgl_lahir" name="tgl_lahir" required>
                              </div>
                          </div>
                          <div class="mb-3">
                              <label for="sekolah">Asal Sekolah</label>
                              <div class="form-group">
                                <input class="form-control" type="text" name="sekolah" id="sekolah" required>
                              </div>
                          </div>
                          <div class="mb-3">
                              <label for="universitas">Universitas</label>
                              <div class="form-group">
                                <input class="form-control" type="text" name="universitas" id="universitas" required>
                              </div>
                          </div>
                          <div class="mb-3">
                              <label for="jurusan">Jurusan</label>
                              <div class="form-group">
                                <input class="form-control" type="text" name="jurusan" id="jurusan" required>
                              </div>
                          </div>
                          <div class="mb-3">
                              <label for="fakultas">Fakultas</label>
                              <div class="form-group">
                                <input class="form-control" type="text" name="fakultas" id="fakultas" required>
                              </div>
                          </div>
                          <div class="mb-3">
                              <label for="alamat">Alamat</label>
                              <div class="form-group">
                                <input class="form-control" type="text" name="alamat" id="alamat" required>
                              </div>
                          </div>
                          <div class="mb-3">
                              <label for="provinsi">Provinsi</label>
                              <div class="form-group">
                                <input class="form-control" type="text" name="provinsi" id="provinsi" required>
                              </div>
                          </div>
                          <div class="mb-3">
                              <label for="kabupaten">Kabupaten/Kota</label>
                              <div class="form-group">
                                <input class="form-control" type="text" name="kabupaten" id="kabupaten" required>
                              </div>
                          </div>
                          <div class="mb-3">
                              <label for="kecamatan">Kecamatan/Desa</label>
                              <div class="form-group">
                                <input class="form-control" type="text" name="kecamatan" id="kecamatan" required>
                              </div>
                          </div>
                          <div class="mb-3">
                              <label for="telepon">No. Telepon/HP</label>
                              <div class="form-group">
                                <input class="form-control" type="text" name="telepon" id="telepon" required>
                              </div>
                          </div>
    
                        <div class="col-12">
                          <label for="username" class="form-label">Username</label>
                          <div class="input-group has-validation">
                            <input type="text" name="username" class="form-control" id="username" required>
                          </div>
                        </div>
    
                        <div class="col-12">
                          <label for="password" class="form-label">Password</label>
                          <input type="password" name="password" class="form-control" id="password" required>
                        </div>

                        <div class="col-12">
                          <button class="btn btn-primary w-100" type="submit">Simpan</button>
                        </div>
                        <div class="col-12">
                          <p class="small mb-0">Sudah memiliki akun? <a href="{{ url('/login') }}">Log in</a></p>
                        </div>
                      </form>
    
                    </div>
                  </div>
    
                </div>
              </div>
            </div>
    
          </section>
    
        </div>
      </main><!-- End #main -->

    
</body>
</html>