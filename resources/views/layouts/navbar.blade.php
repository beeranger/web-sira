<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-lg navbar-light bg-light" style="background-color: var(--bs-blue)">
        <div class="container px-5">
            <a class="navbar-brand" href="/"><img src="{{ asset('assets/logo-utama.png') }}" height="50"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">  Profil Sekolah</a></li>
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profil Sekolah</a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                            <li><a class="dropdown-item" href="about.html">Tentang Kami</a></li>
                            <li><a class="dropdown-item" href="blog-post.html">Fasilitas</a></li>
                            <li><a class="dropdown-item" href="contact.html">Contact</a></li>
                        </ul>
                    </li> --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Unit Sekolah</a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
                            <li><a class="dropdown-item" href="/units/sdi">SDI</a></li>
                            <li><a class="dropdown-item" href="/units/smpi">SMPI</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="/posts">Berita</a></li>
                    <li class="nav-item"><a class="nav-link" href="/photos">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link" href="/penerimaan">PPDB</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

</header>