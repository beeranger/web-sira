<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Ramah Anak</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon-ra.png') }}" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />        
        {{-- <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet"> --}}
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            @include('layouts.navbar')
            <!-- Header-->            
            <header class="py-5 bg-light" style="background-color: var(--bs-yellow)">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <h1 class="display-5 fw-bolder text-dark mb-2">Selamat datang di Sekolah Islam Ramah Anak</h1>
                                <p class="lead fw-normal text-white-75 mb-4">Karena setiap anak berhak mendapatkan pendidikan yang terbaik!</p>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    <a class="btn btn-warning btn-lg px-4" href="#!">Selengkapnya..</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="{{ asset('assets/images/home.png') }}" alt="..." width="600px"/></div>
                    </div>
                </div>
            </header>
            <!-- Features section-->
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5 mb-lg-0"><h2 class="fw-bolder mb-0"> Pendidikan di Sekolah Islam Ramah Anak.</h2></div>
                        <div class="col-lg-8">
                            <div class="row gx-5 row-cols-1 row-cols-md-2">
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-danger text-white rounded-3 mb-3"><i class="bi bi-flower1"></i></div>
                                    <h2 class="h5">Pendidikan Karakter</h2>
                                    <p class="mb-0">Membangun karakter pribadi anak sehingga menjadi individu yang bermanfaat bagi diri dan lingkungannya.</p>
                                </div>
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-danger text-white rounded-3 mb-3"><i class="bi bi-book"></i></div>
                                    <h2 class="h5">Qur'an</h2>
                                    <p class="mb-0">Belajar Al Quran dan menanamkan nilai-nilai Al Quran pada anak.</p>
                                </div>
                                <div class="col mb-5 mb-md-0 h-100">
                                    <div class="feature bg-danger text-white rounded-3 mb-3"><i class="bi bi-gear"></i></div>
                                    <h2 class="h5">Sains dan Teknologi</h2>
                                    <p class="mb-0">Menanamkan semangat belajar, berinovasi dan berkarya pada anak sebagai bekal bersaing di era perkembangan teknologi yang cepat ini.</p>
                                </div>
                                <div class="col h-100">
                                    <div class="feature bg-danger text-white rounded-3 mb-3"><i class="bi bi-moon-stars"></i></div>
                                    <h2 class="h5">Islam</h2>
                                    <p class="mb-0">Menanamkan dan membangun kebiasaan seorang muslim di keseharian anak.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Testimonial section-->
            <div class="py-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-3 mb-2">
                            <div class="card h-80 shadow border-0 text-white bg-danger">
                                <img class="card-img-top" src="https://dummyimage.com/600x400/ced4da/6c757d" alt="..." />
                                <div class="card-body p-3 ">
                                    <h5 class="text-center" >Cerdas</h5>
                                </div>
                            </div>
                        </div>  
                        <div class="col-lg-3 mb-2">
                            <div class="card h-80 shadow border-0 text-white bg-primary">
                                <img class="card-img-top" src="https://dummyimage.com/600x400/ced4da/6c757d" alt="..." />
                                <div class="card-body p-3 ">
                                    <h5 class="text-center" >Ceria</h5>
                                </div>
                            </div>
                        </div>  
                        <div class="col-lg-3 mb-2">
                            <div class="card h-80 shadow border-0 text-white bg-warning">
                                <img class="card-img-top" src="https://dummyimage.com/600x400/ced4da/6c757d" alt="..." />
                                <div class="card-body p-3 ">
                                    <h5 class="text-center" >Mandiri</h5>
                                </div>
                            </div>
                        </div>  
                        <div class="col-lg-3 mb-2">
                            <div class="card h-80 shadow border-0 text-white bg-success">
                                <img class="card-img-top" src="https://dummyimage.com/600x400/ced4da/6c757d" alt="..." />
                                <div class="card-body p-3 ">
                                    <h5 class="text-center" >Berakhlak islami</h5>
                                </div>
                            </div>
                        </div>  
                        
                    </div>
                </div>
            </div>            
            <!--.Galeri-->
            <section class="py-5 bg-warning bg-opacity-75">
                <div class="container px-5">
                    <h2 class="fw-bolder fs-4 mb-4 ">Galeri</h2>
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <!-- 1-->
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card h-50 shadow border-0">
                                            <img src="https://source.unsplash.com/random/300x300?sig=1" class="d-block w-100" alt="...">
                                        </div>                            
                                    </div>
                                    <div class="col-lg-4 d-none d-lg-block">
                                        <div class="card h-50 shadow border-0">
                                            <img src="https://source.unsplash.com/random/300x300?sig=2" class="d-block w-100" alt="...">
                                        </div>                            
                                    </div>
                                    <div class="col-lg-4 d-none d-lg-block">
                                        <div class="card h-50 shadow border-0">
                                            <img src="https://source.unsplash.com/random/300x300?sig=3" class="d-block w-100" alt="...">
                                        </div>                            
                                    </div>
                                </div>
                            </div>
                            <!-- 2 -->
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-lg-4 col-md-12">
                                        <div class="card h-50 shadow border-0">
                                            <img src="https://source.unsplash.com/random/300x300?sig=4" class="d-block w-100" alt="...">
                                        </div>                                   
                                    </div>
                                    <div class="col-lg-4 d-none d-lg-block">
                                        <div class="card h-50 shadow border-0">
                                            <img src="https://source.unsplash.com/random/300x300?sig=5" class="d-block w-100" alt="...">
                                        </div>                                   
                                    </div>
                                    <div class="col-lg-4 d-none d-lg-block">
                                        <div class="card h-50 shadow border-0">
                                            <img src="https://source.unsplash.com/random/300x300?sig=6" class="d-block w-100" alt="...">
                                        </div>                                   
                                    </div>
                                </div>
                            </div>
                            <!-- 3 -->
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                                        <div class="card h-50 shadow border-0">                                       
                                            <img src="https://source.unsplash.com/random/300x300?sig=7" class="d-block w-100" alt="...">                                    
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-4 mb-lg-0 d-none d-lg-block">
                                        <div class="card h-50 shadow border-0">                                       
                                            <img src="https://source.unsplash.com/random/300x300?sig=8" class="d-block w-100" alt="...">                                    
                                        </div>
                                    </div>                                
                                    <div class="col-lg-4 mb-4 mb-lg-0 d-none d-lg-block">
                                        <div class="card h-50 shadow border-0">                                       
                                            <img src="https://source.unsplash.com/random/300x300?sig=9" class="d-block w-100" alt="...">                                    
                                        </div>
                                    </div>                                
                                </div>
                            </div>                            
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </section>
              
            <!-- Blog preview section-->
            <section class="py-5 bg-warning bg-opacity-10">
                <div class="container px-5">
                    <h2 class="fw-bolder fs-4 mb-4">Berita</h2>
                    <div class="row gx-5">
                        @foreach ($posts->take(3) as $post )
                            <div class="col-lg-4 mb-5">
                                <div class="card h-100 shadow border-0">
                                    <img class="card-img-top" src="https://dummyimage.com/600x350/ced4da/6c757d" alt="..." />
                                    <div class="card-body p-4">
                                        <div class="badge bg-primary bg-gradient rounded-pill mb-2">{{ $post->category->name }}</div>
                                        <a class="text-decoration-none link-dark stretched-link" href="/posts/{{ $post->slug }}"><div class="h5 card-title mb-3">{{ $post->title }}</div></a>
                                        <p class="card-text mb-0" >{{ $post->excerpt }}</p>
                                    </div>
                                    <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                        <div class="d-flex align-items-end justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                                <div class="small">
                                                    <div class="fw-bold">By: {{ $post->user->name }}</div>
                                                    <div class="text-muted">{{ $post->created_at }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                    
                        @endforeach                
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer-->
        @include('layouts.footer')
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        @yield('extra-js')
    </body>
</html>
