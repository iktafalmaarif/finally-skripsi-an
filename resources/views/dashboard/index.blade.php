@extends('dashboard.layouts.app')
@section('content')
@include('sweetalert::alert')

<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">    
                  <h3 class="font-weight-bold">Selamat Datang {{Auth::user()->nama}} di Surpemas Desa Pagianten</h3>
                  <h6 class="font-weight-normal mb-0">Sistem Pelayanan Surat Desa Pagianten</h6>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card tale-bg">
                <div class="card-people mt-auto">
                  <img src="assets/images/dashboard/people.svg" alt="people">
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Total Penduduk Terdaftar</p>
                      <p class="fs-30 mb-2">{{$totalPenduduk}}</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">Total Pengajuan</p>
                      <p class="fs-30 mb-2">{{$totalPengajuan}}</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card card-light-blue">
                    <div class="card-body">
                      <p class="mb-4">Pengajuan Terkonfirmasi</p>
                      <p class="fs-30 mb-2">{{$totalPengajuanTerkonfirmasi}}</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 stretch-card transparent">
                  <div class="card card-light-danger">
                    <div class="card-body">
                      <p class="mb-4">Pengajuan Panding</p>
                      <p class="fs-30 mb-2">{{$totalPengajuanpPanding}}</p>
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
@endsection