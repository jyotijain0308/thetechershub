<!-- ======= Contact Section ======= -->
<section id="contact" class="contact pt-sm-5 pt-1">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Contact</h2>
            <p>Contact Us</p>
        </div>
        <!-- <div>
				<iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
			</div> -->
        <div class="row mt-md-3 mt-0">
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
            <div class="col-lg-7 col-md-11 col-sm-12 col-12 mx-auto my-lg-5 my-md-4 my-sm-3 mt-0 mt-lg-0">
                <form action="{{ url('contact-us') }}" method="post" id="contact-us" role="form" class="php-email-form">
                    @csrf
                    <div class="form-group row mt-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label">We Can Call You</label>
                            <div class="col-md-12 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" maxlength="30" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email Address</label>
                            <div class="col-md-12 form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email Address" required maxlength="255">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label for="contact_number" class="form-label">Contact Number</label>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" name="contact_number" id="contact_number" maxlength="12" placeholder="Please enter number with country code without (+) sign" required>
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
                        <label for="message" class="form-label">Please describe your requirement more in detail</label>
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
</section>
<!-- End Contact Section -->