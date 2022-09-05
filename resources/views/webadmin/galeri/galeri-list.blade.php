@extends('webadmin.layouts.main')

@section('webadmin-contents')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">Galeri</h4>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center justify-content-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('webadmin.home') }}">Home</a>
                        </li>                      
                        <li class="breadcrumb-item active" aria-current="page">Galeri</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="border-bottom title-part-padding">        
                    <h4 class="card-title mb-0">List</h4>                       
                    @if(session('status'))
                    <div class="alert alert-success text-center">
                    <h6>{{ session('status') }}</h6>
                    </div>
                    @endif
                </div>
                <div class="card-body">
                    <a href="{{ route('webadmin.galeri-create') }}" class="btn btn-primary mb-2"><i data-feather="plus" class="feather-sm"></i>&nbsp; Tambah</a>                    
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach ($photos as $photo )
            @php $path = Storage::disk('public')->url('galeri/'.$photo->url); @endphp
        {{-- @php $path = Storage::url('galeri/'.$photo->url); @endphp --}}
            <div class="col-md-4">
                <div class="card">
                    <form action="{{ route('webadmin.galeri-delete',$photo->id) }}" method="post" class="d-inline">                
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-outline-dark"><i class ="mdi mdi-delete"></i></button>
                    </form>
                    <div class="el-card-item pb-3">
                        <div class="el-card-avatar mb-3 el-overlay-1 w-100 overflow-hidden position-relative text-center">
                            <a href="{{ route('webadmin.galeri-edit',$photo->id) }}"><img src="{{ $path }}" class="d-block position-relative w-100" alt="user" /> </a>
                        </div>
                        <div class="el-card-content text-center">
                            <p class="text-muted mb-0 tag">{{ $photo->category->name }} {{ $photo->unit->name }}</p> <span class="text-muted">{!! $photo->caption !!}</span>
                        </div>
                    </div>
                </div>
            </div>                            
        @endforeach    
        
    </div>
</div>

    
@endsection