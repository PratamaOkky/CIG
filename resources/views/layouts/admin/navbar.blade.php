<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{route('dashboard')}}">
            <img src="https://gmn511.com/_nuxt/img/logo1.e68f463.png" alt="G" width="40" height="50">
            Garda Mitra Nasional
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('pegawai.index')}}">Data User</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="{{route('gaji')}}">Penggajian</a>
                </li>

                {{-- <li class="nav-item">
                    <a class="nav-link active" href="#">Profile</a>
                </li> --}}

                <li class="nav-item">
                    <a href="{{route('karir.index')}}" class="nav-link active">Karir</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active">Kontak</a>
                </li>

                {{-- <button type="submit" class="btn btn-danger">Keluar</button> --}}
                <a href="{{route('logout')}}" class="btn btn-danger" style="background-color: #BB1D33">Keluar</a>

                <form action="{{route('logout')}}" method="POST">@csrf</form>
            </ul>
        </div>
    </div>
</nav>
<div class="garis-nav"></div>
