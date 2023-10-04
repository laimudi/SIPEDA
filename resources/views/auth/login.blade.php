<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

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

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">LOGIN</h5>
                    <p class="text-center small">Masukkan username & password</p>
                  </div>

                  <form action="{{ route('login') }}" method="post" class="row g-3 needs-validation">
                    @csrf
                    <div class="col-12">
                      <label for="username" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <input type="text" name="username" value="{{ old('username')}}" class="form-control" id="username" required>
                        <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                    </div>
                    @if($errors->has('username'))
                            <div class="alert alert-danger">{{ $errors->first('username') }}</div>
                            @endif

                    <div class="col-12">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="password" value="{{ old('password')}}" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>
                    @if($errors->has('password'))
                            <div class="alert alert-danger">{{ $errors->first('password') }}</div>
                            @endif
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Tidak punya akun? <a href="{{ url('/register') }}">Buat Akun</a></p>
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