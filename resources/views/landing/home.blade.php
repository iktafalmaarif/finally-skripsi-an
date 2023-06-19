@extends('landing.layouts.app')
@section('content')
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

<section id="services" class="services">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h2>Services</h2>
            <p>Dibawah ini contoh surat yang anda bisa buat di Website ini. Pastikan NIK anda sudah terdaftar agar anda
                bisa membuat surat melalui website. jika belum silahkan <a href="#contact">Hubungi Admin.</a></p>
        </div>

        <div class="row">
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

<section id="tracking" class="tracking">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <br>
            <h2>Tracking Surat Anda Disini</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi sunt magnam nostrum reiciendis
                distinctio ad illo assumenda maxime, quam minima placeat accusamus voluptatum, dolorem vero voluptate
                asperiores cumque. Doloremque, nam!</p>
            <br>
        </div>
    </div>
</section>

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
                    <form action="/search-data" method="GET" >
                        <div class="mb-3">
                          <label for="nik" class="form-label">NIK</label>
                          <input type="text" id="inputField" class="form-control" name="nik" placeholder="Masukkan NIK">
                            <button type="submit" class="btn btn-primary">Cek</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="namalengkap" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="namalengkap"  value="{{ $user->nama_lengkap ?? '' }}" name="namalengkap"
                            placeholder="Menunggu.." readonly>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="tempatlahir" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempatlahir" name="tempatlahir"
                            placeholder="Menunggu.." readonly>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="tanggallahir" class="form-label">Tanggal Lahir</label>
                        <input type="text" class="form-control" id="tanggallahir" name="tanggallahir"
                            placeholder="Menunggu.." readonly>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="jk" class="form-label">Jenis Kelamin</label>
                                <input type="text" class="form-control" id="jk" name="jk" placeholder="Menunggu.."
                                    readonly>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="agama" class="form-label">Agama</label>
                                <input type="text" class="form-control" id="agama" name="agama" placeholder="Menunggu.."
                                    readonly>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="statusperkawinan" class="form-label">Status Perkawinan</label>
                                <input type="text" class="form-control" id="statusperkawinan" name="statusperkawinan"
                                    placeholder="Menunggu.." readonly>
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
                                        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan"
                                            placeholder="Menunggu.." readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="kewarganegaraan" class="form-label">Kewarganegaraan</label>
                                        <input type="text" class="form-control" id="kewarganegaraan"
                                            name="kewarganegaraan" placeholder="Menunggu.." readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <input type="text" class="form-control" id="alamat" name="alamat"
                                            placeholder="Menunggu.." readonly>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <button class="btn btn-primary">AJUKAN SURAT</button>
</section>

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


@endsection