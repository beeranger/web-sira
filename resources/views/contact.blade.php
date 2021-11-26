@extends('layouts.new_main')

@section('content')
    <!-- Page content-->
    <section class="hero-wrap hero-wrap-2" style="background-image: url('front/images/bg_2.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
              <h1 class="mb-2 bread">Contact Us</h1>
              <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Kontak <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
          </div>
        </div>
    </section>
  
    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-3 d-flex">
              <div class="bg-light align-self-stretch box p-4 text-center">
                  <h3 class="mb-4">Alamat</h3>
                  <p>Jl. Paraji No.63 004/005 Kalibaru-Cilodong, Depok</p>
                  <p>Jl. Kp Kalibaru 003/005 Kalibaru-Cilodong, Depok</p>
              </div>
          </div>
          <div class="col-md-3 d-flex">
              <div class="bg-light align-self-stretch box p-4 text-center">
                  <h3 class="mb-4">Telphone</h3>
                <p><a href="tel://021 771 8681">021 771 8681</a></p>
              </div>
          </div>
          <div class="col-md-3 d-flex">
              <div class="bg-light align-self-stretch box p-4 text-center">
                  <h3 class="mb-4">Pesan WhatsApp</h3>
                <p><a href="#">0822 4615 8383</a></p>
              </div>
          </div>
          <div class="col-md-3 d-flex">
              <div class="bg-light align-self-stretch box p-4 text-center">
                  <h3 class="mb-4">Informasi PPDB</h3>
                <p><a href="#">ppdb.ramahanak.sch.id</a></p>
              </div>
          </div>
        </div>
      </div>
    </section>
          
    <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
        <div class="container">
            <div class="row d-flex align-items-stretch no-gutters">
                <div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
                    <form action="#">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Name">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Email">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Subject">
          </div>
          <div class="form-group">
            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
          </div>
        </form>
                </div>
                <div class="col-md-6 d-flex align-items-stretch">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="py-5">
        <div class="container px-5">
            <!-- Contact cards-->
            <div class="row gx-5 row-cols-2 row-cols-lg-4 py-5">
                <div class="col">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope-open"></i></div>
                    <div class="h5 mb-2">Email</div>
                    <p class="text-muted mb-0">sdira@ramahanak.sch.id atau smpira@ramahanak.sch.id.</p>
                </div>
                <div class="col">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-people"></i></div>
                    <div class="h5">Ask the community</div>
                    <p class="text-muted mb-0">Hubungi kami melalui kanal media sosial.</p>
                </div>
                <div class="col">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-house-door"></i></div>
                    <div class="h5">Address</div>
                    <p class="text-muted mb-0">Jalan Paraji no.63 RT 04 RW 05 Kelurahan Kalibaru Kecamatan Cilodong, Kota Depok</p>
                </div>
                <div class="col">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-telephone"></i></div>
                    <div class="h5">Call us</div>
                    <p class="text-muted mb-0">Hubungi kami di 021-771 8681 atau 021-276 11406.</p>
                </div>
            </div>
        </div>
    </section> --}}
@endsection