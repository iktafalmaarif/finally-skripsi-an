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
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Janis Pengajuan</th>
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
                                        <td>{{$data->nik}}</td>
                                        <td>{{$data->nama_lengkap}}</td>
                                        <td>{{$data->jenis_surat}}</td>
                                        <td>
                                            <!-- Button modal KTP -->
                                            <button type="button" class="btn btn-primary p-2" data-bs-toggle="modal"
                                                data-bs-target="#ModalKTP">
                                                <i class="fa-solid fa-eye"></i>
                                            </button>
                                            @include('dashboard.modalViewKTP');
                                        </td>
                                        <td>
                                            <!-- Button modal KK -->
                                            <button type="button" class="btn btn-primary p-2" data-bs-toggle="modal"
                                                data-bs-target="#ModalKK">
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
                                            <a  href="/approve/{{$data->id_pengajuan}}" class="btn btn-success p-2" data-id="$data->id_pengajuan" data-nama="$data->nama_lengkap" ><i class="fa-solid fa-check"></i></a>
                                            <a href="/reject/{{$data->id_pengajuan}}"class="btn btn-danger p-2"><i class="fa-solid fa-x"></i></a>
                                            @else
                                            <a style="background-color: grey;" class="btn btn-success p-2" data-id="$data->id_pengajuan" data-nama="$data->nama_lengkap" ><i class="fa-solid fa-check"></i></a>
                                            <a style="background-color: grey;" class="btn btn-danger p-2"><i class="fa-solid fa-x"></i></a>
                                            @endif

                                            @if($data->status == 2)
                                            <a href="convert/{{$data->id_pengajuan}}" class="btn btn-success p-2"><i class="fa-solid fa-print"></i></a>
                                            @else
                                            <a class="btn btn-secondary p-2"><i class="fa-solid fa-print"></i></a>
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
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021. Premium <a
                    href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from
                BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i
                    class="ti-heart text-danger ml-1"></i></span>
        </div>
    </footer>
</div>

<!-- <script>
$('.upprove').click(function() {
    var pengajuanid = $(this).attr('data-id');
    var nama = $(this).attr('data-nama');
    swal({
            title: "Apa kamu yakin ?",
            text: "Kamu akan setujui penyewaan atas nama " +
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
}); -->


</script>
@endsection