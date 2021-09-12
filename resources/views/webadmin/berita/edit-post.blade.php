@extends('webadmin.layouts.main')

@section('webadmin-contents')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">Blog Post</h4>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center justify-content-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('webadmin.home') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('webadmin.posts') }}">List Berita</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Berita</li>
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
                    <h4 class="card-title mb-0">Form edit berita</h4>
                </div>
                <form action="{{ route('webadmin.update',$post->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <fieldset>
                            <div class="form-group mb-2">
                                <label for="" >Penulis :</label>
                                <select name="user_id" class="form-control">
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}"
                                        @if ($user->id == $post->user_id)
                                            selected
                                        @endif
                                        >
                                            {{ $user->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category')
                                <div class="text-danger">
                                    Please select an valid category
                                </div>
                                @enderror
                            </div>
                            <div class="form-group mb-2">
                                <label for="" >Judul :</label>
                                <input type="text" name="title" class="form-control" value="{{ $post->title }}">
                            </div>
                            <div class="form-group mb-2">
                                <label for="" >Kategori :</label>
                                <select name="category_id" class="form-control">
                                    
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                        @if ($category->id == $post->category_id)
                                            selected
                                        @endif
                                        >
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category')
                                <div class="text-danger">
                                    Please select an valid category
                                </div>
                                @enderror
                            </div>
                            <div class="form-group mb-2">
                                <label for="" >Unit :</label>
                                <select name="unit_id" class="form-control">
                                    {{-- <option selected value> {{ $post->unit->name }} </option> --}}
                                    @foreach ($units as $unit)
                                        <option value="{{ $unit->id }}"
                                        @if ($unit->id == $post->unit_id)
                                            selected
                                        @endif
                                        >
                                            {{ $unit->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('unit')
                                <div class="text-danger">
                                    Please select an valid unit
                                </div>
                                @enderror
                            </div>
                            <div class="form-group mb-2">
                                <label for=""> Deskripsi</label>
                                <input type="text" name="excerpt" class="form-control" value="{{ $post->excerpt }}">                                
                                
                            </div>
                            <div class="form-group">
                                <textarea cols="80" id="bodycontent" name="bodycontent" rows="10" data-sample-short>{{ $post->body }}</textarea>
                            </div>
                        </fieldset>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-flat btn-primary" >Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection



@section('extra-js')


<script>
    CKEDITOR.replace('bodycontent', {
        height: 400
    });
</script>

@endsection