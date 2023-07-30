@extends('dashboard.layouts.app')
@section('content')
@include('sweetalert::alert')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">Data Penduduk</h4>
                            <a href="/form-penduduk" class="btn p-3 btn-primary mb-3">
                                <i class="fa-regular fa-plus mr-2"></i>Tambah Penduduk
                            </a>
                            <div class="table-responsive">
                                <table id="tabel-data" class="table table-striped table-bordered" width="100%"
                                    cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIK</th>
                                            <th>No. Kartu Keluarga</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Agama</th>
                                            <th>Pekerjaan</th>
                                            <th>Status Perkawinan</th>
                                            <th>Alamat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($penduduk as $data)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$data->nik}}</td>
                                            <td>{{$data->no_kk}}</td>
                                            <td>{{$data->nama_lengkap}}</td>
                                            <td>{{$data->jenis_kelamin}}</td>
                                            <td>{{$data->agama}}</td>
                                            <td>{{$data->pekerjaan}}</td>
                                            <td>{{$data->status_perkawinan}}</td>
                                            <td>{{$data->alamat}}</td>
                                            <td>
                                                <a href="/edit-penduduk/{{$data->id_penduduk}}" class="btn btn-warning p-2" ><i class="fa-solid fa-pen-to-square"></i></a>
                                                <a class="btn btn-danger destroy p-2" data-id="{{$data->id_penduduk}}" data-nama="{{$data->nama_lengkap}}" ><i class="fa-solid fa-trash"></i></a>
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
$('.destroy').click(function() {
    var pendudukid = $(this).attr('data-id');
    var nama = $(this).attr('data-nama');
    swal({
            title: "Apa kamu yakin ?",
            text: "Kamu akan hapus data atas nama " +
                nama +
                " ",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willUpprove) => {
            if (willUpprove) {
                window.location = "/delete-penduduk/" +
                    pendudukid + ""
                swal("Data berhasil hapus", {
                    icon: "success",
                });
            } else {
                swal("Data batal dihapus");
            }
        });
});

</script>
@endsection