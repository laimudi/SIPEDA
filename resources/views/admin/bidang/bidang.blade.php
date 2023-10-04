@extends('layouts.partials.mainLayout')

@section('title', 'Admin | Bidang')

@section('content')

<div class="pagetitle">
    <h1>Bidang</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Bidang</li>
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
                            data-bs-toggle="modal" data-bs-target="#tambahBidang">
                            Tambah Bidang
                        </button></li>
                </ol>
                @include('admin.bidang.modal_tambah')
            </nav>
        </div>
      </div>
      <div class="card-body shadow">
        <h5 class="card-title">Data Bidang</h5>
        <div class="table-responsive">
          <table id="example" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Bidang</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($bidang as $data)
            <tr>
              <th>{{ $loop->iteration }}</th>
              <td>{{ $data->bidang }}</td>
              <td>
                  <button type="button" class="btn btn-outline-warning float-sm-start mb-2 me-2" data-bs-toggle="modal"data-bs-target="#editBidang-{{$data->id}}">
                    <i class="ri-edit-box-line"></i>
                  </button>
                  <form action="{{ route('bidang.destroy', $data->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-outline-danger">
                    <i class="ri-delete-bin-6-line"></i>
                  </button>
                  </form>
              </td>
            </tr>
            @include('admin.bidang.modal_edit')
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
</section>
    
@endsection