<nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background: white">
    <div class="container">
        <a class="navbar-brand" href="{{route('dashboard')}}">
            <img src="https://gmn511.com/_nuxt/img/logo1.e68f463.png" alt="G" width="35" height="40">
            Garda Mitra Nasional
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                @if (auth()->user()->level_id == 1 || auth()->user()->level_id == 2)

                <li class="nav-item">
                    <a class="nav-link active" href="{{route('pegawai.index')}}">Data User</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="{{route('gaji')}}">Penggajian</a>
                </li>

                <li class="nav-item">
                    <a href="{{route('karir.index')}}" class="nav-link active">Karir</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active">Kontak</a>
                </li>

                @endif

                <li>
                    <a href="{{route('logout')}}" class="btn btn-danger" style="background-color: #BB1D33">Keluar</a>
                    <form action="{{route('logout')}}" method="POST">@csrf</form>
                </li>

            </ul>
        </div>
    </div>
</nav>
<div class="garis-nav sticky-top"></div>
