@section('title', '')

@extends('layouts.admin.template')

@section('content')

<style>
    .card
    {
        border: none;
    }
    hr
    {
        border: 0;
        /* height: 30px; */
        border-style: solid;
        border-color: rgb(187, 29, 51);
        border-width: 5px 0 0 0;
        border-radius: 20px
    }
    .box
    {
        width: 50px;
        height: 50px;
        background: #bb1d33;
        border-radius: 15px;
        position: relative;
        z-index: 1;
        margin-left: 42%;
    }
</style>

<div class="section">
    <div class="container">
        <nav class="navbar navbar-light">
            <div class="container">
                <div class="section-header mt-5 mb-5 ml-0">
                    <h2>Jumlah User</h2>
                </div>
                <form class="d-flex">
                    <span class="icon" style="position: absolute; top: 42%; margin-left: 200px;"><i class="fa fa-search"></i></span>
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </form>
            </div>
        </nav>

          <div class="card-group text-center">
            <div class="card">
                <div class="card-body">
                    <div class="box">
                        <h1 class="card-title">66</h1>
                    </div>
                    <p class="card-text">Pegawai</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="box">
                        <h1 class="card-title">3</h1>
                    </div>
                    <p class="card-text">Admin</p>
                </div>
            </div>
            <div class="card">
              <div class="card-body">
                <div class="box">
                    <h1 class="card-title">1</h1>
                </div>
                <p class="card-text">Super Admin</p>
              </div>
            </div>
          </div>

          <table class="table table-borderless mt-5">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nip</th>
                <th scope="col">Nama</th>
                <th scope="col">Gender</th>
                <th scope="col">Email</th>
                <th scope="col">Posisi</th>
                <th scope="col">Jabatan</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>1855201369</td>
                <td>Jaenal Mustakim</td>
                <td>Laki-laki</td>
                <td>jaenal@email.com</td>
                <td>Tangerang</td>
                <td>HRD</td>
                <td>
                    <a href="#" class="btn btn-danger"><i class="fa fa-edit"></i></a>

                    <a href="#" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
            </tbody>
          </table>

    </div>
</div>

@endsection
