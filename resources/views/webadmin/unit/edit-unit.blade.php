@extends('webadmin.layouts.main')

@section('webadmin-contents')
<div class="page-breadcrumb">
  <div class="row">
      <div class="col-5 align-self-center">
          <h4 class="page-title">Data Unit Sekolah</h4>
      </div>
      <div class="col-7 align-self-center">
          <div class="d-flex align-items-center justify-content-end">
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('webadmin.home') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                    <a href="{{ route('webadmin.unit-sekolah') }}">Unit sekolah</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
                  </ol>
              </nav>
          </div>
      </div>
  </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="border-bottom title-part-padding">
                @if(session('status'))
                        <div class="alert alert-success text-center">
                        <h6>{{ session('status') }}</h6>
                        </div>
                @endif
            </div>
            <div class="card">
                <div class="border-bottom title-part-padding">
                    <h4 class="card-title mb-0">Unit sekolah : {{ $unit->name }}</h4>
                </div>
                <form action="{{ route('webadmin.unit-sekolah-update',$unit->slug) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <fieldset>                            
                            <div class="form-group mb-2">
                                <label for="" >Unit sekolah :</label>
                                <input type="text" name="name" class="form-control" value="{{ $unit->name }}">
                            </div>
                            <div class="form-group mb-2">
                                <label for="" >Visi sekolah :</label>
                                <input type="text" name="visi" class="form-control" value="{{ $unit->visi }}">
                            </div>
                            <div class="form-group mb-2">
                                <label for="" >Misi sekolah:</label>
                                <textarea cols="80" id="misi{{ $unit->id }}" name="misi" rows="10"  class="form-control editors" data-sample-short>{{ $unit->misi }}</textarea>
                            </div>
                            <div class="form-group mb-2">
                                <label for="" >Program sekolah:</label>
                                <textarea cols="80" id="program{{ $unit->id }}" name="program" rows="10" class="form-control editors" data-sample-short>{{ $unit->program }}</textarea>
                            </div>
                            <div class="form-group mb-2">
                                <label for="" >Target Lulusan:</label>
                                <textarea cols="80" id="target{{ $unit->id }}" name="target" rows="10" class="form-control editors" data-sample-short>{{ $unit->target }}</textarea>
                            </div>
                            
                        </fieldset>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-flat btn-primary" >Save</button>
                        <a href="{{ route('webadmin.unit-sekolah') }}" class="btn btn-dark inline" >Kembali</a>
                    </div>
                </form>
            </div>     
        </div>
    </div>
</div>
    
@endsection

@section('extra-js')

<script>
    $(function() {
        $('.editors').each(function(){
        CKEDITOR.replace( $(this).attr('id') );
        });
    }); 
</script>

{{-- <script>
    CKEDITOR.replace('misi', {
        height: 200
    });
</script> --}}
{{-- <script>
    CKEDITOR.replace('program', {
        height: 200
    });
</script>
<script>
    CKEDITOR.replace('target', {
        height: 200
    });
</script> --}}

@endsection


