@extends('layouts.new_main')

@section('content')
    <!-- header -->
    <section class="hero-wrap hero-wrap-2" style="background-image: url(/front/images/sd_front.jpg);">
        <div class="overlay"></div>
        <div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<h1 class="mb-2 bread">SDI Ramah Anak</h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>SDI Ramah Anak <i class="ion-ios-arrow-forward"></i></span></p>
				</div>
			</div>
        </div>
    </section>
    <!-- visi misi -->
    <section class="ftco-section ftco-no-pt ftc-no-pb">
		<div class="container">
			<div class="row">
				<div class="col-md-5 order-md-last wrap-about py-5 wrap-about bg-light">
					<div class="text px-4 ftco-animate">
			            <h2 class="mb-4">Pengantar Kepala Sekolah</h2>
                        <p>  Ahlan wa sahlan, Kami ucapkan Selamat datang di Official Website resmi Sekolah Islam Ramah Anak yang di dalamnya terdapat dinformasi lengkap tentang SD Islam Ramah Anak.</p>
						<p>Pada era globalisasi dan pesatnya Teknologi Informasi dan Komunikasi ini, tidak dipungkiri bahwa keberadaan sebuah website untuk suatu organisasi, termasuk SD Islam Ramah Anak, sangatlah penting. Wahana website dapat digunakan sebagai media penyebarluasan informasi-informasi dari sekolah, yang memang harus diketahui oleh stake holder secara luas. Selain itu, website juga dapat menjadi sarana promosi sekolah yang cukup efektif. Berbagai kegiatan positif sekolah dapat diunggah, disertai gambar-gambar yang relevan, sehingga masyarakat dapat mengetahui prestasi-prestasi yang telah berhasil diraih oleh siswa siswi SD Islam Ramah Anak.</p>
						<p>Berangkat dari visi dan misi SD Islam Ramah Anak dimana tujuan kami sebagai sekolah Islam berbasis Inklusi yang ingin menjadi unggul di kota Depok semoga dapat terwujud. Oleh karena itu saran dan tanggapan yang konstruktif dari semua pihak sangat kami harapkan untuk terus bisa menghadirkan pelayanan pendidikan yang berkualitas dan ramah untuk semua anak.</p>
						{{-- <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. And if she hasn’t been rewritten, then they are still using her.</p> --}}
						{{-- <p><a href="#" class="btn btn-secondary px-4 py-3">Read More</a></p> --}}
					</div>
				</div>
				<div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
		            <h2 class="mb-4">Visi Misi Sekolah</h2>
					<p>SD yang ramah anak dan menjadi pribadi yang kuat, ceria, cerdas, mandiri, dan berakhlak islami.</p>
					<div class="row mt-5">
						<div class="col-lg-6">
							<div class="services-2 d-flex">
								<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-security"></span></div>
								<div class="text">
									<h3>Pendidikan karakter</h3>
									<p>Mengenal dan mengembangkan potensi bakat individu siswa untuk membentuk karakter anak yang religius, nasionalis, mandiri, berintergritas, dan gotong royong.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="services-2 d-flex">
								<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-reading"></span></div>
								<div class="text">
									<h3>Pendidikan Islami</h3>
									<p>Menumbuhkan ekosistem pembelajaran yang islami.</p>
								</div>
							</div>
						</div>						
						<div class="col-lg-6">
							<div class="services-2 d-flex">
								<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-education"></span></div>
								<div class="text">
									<h3>Mengenal tanah air</h3>
									<p>Menumbuhkan ekosistem pembelajaran yang nasionalis.</p>
								</div>
							</div>
						</div>						
						<div class="col-lg-6">
							<div class="services-2 d-flex">
								<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-kids"></span></div>
								<div class="text">
									<h3>Mutu Sekolah</h3>
									<p>Terlaksananya manajemen sekolah yang responsif dan akuntable.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


    <!-- program -->
    <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-8 text-center heading-section ftco-animate">
					<h2 class="mb-4"><span>Program</span> Pendidikan</h2>
					<p>Kurikulum yang digunakan adalah kurikulum nasional 2013 dengan pendekatan pembelajaran tematik.</p>
				</div>
			</div>	
			<div class="row">
                <div class="col-md-6 course d-lg-flex ftco-animate">
					<div class="img" style="background-image: url(/front/images/program_1.jpg);"></div>
					<div class="text bg-light p-4">
						<h3><a href="#">Klinik Belajar</a></h3>
						{{-- <p class="subheading"><span>Class time:</span> 9:00am - 10am</p> --}}
						<p>Mahir dalam membaca, tulis, dan hitung. Mengembangakan kecerdasan intelektual, psikomotorik, dan emosional siswa.</p>
					</div>
				</div>
				<div class="col-md-6 course d-lg-flex ftco-animate">
					<div class="img" style="background-image: url(/front/images/program_2.jpg);"></div>
					<div class="text bg-light p-4">
						<h3><a href="#">Tahfidz Quran</a></h3>
						{{-- <p class="subheading"><span>Class time:</span> 9:00am - 10am</p> --}}
						<p>Dengan Menggunakan methode UMMI para siswa diharapkan dapat membaca Al-Quran dengan lancar dan menghafal 15 juz.</p>
					</div>
				</div>
				<div class="col-md-6 course d-lg-flex ftco-animate">
					<div class="img" style="background-image: url(/front/images/program_3.jpg);"></div>
					<div class="text bg-light p-4">
						<h3><a href="#">Pembelajaran Bahasa</a></h3>
						{{-- <p class="subheading"><span>Class time:</span> 9:00am - 10am</p> --}}
						<p>Siswa diharapkan memiliki keterampilan komunikasi menggunakan Bahasa Daerah dan Bahasa Inggris sederhana. Mengenal bahasa daerah untuk membangun rasa cinta terhadap tanah air. </p>
					</div>
				</div>
				<div class="col-md-6 course d-lg-flex ftco-animate">
					<div class="img" style="background-image: url(/front/images/program_4.jpg);"></div>
					<div class="text bg-light p-4">
						<h3><a href="#">Ibadah Harian</a></h3>
						{{-- <p class="subheading"><span>Class time:</span> 9:00am - 10am</p> --}}
						<p>Membangun kebiasaan shalat, zikir dan doa harian.</p>
					</div>
				</div>
				<div class="col-md-6 course d-lg-flex ftco-animate">
					<div class="img" style="background-image: url(/front/images/program_6.jpg);"></div>
					<div class="text bg-light p-4">
						<h3><a href="#">Mengenal Tokoh</a></h3>
						{{-- <p class="subheading"><span>Class time:</span> 9:00am - 10am</p> --}}
						<p>Mempelajari sejarah dan sirah nabawiyah untuk mengenal dan meneladani tokoh-tokoh islam dan pejuang kemerdekaan. Serta membangun rasa cinta pada tanah air.</p>
					</div>
				</div>
                <div class="col-md-6 course d-lg-flex ftco-animate">
					<div class="img" style="background-image: url(/front/images/program_6.jpg);"></div>
					<div class="text bg-light p-4">
						<h3><a href="#">Quran Camp</a></h3>
						{{-- <p class="subheading"><span>Class time:</span> 9:00am - 10am</p> --}}
						<p></p>
					</div>
				</div>
                <div class="col-md-6 course d-lg-flex ftco-animate">
					<div class="img" style="background-image: url(/front/images/program_6.jpg);"></div>
					<div class="text bg-light p-4">
						<h3><a href="#">Komputer</a></h3>
						{{-- <p class="subheading"><span>Class time:</span> 9:00am - 10am</p> --}}
						<p>Mengenal dan mampu mengoperasikan dasar komputer.</p>
					</div>
				</div>
                <div class="col-md-6 course d-lg-flex ftco-animate">
					<div class="img" style="background-image: url(/front/images/program_6.jpg);"></div>
					<div class="text bg-light p-4">
						<h3><a href="#">Educational Filedtrip</a></h3>
						{{-- <p class="subheading"><span>Class time:</span> 9:00am - 10am</p> --}}
						<p></p>
					</div>
				</div>
                <div class="col-md-6 course d-lg-flex ftco-animate">
					<div class="img" style="background-image: url(/front/images/program_6.jpg);"></div>
					<div class="text bg-light p-4">
						<h3><a href="#">SDIRA Camp</a></h3>
						{{-- <p class="subheading"><span>Class time:</span> 9:00am - 10am</p> --}}
						<p></p>
					</div>
				</div>
                <div class="col-md-6 course d-lg-flex ftco-animate">
					<div class="img" style="background-image: url(/front/images/program_5.jpg);"></div>
					<div class="text bg-light p-4">
						<h3><a href="#">Ekstrakurikuler</a></h3>
						{{-- <p class="subheading"><span>Class time:</span> 9:00am - 10am</p> --}}
						<p>Science & Math Club, English Club, Robotic club, Futsal, Karate, Kid Chef, Menggambar, Desain Grafis.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

    <!-- galeri -->
    <section class="ftco-gallery">
    	<div class="container-wrap">
    		<div class="row no-gutters">
				@foreach ($photos as $photo )
					@php $path = Storage::disk('public')->url('galeri/'.$photo->url); @endphp
					<div class="col-md-3 ftco-animate">
						<a href="{{ asset($path) }}" class="gallery image-popup img d-flex align-items-center" style="background-image: url('{{ asset($path) }}') ;">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
								<span class="icon-image"></span>
                                {{-- <p class="text-muted mb-0">{{ $photo->unit->name }}</p> --}}
							</div>
						</a>
					</div>
				@endforeach    
        	</div>
    	</div>
    </section>
@endsection