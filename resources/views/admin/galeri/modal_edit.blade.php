<div class="modal fade" id="editGaleri-{{$data->id}}" tabindex="-1" aria-labelledby="modalEditGaleri" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalEditGaleri">Edit Galeri</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('galeri.update', $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="modal-body">
                <div class="mb-3">
                    <label for="judul_gmbr">Judul Gambar</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="judul_gmbr" id="judul_gmbr" value="{{ $data->judul_gmbr }}" placeholder="Judul Gambar" required>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="gambar">Upload Gambar</label>
                    <div class="form-group">
                      <input class="form-control" type="file" id="gambar" name="gambar" value="{{ $data->gambar }}">
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