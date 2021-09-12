@extends('layouts.main')

@section('content')
    {{-- <h1 class="mb-3 text-center">{{ $title }}</h1>    --}}
    <div class="row justify-content-center mb-3">
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
    </div>
    @if ($posts->count())
        <section class="py-5">
            <div class="container px-5">
                <h2 class="fw-bolder fs-5 mb-4">Berita</h2>
                <div class="row gx-5">
                    @foreach ($posts as $post )
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
        <p class="text-center fs-4">No post found.</p>
    @endif
    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
    
@endsection