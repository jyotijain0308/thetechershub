<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-inner-pages">
  <div class="container d-flex align-items-center justify-content-lg-between">

    <!-- Uncomment below if you prefer to use an image logo -->
    <a href="{{ url('/') }}" class="logo me-auto me-lg-0"><img src="/img/logo/logo-white.png" alt="" class="img-fluid"></a>

    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
        <li><a class="nav-link scrollto active" href="{{toUrl()}}">Home</a></li>
        <li><a class="nav-link scrollto" href="{{toUrl('#about')}}">About</a></li>
        <li><a class="nav-link scrollto" href="{{toUrl('#services')}}">Services</a></li>
        <li><a class="nav-link scrollto " href="{{toUrl('#portfolio')}}">Portfolio</a></li>
        <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
  </div>
</header><!-- End Header -->