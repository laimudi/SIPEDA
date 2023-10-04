<div class="modal fade" id="editTextFor" tabindex="-1" aria-labelledby="modalEditTextFor" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalEditTextFor">Edit Text Formulir</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('textfor.update', $textfor->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="modal-body">
                <div class="mb-3">
                    <label for="text_formulir">Text Formulir</label>
                    <div class="form-group">
                        <textarea class="form-control" name="text_formulir" id="text_formulir" cols="30" rows="10">{{ $textfor->text_formulir }}</textarea>
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

