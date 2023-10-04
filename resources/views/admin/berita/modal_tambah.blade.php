<div class="modal fade" id="tambahBerita" tabindex="-1" aria-labelledby="modalTambahBerita" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalTambahBerita">Tambah Berita</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label for="judul_berita">Judul Berita</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="judul_berita" id="judul_berita" placeholder="Judul Berita" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="gambar">Upload Gambar</label>
                    <div class="form-group">
                      <input class="form-control" type="file" id="gambar" name="gambar" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="tanggal">Tanggal</label>
                    <div class="form-group">
                      <input class="form-control" type="date" id="tanggal" name="tanggal" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="isi_berita">Isi Berita</label>
                    <div class="form-group">
                        <textarea class="form-control" name="isi_berita" id="isi_berita" cols="30" rows="10" placeholder="Isi Berita"></textarea>
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