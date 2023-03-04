<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-md-4">
          <div class="footer-info">
            <div><a href="{{ url('/') }}"><img src="/img/logo.png" class="img-fluid align-top" width="240px" /></a></div>
            <p>We believe that quality and modernity go hand-in-hand to create truly impactful visuals that stand out from the crowd and captivate your target audience. Whether it’s a logo, a website design, social media or a corporate video, we are here to deliver quality every step of the way.<br><br>
            <!-- <strong>Phone:</strong> +1 5589 55488 55<br> -->
            <strong>Email:</strong> <a href="mailto:info@thetechershub.com">info@thetechershub.com</a><br>
            </p>
            <div class="social-links mt-3">
              <a href="https://www.youtube.com/@thetechershub" target="_blank" class="youtube"><i class="bx bxl-youtube"></i></a>
              <a href="https://www.facebook.com/thetechershub" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/thetechershub" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://g.page/r/CZtcXfes_QrREBI/review" target="_blank" class="google-plus"><i class="bx bxl-google"></i></a>
              <a href="https://www.linkedin.com/company/thetechershub" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-2 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#home">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Portfolio</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>
          </ul>
        </div>

        <div class="col-md-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            @foreach(config('tech-services.data') as $service)
            <li style="display: inline-block;width: 48%;"><i class="bx bx-chevron-right"></i> <a href="#services">{{ $service['name'] }}</a></li>
            @endforeach
            <!-- <li><i class="bx bx-chevron-right"></i> <a href="#services">Learn More</a></li> -->
            <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li> -->
          </ul>
        </div>

        <!-- <div class="col-lg-4 col-md-6 footer-newsletter">
          <h4>Our Newsletter</h4>
          <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          <form action="" method="post">
            <input type="email" name="email"><input type="submit" value="Subscribe">
          </form>
        </div> -->
      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong><span>{{ config('app.name') }}</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
      <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
    </div>
  </div>
</footer>