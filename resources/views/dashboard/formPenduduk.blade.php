@extends('dashboard.layouts.app')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Penduduk</h4>
                        <form action="insert-penduduk" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">NIK (Nomor Induk
                                            Kependudukan)</label>
                                        <input class="form-control" type="text" id="nik" maxlength="16" name="nik"
                                            oninput="validateNIK()" required>
                                        <span id="error-label" style="color: red;"></span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nomor Kartu Keluarga</label>
                                        <input type="text" class="form-control"  maxlength="16"  oninput="validateKK()" name="no_kk" id="no_kk"
                                            placeholder="No KK" required>
                                        <span id="error-kk" style="color: red;"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap"
                                            placeholder="Nama Lengkap" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Tempat Lahir</label>
                                        <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir"
                                            placeholder="Tempat Lahir" required>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                                        <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir"
                                            placeholder="Nama Lengkap" required>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="exampleSelectGender">Janis Kelamin</label>
                                        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" required>
                                            <option selected disabled value="">-- Pilih Jenis Kelamin --</option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleSelectGender">Agama</label>
                                        <select class="form-control" name="agama" id="agama" required>
                                            <option selected disabled value="">-- Pilih Agama --</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Budha">Budha</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleSelectGender">Status Perkawinan</label>
                                        <select class="form-control" name="status_perkawinan" id="status_perkawinan"
                                            required>
                                            <option selected disabled value="">-- Pilih Status Perkawinan --</option>
                                            <option value="Kawin">Kawin</option>
                                            <option value="Belum Kawin">Belum Kawin</option>
                                            <option value="Cerai Hidup">Cerai Hidup</option>
                                            <option value="Cerai Mati">Cerai Mati</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleSelectGender">Pekerjaan</label>
                                        <input type="text" class="form-control" name="pekerjaan">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleSelectGender">Kewarganegaraan</label>
                                        <select class="form-control" name="kewarganegaraan" id="kewarganegaraan"
                                            required>
                                            <option selected disabled value="">-- Pilih Kewarganegaran --</option>
                                            <option value="WNI">WNI</option>
                                            <option value="WNA">WNA</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                                <textarea class="form-control" name="alamat" id="alamat" rows="3" required></textarea>
                            </div>
                            <button class="btn btn-primary"><i class="fa-solid fa-floppy-disk mr-2"></i>SIMPAN</button>
                        </form>
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

<script>
    function validateKK() {
        var kkInput = document.getElementById("no_kk").value;
        var errorLabel = document.getElementById("error-kk");

        if (kkInput.length !== 16) {
            errorLabel.textContent = "No KK harus terdiri dari 16 karakter!";
        } else {
            errorLabel.textContent = "";
        }
    }
</script>


<script>
// Daftar nama kota
var namaKota = ["Jakarta", "Bandung", "Surabaya", "Yogyakarta", "Medan"];

// Mendapatkan elemen select
var selectKota = document.getElementById("kota");

// Mengisi pilihan kota
for (var i = 0; i < namaKota.length; i++) {
    var option = document.createElement("option");
    option.value = namaKota[i].toLowerCase();
    option.text = namaKota[i];
    selectKota.appendChild(option);
}
</script>

@endsection