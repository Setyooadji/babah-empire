@extends('layouts.main')
@section('content')
	<!-- END nav -->
	<!-- carousel -->
	<section class="hero-wrap" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-center">
				<div class="col-lg-12 col-md-6 ftco-animate d-flex align-items-end">
					<div class="text">
						<h1 class="mb-3" style="font-size: 3.5rem;">Temukan Hunian Nyaman <span>Anda bersama Anugerah
								Pratama
								Lazuardi</span></h1>
						<p><a href="#" class="btn py-3 px-4" style="background-color: #FD4500;color:white;">View all
								properties</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end carousel -->
	<!-- opini -->
	<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12 heading-section text-center ftco-animate mb-5">
				<span class="subheading">Best Deal</span>
				<h2 class="mb-2">Promo</h2>
			</div>
		</div>
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
			<img style="height:500px" class="d-block w-100" src="data:image/jpeg;base64,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" alt="First slide">
			<div class="carousel-caption d-none d-md-block">
				<p><a href="{{ url('/ktk')}}" class="btn py-3 px-4" style="background-color: #FD4500;color:white;">Hubungi kami</a>
				</p>
			</div>
			</div>	
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		</div>
	</div>
		
	</section>

	

	<!-- services -->
	<section class="ftco-section ftco-no-pb ftco-no-pt" style="background-color: #E85F2C;">
		<div class="container">
			<div class="row d-flex no-gutters">
				<div class=" col-md-3 d-flex align-items-stretch ftco-animate">
					<div class="media block-6 services services-bg d-block text-center px-4 py-5"
						style=" background-color: #E85F2C;">
						<div class="icon d-flex justify-content-center align-items-center"><span
								class="flaticon-business"></span></div>
						<div class="media-body py-md-4">
							<h3>Lokasi Strategis</h3>
							<p>Lokasi yang strategis dan mudah dijangkau merupakan target kami untuk mempermudah
								konsumen memenuhi kubutuhan.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex align-items-stretch ftco-animate">
					<div class="media block-6 services services-bg services-darken d-block text-center px-4 py-5"
						style="background-color: #FA7341;">
						<div class="icon d-flex justify-content-center align-items-center"><span
								class="flaticon-home"></span></div>
						<div class="media-body py-md-4">
							<h3>Proses KPR mudah</h3>
							<p>Kami akan membantu anda dalam melakukan proses pencairan KPR dengan uang muka minimum
								untuk mendapatkan rumah hunian yang diimpikan.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex align-items-stretch ftco-animate">
					<div class="media block-6 services services-bg services-lighten d-block text-center px-4 py-5"
						style=" background-color: #EA6C3D;">
						<div class="icon d-flex justify-content-center align-items-center"><span
								class="flaticon-stats"></span></div>
						<div class="media-body py-md-4">
							<h3>Harga yang Bersaing</h3>
							<p>Kami hadir untuk membantu masyarakat yang menginginkan rumah minimalis dengan harga yang
								terjangkau.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex align-items-stretch ftco-animate">
					<div class="media block-6 services services-bg d-block text-center px-4 py-5 "
						style="background-color: #E85F2C;">
						<div class="icon d-flex justify-content-center align-items-center"><span
								class="flaticon-quarantine"></span></div>
						<div class="media-body py-md-4">
							<h3>Terpercaya</h3>
							<p>Kami telah menyelesaikan sepuluh proyek dengan menjaga kualitas dan kepuasan konsumen.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end services -->
	<!-- tipe rumah -->
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 heading-section text-center ftco-animate mb-5">
					<span class="subheading">Tipe Rumah</span>
					<h2 class="mb-2">Properti Unggulan</h2>
				</div>
			</div>
			<div class="row ftco-animate">
				<div class="col-md-12">
					<div class="carousel-properties owl-carousel">
						<!-- tipe -->
						@foreach($tipe as $t)
						<div class="item">
							<div class="property-wrap ftco-animate">
								<a href="{{ url('/prt/'.$t->tipe_id)}}" class="img" style="background-image: url( {{ url('/data_file/'.$t->file) }} );">
								</a>
								<div class="text">
									<ul class="property_list">
										<li>{{$t->deskripsi_tipe}}</li>
									</ul>
									<h3>{{ $t->nama_tipe }}</h3>
									@foreach($proyek as $p)
									@if($p->proyek_id === $t->proyek_id)
									<span class="location">{{$p->nama_proyek}}</span>
									@endif
									@endforeach
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end tipe rumah -->
	<!-- project -->
	<section class="ftco-section ftco-no-pt">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 heading-section text-center ftco-animate mb-5">
					<span class="subheading">Proyek</span>
					<h2 class="mb-2">Proyek Berjalan</h2>
				</div>
				<div class="card-grid">
					@foreach($proyek as $p)
					<a class="card" href="{{ url('/pyk/'.$p->proyek_id) }}">
						<div class="card__background"
							style="background-image: url( {{ url('/data_file/'.$p->file) }} )">
						</div>
						<div class="card__content">
							<p class="card__category">Proyek</p>
							<h3 class="card__heading">{{ $p->nama_proyek}}</h3>
							<p class="card__category">{{$p->alamat_proyek}}</p>
						</div>
					</a>
					@endforeach
				</div>
			</div>
	</section>
	<!-- end project -->
	<!-- cara pesan -->
	<section class="ftco-section services-section bg-darken">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 text-center heading-section heading-section-white ftco-animate">
					<span class="subheading">Booking</span>
					<h2 class="mb-3">Cara Booking</h2>
				</div>
			</div>
		</div>
	</section>
	<!-- end cara pesan -->
	<!-- marketing -->
	<section class="ftco-section testimony-section bg-light">
		<div class="container">
			<div class="row justify-content-center mb-5">
				<div class="col-md-7 text-center heading-section ftco-animate">
					<span class="subheading">Marketing</span>
					<h2 class="mb-3">Hubungi Marketing kami</h2>
				</div>
			</div>
			<div class="row ftco-animate">
				<div class="col-md-12">
					<div class="carousel-testimony owl-carousel">
						@foreach($marketing as $m)
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="text">
									<span class="fa fa-phone"></span>
									<p class="mb-4">Untuk melakukan proses booking, silahkan hubungi marketing kami.
										<br>
										<br>Email : {{ $m->email_marketing}}
										<br>No. Telp : {{ $m->notlp_marketing}}</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url( {{ url('/data_file/'.$m->file) }} )"></div>
										<div class="pl-3">
											<p class="name">{{ $m->nama_marketing}}</p>
											<span class="position">{{ $m->jabatan}}</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						@endforeach
						

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end marketing -->

