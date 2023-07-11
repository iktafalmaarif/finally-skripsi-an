@extends('landing.layouts.app')
@section('content')
@include('sweetalert::alert')

@include('landing.layouts.includes.hero')
<section id="about" class="about">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <br>
            <h2>About</h2>
            <p>Website ini dibuat untuk digunakan oleh warga Desa Pagiyanten guna mempermudah pembuatan surat pelayanan
                masyarakat yang dibutuhkan. Website ini dibuat oleh mahasiswa Politeknik Harapan Bersama Kota Tegal guna
                menyelesaikan salah satu syarat kelulusan yaitu skripsi. Website ini sepenuhnya sudah dipegang oleh
                Pemerintah Desa Pagiyanten saat ini.</p>
            <br>
        </div>
    </div>
</section>
<hr>
<section id="services" class="services">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h2>Services</h2>
            <p>Dibawah ini contoh surat yang anda bisa buat di Website ini. Pastikan NIK anda sudah terdaftar agar anda
                bisa membuat surat melalui website. jika belum silahkan <a href="#contact">Hubungi Admin.</a></p>
        </div>

        <div class="row" >
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in">
                <div class="icon-box icon-box-pink">
                    <div class="icon"><i class="bx bx-file"></i></div>
                    <h4 class="title"><a href="">Surat Keterangan Tidak Mampu</a></h4>
                    <p class="description">Surat yang digunakan untuk keringanan biaya obat, biaya sekolah, beasiswa,
                        peralihan bpjs dan lain-lain.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                data-aos-delay="100">
                <div class="icon-box icon-box-cyan">
                    <div class="icon"><i class="bx bx-file"></i></div>
                    <h4 class="title"><a href="">Surat Pengantar Nikah</a></h4>
                    <p class="description">Surat pengantar nikah adalah sebuah surat pernyataan sebagai syarat
                        administrasi pernikahan di Kantor Urusan Agama (KUA).</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                data-aos-delay="200">
                <div class="icon-box icon-box-blue">
                    <div class="icon"><i class="bx bx-file"></i></div>
                    <h4 class="title"><a href="">Surat Pengantar Perceraian</a></h4>
                    <p class="description">Surat Pengantar Perceraian adalah Surat yang dibutuhkan untuk mengurus
                        perceraian.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                data-aos-delay="300">
                <div class="icon-box icon-box-cyan">
                    <div class="icon"><i class="bx bx-file"></i></div>
                    <h4 class="title"><a href="">Surat Keterangan Domisili Tempat Tinggal</a></h4>
                    <p class="description">surat keterangan yang berupa dokumen atau bukti resmi seorang pendatang yang
                        bertempat tinggal di daerah tertentu.</p>
                </div>
            </div>

        </div>

    </div>
</section>
<hr>
<section id="checking" class="tracking">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <br>
            <h2>Tracking Surat Anda Disini</h2></br>
                <div class="row">
                    <div class="col-6">
                        <form action="/penyo" method="post">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Masukan NIK" name="nik" aria-label="Recipient's username" aria-describedby="button-addon2" required>
                                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Checking</button>
                              </div>
                        </form>
                    </div>

                    @if(isset($penduduk))
                <div style="margin-top: 50px;">
                    <h2>Hasil Pencarian</h2>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Jenis Surat</th>
                            <!-- <th>Nomor Surat</th> -->
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $penduduk[0]->nik }}</td>
                            <td>{{ $penduduk[0]->nama_lengkap }}</td>
                            <td>{{ $penduduk[0]->jenis_surat }}</td>
                            <!-- <td>{{ $penduduk[0]->nomor_surat }}</td> -->
                            <td>
                                @if($penduduk[0]->status === NULL)
                                    Menunggu Konfirmasi
                                @elseif($penduduk[0]->status === 1)
                                    Pengajuan Di Tolak
                                @else
                                    Pengajuan Disetujui
                                @endif
                            </td>
                            <td>
                                @if($penduduk[0]->status == 2)
                                    <a href="convert/{{$penduduk[0]->id_pengajuan}}" class="btn btn-success p-2"><i class="bi bi-printer"></i></a>
                                @else
                                    <a class="btn btn-secondary p-2"><i class="bi bi-print"></i></a>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
                @elseif(isset($error))
                <h2>Hasil Pencarian</h2>
                <p>{{ $error }}</p>
                @endif



                </div>
        </div>
    </div>
</section>
<hr>
<section id="ajukan" class="ajukan">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <div class="content">
                    <h2>Silahkan ajukan surat anda disini</h2>
                    <p>
                        Pastikan check NIK anda terlebih dahulu agar bisa melihat kesesuaian data, jika adaperubahan
                        data silahkan <a href="#contact">hubungi admin</a>.
                    </p>
                </div>

                <div class="row mb-3">
                    <div class="col-5">
                        <form action="/search-data" method="GET">
                            <div class="mb-3">
                                <label for="nik" class="form-label">NIK</label>
                                <div class="input-group mb-3">
                                    <input type="text" maxlength="16" class="form-control" name="nik" id="nik"
                                        onclick="validateNIK()" placeholder="Masukan NIK"
                                        aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <button class="btn btn-outline-primary" type="submit" id="button-addon2">Cari
                                        Data</button>
                                </div>
                                <span id="error-label" style="color: red;"></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            @include('landing.formPengajuan')

        </div>
    </div>
</section>
<hr>
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact section-bg">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h2>Kontak Kami</h2>
        </div>

        <div class="row">

            <div class="col-lg-12 d-flex align-items-stretch" data-aos="fade-right">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Lokasi:</h4>
                        <p>Pagiyanten, Kabupaten Tegal, Jawa Tengah</p>
                    </div>

                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>info@example.com</p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Telephone:</h4>
                        <p>+6238 6166 9538</p>
                    </div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1980.3041799409018!2d109.10127543500754!3d-6.937322294149245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb95b71f9c4f3%3A0xc78e06455aad8cc2!2sBalai%20Desa%20Pagiyanten!5e0!3m2!1sid!2sid!4v1686577543419!5m2!1sid!2sid"
                        width="100%" height="280px" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>
        </div>
    </div>
</section>


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
