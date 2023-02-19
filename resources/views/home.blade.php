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
				<div class="icon-box">
					<i class="ri-store-line"></i>
					<h3><a href="">Lorem Ipsum</a></h3>
				</div>
			</div>
			<div class="col-xl-2 col-md-4">
				<div class="icon-box">
					<i class="ri-bar-chart-box-line"></i>
					<h3><a href="">Dolor Sitema</a></h3>
				</div>
			</div>
			<div class="col-xl-2 col-md-4">
				<div class="icon-box">
					<i class="ri-calendar-todo-line"></i>
					<h3><a href="">Sedare Perspiciatis</a></h3>
				</div>
			</div>
			<div class="col-xl-2 col-md-4">
				<div class="icon-box">
					<i class="ri-paint-brush-line"></i>
					<h3><a href="">Magni Dolores</a></h3>
				</div>
			</div>
			<div class="col-xl-2 col-md-4">
				<div class="icon-box">
					<i class="ri-database-2-line"></i>
					<h3><a href="">Nemos Enimade</a></h3>
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
					<img src="/img/about.jpg" class="img-fluid" alt="">
				</div>
				<div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
					<h3>At {{config('app.name')}}, we understand that creative design is an important part of every business and it can be agonizing to find the right design partner for your project.</h3>
					<p class="fst-italic">We believe that every brand is unique. And unique brands require nothing more than unique solutions.</p>
					<ul>
						<li><i class="ri-check-double-line"></i> Our team of experienced designers is committed to helping you create the perfect design that fits your brand's vision and mission.</li>
						<li><i class="ri-check-double-line"></i> We bridge the gap between digital product designs and brand identity. Giving your brand that magical element that captivates customers and stands out from your competitors.</li>
						<li><i class="ri-check-double-line"></i> What's more, we have made the design process as easy and stress-free as possible. We collaborate closely with your team in order to provide you with custom solutions tailored to meet your brand needs.</li>
					</ul>
					<p>
						Are you ready for a new digital experience that will take your brand to the next level? If so, welcome to {{config('app.name')}} - you’ve come to the right place.
						<a class="scrollto" href="#contact">Contact us</a> today to get started!
					</p>
				</div>
			</div>

		</div>
	</section><!-- End About Section -->

	<!-- ======= Clients Section ======= -->
	<!-- <section id="clients" class="clients">
		<div class="container" data-aos="zoom-in">
			<div class="clients-slider swiper">
				<div class="swiper-wrapper align-items-center">
					<div class="swiper-slide"><img src="/img/clients/client-1.png" class="img-fluid" alt=""></div>
					<div class="swiper-slide"><img src="/img/clients/client-2.png" class="img-fluid" alt=""></div>
					<div class="swiper-slide"><img src="/img/clients/client-3.png" class="img-fluid" alt=""></div>
					<div class="swiper-slide"><img src="/img/clients/client-5.png" class="img-fluid" alt=""></div>
					<div class="swiper-slide"><img src="/img/clients/client-6.png" class="img-fluid" alt=""></div>
					<div class="swiper-slide">
						<h1>+ More</h1>
					</div>
				</div>
				<div class="swiper-pagination"></div>
			</div>
		</div>
	</section> -->
	<!-- End Clients Section -->

	<!-- ======= Features Section ======= -->
	<section id="features" class="features">
		<div class="container" data-aos="fade-up">

			<div class="row">
				<div class="image col-lg-6" style='background-image: url("/img/features.jpg");' data-aos="fade-right">
				</div>
				<div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
					<div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
						<i class="bx bx-receipt"></i>
						<h4>Est labore ad</h4>
						<p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
					</div>
					<div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
						<i class="bx bx-cube-alt"></i>
						<h4>Harum esse qui</h4>
						<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
					</div>
					<div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
						<i class="bx bx-images"></i>
						<h4>Aut occaecati</h4>
						<p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
					</div>
					<div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
						<i class="bx bx-shield"></i>
						<h4>Beatae veritatis</h4>
						<p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
					</div>
				</div>
			</div>

		</div>
	</section><!-- End Features Section -->

	<!-- ======= Services Section ======= -->
	<section id="services" class="services">
		<div class="container" data-aos="fade-up">

			<div class="section-title">
				<h2>Services</h2>
				<p>Check our Services</p>
			</div>

			<div class="row">
				@foreach(config('tech-services.data') as $service)
				<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200 * {{ $service['id'] }}">
					<div class="icon-box">
						<div class="icon"><img src="{{ $service['image'] }}" class="img-fluid" /></div>
						<h4><a href="">{{ $service['name'] }}</a></h4>
						<p class="restrict-services-desc-text">{!! $service['description'] !!}</p>
						<a href="#contact" class="btn btn-md btn-primary scrollto mt-4">Request A Quote</a>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section><!-- End Services Section -->

	<!-- ======= Cta Section ======= -->
	<section id="cta" class="cta">
		<div class="container" data-aos="zoom-in">

			<div class="text-center">
				<h3>Call To Action</h3>
				<p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
					Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
					laborum.</p>
				<a class="cta-btn" href="#">Call To Action</a>
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

			<div class="row" data-aos="fade-up" data-aos-delay="100">
				<div class="col-lg-12 d-flex justify-content-center">
					<ul id="portfolio-flters">
						<li data-filter="*" class="filter-active">All</li>
						<li data-filter=".filter-app">App</li>
						<li data-filter=".filter-card">Card</li>
						<li data-filter=".filter-web">Web</li>
					</ul>
				</div>
			</div>

			<div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

				<div class="col-lg-4 col-md-6 portfolio-item filter-app">
					<div class="portfolio-wrap">
						<img src="/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>App 1</h4>
							<p>App</p>
							<div class="portfolio-links">
								<a href="/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
								<a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 portfolio-item filter-web">
					<div class="portfolio-wrap">
						<img src="/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>Web 3</h4>
							<p>Web</p>
							<div class="portfolio-links">
								<a href="/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
								<a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 portfolio-item filter-app">
					<div class="portfolio-wrap">
						<img src="/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>App 2</h4>
							<p>App</p>
							<div class="portfolio-links">
								<a href="/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
								<a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 portfolio-item filter-card">
					<div class="portfolio-wrap">
						<img src="/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>Card 2</h4>
							<p>Card</p>
							<div class="portfolio-links">
								<a href="/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
								<a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 portfolio-item filter-web">
					<div class="portfolio-wrap">
						<img src="/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>Web 2</h4>
							<p>Web</p>
							<div class="portfolio-links">
								<a href="/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
								<a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 portfolio-item filter-app">
					<div class="portfolio-wrap">
						<img src="/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>App 3</h4>
							<p>App</p>
							<div class="portfolio-links">
								<a href="/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
								<a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 portfolio-item filter-card">
					<div class="portfolio-wrap">
						<img src="/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>Card 1</h4>
							<p>Card</p>
							<div class="portfolio-links">
								<a href="/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
								<a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 portfolio-item filter-card">
					<div class="portfolio-wrap">
						<img src="/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>Card 3</h4>
							<p>Card</p>
							<div class="portfolio-links">
								<a href="/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
								<a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 portfolio-item filter-web">
					<div class="portfolio-wrap">
						<img src="/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>Web 3</h4>
							<p>Web</p>
							<div class="portfolio-links">
								<a href="/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
								<a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>
	</section><!-- End Portfolio Section -->

	<!-- ======= Counts Section ======= -->
	<section id="counts" class="counts">
		<div class="container" data-aos="fade-up">

			<div class="row no-gutters">
				<div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right" data-aos-delay="100"></div>
				<div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch" data-aos="fade-left" data-aos-delay="100">
					<div class="content d-flex flex-column justify-content-center">
						<h3>Voluptatem dignissimos provident quasi</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
							dolore magna aliqua. Duis aute irure dolor in reprehenderit
						</p>
						<div class="row">
							<div class="col-md-6 d-md-flex align-items-md-stretch">
								<div class="count-box">
									<i class="bi bi-emoji-smile"></i>
									<span data-purecounter-start="0" data-purecounter-end="65" data-purecounter-duration="2" class="purecounter"></span>
									<p><strong>Happy Clients</strong> consequuntur voluptas nostrum aliquid ipsam architecto ut.</p>
								</div>
							</div>

							<div class="col-md-6 d-md-flex align-items-md-stretch">
								<div class="count-box">
									<i class="bi bi-journal-richtext"></i>
									<span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="2" class="purecounter"></span>
									<p><strong>Projects</strong> adipisci atque cum quia aspernatur totam laudantium et quia dere tan
									</p>
								</div>
							</div>

							<div class="col-md-6 d-md-flex align-items-md-stretch">
								<div class="count-box">
									<i class="bi bi-clock"></i>
									<span data-purecounter-start="0" data-purecounter-end="35" data-purecounter-duration="4" class="purecounter"></span>
									<p><strong>Years of experience</strong> aut commodi quaerat modi aliquam nam ducimus aut voluptate
										non vel</p>
								</div>
							</div>

							<div class="col-md-6 d-md-flex align-items-md-stretch">
								<div class="count-box">
									<i class="bi bi-award"></i>
									<span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="4" class="purecounter"></span>
									<p><strong>Awards</strong> rerum asperiores dolor alias quo reprehenderit eum et nemo pad der</p>
								</div>
							</div>
						</div>
					</div><!-- End .content-->
				</div>
			</div>

		</div>
	</section><!-- End Counts Section -->

	<!-- ======= Testimonials Section ======= -->
	<section id="testimonials" class="testimonials">
		<div class="container" data-aos="zoom-in">
			<div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
				<div class="swiper-wrapper">
					@for($i=0;$i<=3;$i++) <div class="swiper-slide">
						<div class="testimonial-item">
							<img src="/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
							<h3>Sara Wilsson</h3>
							<h4>Designer</h4>
							<p>
								<i class="bx bxs-quote-alt-left quote-icon-left"></i>
								Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis
								quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
								<i class="bx bxs-quote-alt-right quote-icon-right"></i>
							</p>
						</div>
				</div>
				@endfor
			</div>
			<div class="swiper-pagination"></div>
		</div>
		</div>
	</section><!-- End Testimonials Section -->

	<!-- ======= Team Section ======= -->
	<!-- <section id="team" class="team">
		<div class="container" data-aos="fade-up">
			<div class="section-title">
				<h2>Team</h2>
				<p>Check our Team</p>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6 d-flex align-items-stretch">
					<div class="member" data-aos="fade-up" data-aos-delay="100">
						<div class="member-img">
							<img src="/img/team/team-1.jpg" class="img-fluid" alt="">
							<div class="social">
								<a href=""><i class="bi bi-twitter"></i></a>
								<a href=""><i class="bi bi-facebook"></i></a>
								<a href=""><i class="bi bi-instagram"></i></a>
								<a href=""><i class="bi bi-linkedin"></i></a>
							</div>
						</div>
						<div class="member-info">
							<h4>Walter White</h4>
							<span>Chief Executive Officer</span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 d-flex align-items-stretch">
					<div class="member" data-aos="fade-up" data-aos-delay="200">
						<div class="member-img">
							<img src="/img/team/team-2.jpg" class="img-fluid" alt="">
							<div class="social">
								<a href=""><i class="bi bi-twitter"></i></a>
								<a href=""><i class="bi bi-facebook"></i></a>
								<a href=""><i class="bi bi-instagram"></i></a>
								<a href=""><i class="bi bi-linkedin"></i></a>
							</div>
						</div>
						<div class="member-info">
							<h4>Sarah Jhonson</h4>
							<span>Product Manager</span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 d-flex align-items-stretch">
					<div class="member" data-aos="fade-up" data-aos-delay="300">
						<div class="member-img">
							<img src="/img/team/team-3.jpg" class="img-fluid" alt="">
							<div class="social">
								<a href=""><i class="bi bi-twitter"></i></a>
								<a href=""><i class="bi bi-facebook"></i></a>
								<a href=""><i class="bi bi-instagram"></i></a>
								<a href=""><i class="bi bi-linkedin"></i></a>
							</div>
						</div>
						<div class="member-info">
							<h4>William Anderson</h4>
							<span>CTO</span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 d-flex align-items-stretch">
					<div class="member" data-aos="fade-up" data-aos-delay="400">
						<div class="member-img">
							<img src="/img/team/team-4.jpg" class="img-fluid" alt="">
							<div class="social">
								<a href=""><i class="bi bi-twitter"></i></a>
								<a href=""><i class="bi bi-facebook"></i></a>
								<a href=""><i class="bi bi-instagram"></i></a>
								<a href=""><i class="bi bi-linkedin"></i></a>
							</div>
						</div>
						<div class="member-info">
							<h4>Amanda Jepson</h4>
							<span>Accountant</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- End Team Section -->

	<!-- ======= Contact Section ======= -->
	<section id="contact" class="contact">
		<div class="container" data-aos="fade-up">
			<div class="section-title">
				<h2>Contact</h2>
				<p>Contact Us</p>
			</div>
			<div>
				<iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
			</div>
			<div class="row mt-5">
				<div class="col-lg-4">
					<div class="info">
						<div class="address">
							<i class="bi bi-geo-alt"></i>
							<h4>WhatsApp Chat:</h4>
							<p>A Customer Care Specialist is ready to chat.</p>
							<a href="emailto:info@thetechershub.com" class="btn btn-primary">Start Chat</a>
						</div>
						<div class="email">
							<i class="bi bi-envelope"></i>
							<h4>Email Us:</h4>
							<p>Our team is ready to help you.</p>
							<a href="emailto:info@thetechershub.com" class="btn btn-primary">Send an Email</a>
						</div>
						<div class="phone">
							<i class="bi bi-phone"></i>
							<h4>Call Now:</h4>
							<p> Mon - Sun 8:00 AM - 8:00 AM GST</p>
							<a href="tel:971586988321" class="btn btn-primary">Connect Now</a>
						</div>
					</div>
				</div>
				<div class="col-lg-8 mt-5 mt-lg-0">
					<form action="{{ url('contact-us') }}" method="post" id="contact-us" role="form" class="php-email-form">
						@csrf
						<div class="row">
							<div class="col-md-6 form-group">
								<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" maxlength="30" required>
							</div>
							<div class="col-md-6 form-group mt-3 mt-md-0">
								<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required maxlength="255">
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-md-6 form-group">
								<input type="text" class="form-control" name="contact_number" id="contact_number" maxlength="12" placeholder="Your Contact Number" required>
							</div>
						</div>
						<div class="form-group mt-3">
							<select class="form-control" name="services[]" multiple id="services" required>
								<option value="">Select Services</option>
								@foreach(config('tech-services.data') as $service)
								<option value="{{ $service['id'] }}">{{ $service['name'] }}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group mt-3">
							<textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
						</div>
						<div class="my-3">
							<div class="loading">Loading</div>
							<div class="error-message"></div>
							<div class="sent-message">Your message has been sent. Thank you!</div>
						</div>
						<div class="text-center"><button type="submit">Send Message</button></div>
					</form>
				</div>
			</div>
		</div>
	</section><!-- End Contact Section -->
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
<script type="text/javascript">
	// $("#contact-us").submit(function(e) {

	// 	e.preventDefault(); // avoid to execute the actual submit of the form.

	// 	var form = $(this);
	// 	var actionUrl = form.attr('action');

	// 	$.ajax({
	// 		type: "POST",
	// 		url: actionUrl,
	// 		data: form.serialize(), // serializes the form's elements.
	// 		success: function(data) {
	// 			alert(data); // show response from the php script.
	// 		}
	// 	});

	// });
</script>
@endsection