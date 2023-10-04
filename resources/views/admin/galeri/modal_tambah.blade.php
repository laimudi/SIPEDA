<div class="modal fade" id="tambahGaleri" tabindex="-1" aria-labelledby="modalTambahGaleri" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalTambahGaleri">Tambah Galeri</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label for="judul_gmbr">Judul Gambar</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="judul_gmbr" id="judul_gmbr" placeholder="Judul Gambar" required>
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