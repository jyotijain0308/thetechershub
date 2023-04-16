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