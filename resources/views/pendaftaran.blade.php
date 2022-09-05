@extends('layouts.main')

@section('content')
    <header class="py-5 bg-dark" >
        <div class="container px-5 " style="background-image: url('')">
            <div class="row gx-5 align-items-center " >
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-xl-start"">
                        <h1 class="display-5 fw-bold text-warning">PPDB SI Ramah Anak</h1>
                        <p class="col-lg-8 text-normal text-white">Selamat datang di sistem PPDB online SI Ramah Anak. Sebelum mendaftar mohon membaca lebih mengenai panduan pendaftaran online siswa baru. Silahkan login terlebih dahulu, Apabila anda belum mempunyai akun, silahkan klik tombol ‘Register’ di bawah ini. </p>
                        <a class="btn btn-warning btn-md mt-4" type="button" href="/login">Login</a>
                        <a class="btn btn-warning btn-md mt-4 mx-4" type="button" href="/register">Register</a>
                    </div>                    
                </div>
                <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="https://source.unsplash.com/1280x720/?school,students,moeslem-student" alt="..." /></div>
            </div>
        </div>
    </header>
@endsection