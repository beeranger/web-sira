@extends('layouts.main')

@section('content')
    <!-- Nav tabs -->
    <ul class="nav nav-tabs justify-content-center mt-5" id="myTab" role="tablist">
        @foreach ($categories as $category)
            <li class="nav-item" role="presentation">
            <button class="nav-link {{ $category->id == 1 ? 'active' : '' }}" id="{{ $category->slug }}-tab" data-bs-toggle="tab" data-bs-target="#{{ $category->slug }}" type="button" role="tab" aria-controls="{{ $category->slug }}" aria-selected="true">{{ $category->name }}</button>
            </li>
        @endforeach        
    </ul>
  
  <!-- Tab panes -->
  <div class="tab-content">
        @foreach ($categories as $category)
            <div class="tab-pane {{ $category->id == 1 ? 'active' : '' }}" id="{{ $category->slug }}" role="tabpanel" aria-labelledby="{{ $category->slug }}-tab">
                <div class="container px-5 my-5">
                    <div class="row gx-4">
                        @foreach ($category->photos as $photo )
                            <div class="col-lg-4">
                                <div class="position-relative mb-5">
                                    <p class="text-muted mb-0"> {{ $photo->category->name }} {{ $photo->unit->name }}</p>
                                    <img class="img-fluid rounded-3 mb-3" src="{{ $photo->url }}" alt="..." />
                                    <p class="text-muted">{!! $photo->caption !!}</p>
                                    
                                </div>
                            </div>                            
                        @endforeach  
                    </div>
                </div>            
            </div>            
        @endforeach        
  </div>

@endsection