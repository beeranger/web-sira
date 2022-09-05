@extends('layouts.new_main')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url(front/images/bg_2.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Berita Sekolah</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>
    {{-- <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/posts">
                @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}" >
                    
                @endif
                @if (request('unit'))
                <input type="hidden" name="unit" value="{{ request('unit') }}" >                    
                @endif                
            </form>
        </div>
    </div> --}}
    {{-- <div class="card h-100 shadow border-0">
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
    </div> --}}
    @if ($posts->count())
        <section class="ftco-section bg-light5">
            <div class="container">
                <div class="row">
                    @foreach ($posts as $post )
                    <div class="col-md-6 col-lg-4 ftco-animate">
                        <div class="blog-entry">
                            @php $path = asset('front/images/image_5.jpg'); @endphp
                            @if (!empty($post->figure_url))
                                @php $path = Storage::disk('public')->url('galeri/'.$post->figure_url); @endphp
                            @endif                                
                                <a href="{{ route('berita-lihat',$post->slug) }}" class="block-20 d-flex align-items-end" style="background-image: url('{{ asset($path) }}');">
                                    <div class="meta-date text-center p-2">
                                        <span class="day">{{ $post->created_at->format('d M') }}</span>
                                        <span class="mos">{{ $post->created_at->format('Y') }}</span>
                                        <span class="yr">{{ $post->category->name }}</span>
                                    </div>
                                </a>
                                <div class="text bg-white p-4">
                                  <h3 class="heading"><a href="{{ route('berita-lihat',$post->slug) }}">{{ $post->title }}</a></h3>
                                  <p>{{ $post->excerpt }}</p>
                                  <p>{{$path }}</p>
                                  <div class="d-flex align-items-center mt-4">
                                      <p class="mb-0"><a href="#" class="btn btn-secondary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                                      <p class="ml-auto mb-0">
                                          <a href="#" class="mr-2">{{ $post->user->name }}</a>
                                          <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                      </p>
                                  </div>
                                </div>
                              </div>
                        </div>                    
                    @endforeach                
                </div>
                <div class="row no-gutters my-5">
                    <div class="col text-center">
                        {{ $posts->links() }}                        
                    </div>
                </div>
            </div>
        </section>
    @else
    <section class="ftco-section bg-light5">
        <div class="container">
            <div class="row">     
                <div class="col text-center">
                    <p class="text-center fs-4">No post found.</p>
                </div>          
            </div>
        </div>
    </section>
    @endif
    
    
@endsection