<div class="modal fade" id="editMahasiswa-{{ $pendaftar->id }}" tabindex="-1" aria-labelledby="modalEditMahasiswa" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalEditMahasiswa">Edit Mahasiswa</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('mahasiswa.update', $pendaftar->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="modal-body">
                
                <div class="mb-3">
                    <label class="form-label" for="status">Status</label>
                    <select class="form-select" name="status" id="status">
                        <option selected>{{ $pendaftar->status }}</option>
                        <option value="Aktif">Aktif</option>
                        <option value="Alumni">Alumni</option>
                        <option value="Berhenti">Berhenti</option>
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