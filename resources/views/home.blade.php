@extends('layouts.app')
@section('css')
@endsection
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center">
	<div class="container" data-aos="fade-up">
		<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
			<div class="col-xl-6 col-lg-8">
				<h1>{{config('app.name')}}</h1>
				<h2>A New Digital Experience!</h2>
			</div>
		</div>
		<div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
			<div class="col-xl-2 col-md-4">
				<div class="icon-box" style="padding:30px 10px;">
					<img src="/img/slider/001-abilities.png" class="" alt="">
					<h3 style="font-size:16px;"><a href="">Professional Expertise</a></h3>
				</div>
			</div>
			<div class="col-xl-2 col-md-4">
				<div class="icon-box" style="padding:30px 10px;">
					<img src="/img/slider/003-relationship.png" class="" alt="">
					<h3 style="font-size:16px;"><a href="">Commitment</a></h3>
				</div>
			</div>
			<div class="col-xl-2 col-md-4">
				<div class="icon-box" style="padding:30px 10px;">
					<img src="/img/slider/004-digital-assistant.png" class="" alt="">
					<h3 style="font-size:16px;"><a href="">Virtual Consultant</a></h3>
				</div>
			</div>
			<div class="col-xl-2 col-md-4">
				<div class="icon-box" style="padding:30px 10px;">
					<img src="/img/slider/005-monitoring.png" class="" alt="">
					<h3 style="font-size:16px;"><a href="">Quality</a></h3>
				</div>
			</div>
			<div class="col-xl-2 col-md-4">
				<div class="icon-box" style="padding:30px 10px;">
					<img src="/img/slider/economic.png" class="" alt="">
					<h3 style="font-size:16px;"><a href="">Cost Effective</a></h3>
				</div>
			</div>
		</div>
	</div>
</section><!-- End Hero -->

