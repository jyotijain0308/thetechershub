@extends('layouts.app')
@section('css')
@endsection
@section('content')



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
<div class="logo-content position-relative" style="background-image: url('/img/slider/hero-bg.jpg'); ">
	<div class="logo-content-overlay">
		<div class="container">
			<div class="hero d-flex px-md-5 text-center">
				<div class="icon-box portfolio-description px-md-5 text-light py-5 align-items-center">
					<h1>{{ $data['name'] }}</h1>
					<p class="mt-5 px-md-5 px-2">{{ $data['description'] }}</p>
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
<section id="services" class="services pt-1 pt-md-5">
	<div class="container" data-aos="fade-up">
		@if(!empty($data['title']))
		<div class="section-title">
			<h2>{{$data['title']}}</h2>
			<p>Check our {{$data['title']}}</p>
		</div>
		@endif
		<div class="row">
			@foreach($data['types'] as $type)
			<div class="{{ ($data['id']==2) ? 'col-xl-6 col-md-6' : 'col-xl-4 col-md-6' }}  d-flex align-items-stretch mt-md-4 mt-1" data-aos="zoom-in" data-aos-delay="200">
				<div class="icon-box w-100 py-5">
					@if(!empty($type['image']))
						@if($data['id']==2)
						<img src="{{ $type['image'] }}" class="img-fluid card-image"/>
						@else<div class="icon"><img src="{{ $type['image'] }}" class="img-fluid"  style="{{ ($data['id']==2) ? 'min-width:120px;' : 'min-width:0;' }}"/></div>
						@endif
					@endif
					@if(!empty($type['video']))
					<div class="mb-4">
						<iframe width="100%" height="auto" src="{{$type['video']}}" title="{{$type['title']}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
					</div>
					@endif
					<h4><a href="{{!empty($type['id']) ? " /detail/".$type['id'] : "javascript:void(0)" }}">{{ $type['title'] }}</a></h4>
					<p class="restrict-services-desc-text">{!! $type['description'] !!}</p>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>
@endif
<!-- End Services Section -->
@include('portfolio')
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