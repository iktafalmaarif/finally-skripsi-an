<!-- Modal -->
<div class="modal fade" id="ModalKTP{{$data->id_pengajuan}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">KTP</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <img class="img-ktp" src="{{ asset('storage/image/ktp/' . $data->ktp) }}" alt="Gambar" style="width: 400px; height: auto;">
      </div>
    </div>
  </div>
</div>