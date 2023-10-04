<div class="modal fade" id="editAnggota" tabindex="-1" aria-labelledby="modalEditAnggota" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalEditAnggota">Edit Anggota</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('anggota.update', $anggota->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="modal-body">
                <div class="mb-3">
                    <label for="name">Nama Lengkap</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="name" id="name" value="{{ $anggota->name }}" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="gender">Jenis Kelamin</label>
                    <select name="gender" id="gender" class="form-control">
                      <option value="{{ $anggota->gender }}">{{ $anggota->gender }}</option>
                      <option value="Laki-Laki">Laki-Laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tmp_lahir">Tempat Lahir</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="tmp_lahir" id="tmp_lahir" value="{{ $anggota->tmp_lahir }}" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <div class="form-group">
                      <input class="form-control" type="date" id="tgl_lahir" name="tgl_lahir" value="{{ $anggota->tgl_lahir }}" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="sekolah">Asal Sekolah</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="sekolah" id="sekolah" value="{{ $anggota->sekolah }}" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="universitas">Universitas</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="universitas" id="universitas" value="{{ $anggota->universitas }}" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="jurusan">Jurusan</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="jurusan" id="jurusan" value="{{ $anggota->jurusan }}" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="fakultas">Fakultas</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="fakultas" id="fakultas" value="{{ $anggota->fakultas }}" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="alamat">Alamat</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="alamat" id="alamat" value="{{ $anggota->alamat }}" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="provinsi">Provinsi</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="provinsi" id="provinsi" value="{{ $anggota->provinsi }}" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="kabupaten">Kabupaten/Kota</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="kabupaten" id="kabupaten" value="{{ $anggota->kabupaten }}" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="kecamatan">Kecamatan/Desa</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="kecamatan" id="kecamatan" value="{{ $anggota->kecamatan }}" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="telepon">No. Telepon/HP</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="telepon" id="telepon" value="{{ $anggota->telepon }}" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="gambar">Upload Gambar</label>
                    <div class="form-group">
                      <input class="form-control" type="file" id="gambar" name="gambar" value="{{ $anggota->gambar }}">
                      <img src="{{ asset('storage/mahasiswa-gambar/'.$anggota->gambar) }}" alt="Profile" class="rounded-circle" width="100px" height="100px">
                    </div>
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