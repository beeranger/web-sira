@extends('layouts.new_main')

@section('content')
    <!-- Page Content-->    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('/front/images/bg_2.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
              <h1 class="mb-2 bread">Berita</h1>
               <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="#">{{ $post->title }} <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog Single <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
          </div>
        </div>
    </section>
    <!-- bagian berita -->
    <section class="py-5">
        <div class="container px-5 my-5">
            <div class="row gx-5">
                <div class="col-lg-3">
                    <div class="d-flex align-items-center mt-lg-5 mb-4">
                        {{-- photo admin --}}
                        {{-- <img class="img-fluid rounded-circle" src="https://dummyimage.com/50x50/969696/edeef7.jpg&text=Admin" alt="..." /> --}}
                        <div class="ms-3">
                            <div class="fw-bold">{{ $post->user->name }}</div>
                            <div class="text-muted">{{ $post->category->name }}, {{ $post->unit->name }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1">{{ $post->title }}</h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">{{ $post->created_at }}</div>
                            <!-- Post categories-->
                            <a class="badge bg-secondary text-decoration-none link-light" href="#!">{{ $post->category->name }}</a>
                            <a class="badge bg-secondary text-decoration-none link-light" href="#!">{{ $post->unit->name }}</a>
                        </header>
                        <!-- Preview image figure-->
                        @if (!empty($post->figure_url))
                            @php $path = Storage::disk('public')->url('galeri/'.$post->figure_url); @endphp
                            <figure class="mb-4"><img class="img-fluid rounded" src="{{ asset($path) }}" alt="..." /></figure> 
                            {!! $path !!}                           
                        @endif
                        {{-- <figure class="mb-4"><img class="img-fluid rounded" src="https://dummyimage.com/900x400/ced4da/6c757d.jpg" alt="..." /></figure>  --}}
                         <!-- Post content-->
                        {{-- <section class="mb-5"></section>                         --}}
                        {!! $post->body !!}
                    </article>
                    
                    <a href="/posts" class="d-block mt-3"><i class="bi bi-arrow-left"></i> Kembali ke halaman Berita</a>
                </div>
            </div>
        </div>
    </section>
    
@endsection