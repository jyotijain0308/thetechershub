@extends('layouts.app')
@section('css')
@endsection
@section('content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
	<div class="container">
		<div class="d-flex justify-content-between align-items-center">
			<h2>{{ $data['name'] }}</h2>
			<ol>
				<li><a href="index.html">Home</a></li>
				<li>{{ $data['name'] }}</li>
			</ol>
		</div>
	</div>
</section><!-- End Breadcrumbs -->

<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
	<div class="container">
		<div class="row gy-4">
			<div class="col-lg-6">
				<div class="portfolio-details-slider">
					<div class="align-items-center">
						<!-- <div class="swiper-slide"> -->
						<img src="{{ url($data['large-image']) }}" class="img-fluid" alt="">
						<!-- </div> -->
						<!-- <div class="swiper-slide">
							<img src="{{ $data['image'] }}" alt="">
						</div>
						<div class="swiper-slide">
							<img src="{{ $data['image'] }}" alt="">
						</div> -->
					</div>
					<!-- <div class="swiper-pagination"></div> -->
				</div>
			</div>
			<div class="col-lg-6">
				<div class="portfolio-info">
					<h3>Service information</h3>
					<ul>
						<li><strong>Category</strong>: Web design</li>
						<li><strong>Client</strong>: ASU Company</li>
						<li><strong>Project date</strong>: 01 March, 2020</li>
						<li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
					</ul>
				</div>
				<div class="portfolio-description">
					<h2>{{ $data['name'] }}</h2>
					<p>{{ $data['description'] }}</p>
				</div>
			</div>
		</div>
	</div>
</section><!-- End Portfolio Details Section -->
@endsection

@section('js')
<!-- Vendor JS Files -->
<script src="/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="/vendor/aos/aos.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/vendor/glightbox/js/glightbox.min.js"></script>
<script src="/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="/vendor/swiper/swiper-bundle.min.js"></script>
<script src="/js/php-email-form/validate.js"></script>
<script src="/js/main.js"></script>
@endsection