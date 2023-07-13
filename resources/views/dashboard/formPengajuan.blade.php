@extends('dashboard.layouts.app')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Pengajuan</h4>


                        <div class="row mb-3">
                            <div class="col-5">
                                <form action="/cari-data" method="GET">
                                    <div class="mb-3">
                                        <label for="nik" class="form-label">NIK</label>
                                        <div class="input-group mb-3">
                                            <input type="text" maxlength="16" class="form-control mr-2" name="nik" id="nik"
                                                onclick="validateNIK()" placeholder="Masukan NIK"
                                                aria-label="Recipient's username" aria-describedby="button-addon2">
                                            <button class="btn btn-outline-primary" type="submit"
                                                id="button-addon2">Cari
                                                Data</button>
                                        </div>
                                        <span id="error-label" style="color: red;"></span>
                                    </div>
                                </form>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="namalengkap" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="namalengkap"
                                        value="{{ $user->nama_lengkap ?? '' }}" name="namalengkap"
                                        placeholder="Nama Lengkap" readonly>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="tempatlahir" class="form-label">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tempatlahir"
                                        value="{{ $user->tempat_lahir ?? '' }}" name="tempatlahir"
                                        placeholder="Tempat Lahir" readonly>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="tanggallahir" class="form-label">Tanggal Lahir</label>
                                    <input type="text" class="form-control" id="tanggallahir"
                                        value="{{ $user->tanggal_lahir ?? '' }}" name="tanggallahir"
                                        placeholder="Tanggal Lahir" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col d-flex flex-column justify-content-center" data-aos="fade-up"
                                data-aos-delay="200">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="jk" class="form-label">Jenis Kelamin</label>
                                            <input type="text" class="form-control" id="jk" name="jk"
                                                value="{{ $user->jenis_kelamin ?? '' }}" placeholder="Jenis Kelamin"
                                                readonly>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="agama" class="form-label">Agama</label>
                                            <input type="text" class="form-control" id="agama" name="agama"
                                                value="{{ $user->agama ?? '' }}" placeholder="Agama" readonly>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="statusperkawinan" class="form-label">Status Perkawinan</label>
                                            <input type="text" class="form-control" id="statusperkawinan"
                                                value="{{ $user->status_perkawinan ?? '' }}" name="statusperkawinan"
                                                placeholder="Status Perkawinan" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col d-flex flex-column justify-content-center" data-aos="fade-up"
                                        data-aos-delay="200">
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="pekerjaan" class="form-label">Pekerjaan</label>
                                                    <input type="text" class="form-control" id="pekerjaan"
                                                        value="{{ $user->pekerjaan ?? '' }}" name="pekerjaan"
                                                        placeholder="Pekerjaan" readonly>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="kewarganegaraan"
                                                        class="form-label">Kewarganegaraan</label>
                                                    <input type="text" class="form-control" id="kewarganegaraan"
                                                        value="{{ $user->kewarganegaraan ?? '' }}"
                                                        name="kewarganegaraan" placeholder="Kewarganegaraan" readonly>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="alamat" class="form-label">Alamat</label>
                                                    <input type="text" class="form-control" id="alamat" name="alamat"
                                                        value="{{ $user->alamat ?? '' }}" placeholder="Alamat" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <form action="/pengajuan" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="exampleSelectGender">Jenis Pengajuan Surat</label>
                                            <select class="form-control" name="jenis_surat" id="jenis_surat"
                                                onchange="showFormSection()" required>
                                                <option selected disabled value="">-- Pilih Jenis Surat --</option>
                                                <option value="Surat Keterangan Tidak Mampu">Surat Keterangan Tidak Mampu</option>
                                                <option value="Surat Bidikmisi Universitas">Surat Bidikmisi Universitas</option>
                                                <option value="Surat Keterangan Domisili">Surat Keterangan Domisili</option>
                                                <option value="Surat Kelahiran Baru">Surat Kelahiran Baru</option>
                                                <option value="Surat Keterangan Usaha">Surat Keterangan Usaha</option>
                                                <option value="Surat Keterangan SKCK">Surat Keterangan SKCK</option>
                                                <option value="Surat Kematian">Surat Kematian</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">ID Penduduk</label>
                                        <input type="text" name="id_penduduk" value="{{ $user->id_penduduk ?? '' }}"
                                            class="form-control" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div id="form_section" style="display: none;">
                                    <div id="domisili_section" style="display: none;">
                                        <div class="row pl-3">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label">Foto KTP</label>
                                                    <input type="file" name="ktp" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label">Foto KK</label>
                                                    <input type="file" name="kk" class="form-control" required>
                                                </div>
                                            </div>
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
function showFormSection() {
    var jenisSurat = document.getElementById("jenis_surat").value;
    var formSection = document.getElementById("form_section");
    var domisiliSection = document.getElementById("domisili_section");
    var bidikmisiSection = document.getElementById("bidikmisi_section");

    if (jenisSurat === "Surat Keterangan Tidak Mampu") {
        domisiliSection.style.display = "block";
    } else {
        domisiliSection.style.display = "none";
    }

    if (jenisSurat !== "") {
        formSection.style.display = "block";
    } else {
        formSection.style.display = "none";
    }
}
</script>

<script>
    function validateNIK() {
        var nikInput = document.getElementById("nik").value;
        var errorLabel = document.getElementById("error-label");

        if (nikInput.length !== 16) {
            errorLabel.textContent = "NIK harus terdiri dari 16 karakter!";
        } else {
            errorLabel.textContent = "";
        }
    }
</script>


@endsection