<!DOCTYPE html>
<html lang="en">

<head>
	<title>Anugerah Pratama Lazuardi</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap"
		rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">

	<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

	<link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/stylecard.css') }}">

</head>

<body>
	<!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="{{ url('/proyek') }}">Anugerah Pratama Lazuardi</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
				aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="{{ url('/') }}" class="nav-link">Beranda</a></li>
					<li class="nav-item"><a href="{{ url('/mkt') }}" class="nav-link">Marketing</a></li>
					<li class="nav-item"><a href="{{ url('/prt')}}" class="nav-link">Properti</a></li>
					<li class="nav-item"><a href="{{ url('/ktk')}}" class="nav-link">Kontak</a></li>
				</ul>
			</div>
		</div>
	</nav>
<!-- end navbar -->
<!-- isi page -->
@yield('content')

<!-- end isi page -->
<!-- footer -->

	<footer class="ftco-footer ftco-section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md-4">
					<div class="ftco-footer-widget mb-5">
						<h2 class="ftco-heading-2">Anugerah Pratama Lazuadi</h2>
							<ul lass="list-unstyled" style="list-style-type: none;">
								<li><a href="https://www.google.co.id/maps/place/Jl.+Sukup+Baru+No.20,+Pasir+Endah,+Kec.+Ujung+Berung,+Kota+Bandung,+Jawa+Barat+40619/@-6.9116075,107.6907347,18.75z/data=!4m5!3m4!1s0x2e68dd47138f3305:0x6f66f8f3bec48fc3!8m2!3d-6.9113781!4d107.6908735?hl=id&" target="_blank"><span class="icon fa fa-map mr-2"></span><span class="text">Sukup Baru 20,Bandung, Indonesia</span></li>
								
                                <li><a><span class="icon fa fa-phone mr-2" disabled></span><span class="text">022 7833916</span></a></li>

								<li><a href="https://www.instagram.com/anugerahpratamalazuard/" target="_blank"><span class="icon fa fa-instagram mr-2"></span><span
											class="text">anugerahpratamalazuard</span></a></li>
							</ul>
					</div>
				</div>
				<div class="col-md-4">
					<div class="ftco-footer-widget mb-4 ml-md-4">
						<h2 class="ftco-heading-2">Jam Kerja</h2>
						<ul class="list-unstyled">
							<li><a><span class="fa fa-chevron-right mr-2"></span>Senin - Jumat : 9.00 am - 18.00 pm</span></a></li>
							<li><a><span class="fa fa-chevron-right mr-2"></span>Sabtu : 9.00 am - 16.00 pm</a></li>
							<li><a><span class="fa fa-chevron-right mr-2"></span>Minggu : Libur</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">

					<p>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>
							document.write(new Date().getFullYear());
						</script> All rights reserved | This template is made with <i class="fa fa-heart"
							aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
				</div>
			</div>
		</div>
	</footer>



	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" /></svg></div>


	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
	<script src="{{ asset('js/popper.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
	<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
	<script src="{{ asset('js/scrollax.min.js') }}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
	</script>
	<script src="{{ asset('js/google-map.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>

</body>

</html>