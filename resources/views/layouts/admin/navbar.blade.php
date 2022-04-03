
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

                @if (auth()->user()->level_id == 1)

                <li class="nav-item">
                    <a href="{{route('pengguna.index')}}" class="nav-link @if (Request::segment(1) == 'pengguna') active @endif">Data User</a>
                </li>

                <li class="nav-item">
                    <a href="{{route('artikel.index')}}" class="nav-link @if (Request::segment(1) == 'artikel') active @endif">Artikel</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Penggajian
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li class="nav-item ml-4">
                            <a href="{{route('gaji.index')}}" class="nav-link @if (Request::segment(1) == 'gaji') active @endif">Upload Gaji</a>
                        </li>
                        <li class="nav-item ml-4">
                            <a href="{{route('data-gaji')}}" class="nav-link @if (Request::segment(1) == 'gaji') active @endif">Data Gaji</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{route('karir.index')}}" class="nav-link @if (Request::segment(1) == 'karir') active @endif">Karir</a>
                </li>

                <li class="nav-item">
                    <a href="{{route('contact.index')}}" class="nav-link @if (Request::segment(1) == 'kontak') active @endif">Kontak</a>
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

<div class="garis-nav"></div>
