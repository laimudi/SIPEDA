<div class="modal fade" id="tambahPengumuman" tabindex="-1" aria-labelledby="modalTambahPengumuman" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalTambahPengumuman">Tambah Pengumuman</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('pengumuman.store') }}" method="POST">
            @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label for="pengumuman">Pengumuman</label>
                    <div class="form-group">
                        <textarea class="form-control" name="pengumuman" id="pengumuman" cols="30" rows="10" placeholder="Isi Pengumuman"></textarea>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="tanggal">Tanggal</label>
                    <div class="form-group">
                      <input class="form-control" type="date" id="tanggal" name="tanggal" required>
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