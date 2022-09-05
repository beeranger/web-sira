@extends('webadmin.layouts.main')

@section('webadmin-contents')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">Blog Post Baru</h4>
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
                        <li class="breadcrumb-item active" aria-current="page">Tambah Berita</li>
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
                    <h4 class="card-title mb-0">Form tambah berita</h4>
                </div>
                <form action="{{ route('webadmin.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <div class="card-body">
                        <fieldset>
                            <div class="form-group mb-2">
                                <label for="" >Penulis :</label>
                                <select name="user_id" class="form-control">
                                    <option hidden disabled selected value> -- pilih penulis -- </option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}"
                                        @if (old('user_id') == $user->name)
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
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="form-group mb-2">
                                <label for="" >Kategori :</label>
                                <select name="category_id" class="form-control">
                                    <option hidden disabled selected value> -- pilih kategori -- </option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                        @if (old('category_id') == $category->name)
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
                                    <option hidden disabled selected value> -- pilih Unit -- </option>
                                    @foreach ($units as $unit)
                                        <option value="{{ $unit->id }}"
                                        @if (old('unit_id') == $unit->name)
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
                                <input type="text" name="excerpt" class="form-control" value="{{ old('exceprt') }}">                                
                                
                            </div>
                            <div class="form-group">
                                <textarea cols="80" id="bodycontent" name="bodycontent" rows="10" data-sample-short value="{{ old('bodycontent') }}"></textarea>
                            </div>

                            <div class="form-group mb-2">
                                <label for=""> Gambar header:</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input class="form-control " type="file" id="figureImg" name="figureImg" aria-describedby="fileHelp" value="{{ old('figureImg') }}">
                                    </div>
                                    <small id="fileHelp" class="form-text text-muted">Gambar tidak valid.</small>
                                    @error('image')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                    <img id="preview-image-before-upload" src="https://www.riobeauty.co.uk/images/product_image_not_found.gif" alt="preview image" style="max-height: 250px;">
                                </div>                                
                            </div> 
                            <div class="form-group mb-2">                                
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="is_published" name="is_published" value= 1 >
                                    <label class="form-check-label" for="inlineCheckbox1">Publish</label>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-flat btn-primary" value="submit" >Save</button>
                        <a href="{{ route('webadmin.posts') }}" class="btn btn-primary" >Kembali ke Beranda</a>

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

    $('#figureImg').change(function(){            
        let reader = new FileReader();        
        reader.onload = (e) => {         
            $('#preview-image-before-upload').attr('src', e.target.result); 
            }        
        reader.readAsDataURL(this.files[0]);      
    });
</script>

@endsection