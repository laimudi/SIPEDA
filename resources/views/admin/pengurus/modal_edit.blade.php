<div class="modal fade" id="editPengurus-{{$data->id}}" tabindex="-1" aria-labelledby="modalEditPengurus" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalEditPengurus">Edit Pengurus</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('pengurus.update', $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="modal-body">
                <div class="mb-3">
                  <label for="nm_pengurus">Nama</label>
                  <div class="form-group">
                      <textarea class="form-control" name="nm_pengurus" id="nm_pengurus" cols="30" rows="10" required>{{ $data->nm_pengurus }}</textarea>
                  </div>
                </div>
                <div class="mb-3">
                    <label for="bidang">Bidang</label>
                    <select name="bidang_id" id="bidang" class="form-control" required>
                        <option value="{{ $data->bidang->id }}">{{ $data->bidang->bidang }}</option>
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