@extends('dashboard.layouts.app')
@section('content')
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Data Penduduk</h4>
                    <form action="form-pengajuan-penduduk-add" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">NIK</label>
                                    <input type="text" class="form-control" name="nik" id="nik" placeholder="NIK" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="namalengkap" id="namalengkap" placeholder="Nama Lengkap" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Tempat Lahir</label>
                                    <input type="text" class="form-control" name="tempatlahir" id="tempatlahir" placeholder="Tempat Lahir" required>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tanggallahir" id="tanggallahir" placeholder="Nama Lengkap" required>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="mb-3">
                                    <label for="exampleSelectGender">Janis Kelamin</label>
                                    <select class="form-control" name="jk" id="jk">
                                        <option selected>Jenis Kelamin</option>
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
                                    <select class="form-control" name="agama" id="agama">
                                        <option selected>Agama</option>
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
                                    <select class="form-control" name="statusperkawinan" id="statusperkawinan">
                                        <option selected>Status Perkawiwnan</option>
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
                                    <select class="form-control" name="pekerjaan" id="pekerjaan">
                                        <option selected>Jenis Pekerjaan</option>
                                        <option value="Wirausaha">Wirausaha</option>
                                        <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                                        <option value="Belum Bekerja">Belum Bekerja</option>
                                    </select>              
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="exampleSelectGender">Kewarganegaraan</label>
                                    <select class="form-control" name="kewarganegaraan" id="kewarganegaraan">
                                        <option selected>Kewarganegaraan</option>
                                        <option value="WNI">WNI</option>
                                        <option value="WNA">WNA</option>
                                    </select>              
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                            <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
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
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
        </footer>
      </div>
@endsection