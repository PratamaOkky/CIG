<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <a href="{{route('dashboard')}}" class="gmn mt-1"><img src="https://gmn511.com/_nuxt/img/logo1.e68f463.png" width="55" height="75" class="py-2 me-2">Garda Mitra Nasional</a>

        <div class="d-flex me-3">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a href="{{ route('user.index') }}" class="nav-link active">Data Pegawai</a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('artikel.index') }}" class="nav-link active">Artikel</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Gaji
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('gaji.index') }}">Upload Gaji</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('data.gaji') }}">Data Gaji</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{ route('karir.index') }}" class="nav-link active">Karir</a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('contact.index') }}" class="nav-link active">Kontak</a>
                </li>

                <li class="nav-item">
                    <form method="POST" action="{{route('logout')}}">
                        @csrf
                        <button class="btn logout">Keluar</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="garis-nav"></div>


