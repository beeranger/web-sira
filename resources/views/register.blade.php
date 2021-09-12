@extends('layouts.main')


@section('content')
<div class="section py-5">
    <div class="container px-5">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <main class="form-registration">
                    <h3 class="mb-3  fs-4 fw-bolder">Form registrasi akun</h3>        
                    <form>
                        <div class="form-floating">
                            <input type="name" class="form-control rounded-top" id="name" placeholder="name">
                            <label for="floatingInput">Name</label>
                        </div>
                        <div class="form-floating">
                            <input type="username" class="form-control" id="username" placeholder="username">
                            <label for="floatingInput">Username</label>
                        </div>
                        <div class="form-floating">
                            <input type="email" class="form-control" id="email" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control rounded-bottom" id="password" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                                
                        <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Register</button>
                    </form>
                    <small class="mt-3 d-block text-center">Already registered? <a href="/login">Login!</a></small>
                </main>
            </div>
        </div>
    </div>
</div>

@endsection