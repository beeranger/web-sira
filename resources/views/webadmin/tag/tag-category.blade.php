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
                            <li class="breadcrumb-item active" aria-current="page">List unit</li>
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
                        <a href="{{ route('webadmin.tag-category-create') }}" class="btn btn-light-primary text-primary  btn-lg px-4 fs-4 font-weight-medium""><i data-feather="plus" class="feather-sm"></i>&nbsp; Tambah</a>
                        {{-- <button type="button" class="btn btn-light-primary text-primary  btn-lg px-4 fs-4 font-weight-medium" data-bs-toggle="modal" data-bs-target="#tambahkategoriModal">
                            <i data-feather="plus" class="feather-sm"></i>&nbsp; Tambah
                        </button>                                                     --}}
                        <div class="table-responsive">
                            <table id="table_categories" class="table table-striped table-bordered text-nowrap">
                                <thead>
                                    <!-- start row -->
                                    <tr>
                                        <th>No.</th>
                                        <th>Kategori</th>                                   
                                        <th> </th>
                                        <th> </th>
                                    </tr> <!-- end row -->
                                </thead>
                                <tbody>
                                    <!-- start row -->
                                    @foreach ($categories as $category)
                                    <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $category->name }}</td>                                        
                                            <td> 
                                                <a href="{{ route('webadmin.tag-category-edit',$category->id) }}"><i class = "mdi mdi-pencil"></i></a>
                                               
                                            </td>
                                            <td>
                                                <form action="{{ route('webadmin.tag-category-delete',$category->id) }}" method="post" class="d-inline">                
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger"><i class ="mdi mdi-delete"></i></button>
                                                </form> 
                                            </td>
                                        </tr>
                                    @endforeach
                                    <!-- end row -->        
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>    

    
@endsection

@section('extra-js')
<script>
    $(document).ready( function () {
        $('#table_categories').DataTable();
    } );
</script>

@endsection