<main id="main">
	<!-- ======= About Section ======= -->
	<section id="about" class="about">
		<div class="container" data-aos="fade-up">
			<div class="row">
				<div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
					<img src="/img/about/about.jpg" class="img-fluid" alt="">
				</div>
				<div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
					<h3>We believe that every brand is unique and unique brands require nothing more than unique solutions.</h3>
					<p class="fst-italic">At {{config('app.name')}}, we understand that creative design is an important part of every business and it can be agonizing to find the right design partner for your project.</p>
					<ul>
						<li><i class="ri-check-double-line"></i> Our team of experienced designers is committed to helping
							you create the perfect design that fits your brand's vision and mission.</li>
						<li><i class="ri-check-double-line"></i> We bridge the gap between digital product designs and brand
							identity. Giving your brand that magical element that captivates customers and stands out from
							your competitors.</li>
						<li><i class="ri-check-double-line"></i> What's more, we have made the design process as easy and
							stress-free as possible. We collaborate closely with your team in order to provide you with
							custom solutions tailored to meet your brand needs.</li>
					</ul>
					<p>
						Are you ready for a new digital experience that will take your brand to the next level? If so,
						welcome to {{config('app.name')}} - you’ve come to the right place.
						<a class="scrollto" href="#contact">Contact us</a> today to get started!
					</p>
				</div>
			</div>
		</div>
	</section><!-- End About -->

	<!-- ======= Our Story Section ======= -->
	<section id="about" class="about ourstory pt-0">
		<div class="container" data-aos="fade-up">
			<div class="row">
				<div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
					<img src="/img/about/757_main.jpg" class="img-fluid" alt="">
				</div>
				<div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
					<h3 class="pb-2">Our Story</h3>
					<ul>
						<li><i class="ri-check-double-line"></i> We did not actually plan this. It all happened when a group of us met and discovered that the brand designs we encountered around us were pretty dull and to say the least meh! It’s true. Most designs are generic.</li>
						<li><i class="ri-check-double-line"></i> Being multidisciplinary creatives who come from different backgrounds, we thought… how about starting our own design outfit?</li>
						<li><i class="ri-check-double-line"></i> A design agency which understood the modern customer and could produce work that clients and their end user could be proud of. And on top of that, also integrate it with social media and the online environment?</li>
						<li><i class="ri-check-double-line"></i>And just like that🤝🏼{{ config('app.name') }} was born!</li>
					</ul>
					<div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- End Our Story -->

	<!-- ======= Our Mission Section ======= -->
	<section id="testimonials" class="testimonials p-md-4 p-1">
		<div class="container" data-aos="fade-up">
			<div class="row">
				<div class="col-lg-8 col-md-11 col-sm-12 col-12 mx-auto ourmission">
					<h3 class="mt-md-5 mt-4 mb-md-4 mb-3 text-center">Our Mission</h3>
					<div class="missioncontent px-1 pb-5 px-md-5">
						<p>To create stunning designs that helps brands distinguish themselves from the competition. It’s all about creating a truly amazing and refreshing digital design experience.</p>
						<p>We are dedicated to providing the highest quality graphic design and video editing services.</p>
						<p>Our experienced and talented designers have the skills and knowledge to create visuals that will captivate your target audience. At {{ config('app.name') }}, No two businesses are the same, that’s why we strive to create custom visuals that will accurately reflect your brand’s identity.</p>
						<p>Furthermore, we use the latest graphic design software to craft logos, brochures, flyers and other visuals. Our team of experts has the expertise to create visuals that are both visually appealing and on-brand. We understand the importance of creating visuals that will have an impact and leave a lasting impression on your customers.</p>
					</div>
				</div>
			</div>
		</div>
	</section><!-- End Our Mission -->

	<!-- ======= Let's work together Section ======= -->
	<section id="features" class="about features pt-5">
		<div class="container pt-md-4 pt-0" data-aos="fade-up">
			<div class="row">
				<div class="image col-md-6 col-12" data-aos="fade-right">
					<img src="/img/about/work-together.jpg" class="img-fluid" alt="">
				</div>
				<div class="col-md-6 col-12 ml-3 pt-4 pt-md-0" data-aos="fade-left" data-aos-delay="100">
					<div class="ms-md-4 ms-2 content">
						<h3 class="pb-3" style="font-size: 28px;">Let’s Work Together</h3>
						<p>Our passion lies in helping businesses to stand out in a crowded marketplace by creating visuals that grab the targets attention. We have made our services accessible to businesses of all sizes, so that every organization can benefit from our expertise and modern designs.</p>
						<p>Are you looking for graphic design services that will make a lasting impression?</p>
						<p class="font-weight" style="font-size: 20px;"><b>Don’t hesitate to contact us on any issues like:</b></p>
						<ul>
							<li><i class="ri-check-double-line"></i>We need to design a modern logo, brochure, Business cards and banner for our brand</li>
							<li><i class="ri-check-double-line"></i>We want stand out, creative and engaging corporate videos for our brand</li>
							<li><i class="ri-check-double-line"></i>We wish to upgrade our online presence on all social media platforms. Can you create all our profiles?</li>
							<li><i class="ri-check-double-line"></i>We are looking for a stunning, interactive and simple to use web layout design</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section><!-- End Let's work together -->

	<!-- ======= Features Section ======= -->
	<section id="features" class="features pt-sm-5 pt-0">
		<div class="container" data-aos="fade-up">
			<div class="row">
				<div class="col-lg-4 col-12" data-aos="fade-left" data-aos-delay="100">
					<div class="icon-box ps-0 ps-sm-1" data-aos="zoom-in" data-aos-delay="150">
						<i class="bx bx-receipt"></i>
						<h4>Designs for Every Organization</h4>
						<p>Our mantra has always been to guarantee that any organization we work with prospers and outshines all the rest. Our digital design work is not only focused on bringing you more business, but a sense of newness in each design we create for your brand. This ensures your brand interacts with your prospects or customers more clearly and in a memorable manner.</p>
					</div>
				</div>
				<div class="col-lg-4 col-12" data-aos="fade-left" data-aos-delay="100">
					<div class="icon-box ps-0 ps-sm-1" data-aos="zoom-in" data-aos-delay="150">
						<i class="bx bx-cube-alt"></i>
						<h4>Where Marketing Meets Design</h4>
						<p>Let’s face it, if you want to succeed in your business life, you always have to think of unique ways to market and standout from the crowd. Whether it’s through creating an amazing logo, a visiting/business card or a social media post. All those elements of your business have to look for creative ways to interact with humans.</p>
					</div>
				</div>
				<div class="col-lg-4 col-12" data-aos="fade-left" data-aos-delay="100">
					<div class="icon-box ps-0 ps-sm-1" data-aos="zoom-in" data-aos-delay="150">
						<i class="bx bx-images"></i>
						<h4>Designing For A Modern Audience</h4>
						<p>Today’s audience has changed. They are no longer confined to specific geographic regions. With the adaptation of the internet, everyone has gone global. Our designs are created with a visual language in mind that surpasses geographical and cultural borders.
							Are you ready for a fresh new Digital Design experience?</p>
					</div>
				</div>
			</div>
		</div>
	</section><!-- End Features Section -->

	<!-- ======= Services Section ======= -->
	<section id="services" class="services pt-1 pt-md-5">
		<div class="container" data-aos="fade-up">
			<div class="section-title">
				<h2>Services</h2>
				<p>Check our Services</p>
			</div>
			<div class="row">
				@foreach(config('tech-services.data') as $service)
				<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-md-4 mt-1" data-aos="zoom-in" data-aos-delay="200 * {{ $service['id'] }}">
					<div class="icon-box">
						<div class="icon"><img src="/{{ $service['image'] }}" class="img-fluid" /></div>
						<h4><a href="{{url('/detail/'.$service['id'])}}">{{ $service['name'] }}</a></h4>
						<p class="restrict-services-desc-text">{!! $service['description'] !!}</p>
						<a href="#contact" class="btn btn-md btn-primary scrollto mt-4">Request A Quote</a>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>
	<!-- End Services Section -->

	<!-- ======= Cta Section ======= -->
	<section id="cta" class="cta">
		<div class="container" data-aos="zoom-in">
			<div class="text-center">
				<h3>Call To Action</h3>
				<p>We Are Committed to Providing Your Business With Designs That Are Both Effective and Creative!</p>
				<a class="cta-btn" href="#contact">Call To Action</a>
			</div>
		</div>
	</section><!-- End Cta Section -->

	<!-- ======= Portfolio Section ======= -->
	<section id="portfolio" class="portfolio">
		<div class="container" data-aos="fade-up">
			<div class="section-title">
				<h2>Portfolio</h2>
				<p>Check our Portfolio</p>
			</div>

			<div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
				@foreach(config('portfolio.data') as $portfolio)
				<div class="col-lg-4 col-md-6 portfolio-item filter-app">
					<div class="portfolio-wrap">
						@if($portfolio['type']=='video')
						<video width="100%" height="240" controls>
							<source src="{{ $portfolio['url'] }}" type="video/mp4">
						</video>
						@else
						<img src="{{ $portfolio['url'] }}" alt="{{ $portfolio['alt'] }}" class="img-fluid" alt="">
						@endif
						<div class="portfolio-info">
							<h4>{{ $portfolio['alt'] }}</h4>
							<div class="portfolio-links">
								<a href="{{ $portfolio['url'] }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{ $portfolio['alt'] }}"><i class="bx bx-plus"></i></a>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section><!-- End Portfolio Section -->

	<!-- ======= Counts Section ======= -->
	<section id="counts" class="counts">
		<div class="container aos-init aos-animate" data-aos="fade-up">
			<div class="row no-gutters">
				<div class="content pt-0 pt-md-4 d-flex flex-column justify-content-center">
					<h3 class="text-center">What we have achieved so far</h3>
					<p class="px-md-5 px-4 pb-5 pt-4 text-center">
						Our team is constantly pushing itself harder to create unique and memorable work. The past few years have seen us design everything from custom logos to motion graphics for television shows. If you’re looking for eye-catching high-quality designs that go the extra mile – look no further! We are here to make your vision a reality.
					</p>
					<div class="row no-gutters">
						<div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start aos-init aos-animate" data-aos="fade-right" data-aos-delay="100"></div>
						<div class="col-xl-7 px-4 ps-lg-5 pe-lg-1 d-flex align-items-stretch aos-init aos-animate">
							<div class="row">
								<div class="col-md-6 d-md-flex align-items-md-stretch">
									<div class="count-box">
										<i class="bi bi-emoji-smile" style="line-height:1"></i>
										<span data-purecounter-start="65" data-purecounter-end="145" data-purecounter-duration="0" class="purecounter">145</span>
										<p><strong>Happy Clients</strong> The loyalty to our clients goes beyond the design process. We are proud to be open for business to all. Our clientele portfolio includes both small businesses and large corporations as well. We offer quick turnarounds and competitive prices.</p>
									</div>
								</div>

								<div class="col-md-6 d-md-flex align-items-md-stretch">
									<div class="count-box">
										<i class="bi bi-journal-richtext" style="line-height:1"></i>
										<span data-purecounter-start="90" data-purecounter-end="468" data-purecounter-duration="0" class="purecounter">468</span>
										<p><strong>Projects</strong> As a group of professional designers who understand the importance of visuals, we are committed to bringing your brand ideas to life in an unforgettable way. Our team has worked on projects with big brands and small business in industries ranging from fashion, Manufacturing, E-commerce to finance and everything else in between.
										</p>
									</div>
								</div>

								<div class="col-md-6 d-md-flex align-items-md-stretch">
									<div class="count-box">
										<i class="bi bi-clock" style="line-height:1"></i>
										<span data-purecounter-start="15" data-purecounter-end="30" data-purecounter-duration="0" class="purecounter">30</span>
										<p><strong>Years of experience</strong> We are a highly creative graphic design company with years of experience in the industry.
											From digital design services, logos, brochures, business cards and web design, to print and branding. Our team is adept at understanding your needs and creating designs that are tailored to meet your needs.
										</p>
									</div>
								</div>

								<div class="col-md-6 d-md-flex align-items-md-stretch">
									<div class="count-box">
										<i class="bi bi-award" style="line-height:1"></i>
										<span data-purecounter-start="4" data-purecounter-end="20" data-purecounter-duration="0" class="purecounter">20</span>
										<p><strong>Awards</strong> Our team consists of highly experienced designers and developers who have been recognized by some of the most respected awards in the industry for their outstanding work.
											We use the latest design techniques and technologies to create high-end visuals that helps your brand to stand out in the market.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- End .content-->
			</div>
		</div>
	</section>
	<!-- End Counts Section -->

	@include('contact')
</main><!-- End #main -->
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