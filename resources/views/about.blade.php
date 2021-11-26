@extends('layouts.new_main')

@section('content')
    <!-- Header-->
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
              <h1 class="mb-2 bread">About Us</h1>
              <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Profil <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
          </div>
        </div>
    </section>
    <header class="py-5">
        <div class="container px-5">
            <div class="row justify-content-evenly">
                <div class="col-lg-8 col-xxl-6">
                    <div class="text-center my-5">
                        <h1 class="fw-bolder mb-3">Mengapa namaku Ramah Anak.</h1>
                        <p class="lead fw-normal text-muted mb-4">Dimulai dari forum diskusi yang membahas kebijakan untuk menciptakan lingkungan sekolah yang nyaman, aman dan menyenangkan. Sekolah Islam Ramah Anak menyelenggarakan pendidikan yang menerima perbedaan dan mengakui keberagaman siswa.</p>
                        <a class="btn btn-outline-dark btn-sm" href="/posts/awal-mula">Cerita kami ..</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- About section one-->
    <section class="py-5 bg-warning bg-opacity-10" id="scroll-target">
        <div class="container px-5 my-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="{{ asset('assets/images/sdi/img3.png') }}" alt="..." /></div>
                <div class="col-lg-6">
                    <h2 class="fw-bolder">SDI Ramah Anak</h2>
                    <p class="lead fw-normal text-muted mb-5">Melalui pendidikan dasar kami ingin mengembangkan potensi dan bakat individual peserta didik untuk membentuk karakter anak yang religius, nasionalis, integritas, mandiri, dan gotong royong.</p>
                    <a class="btn btn-warning btn-sm" href="/units/sdi">Selengkapnya ..</a>
                </div>
            </div>
        </div>
    </section>
    <!-- About section two-->
    <section class="py-5">
        <div class="container px-5 my-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="{{ asset('assets/images/smpi/img7.jpg') }}"  alt="..." /></div>
                <div class="col-lg-6">
                    <h2 class="fw-bolder">SMPI Ramah Anak</h2>
                    <p class="lead fw-normal text-muted mb-5">Membangun ekosistem pendidikan yang islami serta unggul dalam literasi, numerasi, dan sains melalui pembelajaran yang ramah, inovatif, kreatif, dan partisipatif. Sehingga peserta didik kelak memiliki kemampuan berfikir ilmiah dan semangat berkarya.</p>
                    <a class="btn btn-warning btn-sm" href="/units/smpi">Selengkapnya..</a>
                </div>
            </div>
        </div>
    </section>
    
    
@endsection