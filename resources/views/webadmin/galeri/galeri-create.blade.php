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
                      <li class="breadcrumb-item">
                          <a href="{{ route('webadmin.galeri-list') }}">Galeri</a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">Tambah Photo</li>
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
                    <h4 class="card-title mb-0">Upload foto</h4>
                </div>
                <form action="{{ route('webadmin.galeri-store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <div class="card-body">
                        <fieldset>
                            <div class="form-group mb-2">
                                <label for="" >Kategori :</label>
                                <select name="category_id" class="form-control">
                                    <option hidden disabled selected value> -- pilih kategori -- </option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                        @if (old('category') == $category->name)
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
                                        @if (old('category') == $unit->name)
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
                                <label for="" >Deskripsi :</label>
                                <input type="text" name="caption" class="form-control">
                            </div>
                            <div class="form-group mb-2">
                                <label for=""> Gambar :</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input class="form-control" type="file" id="formFile" name="imgupload">
                                    </div>
                                    <button class="btn btn-light-info text-info font-weight-medium" type="button">Upload</button>
                                </div>      
                            </div>                                                     
                        </fieldset>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-flat btn-info" >Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection


