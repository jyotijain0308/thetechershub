<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'The Techers Hub') }}</title>

	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

	@vite(['resources/js/app.js'])
</head>

<body class="antialiased">
	<!-- ======= Header ======= -->
	<header id="header" class="d-flex align-items-center">
		<div class="container d-flex flex-column align-items-center">

			<h1>{{config('app.name')}}</h1>
			<h2>We're working hard to improve our website and we'll ready to launch after</h2>
			<div class="countdown d-flex justify-content-center" data-count="2023/02/15">
				<div>
					<h3>%d</h3>
					<h4>Days</h4>
				</div>
				<div>
					<h3>%h</h3>
					<h4>Hours</h4>
				</div>
				<div>
					<h3>%m</h3>
					<h4>Minutes</h4>
				</div>
				<div>
					<h3>%s</h3>
					<h4>Seconds</h4>
				</div>
			</div>

			<div class="subscribe">
				<h4>Subscribe now to get the latest updates!</h4>
			</div>

			<div class="social-links text-center">
				<a href="https://facebook.com/thetechershub" class="facebook"><i class="bi bi-facebook"></i></a>
				<a href="https://www.youtube.com/@thetechershub" class="youtube"><i class="bi bi-youtube"></i></a>
				<a href="https://www.instagram.com/thetechershub" class="instagram"><i class="bi bi-instagram"></i></a>
				<a href="https://www.linkedin.com/in/thetechershub" class="linkedin"><i class="bi bi-linkedin"></i></a>
			</div>

		</div>
	</header><!-- End #header -->

	<!-- ======= Footer ======= -->
	<footer id="footer">
		<div class="container">
			<div class="copyright">
				&copy; Copyright <strong><span>{{config('app.name')}}</span></strong>. All Rights Reserved
			</div>
		</div>
	</footer><!-- End #footer -->

	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
</body>

</html>