@extends('layouts.partials.mainLayout')

@section('title', 'Admin | Pengurus')

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

    <div class="card">
      <div class="card-header">
          <div class="col-12 col-md-12 order-md-12 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><button type="button" class="btn btn-outline-primary"
                        data-bs-toggle="modal" data-bs-target="#tambahPengurus">
                        Tambah Pengurus
                    </button></li>
            </ol>
            @include('admin.pengurus.modal_tambah')
            </nav>
          </div>
      </div>
      <div class="card-body shadow">
          <h5 class="card-title">Data Pengurus</h5>
          <div class="table-responsive">
              <table id="example" class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Jabatan</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($pengurus as $data)
                  <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{!! nl2br($data->nm_pengurus) !!}</td>
                    <td>{{ $data->bidang->bidang }}</td>
                    <td>
                        <button type="button" class="btn btn-outline-warning float-sm-start mb-2 me-2" data-bs-toggle="modal"data-bs-target="#editPengurus-{{$data->id}}">
                          <i class="ri-edit-box-line"></i>
                        </button>
                        <form action="{{ route('pengurus.destroy', $data->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-outline-danger">
                          <i class="ri-delete-bin-6-line"></i>
                        </button>
                        </form>
                    </td>
                  </tr>
                  </tbody>
                  @include('admin.pengurus.modal_edit')
                  @endforeach
              </table>
          </div>
      </div>
  </div>
</section>
    
@endsection