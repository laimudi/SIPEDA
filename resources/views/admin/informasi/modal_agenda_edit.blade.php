<div class="modal fade" id="editAgenda-{{$data->id}}" tabindex="-1" aria-labelledby="modalEditAgenda" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalEditAgenda">Edit Agenda</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('agenda.update', $data->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="modal-body">
                <div class="mb-3">
                    <label for="nm_agenda">Agenda</label>
                    <div class="form-group">
                      <input class="form-control" type="text" id="nm_agenda" name="nm_agenda" value="{{ $data->nm_agenda }}" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="tempat">Tempat</label>
                    <div class="form-group">
                      <input class="form-control" type="text" id="tempat" name="tempat" value="{{ $data->tempat }}" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="tanggal">Tanggal</label>
                    <div class="form-group">
                      <input class="form-control" type="date" id="tanggal" name="tanggal" value="{{ $data->tanggal }}" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="jam">Jam</label>
                    <div class="form-group">
                      <input class="form-control" type="time" id="jam" name="jam" value="{{ $data->jam }}" required>
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