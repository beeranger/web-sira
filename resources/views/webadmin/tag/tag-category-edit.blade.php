@extends('webadmin.layouts.main')

@section('webadmin-contents')
<div class="page-breadcrumb">
  <div class="row">
      <div class="col-5 align-self-center">
          <h4 class="page-title">List Kategori</h4>
      </div>
      <div class="col-7 align-self-center">
          <div class="d-flex align-items-center justify-content-end">
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                          <a href="{{ route('webadmin.home') }}">Home</a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">Edit Kategory</li>
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
                    <h4 class="card-title mb-0">Form edit kategori</h4>
                </div>
                <form action="{{ route('webadmin.tag-category-update',$category->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <fieldset>                            
                            <div class="form-group mb-2">
                                <label for="" >Nama Kategori :</label>
                                <input type="text" name="name" class="form-control" value="{{ $category->name }}">
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


