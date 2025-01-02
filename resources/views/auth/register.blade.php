<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Bunda Peduli</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="shortcut icon" href="{{ asset('admin/src/images/kogo bidan.jpg') }}">
	<!-- bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('admin/dist/assets/landing/assets/css/bootstrap.min.css') }}" type="text/css" media="all">
	<!-- carousel CSS -->
	<link rel="stylesheet" href="{{ asset('admin/dist/assets/landing/assets/css/owl.carousel.min.css') }}" type="text/css" media="all">
	<!-- animate CSS -->
	<link rel="stylesheet" href="{{ asset('admin/dist/assets/landing/assets/css/animate.css') }}" type="text/css" media="all">
	<!-- font-awesome CSS -->
	<link rel="stylesheet" href="{{ asset('admin/dist/assets/landing/assets/css/all.min.css') }}" type="text/css" media="all">
	<!-- font-flaticon CSS -->
	<link rel="stylesheet" href="{{ asset('admin/dist/assets/landing/assets/css/flaticon.css') }}" type="text/css" media="all">
	<!-- theme-default CSS -->
	<link rel="stylesheet" href="{{ asset('admin/dist/assets/landing/assets/css/theme-default.css') }}" type="text/css" media="all">
	<!-- meanmenu CSS -->
	<link rel="stylesheet" href="{{ asset('admin/dist/assets/landing/assets/css/meanmenu.min.css') }}" type="text/css" media="all">
	<!-- transitions CSS -->
	<link rel="stylesheet" href="{{ asset('admin/dist/assets/landing/assets/css/owl.transitions.css') }}" type="text/css" media="all">
	<!-- venobox CSS -->
	<link rel="stylesheet" href="{{ asset('admin/dist/assets/landing/venobox/venobox.css') }}" type="text/css" media="all">
	<!-- bootstrap icons -->
	<link rel="stylesheet" href="{{ asset('admin/dist/assets/landing/assets/css/bootstrap-icons.css') }}" type="text/css" media="all">
	<!-- Main Style CSS -->
	<link rel="stylesheet" href="{{ asset('admin/dist/assets/landing/assets/css/style.css') }}" type="text/css" media="all">
	<!-- Dropdown CSS -->
	<link rel="stylesheet" href="{{ asset('admin/dist/assets/landing/assets/css/dropdown.css') }}" type="text/css" media="all">
	<!-- responsive CSS -->
	<link rel="stylesheet" href="{{ asset('admin/dist/assets/landing/assets/css/responsive.css') }}" type="text/css" media="all">
	<!-- modernizr js -->
	<script src="{{ asset('admin/dist/assets/landing/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
	<link rel="icon" href="{{ asset('admin/src/images/kogo bidan.jpg"') }}" type="image/png">
</head>

<body>
    <header class="header-area shadow-sm" id="sticky-header">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-2">
					<div class="logo">
						<a href="index.html">
							<img src="https://www.dropbox.com/scl/fi/4a6kod3m1l1u7ukq9p60w/logo-remove.png?rlkey=wslgefag7hc5gef0wv6sz09c6&raw=1" width="80" alt="Logo Bidan">
						</a>						
					</div>
				</div>
				<div class="col-lg-10">
					<div class="header-menu">
						<ul>
							<li><a href="welcome">Home</a></li>
							<li><a href="#">Profil</a>
								<!-- <div class="sub-menu">
									<ul>
										<li><a href="blog-details.html">Sejarah </a></li>
										<li><a href="course-detials.html">Visi & Misi</a></li>
										<li><a href="team.html">Profil Dosen</a></li>
									</ul>
								</div> -->
							</li>
							<li><a href="#course">BMI</a></li>
							<li><a href="#prodi2">Resep</a></li>
							<li><a href="#video">Gizi Sehat</a></li>
							<li><a href="#testi">Konsultasi</a></li>
							<li><a href="{{ route('register') }}">Register</a></li>
						</ul>
						<div class="main-btn">
							<a href="{{ route('login') }}" class="nest-btn">
								<span class="nest-btn__shape"></span>
								<span class="nest-btn__shape"></span>
								<span class="nest-btn__shape"></span>
								<span class="nest-btn__shape"></span>
								<span class="nest-btn__text" style="color: black !important;">Login</span>
							</a>
						</div>						
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
    
    <!-- Form Section -->
      <!-- Form Section -->
      <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="form-card p-4" style="max-width: 500px; width: 100%; background-color: #05a3a9; border-radius: 8px; color: rgb(0, 0, 0);">
            <h2 class="text-center mb-4">Registrasi</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mb-3">
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mb-3">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mb-3">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                    <x-text-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="d-flex justify-content-between align-items-center mt-4">
                    <a class="text-sm text-white" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

					<x-primary-button class="main-btn" >
						{{ __('Daftar') }}
					</x-primary-button>
					
                </div>
            </form>
        </div>
    </div>
	<!--==================================================-->
	<!-- Start Footer Area -->
	<!--==================================================-->
	<div class="footer-area">
		<div class="container">
			<div class="footer-shape1 bounce-animate-slow">
				<img src="{{ asset('admin/dist/assets/landing/assets/images/footer/footer-shape-1.png') }}" alt="">
			</div>
			<div class="footer-shape2 bounce-animate-slow">
				<img src="{{ asset('admin/dist/assets/landing/assets/images/footer/footer-shape-2.png') }}" alt="">
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-wiget wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
						<div class="footer-wiget-logo">
							
						</div>
						<div class="footer-wiget-text">
							<h4>Menginspirasi Masa Depan, Merajut Prestasi</h4>
						</div>
						<div class="footer-socilal-title">
							<h4>Follow us on</h4>
						</div>
						<div class="footer-social">
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-wiget wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
						<div class="footer-wiget-title">
							<h4>Our Services</h4>
						</div>
						<div class="footer-wiget-menu">
							<ul>
								<li><a href="landing.html">Visi Misi</a></li>
								<li><a href="contact.html">Contact Us Our</a></li>
								<li><a href="team.html">Team Our </a></li>
								<li><a href="course.html">Akademik</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-wiget wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1s">
						<div class="footer-wiget-title">
							<h4>Get In Touch</h4>
						</div>
						<div class="footer-wiget-touch">
							<ul>
								<li>
									<div class="icon">
										<i class="bi bi-geo-alt"></i>
									</div>
									<div class="title">
										<h6>Address</h6>
									</div>
									<div class="adress">
										<a href="#">122. Kemayoran. Jakarta</a>
									</div>
								</li>
								<li>
									<div class="icon">
										<i class="bi bi-telephone-plus-fill"></i>
									</div>
									<div class="title">
										<h6>Phone</h6>
									</div>
									<div class="adress">
										<a href="#">(+21) 776 865</a>
									</div>
								</li>
								<li>
									<div class="icon">
										<i class="bi bi-envelope"></i>
									</div>
									<div class="title">
										<h6>Email</h6>
									</div>
									<div class="adress">
										<a href="#">universitasjkrt@gmail.com</a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-wiget wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="1s">
						<div class="footer-wiget-title">
						
					</div>
				</div>
			</div>
			<div class="row align-items-center mt-90">
				<div class="col-lg-6 col-md-12">
					<div class="copyright-text">
						<p>© 2023 - 2025 | Universitas 404 Jakarta</a>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="footer-privacy-menu">
						<ul>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Terms & Conditions</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End Footer Area -->
	<!--==================================================-->


	<!--==================================================-->
	<!-- Start scrollup section Area -->
	<!--==================================================-->
	<!-- scrollup section -->
	<div class="prgoress_scrollup">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
		</svg>
	</div>
