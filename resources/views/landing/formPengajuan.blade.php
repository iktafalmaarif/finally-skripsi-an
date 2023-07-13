<div class="row">
    <div class="col">
        <div class="mb-3">
            <label for="namalengkap" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="namalengkap" value="{{ $user->nama_lengkap ?? '' }}"
                name="namalengkap" placeholder="Nama Lengkap" readonly>
        </div>
    </div>
    <div class="col">
        <div class="mb-3">
            <label for="tempatlahir" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control" id="tempatlahir" value="{{ $user->tempat_lahir ?? '' }}"
                name="tempatlahir" placeholder="Tempat Lahir" readonly>
        </div>
    </div>
    <div class="col">
        <div class="mb-3">
            <label for="tanggallahir" class="form-label">Tanggal Lahir</label>
            <input type="text" class="form-control" id="tanggallahir" value="{{ $user->tanggal_lahir ?? '' }}"
                name="tanggallahir" placeholder="Tanggal Lahir" readonly>
        </div>
    </div>
</div>

<div class="row">
    <div class="col d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="jk" class="form-label">Jenis Kelamin</label>
                    <input type="text" class="form-control" id="jk" name="jk" value="{{ $user->jenis_kelamin ?? '' }}"
                        placeholder="Jenis Kelamin" readonly>
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="agama" class="form-label">Agama</label>
                    <input type="text" class="form-control" id="agama" name="agama" value="{{ $user->agama ?? '' }}"
                        placeholder="Agama" readonly>
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
            <div class="col d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="pekerjaan" class="form-label">Pekerjaan</label>
                            <input type="text" class="form-control" id="pekerjaan" value="{{ $user->pekerjaan ?? '' }}"
                                name="pekerjaan" placeholder="Pekerjaan" readonly>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="kewarganegaraan" class="form-label">Kewarganegaraan</label>
                            <input type="text" class="form-control" id="kewarganegaraan"
                                value="{{ $user->kewarganegaraan ?? '' }}" name="kewarganegaraan"
                                placeholder="Kewarganegaraan" readonly>
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
                    <div class="mb-3">
                        <label for="namalengkap" class="form-label">Pengajuan Jenis Surat</label>
                        <select class="form-select" name="jenis_surat" id="jenis_surat" onchange="showFormSection()"
                            aria-label="Default select example" required>
                            <option selected disabled value="">-- Pilih Jenis Surat --</option>
                            <option value="Surat Keterangan Tidak Mampu">Surat Keterangan Tidak Mampu</option>
                            <option value="Surat Bidikmisi Universitas">Surat Bidikmisi Universitas</option>
                            <option value="Surat Izin Hajatan">Surat Izin Hajatan</option>
                            <option value="Surat Keterangan Belum Menikah">Surat Keterangan Belum Menikah</option>
                            <option value="Surat Keterangan Tinggal Bersama Orang Tua">Surat Keterangan Tinggal Bersama Orang Tua</option>
                            <option value="Surat Keterangan Usaha">Surat Keterangan Usaha</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="mb-3">
                <input type="hidden" name="id_penduduk" value="{{ $user->id_penduduk ?? '' }}" class="form-control"
                    readonly>
            </div>
        </div>
    </div>

    <div class="row">
        <div id="form_section" style="display: none;">
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                     <label class="form-label">Foto KTP</label>
                     <input type="file" name="ktp" class="form-control">
                </div>
             </div>
         <div class="col-6">
            <div class="mb-3">
                <label class="form-label">Foto KK</label>
                <input type="file" name="kk" class="form-control">
            </div>
        </div>
    </div>

            <div id="bidikmisi_section" style="display: none;">
                <div class="row">
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label">Nama Kampus</label>
                                <input type="text" name="nama_kampus" class="form-control" placeholder="Nama Kampus">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label">Alamat Kampus</label>
                                <input type="text" name="alamat_kampus" class="form-control" placeholder="Alamat Kampus" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="domisili_section" style="display: none;">
                <div class="row">
                    <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Keperluan</label>
                                <input type="text" name="keperluan" class="form-control" placeholder="Keperluan">
                            </div>
                        </div>
                </div>
            </div>

            <div id="hajatan_section" style="display: none;">
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label">Mulai Hajatan</label>
                            <input type="date" name="mulai_hajatan" class="form-control" placeholder="Hari Hajatan">
                         </div>
                     </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label">Akhir Hajatan</label>
                            <input type="date" name="akhir_hajatan" class="form-control" placeholder="Hari Hajatan">
                         </div>
                     </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label">Tempat Hajatan</label>
                            <input type="text" name="tempat_hajatan" class="form-control" placeholder="Tempat Hajatan">
                            <div id="emailHelp" class="form-text">Contoh : Area Rumah</div>
                         </div>
                     </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label">Hiburan</label>
                            <input type="text" name="hiburan_hajatan" class="form-control" placeholder="Hiburan">
                            <div id="emailHelp" class="form-text">Contoh : Musik Gambus / Tidak Ada</div>
                         </div>
                     </div>
                </div>
            </div>

            <div id="belumMenikah_section" style="display: none;">
                <div class="row">
                </div>
            </div>


            <div id="belumMemilikiRumah_section" style="display: none;">
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label">Keperluan Tambahan</label>
                            <input type="text" name="keperluan_tambahan" class="form-control" placeholder="Keperluan Tambahan">
                            <div id="emailHelp" class="form-text">Contoh : Untuk Persyaratan Memiliki Rumah di Perumahan X</div>
                        </div>
                    </div>
            </div>

            <div id="tinggalBersama_section" style="display: none;">         
            </div>

            <div id="usaha_section" style="display: none;">
            </div>

            <div id="hargaTanah_section" style="display: none;">
            </div>

        </div>
    </div>

    <button type="submit" id="btn_ajukan" class="btn btn-primary">AJUKAN SURAT</button>

