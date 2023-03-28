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

<section id="portfolio-details" class="portfolio-details">
	<div class="container">
		<div class="row gy-4">
			<div class="col-lg-6">
				<div class="portfolio-details-slider swiper">
					<div class="swiper-wrapper align-items-center">
						@foreach($data['portfolio'] as $portfolio)
							<div class="swiper-slide">
								<img src="{{$portfolio['image']}}" class="img-fluid" alt="{{$portfolio['alt']}}">
							</div>
						@endforeach
					  </div>
					  <div class="swiper-pagination"></div>
				</div>
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

				<div class="portfolio-description">
					<h2>{{ $data['name'] }}</h2>
					<p>{{ $data['description'] }}</p>
				</div>

			</div>
		</div>
	</div>
</section>

<section id="logo_type" class="logotype">
	<div class="container">
		<div class="row">
			@foreach($data['types'] as $type)
				<div class="col-md-4 col-sm-6 col-12 mb-4">
					<div class="logocontent">
						<img src="/img/{{$type['image']}}" class="" alt="">
						<h2>{{$type['title']}}</h2>
						<p>{{$type['description']}}</p>
					</div>
				</div>
			@endforeach
		</div>	
	</div>	
</section>

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