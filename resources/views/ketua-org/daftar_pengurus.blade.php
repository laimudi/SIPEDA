@extends('layouts.partials.mainLayout')

@section('title', 'Ketua Organisasi | Daftar Pengurus')

@section('content')

<div class="pagetitle">
    <h1>Pengurus</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Pengurus</li>
    </ol>
    </nav>
</div>

<section class="section">
    <div class="card">
      <div class="card-body shadow">
          <h5 class="card-title">Daftar Pengurus</h5>
          <div class="table-responsive">
              <table id="example" class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Jabatan</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($pengurus as $data)
                  <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{!! nl2br($data->nm_pengurus) !!}</td>
                    <td>{{ $data->bidang->bidang }}</td>
                  </tr>
                  </tbody>
                  @endforeach
              </table>
          </div>
      </div>
  </div>
</section>
    
@endsection