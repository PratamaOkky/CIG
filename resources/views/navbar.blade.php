<style>
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
                    {{-- <button type="submit" class="btn btn-danger" >Login</button> --}}
                    <a href="{{route('login')}}" class="btn btn-danger">Login</a>
                </ul>
			</div>
		</div>
	</nav>



