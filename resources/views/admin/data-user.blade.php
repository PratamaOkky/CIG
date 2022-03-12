@section('title', 'Data User')

@extends('layouts.admin.template')

@section('content')

<div class="section">
    <div class="container">
        <nav class="navbar navbar-light">
            <div class="container">
                <div class="section-header mt-5 mb-5 ml-0">
                    <h2>Jumlah User</h2>
                </div>
                <form class="d-flex">
                    <span class="icon"><i class="fa fa-search"></i></span>
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </form>
            </div>
        </nav>

        <div class="row">
            <div class="col-md-4 col-sm-12 col-mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="box">
                            <h1 class="card-title">66</h1>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-plus-circle"></i></a>
                        </div>
                        <p class="card-text">Pegawai</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="box">
                            <h1 class="card-title">3</h1>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-plus-circle"></i></a>
                        </div>
                            <p class="card-text">Admin</p>
                    </div>
                </div>
            </div>
            {{-- <hr style="border-left: 3px #bb1d33 solid; height:110px; width:0px; margin-top: -10px"> --}}
            <div class="col-md-4 col-sm-6 col-mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="box">
                            <h1 class="card-title">1</h1>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-plus-circle"></i></a>
                        </div>
                        <p class="card-text">Super Admin</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- <hr class="garis"> --}}

        <div class="rectangle">

        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Nama</label>
                        <input type="text" class="form-control" id="recipient-name" placeholder="Masukan Nama">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Gender</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Pria
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Wanita
                                </label>
                            </div>

                            <label for="message-text" class="col-form-label">Position</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Super Admin
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Admin
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    User
                                </label>
                            </div>
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Kategori</label>
                        <input type="text" class="form-control" id="recipient-name" placeholder="Pegawai">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Email</label>
                        <input type="text" class="form-control" id="recipient-name" placeholder="email@email.com">
                    </div>
                </form>
            </div>
            <div class="button mb-3">
                <button type="submit" class="btn btn-danger btn-modal">Send message</button>
            </div>
            <div class="button mb-3">
                <button type="button" class="btn btn-secondary btn-modal" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


        <table class="table table-borderless table-sm mt-5">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nip</th>
                    <th>Nama</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Posisi</th>
                    <th>Jabatan</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>1855201369</td>
                    <td>Jaenal Mustakim</td>
                    <td>Pria</td>
                    <td>jaenal@email.com</td>
                    <td>Tangerang</td>
                    <td>HRD</td>
                    <td>
                        <a href="#" class="btn btn-danger btn-sm ml-1"><i class="fa fa-edit"></i></a>

                        <a href="#" class="btn btn-danger btn-sm ml-4"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
