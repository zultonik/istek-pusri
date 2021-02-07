<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Inspeksi Teknik | PT.PUSRI PALEMBANG</title>
	<meta charset="UTF-8">
	<meta name="description" content="Industry.INC HTML Template">
	<meta name="keywords" content="industry, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Favicon -->
	<link href="{{asset('/frontend')}}/img/pusriico.ico" rel="shortcut icon"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i&display=swap" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('/frontend')}}/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="{{asset('/frontend')}}/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="{{asset('/frontend')}}/css/magnific-popup.css"/>
	<link rel="stylesheet" href="{{asset('/frontend')}}/css/slicknav.min.css"/>
	<link rel="stylesheet" href="{{asset('/frontend')}}/css/owl.carousel.min.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="{{asset('/frontend')}}/css/style.css"/>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section  -->
	<header class="header-section clearfix">
		<div class="header-top">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6">
						<p>DEPARTEMENT INSPEKSI TEKNIK</p>
					</div>
					<div class="col-md-6 text-md-right">
						<p>PT PUPUK SRIWIJAYA PALEMBANG</p>
					</div>
				</div>
			</div>
		</div>
		<div class="site-navbar">
			<!-- Logo -->
			<a href="http://pusri.co.id/" class="site-logo">
				<img src="{{asset('/frontend')}}/img/logo.png" alt="" width="200">
			</a>
			<div class="header-right">
				<div class="header-info-box">
					<div class="hib-icon">
						<img src="{{asset('/frontend')}}/img/icons/phone.png" alt="" class="">
					</div>
					<div class="hib-text">
						<h6>0711-XXX-XXX</h6>
						<p>XXX@pusri.co.id</p>
					</div>
				</div>
				<div class="header-info-box">
					<div class="hib-icon">
						<img src="{{asset('/frontend')}}/img/icons/map-marker.png" alt="" class="">
					</div>
					<div class="hib-text">
						<h6>Palembang</h6>
						<p>Sumatera Selatan</p>
					</div>
				</div>
				<button class="search-switch"><i class="fa fa-search"></i></button>
			</div>
			<!-- Menu -->
			<nav class="site-nav-menu">
				<ul>
					<li class="active"><a href="/">Home</a></li>
					<li><a href="#">About us</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="/login">Login</a></li>
				</ul>
			</nav>

		</div>
	</header>
	<!-- Header section end  -->
	
	@yield('content')


	<!-- Footer section -->
	<footer class="footer-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-widget about-widget">
						<img src="{{asset('/frontend')}}/img/logo.png" alt="">
						<p>Lorem ipsum dolor sit amet, consec-tetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. Donec consequat arcu et commodo interdum. </p>
						<div class="footer-social">
							<a href="https://www.facebook.com/profile.php?id=100013416165552" target="_blank"><i class="fa fa-facebook"></i></a>
							<a href="http://www.twitter.com/pusripalembang" target="_blank"><i class="fa fa-twitter"></i></a>
							<a href="https://www.instagram.com/pusripalembang/?hl=id" target="_blank"><i class="fa fa-instagram"></i></a>
							<a href="http://www.youtube.com/channel/UC_wRlJ5Vb2QZ8nXercC4dUQ" target="_blank"><i class="fa fa-youtube"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="footer-widget">
						
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="footer-widget">
						
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-7">
					<div class="footer-widget">
						<h2 class="fw-title">Contact Us</h2>
						<div class="footer-info-box">
							<div class="fib-icon">
								<img src="{{asset('/frontend')}}/img/icons/map-marker.png" alt="" class="">
							</div>
							<div class="fib-text">
								<p>Palembang<br>Sumatera Selatan</p>
							</div>
						</div>
						<div class="footer-info-box">
							<div class="fib-icon">
								<img src="{{asset('/frontend')}}/img/icons/phone.png" alt="" class="">
							</div>
							<div class="fib-text">
								<p>0711-XXX-XXX<br>XXX@pusri.co.id</p>
							</div>
						</div>
						<form class="footer-search">
							<input type="text" placeholder="Search">
							<button><i class="fa fa-search"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-buttom">
			<div class="container">
			<div class="row">
				<div class="col-lg-4 order-2 order-lg-1 p-0">
					<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="http://pusri.co.id" target="_blank"> PT PUPUK SRIWIJAYA PALEMBANG </a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
				</div>
				<div class="col-lg-7 order-1 order-lg-2 p-0">
					<ul class="footer-menu">
						<li class="active"><a href="/">Home</a></li>
						<li><a href="#">About us</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="/login">Login</a></li>
					</ul>
				</div>
			</div>
		</div>
		</div>
	</footer>
	<!-- Footer section end -->

	<!-- Search model -->
	<div class="search-model">
		<div class="h-100 d-flex align-items-center justify-content-center">
			<div class="search-close-switch">+</div>
			<form class="search-model-form">
				<input type="text" id="search-input" placeholder="Search here.....">
			</form>
		</div>
	</div>
	<!-- Search model end -->
	
	<!--====== Javascripts & Jquery ======-->
	<script src="{{asset('/frontend')}}/js/jquery-3.2.1.min.js"></script>
	<script src="{{asset('/frontend')}}/js/bootstrap.min.js"></script>
	<script src="{{asset('/frontend')}}/js/jquery.slicknav.min.js"></script>
	<script src="{{asset('/frontend')}}/js/owl.carousel.min.js"></script>
	<script src="{{asset('/frontend')}}/js/circle-progress.min.js"></script>
	<script src="{{asset('/frontend')}}/js/jquery.magnific-popup.min.js"></script>
	<script src="{{asset('/frontend')}}/js/main.js"></script>

	</body>
</html>