</form>


<script>
    window.onload = function() {
        var idPenduduk = "{{ $user->id_penduduk ?? '' }}";
        var jenisSuratSelect = document.getElementById("jenis_surat");
        var buttonAjukan = document.getElementById("btn_ajukan");

        if (idPenduduk === '') {
            jenisSuratSelect.disabled = true;
            buttonAjukan.disabled = true;
        }
    };
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var jenisSurat = document.getElementById("jenis_surat");
        jenisSurat.addEventListener("change", showFormSection);

        function showFormSection() {
            var selectedOption = jenisSurat.value;
            var formSection = document.getElementById("form_section");
            var domisiliSection = document.getElementById("domisili_section");
            var bidikmisiSection = document.getElementById("bidikmisi_section");
            var hajatanSection = document.getElementById("hajatan_section");
            var belumMenikahSection = document.getElementById("belumMenikah_section");
            var belumMemilikiRumahSection = document.getElementById("belumMemilikiRumah_section");
            var tinggalBersamaSection = document.getElementById("tinggalBersama_section");
            var usahaSection = document.getElementById("usaha_section");
            var hargaTanahSection = document.getElementById("hargaTanah_section");


            domisiliSection.style.display = "none";
            bidikmisiSection.style.display = "none";
            hajatanSection.style.display = "none";
            belumMenikahSection.style.display = "none";
            belumMemilikiRumahSection.style.display = "none";
            tinggalBersamaSection.style.display = "none";
            usahaSection.style.display = "none";
            hargaTanahSection.style.display = "none";

            if (selectedOption === "Surat Keterangan Tidak Mampu") {
                domisiliSection.style.display = "block";
            } else if (selectedOption === "Surat Bidikmisi Universitas") {
                bidikmisiSection.style.display = "block"
            } else if (selectedOption === "Surat Izin Hajatan") {
                hajatanSection.style.display = "block"
            } else if (selectedOption === "Surat Keterangan Belum Menikah") {
                belumMenikahSection.style.display = "block"
            } else if (selectedOption === "Surat Keterangan Belum Memiliki Rumah") {
                belumMemilikiRumahSection.style.display = "block"
            } else if (selectedOption === "Surat Keterangan Tinggal Bersama Orang Tua") {
                tinggalBersamaSection.style.display = "block"
            } else if (selectedOption === "Surat Keterangan Usaha") {
                usahaSection.style.display = "block"
            } else if (selectedOption === "Surat Keterangan Harga Tanah") {
                hargaTanahSection.style.display = "block"
            }

            formSection.style.display = (selectedOption !== "") ? "block" : "none";
        }
    });
</script>
