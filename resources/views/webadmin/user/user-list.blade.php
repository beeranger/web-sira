@extends('webadmin.layouts.main')


@section('webadmin-contents')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">User</h4>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center justify-content-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('webadmin.home') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">List User</li>
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
                    <a href="{{ route('webadmin.users-create') }}" class="btn btn-primary mb-2"><i data-feather="plus" class="feather-sm"></i>&nbsp; Tambah</a>                    
                    @if ($users->count())
                    <div class="table-responsive">
                        <table id="table_users" class="table table-striped table-bordered text-nowrap">
                            <thead>
                                <!-- start row -->
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                    <th> </th>
                                </tr> <!-- end row -->
                            </thead>
                            <tbody>
                                <!-- start row -->
                                @foreach ($users as $user)
                                <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->username }}</td>
                                        <td>
                                            @if ($user->is_admin)
                                                <p>Admin</p>
                                            @else
                                                <p>User</p>
                                            @endif
                                        </td>                                        
                                        <td><a href="{{ route('webadmin.users-edit',$user->id) }}"><i class = "mdi mdi-pencil"></i></a>
                                        </td>
                                        <td>
                                            <form action="{{ route('webadmin.users-delete',$user->id) }}" method="post" class="d-inline">                
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
                        {{-- @foreach ($posts as $post)
                            <!--Modal-->
                            <div class="modal fade" id="deleteModal{{ $post->id }}" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header d-flex align-items-center">
                                            <h5 class="modal-title" id="deleteModal">Hapus Posting</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body" >
                                            <p class="text-wrap">Apakah yakin menghapus Postingan ini "{{ $post->title }}"?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                            <form action="{{ route('webadmin.delete',$post->id) }}" method="post" class="d-inline">                
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Hapus data</button>
                                            </form>                                        
                                        </div>        
                                    </div>
                                </div>
                            </div>
                                                            
                        @endforeach --}}
                        
                    @else
                        <div class="alert alert-info text-center" style="width:50%; margin: 0 auto">
                            <h4>No Records Available</h4>
                        </div>
                    @endif                        
                </div>
            </div>
        </div>
    </div>    
</div>    
    
@endsection


@section('extra-js')
    <script>
        $(document).ready( function () {
            $('#table_users').DataTable();
        } );
    </script>
    
@endsection