<div class="modal fade" id="tambahBidang" tabindex="-1" aria-labelledby="modalTambahBidang" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalTambahBidang">Tambah Bidang</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('bidang.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label for="bidang">Bidang</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="bidang" id="bidang" required>
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