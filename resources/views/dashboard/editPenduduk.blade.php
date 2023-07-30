@extends('dashboard.layouts.app')
@section('content')
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Data Penduduk</h4>
                    <form action="/update/{{$pd->id_penduduk}}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">NIK</label>
                                    <input value="{{$pd->nik}}" type="text" class="form-control" name="nik" id="nik" placeholder="NIK" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">No. KK</label>
                                    <input value="{{$pd->no_kk}}" type="text" class="form-control" name="no_kk" id="no_kk" placeholder="No. KK" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                                    <input value="{{$pd->nama_lengkap}}" type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Tempat Lahir</label>
                                    <input value="{{$pd->tempat_lahir}}" type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" required>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                                    <input value="{{$pd->tanggal_lahir}}" type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir" required>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="mb-3">
                                    <label for="exampleSelectGender">Janis Kelamin</label>
                                    <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                        @if($pd->jenis_kelamin === 'Laki-Laki')
                                        <option selected value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                        @else
                                        <option selected value="Perempuan">Perempuan</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        @endif
                                        
                                    </select>              
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="exampleSelectGender">Agama</label>
                                    <select class="form-control" name="agama" id="agama">
                                        @if($pd->agama === 'Islam')
                                        <option selected value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Katholik">Katholik</option>
                                        @elseif($pd->agama === 'Kristen')
                                        <option value="Islam">Islam</option>
                                        <option selected value="Kristen">Kristen</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Katholik">Katholik</option>
                                        @elseif($pd->agama === 'Budha')
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Hindu">Hindu</option>
                                        <option selected value="Budha">Budha</option>
                                        <option value="Katholik">Katholik</option>
                                        @elseif($pd->agama === 'Hindu')
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option selected value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Katholik">Katholik</option>
                                        @else
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option selected value="Katholik">Katholik</option>
                                        @endif  
                                    </select>              
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="exampleSelectGender">Status Perkawinan</label>
                                    <select class="form-control" name="status_perkawinan" id="status_perkawinan">
                                    @if($pd->status === 'Kawin')
                                        <option value="Wirausaha">Wirausaha</option>
                                        <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                                        <option value="Belum Bekerja">Belum Bekerja</option>
                                        @elseif($pd->status === 'Belum Kawin')
                                        <option value="Kawin">Kawin</option>
                                        <option selected value="Belum Kawin">Belum Kawin</option>
                                        <option value="Cerai Hidup">Cerai Hidup</option>
                                        <option value="Cerai Mati">Cerai Mati</option>
                                        @elseif($pd->status === 'Cerai Hidup')
                                        <option value="Kawin">Kawin</option>
                                        <option value="Belum Kawin">Belum Kawin</option>
                                        <option selected value="Cerai Hidup">Cerai Hidup</option>
                                        <option value="Cerai Mati">Cerai Mati</option>
                                        @else
                                        <option value="Kawin">Kawin</option>
                                        <option value="Belum Kawin">Belum Kawin</option>
                                        <option value="Cerai Hidup">Cerai Hidup</option>
                                        <option selected value="Cerai Mati">Cerai Mati</option>
                                        @endif                      
                                    </select>              
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="exampleSelectGender">Pekerjaan</label>
                                    <select class="form-control" name="pekerjaan" id="pekerjaan">
                                        @if($pd->status === 'Wirausaha')
                                        <option selected value="Wirausaha">Wirausaha</option>
                                        <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                                        <option value="Belum Bekerja">Belum Bekerja</option>
                                        @elseif($pd->status === 'Pelajar/Mahasiswa')
                                        <option value="Wirausaha">Wirausaha</option>
                                        <option selected value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                                        <option value="Belum Bekerja">Belum Bekerja</option>
                                        @else
                                        <option value="Wirausaha">Wirausaha</option>
                                        <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                                        <option selected value="Belum Bekerja">Belum Bekerja</option>
                                        @endif
                                    </select>              
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="exampleSelectGender">Kewarganegaraan</label>
                                    <select class="form-control" name="kewarganegaraan" id="kewarganegaraan">
                                        @if($pd->kewarganegaraan === 'WNI')
                                        <option selected value="WNI">WNI</option>
                                        <option value="WNA">WNA</option>
                                        @else
                                        <option value="WNI">WNI</option>
                                        <option selected value="WNA">WNA</option>
                                        @endif
                                    </select>              
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                            <textarea class="form-control" name="alamat" id="alamat">{{$pd->alamat}}
                            </textarea>
                          </div>
                    <button class="btn btn-primary" ><i class="fa-solid mr-2"></i>SIMPAN</button>
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



@endsection