@extends('layout.frontend')

@section('content')
	<!-- Hero section  -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hero-item set-bg" data-setbg="{{asset('/frontend')}}/img/hero-slider/11.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-8">	
						</div>
					</div>
				</div>
			</div>
			<div class="hero-item set-bg" data-setbg="{{asset('/frontend')}}/img/hero-slider/22.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-8">
						</div>
					</div>
				</div>
			</div>
			<div class="hero-item set-bg" data-setbg="{{asset('/frontend')}}/img/hero-slider/33.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-8">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end  -->

	<!-- Services section  -->
	<section class="services-section">
		<div class="services-warp">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="service-item">
							<div class="si-head">
								<div class="si-icon">
									<img src="{{asset('/frontend')}}/img/icons/pollution.png" alt="">
								</div>
								<h5>Inspeksi Teknik Lapangan 1</h5>
							</div>
							<h6 align="center">1. Inspeksi Teknik Pabrik 1</h6>
							<br>
							<h6 align="center">2. Inspeksi Teknik Pabrik 2</h6>
							<br>
							<h6 align="center">3. Inspeksi Teknik Pabrik PPK,</h6>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="service-item">
							<div class="si-head">
								<div class="si-icon">
									<img src="{{asset('/frontend')}}/img/icons/pollution.png" alt="">
								</div>
								<h5>Inspeksi Teknik Lapangan 2</h5>
							</div>
							<h6 align="center">1. Inspeksi Teknik Pabrik 3</h6>
							<br>
							<h6 align="center">2. Inspeksi Teknik Pabrik 4</h6>
							<br>
							<h6 align="center">3. Inspeksi Teknik Pabrik 5</h6>
							<br>
							<h6 align="center">4. Inspeksi Teknik STG,BB & Jetty</h6>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="service-item">
							<div class="si-head">
								<div class="si-icon">
									<img src="{{asset('/frontend')}}/img/icons/pollution.png" alt="">
								</div>
								<h5>Inspeksi Teknik Khusus</h5>
							</div>
							<h6 align="center">1. Inspeksi Teknik Perbengkelan</h6>
							<br>
							<h6 align="center">2. Inspeksi Teknik NDT</h6>
							<br>
							<h6 align="center">3. Inspeksi Teknik QC</h6>
							<br>
							<h6 align="center">4. Inspeksi Teknik Khusus</h6>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- Services section end  -->

	<!-- Features section   -->
	<section class="features-section spad set-bg" data-setbg="{{asset('/frontend')}}/img/features-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-12">
					<div class="feature-box">
						<img height="240" src="{{asset('/frontend')}}/img/features/b.png" alt="">
						<div class="fb-text">
							<h5 align="center">Plant Inspection</h5>
							<p align="center">Departemen Inspeksi Teknik bertanggung jawab untuk menjamin reliability peralatan non-rotating pabrik. 
								<br>
								<br>
								<br></p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-12">
					<div class="feature-box">
						<img src="{{asset('/frontend')}}/img/features/c.png" alt="">
						<div class="fb-text">
							<h5 align="center">Engineering Inspection</h5>
							<p align="center">Departemen Inspeksi Teknik membuat rekomendasi perbaikan peralatan pabrik terutama non-rotating equipment, pengelasan, metode inspeksi untuk menunjang plant reliability pabrik. </p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-12">
					<div class="feature-box">
						<img src="{{asset('/frontend')}}/img/features/e.png" alt="">
						<div class="fb-text">
							<h5 align="center">NDT/DT Inspection</h5>
							<p align="center">Departemen Inspeksi Teknik melakukan kegiatan pemeriksaaan non destructive dan destructive untuk menunjang evaluasi kerusakan peralatan sehingga kegagalan serupa tidak terjadi. </p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="feature-box">
						<img height="290" src="{{asset('/frontend')}}/img/features/h.jpg" alt="">
						<div class="fb-text">
							<h5 align="center">QC Inspection</h5>
							<p align="center">Departemen Inspeksi Teknik melakukan Quality Control barang masuk pabrik. </p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="feature-box">
						<img src="{{asset('/frontend')}}/img/features/d.png" alt="">
						<div class="fb-text">
							<h5 align="center">QA Inspection</h5>
							<p align="center">Departemen Inspeksi Teknik melakukan perencanaan dan perancangan perbaikan saat Shutdown/Turn Arround. </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Features section end  -->


	<!-- Clients section  -->
	<section class="clients-section spad">
		<div class="container">
			<h1 align="center">DEPARTEMEN INSPEKSI TEKNIK</h1>
			<br>
			<div class="row">
				<div class="col-lg-4 col-md-12">
					<div class="feature-box">
						<img src="{{asset('/frontend')}}/img/features/g.png" alt="">
						<div class="fb-text">
							<h5 align="center">CREATIVE</h5>
						</div>
					</div>
				</div>
					<div class="col-lg-4 col-md-12">
					<div class="feature-box">
						<img src="{{asset('/frontend')}}/img/features/f.png" alt="">
						<div class="fb-text">
							<h5 align="center">INNOVATIVE</h5>
						</div>
					</div>
					</div>
				<div class="col-lg-4 col-md-12">
					<div class="feature-box">
						<img src="{{asset('/frontend')}}/img/features/ab.png" alt="">
						<div class="fb-text">
							<h5 align="center">IMPROVEMENT</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Clients section end  -->
	<!-- Testimonial section -->
	<section class="testimonial-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 p-0">
					<div class="testimonial-bg set-bg" data-setbg="{{asset('/frontend')}}/img/testimonial-bg.jpg"></div>
				</div>
				<div class="col-lg-6 p-0">
					<div class="testimonial-box">
						<div class="testi-box-warp">
							<h2>ISTEK PUSRI</h2>
							<div class="testimonial-slider owl-carousel">
								<div class="testimonial">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. Donec consequat arcu et commodo interdum. Vivamus posuere lorem lacus.Lorem ipsum dolor sit amet, consecte-tur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est.</p>
									<img src="{{asset('/frontend')}}/img/testimonial-thumb.jpg" alt="" class="testi-thumb">
									<div class="testi-info">
										<h5>Michael Smith</h5>
										<span>CEO Industrial INC</span>
									</div>
								</div>
								<div class="testimonial">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. Donec consequat arcu et commodo interdum. Vivamus posuere lorem lacus.Lorem ipsum dolor sit amet, consecte-tur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est.</p>
									<img src="{{asset('/frontend')}}/img/testimonial-thumb.jpg" alt="" class="testi-thumb">
									<div class="testi-info">
										<h5>Michael Smith</h5>
										<span>CEO Industrial INC</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Testimonial section end  -->


	<!-- Call to action section  -->
	<section class="cta-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 d-flex align-items-center">
					<h2>We produce or supply Goods, Services, or Sources</h2>
				</div>
				<div class="col-lg-3 text-lg-right" >
					<a href="#" class="site-btn sb-dark">contact us</a>
				</div>
			</div>
		</div>
	</section>
	<!-- Call to action section end  -->

	<!-- Video section  -->
	<section class="video-section spad" >
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="video-text">
						<h2>We produce or supply Goods, & Services</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. Donec consequat arcu et commodo interdum. Vivamus posuere lorem lacus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. Donec consequat arcu et commodo interdum. Vivamus posuere lorem lacus.Lorem ipsum dolor sit amet, consectetur.</p>
						<a href="#" class="site-btn">contact us</a>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="video-box set-bg" data-setbg="{{asset('/frontend')}}/img/video-box.jpg">
						<a href="https://www.youtube.com/watch?v=wbnaHgSttVo" class="video-popup">
							<i class="fa fa-play"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Video section end  -->
@stop