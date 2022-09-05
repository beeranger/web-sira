<div class="py-2 bg-primary">
    <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
            <div class="col-lg-12 d-block">
                <div class="row d-flex">
                    <div class="col-md-5 pr-4 d-flex topper align-items-center">
                        <div class="icon bg-fifth mr-2 d-flex justify-content-center align-items-center"><span class="icon-map"></span></div>
                        <span class="text">Jl.Paraji No 63 Kalibaru-Cilodong, Depok</span>
                    </div>
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon bg-secondary mr-2 d-flex justify-content-center align-items-center"><span class="icon-whatsapp"></span></div>
                        <span class="text">0822 4615 8383</span>
                    </div>
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon bg-tertiary mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                        <span class="text">021 771 8681</span>
                    </div>
                </div>
            </div>
        </div>
      </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center">
        <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('assets/logo-utama.png') }}" height="50"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="{{ route('home') }}" class="nav-link pl-0">Beranda</a></li>
            {{-- <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">Profil</a></li> --}}
            <li class="nav-item"><a href="https://ppdb.ramahanak.sch.id/" class="nav-link">PPDB</a></li>
            {{-- <li class="nav-item"><a href="{{ route('galeri') }}" class="nav-link">Galeri</a></li> --}}
            <li class="nav-item"><a href="{{ route('berita') }}" class="nav-link">Berita</a></li>
            <li class="nav-item"><a href="{{ route('unit',"sdi") }}" class="nav-link">SDI Ramah Anak</a></li>
            <li class="nav-item"><a href="{{ route('unit',"smpi") }}" class="nav-link">SMPI Ramah Anak</a></li>
            <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Kontak</a></li>
        </ul>
      </div>
    </div>
</nav>