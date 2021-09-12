@extends('layouts.main')


@section('content')
    <section class="py-5">
        <div class="container px-5">
            <div class="row justify-content-center align-item-center">
                <div class="col-lg-4">
                    <h3 class="mb-3 fw-bolder fs-4">Silahkan login!</h3>        
                    <form>
                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                                
                        <button class="w-100 btn btn-lg btn-primary mt-5" type="submit">Login</button>
                    </form>
                    <small class="mt-3 d-block text-center">Not registered? <a href="/register">Register Now!</a></small>
                    
                </div>
            </div>
        </div>

    </section>
@endsection