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
                            <option value="Surat Keterangan Domisili">Surat Keterangan Domisili</option>
                            <option value="Surat Keterangan Belum Menikah">Surat Keterangan Belum Menikah</option>
                            <option value="Surat Kelahiran Baru">Surat Kelahiran Baru</option>
                            <option value="Surat Keterangan Usaha">Surat Keterangan Usaha</option>
                            <option value="Surat Keterangan SKCK">Surat Keterangan SKCK</option>
                            <option value="Surat Kematian">Surat Kematian</option>
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
            <!-- <div id="domisili_section" style="display: none;">
                <div class="row">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Foto KTP</label>
                                <input type="file" name="ktp" class="form-control">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Foto KK</label>
                                <input type="file" name="kk" class="form-control" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Keperluan</label>
                                <textarea class="form-control" name="keperluan" placeholder="Keperluan" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <div id="bidikmisi_section" style="display: none;">
                <div class="row">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Foto KK</label>
                                <input type="file" name="nama_kampus" class="form-control" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Keperluan</label>
                                <textarea class="form-control" name="alamat_kampus" placeholder="Keperluan" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="usaha_section" style="display: none;">
                <div class="row">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Foto KTP Pemilik Usaha</label>
                                <input type="file" name="ktp_pemilik_usaha" class="form-control" >
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Foto KK</label>
                                <input type="file" name="kk_pemilik_usaha" class="form-control" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Keperluan</label>
                                <textarea class="form-control" name="alamat_kampus" placeholder="Keperluan" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="domisili_section" style="display: none;">
                <div class="row">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Foto KTP</label>
                                <input type="file" name="ktp" class="form-control" >
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Foto KK</label>
                                <input type="file" name="kk" class="form-control" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="belum_menikah_section" style="display: none;">
                <div class="row">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Foto KTP</label>
                                <input type="file" name="ktp" class="form-control" >
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Foto KK</label>
                                <input type="file" name="kk" class="form-control" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <button type="submit" class="btn btn-primary">AJUKAN SURAT</button>

</form>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        var jenisSurat = document.getElementById("jenis_surat");
        jenisSurat.addEventListener("change", showFormSection);

        function showFormSection() {
            var selectedOption = jenisSurat.value;
            var formSection = document.getElementById("form_section");
            var domisiliSection = document.getElementById("domisili_section");
            var bidikmisiSection = document.getElementById("bidikmisi_section");
            var usahaSection = document.getElementById("usaha_section");
            var belumMenikahSection = document.getElementById("belum_menikah_section");

            domisiliSection.style.display = "none";
            bidikmisiSection.style.display = "none";
            usahaSection.style.display = "none";
            belumMenikahSection.style.display = "none";

            if (selectedOption === "Surat Keterangan Tidak Mampu") {
                domisiliSection.style.display = "block";
            } else if (selectedOption === "Surat Bidikmisi Universitas") {
                bidikmisiSection.style.display = "block";
            }else if (selectedOption === "Surat Keterangan Usaha"){
                usahaSection.style.display = "block";
            }else if (selectedOption === "Surat Keterangan Belum Menikah"){
                belumMenikahSection.style.display = "block";
            }

            formSection.style.display = (selectedOption !== "") ? "block" : "none";
        }
    });
</script>
