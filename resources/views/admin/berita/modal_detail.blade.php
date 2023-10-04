<div class="modal fade" id="detailBerita-{{$data->id}}" tabindex="-1" aria-labelledby="modalDetailBerita" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalDetailBerita">Detail Berita</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
            <div class="modal-body">
                <div class="col d-flex justify-content-center">
                    <img src="{{ asset('storage/berita-gambar/'.$data->gambar) }}" width="50%" height="50%" alt="">
                </div>
                <div class="row">
                    <div class="my-2 d-flex justify-content-center">
                        <h2 class="card-title fs-5">{{ $data->judul_berita }}</h2>
                    </div>
                    <div class="d-flex justify-content-center">
                        {!! nl2br($data->isi_berita) !!}
                    </div>
                    <div>
                        <h5>{{ $data->tanggal }}</h5>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
      </div>
    </div>
</div>