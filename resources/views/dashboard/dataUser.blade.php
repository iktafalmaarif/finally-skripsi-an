@extends('dashboard.layouts.app')
@section('content')
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Data User</h4>
                    <a href="/form-tambah-user" class="btn btn-sm btn-primary">
                    <i class="fa-regular fa-plus mr-2"></i>Tambah Data 
                    </a>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>ID User</th>
                          <th>Nama</th>
                          <th>Email</th>
                          <th>Status</th>
                          <th>Level</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($User as $data)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$data->id}}</td>
                          <td>{{$data->name}}</td>
                          <td>{{$data->email}}</td>
                          <td>{{$data->status}}</td>
                          <td>{{$data->level}}</td>       
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
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
        </footer>
      </div>
@endsection