<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-md-4">
          <div class="footer-info">
            <div><a href="{{ url('/') }}"><img src="/img/logo.png" class="img-fluid align-top" width="240px" /></a></div>
            <p style="padding-right:70px;">We believe that quality and modernity go hand-in-hand to create truly impactful visuals that stand out from the crowd and captivate your target audience.<br><br></p>
          </div>
        </div>

        <div class="col-md-2 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li style="padding: 8px 0px;"><i class="bx bx-chevron-right"></i> <a href="#home">Home</a></li>
            <li style="padding: 8px 0px;"><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
            <li style="padding: 8px 0px;"><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
            <li style="padding: 8px 0px;"><i class="bx bx-chevron-right"></i> <a href="#portfolio">Portfolio</a></li>
            <li style="padding: 8px 0px;"><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>
          </ul>
        </div>

        <div class="col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            @foreach(config('tech-services.data') as $service)
            <li style="padding: 8px 0px;"><i class="bx bx-chevron-right"></i> <a href="#services">{{ $service['name'] }}</a></li>
            @endforeach
          </ul>
        </div>

        <div class="col-lg-3 col-md-3 footer-newsletter">
          <h4>Contact Us</h4>
          <p><strong>Email:</strong> <a href="mailto:info@thetechershub.com">info@thetechershub.com</a><br></p>
          <div class="social-links mt-3">
            <a href="https://www.youtube.com/@thetechershub" target="_blank" class="youtube"><i class="bx bxl-youtube"></i></a>
            <a href="https://www.facebook.com/thetechershub" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="https://www.instagram.com/thetechershub" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="https://g.page/r/CZtcXfes_QrREBI/review" target="_blank" class="google-plus"><i class="bx bxl-google"></i></a>
            <a href="https://www.linkedin.com/company/thetechershub" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          </div>
        </div> 
    </div>
  </div>
</div>

    <div class="copyright">
      &copy; Copyright <strong><span>{{ config('app.name') }}</span></strong>. All Rights Reserved
    </div>


</footer>