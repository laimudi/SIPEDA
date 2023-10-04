<div class="modal fade" id="tambahPendaftaran" tabindex="-1" aria-labelledby="modalTambahPendaftaran" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalTambahPendaftaran">Tambah Pendaftaran</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('pendaftaran.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="mb-3">
                  <label>Nama Lengkap</label>
                  <div class="form-group">
                    <input type="hidden" class="form-control" name="status" id="status" value="Sedang di proses">
                    <input class="form-control" type="text" value="{{ $user->anggota->name }}">
                  </div>
                </div>
                <div class="mb-3">
                  <label for="gender">Gender</label>
                  <div class="form-group">
                    <input class="form-control" type="text" name="gender" id="gender"  value="{{ $user->anggota->gender }}" required>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="tmp_lahir">Tempat Lahir</label>
                  <div class="form-group">
                    <input class="form-control" type="text" name="tmp_lahir" id="tmp_lahir"  value="{{ $user->anggota->tmp_lahir }}" required>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="tgl_lahir">Tanggal Lahir</label>
                  <div class="form-group">
                    <input class="form-control" type="text" name="tgl_lahir" id="tgl_lahir"  value="{{ $user->anggota->tgl_lahir }}" required>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="agama">Agama</label>
                  <div class="form-group">
                    <input class="form-control" type="text" name="agama" id="agama" required>
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
                  <label for="alamat">Alamat</label>
                  <div class="form-group">
                    <input class="form-control" type="text" name="alamat" id="alamat"  value="{{ $user->anggota->alamat }}" required>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="kecamatan">Kecamatan/Desa</label>
                  <div class="form-group">
                    <input class="form-control" type="text" name="kecamatan" id="kecamatan" value="{{ $anggota->kecamatan }}" required>
                  </div>
                </div>
                <div class="mb-3">
                    <label for="penyakit">Riwayat Penyakit</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="penyakit" id="penyakit" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="telepon_ortu">No. Telepon Ortu</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="telepon_ortu" id="telepon_ortu" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="gambar">Upload Gambar</label>
                    <div class="form-group">
                      <input class="form-control" type="file" id="gambar" name="gambar" required>
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