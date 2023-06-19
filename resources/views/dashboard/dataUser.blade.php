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
                          <th>ID</th>
                          <th>Username</th>
                          <th>Email</th>
                          <th>No. Telepon</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td>uiywsuiys</td>
                        <td>uiywsuiys</td>
                        <td>uiywsuiys</td>
                        <td>uiywsuiys</td>
                        <td>uiywsuiys</td>
                        <td>uiywsuiys</td>
                        <td>uiywsuiys</td>
                        <td>uiywsuiys</td>
                        <td>uiywsuiys</td>
                      </tr>
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