<!-- jquery js -->
<script src="{{ asset('admin/dist/assets/landing/assets/js/vendor/jquery-3.6.2.min.js') }}"></script>

<script src="{{ asset('admin/dist/assets/landing/assets/js/popper.min.js') }}"></script>

<!-- bootstrap js -->
<script src="{{ asset('admin/dist/assets/landing/assets/js/bootstrap.min.js') }}"></script>

<!-- carousel js -->
<script src="{{ asset('admin/dist/assets/landing/assets/js/owl.carousel.min.js') }}"></script>

<!-- counterup js -->
<script src="{{ asset('admin/dist/assets/landing/assets/js/jquery.counterup.min.js') }}"></script>

<!-- waypoints js -->
<script src="{{ asset('admin/dist/assets/landing/assets/js/waypoints.min.js') }}"></script>

<!-- wow js -->
<script src="{{ asset('admin/dist/assets/landing/assets/js/wow.min.js') }}"></script>

<!-- imagesloaded js -->
<script src="{{ asset('admin/dist/assets/landing/assets/js/imagesloaded.pkgd.min.js') }}"></script>

<!-- venobox js -->
<script src="{{ asset('admin/dist/assets/landing/venobox/venobox.js') }}"></script>

<!--  animated-text js -->
<script src="{{ asset('admin/dist/assets/landing/assets/js/animated-text.js') }}"></script>

<!-- venobox min js -->
<script src="{{ asset('admin/dist/assets/landing/venobox/venobox.min.js') }}"></script>

<!-- isotope js -->
<script src="{{ asset('admin/dist/assets/landing/assets/js/isotope.pkgd.min.js') }}"></script>

<!-- jquery meanmenu js -->
<script src="{{ asset('admin/dist/assets/landing/assets/js/jquery.meanmenu.js') }}"></script>

<!-- jquery scrollup js -->
<script src="{{ asset('admin/dist/assets/landing/assets/js/jquery.scrollUp.js') }}"></script>

<!-- Slick Slider -->
<script src="{{ asset('admin/dist/assets/landing/assets/slick/slick.min.js') }}"></script>

<script src="{{ asset('admin/dist/assets/landing/assets/js/jquery.barfiller.js') }}"></script>
<!-- jquery js -->

<!-- ragrslider js -->
<script src="{{ asset('admin/dist/assets/landing/assets/js/rangeslider.js') }}"></script>

<!-- ragrslider js -->
<script src="{{ asset('admin/dist/assets/landing/assets/js/mixitup.min.js') }}"></script>

<!-- theme js -->
<script src="{{ asset('admin/dist/assets/landing/assets/js/theme.js') }}"></script>

<!-- scroll js -->
<script src="{{ asset('admin/dist/assets/landing/assets/js/script.js') }}"></script>