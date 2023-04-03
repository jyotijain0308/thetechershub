@extends('layouts.app')
@section('css')
@endsection
@section('content')

<style>
	.logotype {
		background-color: #eee;
	}

	.logotype h2 {
		color: #151515;
		font-size: 36px;
		font-weight: 700;
		text-transform: uppercase;
	}

	.logotype .logopanel {
		min-height: 355px;
		border-color: #ebebeb;
		position: relative;
		padding: 23px 30px 40px;
		display: flex;
		flex-direction: column;
		align-items: center;
		text-align: center;
		overflow: hidden;
		cursor: pointer;
		margin-bottom: 33px;
		border-radius: 8px 0 8px 8px;
		border: 1px solid #87dfeb;
		transition: .3s ease-in-out;

	}

	.logotype .logobox {
		padding-top: 45px;

	}

	.logotype .logobox:hover {
		color: #fff;
	}


	.logotype .logopanel:hover {
		background-color: #ffc451;
	}

	.logotype img {
		height: 100px;
		width: auto;
	}

	.logotype h2 {
		font-size: 26px;
		font-weight: 700;

	}

	.logo-content {
		background-image: url('/img/portfolio/images/md-enterprises.jpg');
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
</style>
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
	<div class="container">
		<div class="d-flex justify-content-between align-items-center">
			<h2>{{ $data['name'] }}</h2>
			<ol>
				<li><a href="{{ url('/') }}">Home</a></li>
				<li>{{ $data['name'] }}</li>
			</ol>
		</div>
	</div>
</section><!-- End Breadcrumbs -->

<!-- =======Portfolio Description Section ======= -->
<div class="logo-content">
	<div class="logo-content-overlay">
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

<!-- =======Logo Type Section ======= -->
<section id="logotype" class="logotype">
	<div class="container">
		<div class="row">
			<h2 class="text-center">Logo Types</h2>
			@if(!empty($data['types']))
			@foreach($data['types'] as $type)
			<div class="col-xl-4 logobox">
				<div class="logopanel">
					<img src="/img/{{$type['image']}}" class="" alt="">
					<div class="logo-detail mt-4">
						<h4>{{$type['title']}}</h4>
						<p>{{$type['description']}}</p>
					</div>
				</div>
			</div>
			@endforeach
			@endif
		</div>
	</div>
</section><!-- =======Logo Type Section ======= -->

<!-- =======Visiting Card Section ======= -->
<!-- <section class="visiting_card">
	<div class="container">
		<h2 class="h2_title wow fadeInDown animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInDown;">Types of visiting card</h2>
		<div class="row">
			<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="single-post2 wow fadeInLeft animated" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
					<div class="blog-thumb2">
						<a href="https://www.onicenterprises.com/blog/importance-of-personal-protective-equipment-in-the-healthcare-industry.htm" title="Importance of Personal Protective Equipment in the Healthcare Industry"><img src="https://www.onicenterprises.com/uploaded-files/blog/images/Importance-of-Personal-Protective-Equipment-in-the-Healthcare-Industry25.jpg" alt="Importance of Personal Protective Equipment in the Healthcare Industry" title="Importance of Personal Protective Equipment in the Healthcare Industry"></a>
					</div>
					<div class="blog-content2">
						<div class="b-meta">
							<div class="meta-info">
								<ul>
									<li><i class="fa fa-calendar"></i> 2022-05-31</li>
								</ul>
							</div>
						</div>
						<h5><a href="https://www.onicenterprises.com/blog/importance-of-personal-protective-equipment-in-the-healthcare-industry.htm" title="Importance of Personal Protective Equipment in the Healthcare Industry"><span>Importance of Personal Protective Equipment in the Healthcare Industry</span></a></h5>
						<p>Various doctors and health workers are closely working with patients suffering from different diseas</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>=======End Visiting Card Section ======= -->

<!-- <section id="logo_type" class="logotype">
	<div class="container">
		<div class="row">
			@if(!empty($data['types']))
				@foreach($data['types'] as $type)
					<div class="col-md-4 col-sm-6 col-12 mb-4">
						<div class="logocontent">
							
							<iframe width="420" height="315" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe> 
							<img src="/img/{{$type['image']}}" class="" alt="">
							<h2>{{$type['title']}}</h2>
							<p>{{$type['description']}}</p>
						</div>
					</div>
				@endforeach
			@endif	
		</div>	
	</div>	
</section> -->

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