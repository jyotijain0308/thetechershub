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

<!-- ======= Design a logo Section ======= -->
@if($data['name']=='Design A Logo')
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
<!-- End Design a logo Section -->

<!-- ======= Visiting card design Section ======= -->
@elseif($data['name']=='Visiting / Business Card Design')
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
			<div class="col-xl-6">
				<div class="text-center">
					<img src="/img/servicedetail/Visiting-card/Single-side.jpg" class="" alt="">
					<h2>Single Side</h2>
				</div>
			</div>	

			<div class="col-xl-6">
				<div class="text-center">
					<img src="/img/servicedetail/Visiting-card/Double-side.jpg" class="" alt="">
					<h2>Double Side</h2>
				</div>
			</div>
		</div>
	</div>		
</section>
<!-- ======= End Visiting card design Section ======= -->

<!-- ======= Profession Profile Section ======= -->
@elseif($data['name']=='Profession Profile')
<section id="logo_type" class="logotype">
	<div class="container">
		<div class="row">
			<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
				<li class="nav-item" role="presentation">
					<button class="nav-link active" id="add-account-tab" data-bs-toggle="pill" data-bs-target="#add-account" type="button" role="tab" aria-controls="add-account" aria-selected="true">Additional Account</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="personal-info-tab" data-bs-toggle="pill" data-bs-target="#personal-info" type="button" role="tab" aria-controls="personal-info" aria-selected="false">Personal Information</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Page Information</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Link with</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Infographics / Content Creation</button>
				</li>
			</ul>

			<div class="tab-content" id="pills-tabContent">
				<div class="tab-pane fade show active" id="add-account" role="tabpanel" aria-labelledby="pills-home-tab">
					<ul>
						<li><strong>Gmail ID</strong></li>
						<li><strong> Ads manager</strong></li>
						<li><strong>Meta Pixel (Developer Required)</strong></li>
					</ul>
				</div>
				<div class="tab-pane fade" id="personal-info" role="tabpanel" aria-labelledby="personal-info-tab">
			
					<form>
						<div class="form-group row mb-3">
							<label for="inputName" class="col-sm-2 col-form-label">Full Name</label>
							<div class="col-sm-10">
							<input type="text" class="form-control" id="inputName" placeholder="FULL NAME">
							</div>
						</div>

						<div class="form-group row mb-3">
							<label for="inputName" class="col-sm-2 col-form-label">Date of Birth</label>
							<div class="col-sm-10">
							<input type="text" class="form-control" id="inputName" placeholder="Date of Birth">
							</div>
						</div>

						<div class="form-group row mb-3">
							<label for="inputMobileNumber" class="col-sm-2 col-form-label">Mobile Number</label>
							<div class="col-sm-10">
							<input type="number" class="form-control" id="inputMobileNumber" placeholder="Mobile Number">
							</div>
						</div>

						<div class="form-group row mb-3">
							<label for="inputEmailId" class="col-sm-2 col-form-label">Email ID</label>
							<div class="col-sm-10">
							<input type="email" class="form-control" id="inputEmailId" placeholder="Email ID">
							</div>
						</div>	

						<div class="form-group row mb-3">
							<label for="inputProfilePicture" class="col-sm-2 col-form-label">Profile Picture</label>
							<div class="col-sm-10">
							<input type="file" class="form-control" id="inputProfilePicture">
							</div>
						</div>

						<div class="form-group row mb-3">
							<label for="inputWork" class="col-sm-2 col-form-label">Work & Education</label>
							<div class="col-sm-10">
							<input type="text" class="form-control" id="inputWork" placeholder="Work & Education">
							</div>
						</div>

						<div class="mb-3">
							<label for="inputWork" class="col-sm-2 col-form-label">Gender</label>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="inputGender" id="inputGenderMale" value="Male">
									<label class="form-check-label" for="inputGenderMale">Male</label>
								</div>

								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="inputGender" id="inputGenderFemale" value="Female">
									<label class="form-check-label" for="inputGenderFemale">Female</label>
								</div>
						</div>	
							

						<div class="form-group row mb-3">
							<label for="inputlanguageKnown" class="col-sm-2 col-form-label">Language Known</label>
							<div class="col-sm-10">
							<input type="text" class="form-control" id="inputlanguageKnown" placeholder="Language Known">
							</div>
						</div>

						<div class="form-group row mb-3">
							<label for="inputaboutme" class="col-sm-2 col-form-label">About Me</label>
							<div class="col-sm-10">
							<textarea class="form-control" id="inputAoutMe" rows="3"></textarea>
							</div>
						</div>

						<div class="form-group row mb-3">
							<label for="inputskills" class="col-sm-2 col-form-label">Skills</label>
							<div class="col-sm-10">
							<textarea class="form-control" id="inputAoutMe" rows="3"></textarea>
							</div>
						</div>

						<div class="form-group row">
							<div class="col-sm-10">
							<button type="submit" class="btn btn-primary">Sign in</button>
							</div>
						</div>
					</form>
				</div>	
			</div>
		</div>
	</div>		
</section><!-- ======= Profession Profile Section ======= -->
@endif

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