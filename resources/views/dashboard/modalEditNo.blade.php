<!-- Modal -->
<div class="modal fade" id="ModalNo{{$data->id_pengajuan}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit No Surat</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/edit-surat/{{$data->id_pengajuan}}" method="post">
          @csrf
          <div class="mb-3">
            <input type="text" class="form-control" name="nomor_surat"  value="470 / {{ date('m') }} / 0{{$data->id_pengajuan}}/ VI / {{ date('Y') }}" >
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary p-3">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>