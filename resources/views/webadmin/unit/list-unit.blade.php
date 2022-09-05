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
                      <li class="breadcrumb-item active" aria-current="page">Unit sekolah</li>
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
                <div class="card-header">
                    Unit Sekolah
                </div>
                  <ul class="list-group">
                      @foreach ($units as $unit )                  
                        <li class="list-group-item d-flex justify-content-between align-items-center">{{ $unit->name }} <a href="{{ route('webadmin.unit-sekolah-edit', $unit->slug) }}" class="btn btn-primary">Edit</a></li>
                         
                      @endforeach
                  </ul>
                {{-- <div class="form-group mb-2">
                    <label for="" >Unit Sekolah </label>
                    <select name="unit_id" class="form-control">
                        <option hidden disabled selected value> -- pilih Unit -- </option>
                        @foreach ($units as $unit)
                            <option value="{{ $unit->slug }}"
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
                <div class="card-footer">
                    <form action="{{ route('webadmin.unit-sekolah-edit', $unit->slug) }}">
                        <button type="submit" class="btn btn-flat btn-primary" >Go</button>
                    </form>                    
                </div> --}}
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


