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