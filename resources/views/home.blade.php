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
					<img src="/img/001-abilities.png" class="" alt="">
					<h3 style="font-size:16px;"><a href="">Professional Expertise</a></h3>
				</div>
			</div>
			<div class="col-xl-2 col-md-4">
				<div class="icon-box" style="padding:30px 10px;">
					<img src="/img/003-relationship.png" class="" alt="">
					<h3 style="font-size:16px;"><a href="">Commitment</a></h3>
				</div>
			</div>
			<div class="col-xl-2 col-md-4">
				<div class="icon-box" style="padding:30px 10px;">
					<img src="/img/004-digital-assistant.png" class="" alt="">
					<h3 style="font-size:16px;"><a href="">Virtual Consultant</a></h3>
				</div>
			</div>
			<div class="col-xl-2 col-md-4">
				<div class="icon-box" style="padding:30px 10px;">
					<img src="/img/005-monitoring.png" class="" alt="">
					<h3 style="font-size:16px;"><a href="">Quality</a></h3>
				</div>
			</div>
			<div class="col-xl-2 col-md-4">
				<div class="icon-box" style="padding:30px 10px;">
					<img src="/img/economic.png" class="" alt="">
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
					<img src="/img/about.jpg" class="img-fluid" alt="">
				</div>
				<div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
					<h3>We believe that every brand is unique and unique brands require nothing more than
						unique solutions.</h3>
					<p class="fst-italic">At {{config('app.name')}}, we understand that creative design is an important part of every business
						and it can be agonizing to find the right design partner for your project.</p>
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
					<img src="/img/757_main.jpg" class="img-fluid" alt="">
				</div>
				<div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
					<h3 style="padding-bottom:20px;">Our Story</h3>
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
	<section id="testimonials" class="testimonials">
		<div class="container" data-aos="fade-up">
			<div class="row">
				<div class="" style="width:60%; background: #353D54; margin: 0px auto;">
					<h3 style="color: #fff; font-size: 28px; font-weight: 700; text-align:center; margin-top:40px; margin-bottom:40px;">Our Mission</h3>
					<div class="missionpara px-5 pb-5" style="color: #fff;">
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
		<div class="container pt-4" data-aos="fade-up">
			<div class="row">
				<div class="image col-md-6 col-12" data-aos="fade-right">
					<img src="/img/work-together.jpg" class="img-fluid" alt="">
				</div>
				<div class="col-md-6 col-12 ml-3" data-aos="fade-left" data-aos-delay="100">
					<div class="ms-4 content">
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
	<section id="features" class="features">
		<div class="container" data-aos="fade-up">
			<div class="row">
				<div class="col-lg-4" data-aos="fade-left" data-aos-delay="100">
					<div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
						<i class="bx bx-receipt"></i>
						<h4>Designs for Every Organization</h4>
						<p>Our mantra has always been to guarantee that any organization we work with prospers and outshines all the rest. Our digital design work is not only focused on bringing you more business, but a sense of newness in each design we create for your brand. This ensures your brand interacts with your prospects or customers more clearly and in a memorable manner.</p>
					</div>
				</div>
				<div class="col-lg-4" data-aos="fade-left" data-aos-delay="100">
					<div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
						<i class="bx bx-cube-alt"></i>
						<h4>Where Marketing Meets Design</h4>
						<p>Let’s face it, if you want to succeed in your business life, you always have to think of unique ways to market and standout from the crowd. Whether it’s through creating an amazing logo, a visiting/business card or a social media post. All those elements of your business have to look for creative ways to interact with humans.</p>
					</div>
				</div>
				<div class="col-lg-4" data-aos="fade-left" data-aos-delay="100">
					<div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
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

	<!-- ======= Counts Section ======= -->
	<section id="counts" class="counts">
		<div class="container" data-aos="fade-up">
			<div class="row no-gutters">
				<div class="content d-flex flex-column justify-content-center">
					<h3 class="text-center">What we have achieved so far</h3>
					<p class="px-5 py-5">
						Our team is constantly pushing itself harder to create unique and memorable work. The past few years have seen us design everything from custom logos to motion graphics for television shows. If you’re looking for eye-catching high-quality designs that go the extra mile – look no further! We are here to make your vision a reality.
					</p>
					<div class="row no-gutters">
						<div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start aos-init aos-animate" data-aos="fade-right" data-aos-delay="100"></div>
						<div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch aos-init aos-animate">
							<div class="row">
								<div class="col-md-6 d-md-flex align-items-md-stretch">
									<div class="count-box">
										<i class="bi bi-emoji-smile" style="line-height:1"></i>
										<span data-purecounter-start="65" data-purecounter-end="145" data-purecounter-duration="2" class="purecounter"></span>
										<p><strong>Happy Clients</strong> The loyalty to our clients goes beyond the design process. We are proud to be open for business to all. Our clientele portfolio includes both small businesses and large corporations as well. We offer quick turnarounds and competitive prices.</p>
									</div>
								</div>
								<div class="col-md-6 d-md-flex align-items-md-stretch">
									<div class="count-box">
										<i class="bi bi-journal-richtext" style="line-height:1"></i>
										<span data-purecounter-start="90" data-purecounter-end="468" data-purecounter-duration="2" class="purecounter"></span>
										<p><strong>Projects</strong> As a group of professional designers who understand the importance of visuals, we are committed to bringing your brand ideas to life in an unforgettable way. Our team has worked on projects with big brands and small business in industries ranging from fashion, Manufacturing, E-commerce to finance and everything else in between.
										</p>
									</div>
								</div>
								<div class="col-md-6 d-md-flex align-items-md-stretch">
									<div class="count-box">
										<i class="bi bi-clock" style="line-height:1"></i>
										<span data-purecounter-start="15" data-purecounter-end="30" data-purecounter-duration="3" class="purecounter"></span>
										<p><strong>Years of experience</strong> We are a highly creative graphic design company with years of experience in the industry.
											From digital design services, logos, brochures, business cards and web design, to print and branding. Our team is adept at understanding your needs and creating designs that are tailored to meet your needs.
										</p>
									</div>
								</div>

								<div class="col-md-6 d-md-flex align-items-md-stretch">
									<div class="count-box">
										<i class="bi bi-award" style="line-height:1"></i>
										<span data-purecounter-start="4" data-purecounter-end="20" data-purecounter-duration="4" class="purecounter"></span>
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
	</section><!-- End Counts Section -->

	<!-- ======= Contact Section ======= -->
	<section id="contact" class="contact">
		<div class="container" data-aos="fade-up">
			<div class="section-title">
				<h2>Contact</h2>
				<p>Contact Us</p>
			</div>
			<!-- <div>
				<iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
			</div> -->
			<div class="row mt-3">
				<!-- <div class="col-lg-4">
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
				</div> -->
				<div class="col-lg-7 col-md-8 col-sm-10 col-12 mx-auto mt-5 mt-lg-0">
					<form action="{{ url('contact-us') }}" method="post" id="contact-us" role="form" class="php-email-form">
						@csrf
						<div class="row">
							<label for="services" class="form-label">We Can Call You</label>
							<div class="col-md-12 form-group">
								<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" maxlength="30" required>
							</div>
						</div>
						<div class="row mt-3">
							<label for="services" class="form-label">Email Address</label>
							<div class="col-md-12 form-group">
								<input type="email" class="form-control" name="email" id="email" placeholder="Your Email Address" required maxlength="255">
							</div>
						</div>
						<div class="row mt-3">
							<label for="services" class="form-label">Contact Number</label>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" name="contact_number" id="contact_number" maxlength="12" placeholder="Please enter with country code without (+) sign" required>
							</div>
						</div>
						<div class="form-group mt-3">
							<label for="services" class="form-label">Select Your Interested Service(s)</label>
							<select class="form-control" name="services[]" multiple id="services" required>
								@foreach(config('tech-services.data') as $service)
								<option value="{{ $service['id'] }}">{{ $service['name'] }}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group mt-3">
							<label for="services" class="form-label">Please describe your requirement more in detail</label>
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