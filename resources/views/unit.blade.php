@extends('layouts.new_main')

@section('content')
    <!-- Visi Misi-->
    <header class="py-5">
        <div class="container px-5">
            <div class="row justify-content">
                @if ($unit->slug =='sdi')
                <div class="col-lg-4"><img class="img-fluid rounded-3 my-5" src="{{ asset('assets/images/sdi.png') }}" alt="..." width="200px"/></div>
                @elseif ($unit->slug=='smpi')
                <div class="col-lg-4"><img class="img-fluid rounded-3 my-5" src="{{ asset('assets/images/smpi.png') }}" alt="..." width="200px"/></div>
                @endif
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="text-center my-5">
                        <h2 class="fw-bolder mb-3">Visi kami menjadi {{ $unit->visi }}</h2>
                        <div class="lead fw-normal fs-6 text-muted mb-4">{!! $unit->misi !!}</div>
                        {{-- <a class="btn btn-primary btn-lg" href="#">Read our story</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- About section one-->
    <section class="py-5 bg-light" id="scroll-target">
        <div class="container px-5 my-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="https://source.unsplash.com/600x400/?graduation" alt="..."  /></div>
                <div class="col-lg-6">
                    <h2 class="fw-bolder">Target Lulusan</h2>
                    <p class="lead fw-normal text-muted mb-0">{!! $unit->target !!}</p>
                </div>
            </div>
        </div>
    </section>
    <!-- About section two-->
    <section class="py-5">
        <div class="container px-5 my-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="https://source.unsplash.com/600x400/?classroom,kids" alt="..." /></div>
                <div class="col-lg-6">
                    <h2 class="fw-bolder">Program</h2>
                    <p class="lead fw-normal text-muted mb-0">{!! $unit->program !!}</p>
                </div>
            </div>
        </div>
    </section>
     <!-- About section three-->
     <section class="py-5 bg-light" >
        <div class="container px-5 my-5">
            <div class="row gx-5 align-items-center">
                @if ($unit->slug =='sdi')
                <div class="col-lg-4"><img class="img-fluid rounded-circle mb-5 mb-lg-0" src="{{ asset('assets/images/sdi/kepala-sekolah.png') }}" alt="..."  />
                    <figcaption class="figure-caption"> Kepala sekolah SDI Ramah Anak</figcaption>
                </div>                    
                @elseif ($unit->slug=='smpi')
                <div class="col-lg-4"><img class="img-fluid rounded-circle mb-5 mb-lg-0 " src="{{ asset('assets/images/smpi/kepala-sekolah.png') }}" alt="..."  />
                    <figcaption class="figure-caption text-align-center"> Kepala sekolah SMPI Ramah Anak</figcaption>
                </div>                
                @endif
                <div class="col-lg-8">
                    <h2 class="fw-bolder">Pengantar dari Kepala Sekolah</h2>
                    <p class="lead fw-normal text-muted mb-0">{!! $unit->target !!}</p>
                    <a class="btn btn-primary btn-sm" href="/posts/pengantar-kepala-{{ $unit->slug }}">Selengkapnya.. </a>
                </div>
            </div>
        </div>
    </section>
      

    <!-- News preview section-->
    @if ($posts->count())
    <section class="py-5">
        <div class="container px-5">
            <h2 class="fw-bolder fs-5 mb-4">Berita</h2>
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
                                            <div class="fw-bold">{{ $post->user->name }}</div>
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
    @else
        <p class="text-center fs-4">No post.</p>
    @endif


    <!-- News preview section-->
    <section class="py-5 bg-light">
        <div class="container px-5">
            <div class="row gx-5">
                <div class="col-xl-12">
                    <div class="card border-0 h-100">
                        <div class="card-body p-4">
                            <div class="d-flex h-100 align-items-center justify-content-center">
                                <div class="text-center">
                                    <div class="h6 fw-bolder">Contact</div>
                                    <p class="text-muted mb-4">
                                        Untuk pertanyaan bisa diajukan melalui email
                                        <br />
                                        <a href="#">{{ $unit->slug }}ra@ramahanak.sch.com</a>
                                    </p>
                                    <div class="h6 fw-bolder">Follow us</div>
                                    <a class="fs-5 px-2 link-dark" href="#"><i class="bi-facebook"></i></a>
                                    <a class="fs-5 px-2 link-dark" href="#"><i class="bi-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>  
    
@endsection





 







