@extends('webadmin.layouts.main')


@section('webadmin-contents')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">User Profile</h4>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center justify-content-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                          <a href="{{ route('webadmin.home') }}">Home</a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">Ubah password</li>
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
                  
                  <form action="" method="POST" enctype="multipart/form-data">
                      @csrf
                      @method('put')
                      <div class="card-body">
                          <fieldset>                            
                              <div class="form-group mb-2">
                                  <label for="" >Name :</label>
                                  <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                              </div>
                              <div class="form-group mb-2">
                                  <label for="" >Username :</label>
                                  <input type="text" name="username" class="form-control" value="{{ $user->username }}">
                              </div>   
                              <div class="form-group mb-2">
                                  <?php  $roles = array("0"=>"user","1"=>"admin"); ?>
                                  <label for="" >Role :</label>
                                  <select name="is_admin" class="form-control">
                                      {{-- <option selected value> {{ $post->unit->name }} </option> --}}
                                      @foreach ($roles as $role =>$name)
                                          <option value="{{ $role }}"
                                          @if ($role == $user->is_admin)
                                              selected
                                          @endif
                                          >
                                              {{ $name }}
                                          </option>
                                      @endforeach
                                  </select>
                                  @error('is_admin')
                                  <div class="text-danger">
                                      Please select an valid unit
                                  </div>
                                  @enderror
                              </div> 
                              
                          </fieldset>
                      </div>
                      <div class="card-footer">
                          <button type="submit" class="btn btn-flat btn-primary" name="save" >Save</button>
                      </div>
                  </form>
              </div>
              <div class="card">
                <div class="border-bottom title-part-padding">
                    <h4 class="card-title mb-0">Ubah password</h4>
                </div>
                <form action="{{ route('webadmin.users-update',$user->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    
                    <div class="card-body">                        
                        <div class="form-group mb-2">
                            <label for="" >Default Password :</label>
                            <input type="text" name="password" class="form-control" value="password" >
                        </div>
                        <div class="form-group mb-2">
                            <label for="" >Password :</label>
                            <input type="password" name="password" class="form-control" placeholder="masukan password baru">
                            @error('password')<div class="text-danger">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group mb-2">
                            <label for="" >Konfimasi password :</label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="masukan password sekali lagi">
                            @error('password_confirmation')<div class="text-danger">{{ $message }}</div>@enderror
                        </div>        
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-flat btn-primary" name="reset_password">Reset Password</button>
                    </div>
                </form>            
              </div>
          </div>
      </div>
</div>
@endsection