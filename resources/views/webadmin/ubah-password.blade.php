@extends('webadmin.layouts.main')

@section('webadmin-contents')
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
                    <h4 class="card-title mb-0">Form Ubah Password</h4>
                </div>
                <form action="{{ route('webadmin.change-password',$user->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    
                    <div class="card-body">                       

                        <div class="form-group mb-2">
                            <label for="" >Username :</label>
                            <input type="text" name="username" class="form-control" value="{{ $user->username }}">
                        </div>                         
                        <div class="form-group mb-2">
                            <label for="" >Password baru:</label>
                            <input type="password" name="password" class="form-control" >
                            @error('password')<div class="text-danger">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group mb-2">
                            <label for="" >Konfimasi password baru:</label>
                            <input type="password" name="password_confirmation" class="form-control" >
                            @error('password_confirmation')<div class="text-danger">{{ $message }}</div>@enderror
                        </div> 
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-flat btn-primary" name="reset_password">Ganti Password</button>
                    </div>
                </form>            
            </div>    
        </div>
    </div>
</div>
@endsection