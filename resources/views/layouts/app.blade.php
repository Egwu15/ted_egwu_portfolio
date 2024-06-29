<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.bunny.net"> --}}
    {{-- <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}


    <link rel="stylesheet" href="{{ asset('build/assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/vendors/linericon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/vendors/nice-select/css/nice-select.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('build/assets/css/style.css') }}">
    <!-- Scripts -->
    {{-- @vite(['resources/css/style.css']) --}}
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

</head>

<body class="font-sans antialiased">

    <livewire:layout.navigation />


    <main>
        {{ $slot }}
    </main>

    <footer class="footer_area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="footer_top flex-column">
						<div class="footer_logo">
							<a href="#">
								<img src="img/logo.png" alt="">
							</a>
							<h4>Follow Me</h4>
						</div>
						<div class="footer_social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row footer_bottom justify-content-center">
				<p class="col-lg-8 col-sm-12 footer-text">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>
		</div>
	</footer>

    <script src="{{ asset('build/assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('build/assets/js/popper.js') }}"></script>
    <script src="{{ asset('build/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('build/assets/js/stellar.js') }}"></script>
    <script src="{{ asset('build/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('build/assets/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('build/assets/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('build/assets/vendors/isotope/isotope-min.js') }}"></script>
    <script src="{{ asset('build/assets/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('build/assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('build/assets/js/mail-script.js') }}"></script>
    <!--gmaps Js remains unchanged as it is an external link-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="{{ asset('build/assets/js/gmaps.min.js') }}"></script>
    <script src="{{ asset('build/assets/js/theme.js') }}"></script>
</body>

</html>
