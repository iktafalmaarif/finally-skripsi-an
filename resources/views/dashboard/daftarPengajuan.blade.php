@extends('dashboard.layouts.app')
@section('content')
@include('sweetalert::alert')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Daftar Pengajuan</h4>
                        <a href="/form-pengajuan" class="btn p-3 btn-primary mb-3">
                            <i class="fa-regular fa-plus mr-2"></i>Tambah Pengajuan
                        </a>
                        <div class="table-responsive">
                            <table id="tabel-data" class="table table-striped table-bordered" width="100%"
                                cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No Surat</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Jenis Pengajuan</th>
                                        <th>KTP</th>
                                        <th>KK</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $data)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>
                                        @if($data->nomor_surat == NULL)
                                            <!-- Button modal KTP -->
                                            <button type="button" class="btn btn-secondary p-2" data-bs-toggle="modal"
                                                data-bs-target="#ModalNo{{$data->id_pengajuan}}">
                                               Edit No Surat
                                            </button>
                                            @include('dashboard.modalEditNo');
                                        @else
                                        {{$data->nomor_surat}}                                
                                        @endif 
                                        </td>    
                                        <td>{{$data->nik}}</td>
                                        <td>{{$data->nama_lengkap}}</td>
                                        <td>{{$data->jenis_surat}}</td>
                                        <td>
                                            <!-- Button modal KTP -->
                                            <button type="button" class="btn btn-primary p-2" data-bs-toggle="modal"
                                                data-bs-target="#ModalKTP{{$data->id_pengajuan}}">
                                                <i class="fa-solid fa-eye"></i>
                                            </button>
                                            @include('dashboard.modalViewKTP');
                                        </td>
                                        <td>
                                            <!-- Button modal KK -->
                                            <button type="button" class="btn btn-primary p-2" data-bs-toggle="modal"
                                                data-bs-target="#ModalKK{{$data->id_pengajuan}}">
                                                <i class="fa-solid fa-eye"></i>
                                            </button>
                                            @include('dashboard.modalViewKK');
                                        </td>

                                        <td>
                                            @if($data->status == NULL)
                                            <label class="badge badge-warning">Pending</label>
                                            @elseif($data->status == '1' )
                                            <label class="badge badge-danger">Ditolak</label>
                                            @elseif($data->status == '2' )
                                            <label class="badge badge-success">Disetujui</label>
                                            @endif
                                        </td>
                                        <td>
                                            @if($data->status == NULL)
                                            <a  class="btn btn-success p-2 upprove" data-id="{{$data->id_pengajuan}}" data-nama="{{$data->nama_lengkap}}" ><i class="fa-solid fa-check"></i></a>
                                            <a  class="btn btn-danger p-2 reject" data-id="{{$data->id_pengajuan}}" data-nama="{{$data->nama_lengkap}}"><i class="fa-solid fa-x"></i></a>
                                            @else
                                            @endif

                                            @if($data->status == 2)
                                            <a href="convert/{{$data->id_pengajuan}}" class="btn btn-success p-2"><i class="fa-solid fa-print"></i></a>
                                            @else
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023 <a href="#" target="_blank"></a></span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Surpemas - Pagiyanten<i class="text-danger ml-1"></i></span>
          </div>
        </footer>
</div>

<script>
$('.upprove').click(function() {
    var pengajuanid = $(this).attr('data-id');
    var nama = $(this).attr('data-nama');
    swal({
            title: "Apa kamu yakin ?",
            text: "Kamu akan upprove pengajuan atas nama " +
                nama +
                " ",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willUpprove) => {
            if (willUpprove) {
                window.location = "/approve/" +
                    pengajuanid + ""
                swal("Data berhasil diupprove", {
                    icon: "success",
                });
            } else {
                swal("Data batal diupprove");
            }
        });
});


$('.reject').click(function() {
    var rejectid = $(this).attr('data-id');
    var nama = $(this).attr('data-nama');
    swal({
            title: "Apa kamu yakin ?",
            text: "Kamu akan tolak pengajuan atas nama " +
                nama +
                " ",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willUpprove) => {
            if (willUpprove) {
                window.location = "/reject/" +
                    rejectid + ""
                swal("Data berhasil ditolak", {
                    icon: "success",
                });
            } else {
                swal("Data batal ditolak");
            }
        });
});


</script>
@endsection