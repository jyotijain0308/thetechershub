@extends('layouts.app')
@section('css')
@endsection
@section('content')

<style>
.portfolio-details .logotype li{
	background-color:#0d6efd;
	border-radius : 5px;
	margin-right: 10px;
}
.portfolio-details .logotype li a {
	color: #FFFFFF;
}
.logotype img {
	height : 100px;
	width: auto;
}
.logotype h2{
	font-size: 26px;
    font-weight: 700;
    margin-bottom: 20px;
	margin-top:20px;
}
</style>
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
{{ print_r($data) }}
<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
	<div class="container">
		<div class="row gy-4">
			<div class="col-lg-6">
				<div class="portfolio-details-slider">
					<div class="align-items-center">
						<img src="{{ url($data['large-image']) }}" class="img-fluid" alt="">
					</div>
				</div>
			</div>

			<div class="col-lg-6">
				<div class="portfolio-info">
					<h3>Service information</h3>
					@if($data['name']=='Design A Logo')
						<ul>
							<li><strong>Creative Design</strong>: 3</li>
							<li><strong>Revision on Final Logo</strong>: 2</li>
							<li><strong>Software</strong>: Adobe Illustrator</li>
							<li><strong>File Format</strong>:	AI as Source file</br>
																EPS to import in Coral Draw*</br>
																PNG, JPG - in Black, White, Gray colour</br>
																PDF - in original colour</br>
																JPG - Sqaure profile image for Social Media</li>
							<li><strong>Addon</strong>: Favicon - 16x16</br>
														Mockup</br>
														Visiting Card*</br>
														Letter Head*</br>
														Envelop*</li>
							<li><strong>Document</strong>: Upto 7 working days</li>
							<li><strong>Color Mode</strong>: CMYK</li>
							<li><strong>Resolution</strong>: 300 PPI</li>
						</ul>

					@elseif($data['name']=='Visiting / Business Card Design')
						<ul>
							<li><strong>Orientation</strong>: Horizontal / Vertical</li>
							<li><strong>Software</strong>: Adobe Illustrator</li>
							<li><strong>File Format</strong>:	AI as Source file</br>
																EPS to import in Coral Draw*</br>
																PDF - in original colour</li>
							<li><strong>Duration</strong>: Upto 2 working days</li>
							<li><strong>Color Mode</strong>: CMYK</li>
							<li><strong>Resolution</strong>: 300 PPI</li>
						</ul>
					else
						ruchiksdg
				@endif			
				</div>

				<div class="portfolio-description">
					<h2>{{ $data['name'] }}</h2>
					<p>{{ $data['description'] }}</p>
				</div>

			</div>
		</div>
	</div>
</section><!-- End Portfolio Details Section -->	

<!--Logo Types Section-->
<section id="logo_type" class="logotype">
	<div class="container">
		<div class="row">
			<div class="col-xl-4 mb-4">
				<div class="logocontent text-center">
						<img src="/img/servicedetail/Design-a-logo/Nasa.jpg" class="" alt="">
						<h2>Lettermark</h2>
						<p>When a company has long name and client wants to use initial of the full name and create simple logo with initial letters. - e.g. NASA</p>
				</div>
			</div>

			<div class="col-xl-4 mb-4">
				<div class="logocontent text-center">
						<img src="/img/servicedetail/Design-a-logo/coca-cola.jpg" class="" alt="">
						<h2>Wordmark</h2>
						<p>When a company has a succinct and distinct name. - e.g. Google / Coca-Cola</p>
				</div>
			</div>

			<div class="col-xl-4 mb-4">
				<div class="logocontent text-center">
						<img src="/img/servicedetail/Design-a-logo/Apple.png" class="" alt="">
						<h2>Pictorial</h2>
						<p>Already in market as an established company and want to represent brand identity with picture. - e.g. Apple / Twitter</p>
				</div>
			</div>

			<div class="col-xl-4 mb-4">
				<div class="logocontent text-center">
						<img src="/img/servicedetail/Design-a-logo/Pepsi.png" class="" alt="">
						<h2>Abstract</h2>
						<p>An abstract mark is a specific type of pictorial logo. Instead of being a recognizable image like an apple or a bird it’s an abstract geometric form that represents your business. - e.g. Pepsi</p>
				</div>
			</div>

			<div class="col-xl-4 mb-4">
				<div class="logocontent text-center">
						<img src="/img/servicedetail/Design-a-logo/harvard.png" class="" alt="">
						<h2>Emblem</h2>
						<p>Old style logo, An emblem logo consists of font inside a symbol or an icon; think badges, seals and crests</p>
				</div>
			</div>

			<div class="col-xl-4 mb-4">
				<div class="logocontent text-center">
						<img src="/img/servicedetail/Design-a-logo/kfc.png" class="" alt="">
						<h2>Mascot</h2>
						<p>Mascot logos are logos that involve an illustrated character. Often colorful, sometimes cartoonish, and most always fun, the mascot logo is a great way to create your very own brand spokesperson</p>
				</div>
			</div>
		</div>

		
	</div>	
</section>			
			<!-- <ul class="nav justify-content-center logotype mb-2">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="#">Lettermark / Monogram</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Wordmark</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Pictorial</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Abstract</a>
				</li>
			</ul>

			<ul class="nav justify-content-center logotype">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="#">Emblem</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Mascot</a>
				</li>
			</ul> -->
		
	
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