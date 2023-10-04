@extends('layouts.partials.mainLayout')

@section('title', 'Admin | Informasi Agenda')

@section('content')
    
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
                            data-bs-toggle="modal" data-bs-target="#tambahAgenda">
                            Tambah Data
                        </button></li>
                </ol>
                @include('admin.informasi.modal_agenda_tambah')
            </nav>
        </div>
      </div>
      <div class="card-body shadow">
        <h5 class="card-title">Data Agenda</h5>
        <div class="table-responsive">
          <table id="example" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Agenda</th>
                <th>Tempat</th>
                <th>Tanggal</th>
                <th>Jam</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($agenda as $data)
            <tr>
              <th>{{ $loop->iteration }}</th>
              <td>{{ $data->nm_agenda }}</td>
              <td>{{ $data->tempat }}</td>
              <td>{{ $data->tanggal }}</td>
              <td>{{ $data->jam }}</td>
              <td>
                  <button type="button" class="btn btn-outline-warning float-sm-start mb-2 me-2" data-bs-toggle="modal"data-bs-target="#editAgenda-{{$data->id}}">
                    <i class="ri-edit-box-line"></i>
                  </button>
                  <form action="{{ route('agenda.destroy', $data->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-outline-danger">
                    <i class="ri-delete-bin-6-line"></i>
                  </button>
                  </form>
              </td>
            </tr>
            @include('admin.informasi.modal_agenda_edit') 
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
</section>

@endsection