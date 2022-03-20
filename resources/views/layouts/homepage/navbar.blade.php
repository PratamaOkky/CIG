{{-- <style>
hr{
    border: 0;
    /* height: 30px; */
    border-style: solid;
    border-color: rgb(187, 29, 51);
    border-width: 5px 0 0 0;
    border-radius: 20px
}
.ftco-navbar-light {
  background: transparent !important;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  z-index: 3;
  padding-top: 10px; }
  @media (max-width: 991.98px) {
    .ftco-navbar-light {
      background: #000000 !important;
      position: relative;
      top: 0;
      padding-top: 0;
      padding-bottom: 0;
      padding-left: 15px;
      padding-right: 15px; } }
  .ftco-navbar-light .container {
    width: 1110px;
    margin: 0 auto;
    padding: 0; }
  .ftco-navbar-light .navbar-brand {
    color: #350106;
    padding-top: .7rem;
    padding-bottom: .7rem; }
  .ftco-navbar-light .navbar-nav > .nav-item > .nav-link {
    font-size: 16px;
    padding-top: .1rem;
    padding-bottom: .7rem;
    padding-left: 15px;
    padding-right: 15px;
    color: #5D4350;
    font-weight: 400;
    opacity: 1 !important; }

.navbar-brand {
  font-weight: 700;
  font-size: 22px;
  text-transform: uppercase; }

  .btn {
  background-color: #87020E;
  padding: 5px 30px 0px;
  border-radius: 12px;
  font-size: 16px;
}
.btn1 {
  background-color: #87020E;
  padding: 5px 30px 5px;
  border-radius: 12px;
  font-size: 16px;
}
</style>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-light ftco-navbar-light" id="ftco-navbar">
		<div class="container">
        <a class="navbar-brand" href="{{route('home')}}">
            <img src="https://gmn511.com/_nuxt/img/logo1.e68f463.png" alt="G" width="40" height="50">
            Garda Mitra Nasional
          </a>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav nav ml-auto">
                    <li class="nav-item"><a class="nav-link active" href="{{ route('tentang')}}">Tentang Kami</a></li>
				          	<li class="nav-item"><a class="nav-link active" href="{{route('layanan')}}">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ route('kariru')}}">Karir</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{route('kontak')}}">Kontak</a></li>
                    <a href="{{ route('login') }}" class="btn btn-danger">Login</a>
                </ul>
			</div>
		</div>
	</nav>


 --}}

 <nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background: white">
    <div class="container">
        <a class="navbar-brand" href="{{route('/')}}">
            <img src="https://gmn511.com/_nuxt/img/logo1.e68f463.png" alt="G" width="35" height="40">
            Garda Mitra Nasional
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('tentang')}}">Tentang</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="{{route('layanan')}}">Layanan</a>
                </li>

                <li class="nav-item">
                    <a href="{{route('career')}}" class="nav-link active">Karir</a>
                </li>

                <li class="nav-item">
                    <a  href="{{route('kontak')}}" class="nav-link active">Kontak</a>
                </li>

                <li>
                    <a href="{{route('login')}}" class="btn btn-danger border-0" style="background-color: #BB1D33;">Login</a>
                    <form action="{{route('login')}}" method="POST">@csrf</form>
                </li>

            </ul>
        </div>
    </div>
</nav>
<div class="garis-nav"></div>

