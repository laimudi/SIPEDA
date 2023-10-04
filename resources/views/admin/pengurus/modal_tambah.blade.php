{{-- @extends('layouts.partials.mainLayout')

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
    <div class="card">
      <div class="card-body">
        
        <h5 class="card-title">Input Data Pengurus</h5>

        <form class="row g-3" action="{{ route('pengurus.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nm_pengurus">Nama</label>
                <div class="form-group">
                  <input class="form-control" type="text" name="nm_pengurus" id="nm_pengurus" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="bidang">Bidang</label>
                <select name="bidang_id" id="bidang" class="form-control" required>
                    <option value="">Pilih Jabatan</option>
                    @foreach ($bidang as $data)
                        <option value="{{ $data->id }}">{{ $data->bidang }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </form>
      </div>
    </div>
</section>

@endsection --}}

<div class="modal fade" id="tambahPengurus" tabindex="-1" aria-labelledby="modalTambahPengurus" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalTambahPengurus">Tambah Pengurus</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('pengurus.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label for="nm_pengurus">Nama</label>
                    <div class="form-group">
                        <textarea class="form-control" name="nm_pengurus" id="nm_pengurus" cols="30" rows="10" required></textarea>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="bidang">Bidang</label>
                    <select name="bidang_id" id="bidang" class="form-control" required>
                        <option value="">Pilih Jabatan</option>
                        @foreach ($bidangs as $bidang)
                            <option value="{{ $bidang->id }}">{{ $bidang->bidang }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
      </div>
    </div>
</div>