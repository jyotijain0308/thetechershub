@extends('layouts.app')
@section('css')
@endsection
@section('content')

<style>
	.logo-content {

		background-size: cover;
		background-position: center;
	}

	.logo-content-overlay {
		background: rgba(0, 0, 0, 0.3);
		padding: 100px 0px;
	}

	.logo-content .portfolio-description {
		color: #ffffff;
		text-align: center;
	}

	.logo-content .portfolio-description h2 {
		font-size: 28px;
	}

	.logo-content .portfolio-description p {
		font-size: 16px;
		margin-top: 16px;
	}

	.services .video-frame h4 {
		text-align: center;
		font-weight: 700;
		margin: 20px 0px;
		font-size: 24px;

	}

	.services .video-frame h4 a {
		color: #151515;
		transition: ease-in-out .3s;
	}
</style>

<!-- ======= Breadcrumbs ======= -->
<!-- <section id="breadcrumbs" class="breadcrumbs">
	<div class="container">
		<div class="d-flex justify-content-between align-items-center">
			<h2>{{ $data['name'] }}</h2>
			<ol>
				<li><a href="{{ url('/') }}">Home</a></li>
				<li>{{ $data['name'] }}</li>
			</ol>
		</div>
	</div>
</section> -->
<!-- End Breadcrumbs -->

<!-- =======Portfolio Description Section ======= -->
@php
$imageUrl = $data["large-image"];
@endphp
<div class="logo-content position-relative mt-90" style="background-image: url('{{$imageUrl}}')">
	<div class=" logo-content-overlay">
		<div class="container">
			<div class="d-flex justify-content-end px-md-5">
				<div class="portfolio-description px-md-5">
					<h2>{{ $data['name'] }}</h2>
					<p class="px-md-5 px-2">{{ $data['description'] }}</p>
					<a href="#contact" class="btn btn-md btn-primary scrollto mt-4">Request A Quote</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- =======End Portfolio Description Section ======= -->

<!-- =======Service Information Section ======= -->
<section id="portfolio-details" class="portfolio-details">
	<div class="container">
		<div class="row gy-4">
			<div class="col-lg-6">
				@if($data['id']==1 || $data['id']==2)
				<div class="portfolio-details-slider swiper">
					<div class="swiper-wrapper align-items-center">
						@if(!empty($data['portfolio']))
						@foreach($data['portfolio'] as $portfolio)
						<div class="swiper-slide">
							<img src="{{$portfolio['image']}}" class="img-fluid" alt="{{$portfolio['alt']}}">
						</div>
						@endforeach
						@endif
					</div>
					<div class="swiper-pagination"></div>
				</div>
				@else
				@foreach($data['portfolio'] as $portfolio)
				<img src="{{$portfolio['image']}}" class="img-fluid" alt="{{$portfolio['alt']}}">
				@endforeach
				@endif
			</div>
			<div class="col-lg-6">
				<div class="portfolio-info">
					<h3>Service information</h3>
					<ul>
						@if(!empty($data['info']))
						@foreach($data['info'] as $type)
						<li>
							<div class="row">
								<div class="col-4"><strong>{{$type['title']}}</strong>:</div>
								<div class="col-8">{!!$type['content']!!}</div>
							</div>
						</li>
						@endforeach
						@endif
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- =======End Service Information Section ======= -->

<!-- ======= Service Type Section ======= -->
@if(!empty($data['types']))
<section id="types" class="services pt-1 pt-md-5">
	<div class="container" data-aos="fade-up">
		<div class="section-title">
			<h2>Service Types</h2>
			<p>Check our Service Types</p>
		</div>
		<div class="row">
			@if($data['id']==7)
			@foreach($data['types'] as $type)
			<div class="col-xl-4">
				<div class="video-frame">
					<iframe width="420" height="315" src="{{$type['image']}}"></iframe>
					<h4><a href="">{{ $type['title'] }}</a></h4>
				</div>
			</div>
			@endforeach

			@else
			@foreach($data['types'] as $type)
			<div class="{{ ($data['id']==2) ? 'col-xl-6' : 'col-xl-4' }} col-md-6 d-flex align-items-stretch mt-md-4 mt-1" data-aos="zoom-in" data-aos-delay="200">
				<div class="icon-box">
					<div class="icon"><img src="{{ $type['image'] }}" class="img-fluid" /></div>
					<h4><a href="{{!empty($type['id']) ? " /detail/" : "javascript:void(0)" }}">{{ $type['title'] }}</a></h4>

					<p class="restrict-services-desc-text">{!! $type['description'] !!}</p>
				</div>
			</div>
			@endforeach
			@endif
		</div>
	</div>
</section>
@endif
<!-- End Services Section -->

<!-- =======Logo Type Section ======= -->
<!-- <section id="logotype" class="logotype">
	<div class="container">
		<div class="row">
			<h2 class="text-center">Logo Types</h2>
			@if(!empty($data['types']))
			@foreach($data['types'] as $type)
			<div class="{{ ($data['id']==1) ? 'col-xl-4' : 'col-xl-6' }} logobox">
				<div class="logopanel">
					<img src="/img/{{$type['image']}}" class="" alt="">
					<div class="logo-detail mt-4">
						<h4>
							<a href="{{!empty($type['id']) ? " /details/" : "javascript:void(0)" }}">
								{{$type['title']}}
							</a>
						</h4>
						<p>{{$type['description']}}</p>
					</div>
				</div>
			</div>
			@endforeach
			@endif
		</div>
	</div>
</section> -->
<!-- =======Logo Type Section ======= -->

@include('contact')
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