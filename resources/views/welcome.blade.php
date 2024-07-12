<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Universitas 404 Jakarta</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="56x56" href="{{ asset('admin/dist/assets/images/main/favicon.ico') }}">
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
</head>

<body>
	<!-- loder -->
	<div class="loader_bg">
	</div>

	<!--==================================================-->
	<!-- Start Header Area -->
	<!--==================================================-->
	<header class="header-area" id="sticky-header">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-2">
					<div class="logo">
						<a href="index.html"><img src="https://dl.dropbox.com/scl/fi/0swx2av8l9jradvyj6d4x/404.png?rlkey=m27xtoqzkywz7h5uof4i1sh7v&st=4sffy5dg&dl=0" width="150" alt="150"></a>
					</div>
				</div>
				<div class="col-lg-10">
					<div class="header-menu">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Profil</a>
								<!-- <div class="sub-menu">
									<ul>
										<li><a href="blog-details.html">Sejarah </a></li>
										<li><a href="course-detials.html">Visi & Misi</a></li>
										<li><a href="team.html">Profil Dosen</a></li>
									</ul>
								</div> -->
							</li>
							<li><a href="#course">Program Studi</a></li>
							<li><a href="#team">Data Dosen</a></li>
							<li><a href="#video">Video</a></li>
							<li><a href="#testi">Mahasiswa</a></li>
							<li><a href="#">Contacts</a></li>
						</ul>
						<div class="main-btn">
							<a href="{{ route('login') }}" class="nest-btn">
								<span class="nest-btn__shape"></span>
								<span class="nest-btn__shape"></span>
								<span class="nest-btn__shape"></span>
								<span class="nest-btn__shape"></span>
								<span class="nest-btn__text">Login</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- estudy Mobile Menu Area -->
	<div class="mobile-menu-area sticky-menu" id="navbar">
		<div class="mobile-menu">
			<div class="mobile-logo">
				<a href="index.html"><img src="assets/images/logo.png" alt=""></a>
			</div>
			<div class="side-menu-info">
				<div class="sidebar-menu">
					<a class="navSidebar-button" href="#"><i class="bi bi-justify-right"></i></a>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End Header Area -->
	<!--==================================================-->

	<!-- Start Banner Area -->
	<!--==================================================-->
	<div class="slider_list owl-carousel">
		<div class="slider-area d-flex align-items-center">
			<div class="slider-shape-area">
				<div class="baner-shape1 bounce-animate">
					<img src="" alt="">
				</div>
				<div class="baner-shape2 bounce-animate">
					<img src="{{ asset('admin/dist/assets/landingassets/images/slider/slider-shape2.png') }}" alt="">
				</div>
				<div class="baner-shape3 watermark-animate">
					<img src="{{ asset('admin/dist/assets/landingassets/images/slider/slider-shape2.png') }}" alt="">
				</div>
				<div class="baner-shape4 bounce-animate4">
					<img src="{{ asset('admin/dist/assets/landing/assets/images/slider/slider-shape2.png') }}" alt="">
				</div>
			</div>
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="slider-content">
							<div class="slider-sub-title">
								<h4>Selamat Datang</h4>
							</div>
							<div class="slider-main-title">
								<h1>Universitas 404 Jakarta</h1>
							</div>
							<div class="main-btn slider1">
								<a href="{{ route('login') }}" class="nest-btn slider1">
									<span class="nest-btn__shape slider"></span>
									<span class="nest-btn__shape slider"></span>
									<span class="nest-btn__shape slider"></span>
									<span class="nest-btn__shape slider"></span>
									<span class="nest-btn__text">Login Now</span>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="slider-thumb">
							<img src="{{ asset('admin/dist/assets/landing/assets/images/slider/slider-thumb.png') }}" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="slider-area d-flex align-items-center">
			<div class="slider-shape-area">
				<div class="baner-shape1 bounce-animate">
					<img src="{{ asset('admin/dist/assets/landing/assets/images/slider/slider-shape2.png') }}" alt="">
				</div>
				<div class="baner-shape2 bounce-animate">
					<img src="{{ asset('admin/dist/assets/landing/assets/images/slider/slider-shape2.png') }}" alt="">
				</div>
				<div class="baner-shape3 watermark-animate">
					<img src="{{ asset('admin/dist/assets/landing/assets/images/slider/slider-shape2.png') }}" alt="">
				</div>
				<div class="baner-shape4 bounce-animate4">
					<img src="{{ asset('admin/dist/assets/landing/assets/images/slider/slider-shape2.png') }}" alt="">
				</div>
			</div>
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="slider-content">
							<div class="slider-sub-title">
								<h4> Mari Bergabung di Universitas 404 Jakarta  </h4>
							</div>
							<div class="slider-main-title">
								<h1>pendidikan bertemu dengan inovasi.</h1>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="slider-thumb">
							<img src="" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End Banner Area -->
	<!--==================================================-->

		<!-- Start Catagories  Area -->
	<!--==================================================-->
	<div class="catagories-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
						<div class="section-title-shape">
							<img src="{{ asset('admin/dist/assets/landing/assets/images/resource/section-shape.png') }}" alt="">
						</div>
						<div class="section-sub-title">
								<p>Selamat datang di website resmi kampus kami. Kampus kami menyediakan berbagai program studi berkualitas dan tenaga pengajar yang berpengalaman.</p>
							  </section>
							  </h4>
						</div>
						<div class="prodi" id="course">
							<h1>Program Studi Teknik Informatika</h1>
							<br>
							<p>Program Studi Teknik Informatika fokus pada pengembangan software dan hardware.
								<p>Visi & Misi: Menghasilkan lulusan yang kompeten dalam bidang teknologi informasi.</p>
								<p>Prospek Kerja: Software Developer, Network Engineer, Data Scientist, dll</p>
						  </div>
						
					</div>
				</div>
			</div>
			<div class="row">
				<div class="catagories_list owl-carousel">
					<div class="col-lg-12">
						<div class="catagories-single-box wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
							<div class="catagories-thumb">
								<img src="{{ asset('admin/dist/assets/landing/assets/images/catagories/catagories2.png') }}" alt="">
								<div class="catagories-text">
									<h4>Visit</h4>
								</div>
							</div>
							<div class="catagories-title">
								<h4><a href="#">Web Design</a></h4>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="catagories-single-box wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1s">
							<div class="catagories-thumb">
								<img src="{{ asset('admin/dist/assets/landing/assets/images/catagories/catagories3.png') }}" alt="">
								<div class="catagories-text">
									<h4>Visit</h4>
								</div>
							</div>
							<div class="catagories-title">
								<h4><a href="#">Graphic Design</a></h4>
							</div>
						</div>
					</div>

					<div class="col-lg-12">
						<div class="catagories-single-box wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
							<div class="catagories-thumb">
								<img src="{{ asset('admin/dist/assets/landing/assets/images/catagories/catagories5.png') }}" alt="">
								<div class="catagories-text">
									<h4>Visit</h4>
								</div>
							</div>
							<div class="catagories-title">
								<h4><a href="#">Mobile Application</a></h4>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="catagories-single-box wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
							<div class="catagories-thumb">
								<img src="{{ asset('admin/dist/assets/landing/assets/images/catagories/catagories6.png') }}" alt="">
								<div class="catagories-text">
									<h4>Visit</h4>
								</div>
							</div>
							<div class="catagories-title">
								<h4><a href="#">Development</a></h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End Catagories Area -->
	<!--==================================================-->

	<!--==================================================-->
	<!-- Start Course  Area -->
	<!--==================================================-->
	<div class="course-area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-12">
					<div class="section-title wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
						<div class="section-title-shape">
							<img src="{{ asset('admin/dist/assets/landing/assets/images/resource/section-shape.png') }}" alt="">
						</div>
						<div class="section-sub-title">
						</div>
						<div class="prodi">
							<h2>Program Studi Sistem Informasi</h2>
							<br>
							<p>Program Studi Sistem Informasi menggabungkan ilmu komputer dan bisnis.</p>
							<p>Visi & Misi: Mempersiapkan lulusan yang mampu mengelola sistem informasi dalam organisasi.</p>
							<p>Prospek Kerja: System Analyst, IT Consultant, Business Analyst, dll.</p>
						  </div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<ul class="course-menu d-flex justify-content-center wow fadeInUp" data-wow-delay="0.4s"
						data-wow-duration="1s">
						<li class=""><a href="#!" data-mixitup-control="" data-filter=".ios" class="">DKV</a>
						</li>
						<li class=""><a href="#!" data-mixitup-control="" data-filter=".and" class="">  E- Bisnis</a>
						</li>
						<li class=""><a href="#!" data-mixitup-control="" data-filter=".mar" class=""> enterfice</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="row filters" id="MixItUp7324BF">
				<div class="col-lg-4 col-md-6 mix ios des">
					<div class="course-single-box wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
						<div class="course-thumb">
							<img src="https://dl.dropbox.com/scl/fi/bpr1fo1b6uki8vxbdzwrw/Xencelabs-gives-digital-designers-natural-drawing-feel-with-Pen-Display-24.jpeg?rlkey=9embd8paf6mb67nrw1zx3lhbg&st=hp1ai5ze&dl=0" alt="">
							<img src="https://dl.dropbox.com/scl/fi/bpr1fo1b6uki8vxbdzwrw/Xencelabs-gives-digital-designers-natural-drawing-feel-with-Pen-Display-24.jpeg?rlkey=9embd8paf6mb67nrw1zx3lhbg&st=hp1ai5ze&dl=0" alt="">
							<div class="course-icon">
								<i class="bi bi-heart"></i>
							</div>
							<div class="course-rating">
								<div class="course-admin">
									<div class="course-shape">
									</div>
									<div class="course-shape-title">
									</div>
								</div>
								<div class="course-star">
								</div>
							</div>
						</div>
						<div class="course-content">
							
							<div class="course-title">
								<h4><a href="#">Merancang visual yang mampu menggugah emosi dan memperkuat pesan komunikasi.</a></h4>
							</div>
							<div class="course-bottom">
								<div class="course-price">
									<span></span>
								</div>
								<div class="course-cart">
									
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mix ios and">
					<div class="course-single-box wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
						<div class="course-thumb">
							<img src="{{ asset('admin/dist/assets/landing/assets/images/course/course2.png') }}" width="200" alt="">
							<img src="{{ asset('admin/dist/assets/landing/assets/images/course/course2.png') }}" width="200"  alt="">
							<div class="course-icon">
								<i class="bi bi-heart"></i>
							</div>
							<div class="course-rating">
								<div class="course-admin">
									<div class="course-shape">
									</div>
									<div class="course-shape-title">
									</div>
								</div>
								<div class="course-star">
								</div>
							</div>
						</div>
						<div class="course-content">
							<div class="course-meta">
							</div>
							<div class="course-title">
								<h4><a href="#">Mengubah visi kreatif menjadi desain yang dapat dirasakan dan dipahami.</a></h4>
							</div>
							<div class="course-bottom">
								<div class="course-price">
								</div>
								<div class="course-cart">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mix mar des">
					<div class="course-single-box wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1s">
						<div class="course-thumb">
							<img src="https://dl.dropbox.com/scl/fi/37tvua2olsa3auv6sb9ka/How-to-Easily-Improve-Your-Business-s-Marketing-Efforts-6-Ways.jpeg?rlkey=vrochurgkfmmut9sxkzrr7c3j&st=ky9zeatn&dl=0" alt="">
							<img src="https://dl.dropbox.com/scl/fi/37tvua2olsa3auv6sb9ka/How-to-Easily-Improve-Your-Business-s-Marketing-Efforts-6-Ways.jpeg?rlkey=vrochurgkfmmut9sxkzrr7c3j&st=ky9zeatn&dl=0" alt="">
							<div class="course-icon">
								<i class="bi bi-heart"></i>
							</div>
							<div class="course-rating">
								<div class="course-admin">
									<div class="course-shape">
									</div>
									<div class="course-shape-title">
									</div>
								</div>
								<div class="course-star">
								</div>
							</div>
						</div>
						<div class="course-content">
							<div class="course-meta">
							</div>
							<div class="course-title">
								<h4><a href="#">Beradaptasi dengan baik di berbagai perangkat dan ukuran layar.</a></h4>
							</div>
							<div class="course-bottom">
								<div class="course-price">
								</div>
								<div class="course-cart">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mix and des">
					<div class="course-single-box wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
						<div class="course-thumb">
							<img src="https://dl.dropbox.com/scl/fi/78e0tahczlftbljfpxrdx/Learn-the-Latest-Trends-in-CX-Telco-Payments.jpeg?rlkey=qd3nptq6nubfi58d589klqq4f&st=t26dqla8&dl=0" alt="">
							<img src="https://dl.dropbox.com/scl/fi/78e0tahczlftbljfpxrdx/Learn-the-Latest-Trends-in-CX-Telco-Payments.jpeg?rlkey=qd3nptq6nubfi58d589klqq4f&st=t26dqla8&dl=0" alt="">
							<div class="course-icon">
								<i class="bi bi-heart"></i>
							</div>
							<div class="course-rating">
								<div class="course-admin">
									<div class="course-shape">
									</div>
									<div class="course-shape-title">
									</div>
								</div>
								<div class="course-star">
									
								</div>
							</div>
						</div>
						<div class="course-content">
							<div class="course-meta">
							</div>
							<div class="course-title">
								<h4><a href="#">Membuka pintu bagi bisnis Anda ke pasar global dengan kekuatan internet.
								</a></h4>
							</div>
							<div class="course-bottom">
								<div class="course-price">
								</div>
								<div class="course-cart">
									
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mix mar ios">
					<div class="course-single-box wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
						<div class="course-thumb">
							<img src="https://dl.dropbox.com/scl/fi/b8ckq8wl022vt3wirkmux/Council-Post_-Four-Tips-To-Make-You-A-Better-Leader.jpeg?rlkey=kgr7l5mixsjk6nyjmhhk7r0wp&st=n8hcjbuo&dl=0" alt="">
							<img src="https://dl.dropbox.com/scl/fi/b8ckq8wl022vt3wirkmux/Council-Post_-Four-Tips-To-Make-You-A-Better-Leader.jpeg?rlkey=kgr7l5mixsjk6nyjmhhk7r0wp&st=n8hcjbuo&dl=0" alt="">
							<div class="course-icon">
								<i class="bi bi-heart"></i>
							</div>
							<div class="course-rating">
								<div class="course-admin">
									<div class="course-shape">
									</div>
									<div class="course-shape-title">
									</div>
								</div>
								<div class="course-star">
								</div>
							</div>
						</div>
						<div class="course-content">
							<div class="course-meta">

							</div>
							<div class="course-title">
								<h4><a href="#">Menghadirkan solusi kreatif untuk meningkatkan keterlibatan dan efisiensi.</a></h4>
							</div>
							<div class="course-bottom">
								<div class="course-price">
								</div>
								<div class="course-cart">
						
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mix and mar">
					<div class="course-single-box wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1s">
						<div class="course-thumb">
							<img src="https://dl.dropbox.com/scl/fi/iow64iaip8eeqwhfnpn1c/Premium-Photo-_-Business-team-discussing-sales-results.jpeg?rlkey=p11b18ii8lqcg58feyimjgwgo&st=olnfhh3v&dl=0" alt="">
							<img src="https://dl.dropbox.com/scl/fi/iow64iaip8eeqwhfnpn1c/Premium-Photo-_-Business-team-discussing-sales-results.jpeg?rlkey=p11b18ii8lqcg58feyimjgwgo&st=olnfhh3v&dl=0" alt="">
							<div class="course-icon">
								<i class="bi bi-heart"></i>
							</div>
							<div class="course-rating">
								<div class="course-admin">
									<div class="course-shape">
									</div>
									<div class="course-shape-title">
									</div>
								</div>
								<div class="course-star">
								</div>
							</div>
						</div>
						<div class="course-content">
							<div class="course-meta">
							</div>
							<div class="course-title">
								<h4><a href="#">Menyediakan solusi terdepan untuk mendukung pertumbuhan dan keberlanjutan bisnis Anda.</a></h4>
							</div>
							<div class="course-bottom">
								<div class="course-price">
								</div>
								<div class="course-cart">

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End Course  Area -->
	<!--==================================================-->

	<div class="choose-us-area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-12">
					<div class="section-title wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
						<div class="section-title-shape">
							<img src="{{ asset('admin/dist/assets/landing/assets/images/resource/section-shape.png') }}" alt="">
						</div>
						<div class="section-sub-title">
						</div>
						<div class="section-main-title">
							<h2>Program Studi Bisnis Digital</h2>
							<p>Program Studi Bisnis Digital di Universitas Pakuan bertujuan untuk menghasilkan lulusan yang kompeten dalam mengelola dan mengembangkan bisnis berbasis digital. Kurikulum dirancang untuk memberikan pemahaman mendalam tentang teknologi digital, strategi pemasaran, analisis data, dan manajemen bisnis.</p>
							<p>VISI & MISI Menjadi program studi unggulan yang menghasilkan lulusan berkualitas tinggi di bidang bisnis digital yang mampu bersaing di tingkat nasional dan internasional</p>
							<P>Lulusan Program Studi Bisnis Digital memiliki prospek kerja yang luas, Digital Marketing , E-commerce Manager, Business Development Manager, dan Consultant di bidang teknologi dan bisnis digital</P>
							
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="main-btn choose wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
						
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="choose-single-box wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
						<div class="choose-thumb">
							<img src="{{ asset('admin/dist/assets/landing/assets/images/resource/choose1.png') }}" alt="">
						</div>
						<div class="choose-content">
							<span>July 05, 2024</span>
							<h4>Business Development Manager</h4>
							<p>Mengidentifikasi peluang bisnis baru, membangun hubungan dengan klien, dan mengembangkan strategi untuk ekspansi pasar dan pertumbuhan bisnis.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="choose-single-box wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
						<div class="choose-thumb">
							<img src="{{ asset('admin/dist/assets/landing/assets/images/resource/choose2.png') }}" alt="">
						</div>
						<div class="choose-content">
							<span>July 05, 2024</span>
							<h4>Consultant di bidang teknologi dan bisnis digital</h4>
							<p>Memberikan konsultasi kepada perusahaan mengenai implementasi teknologi digital</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="choose-single-box wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1s">
						<div class="choose-thumb">
							<img src="{{ asset('admin/dist/assets/landing/assets/images/resource/choose3.png') }}" alt="">
						</div>
						<div class="choose-content">
							<span>July 05, 2024</span>
							<h4>E-commerce Manager</h4>
							<p>Mengelola dan mengoptimalkan operasional toko online, termasuk strategi pemasaran, pengelolaan inventaris, dan pengalaman pelanggan.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="choose-single-box wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="1s">
						<div class="choose-thumb">
							<img src="{{ asset('admin/dist/assets/landing/assets/images/resource/choose4.png') }}" alt="">
						</div>
						<div class="choose-content">
							<span>July 05, 2024</span>
							<h4>Business Development Manager</h4>
							<p>Mengidentifikasi peluang bisnis baru, membangun hubungan dengan klien, dan mengembangkan strategi.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!--==================================================-->
	<!-- Start Help  Area -->
	<!--==================================================-->
	<div class="help-area">
		<div class="container">
			<div class="row align-items-center">
					<div class="help-main-title wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
						<h2>UNIVERSITAS 404 JAKARTA</h2>
					</div>
					<div class="help-list wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1s">
						<span><i class="bi bi-check"></i> Menyelenggarakan pendidikan yang berkualitas tinggi</span>
						<span><i class="bi bi-check"></i> Mendorong penelitian inovatif dan aplikatif</span>
						<span><i class="bi bi-check"></i> Menghasilkan lulusan yang kompeten dan siap bersaing di dunia kerja</span>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="help-items-box wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="1s">
						<div class="help-icon-thumb">
							<img src="{{ asset('admin/dist/assets/landing/assets/images/resource/help-icon.png') }}" alt="">
						</div>
						<div class="help-items-content">
							<h6>Call us</h6>
							<h4><a href="#">+21 776 865</a></h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End Help  Area -->
	<!--==================================================-->




	<!--==================================================-->
	<!-- Start Team Area -->
	<!--==================================================-->
	<div class="team-area" id="team">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title text-center wow fadeInUp animated" data-wow-delay="100ms">
						<div class="section-title-shape">
							<img src="{{ asset('admin/dist/assets/landing/assets/images/resource/section-shape.png') }}" alt="">
						</div>
						<div class="section-sub-title">
							<h4>Data Dosen</h4>
						</div>
						<div class="section-main-title">
							<h2>Universitas 404 Jakarta</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="team-single-box wow fadeInUp animated" data-wow-delay="200ms">
						<div class="team-thumb">
							<img src="https://dl.dropbox.com/scl/fi/bymz7fpgxck6vrfc0kvbo/IMG-20240706-WA0006.jpg?rlkey=f31x67flokwa1m21phpg6qlk9&st=h14wey2c&dl=0" alt="">
						</div>
						<div class="team-content">
							<div class="team-title">
								<h4><a href="team-detials.html">Dr. Asep Kuswandi</a></h4>
								<span>REKTOR</span>
							</div>
							<div class="team-social-icon">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-instagram"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
								</ul>
							</div>
							<div class="team-btn">
								<a href="team-detials.html">Lihat Detail</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="team-single-box wow fadeInUp animated" data-wow-delay="300ms">
						<div class="team-thumb">
							<img src="https://dl.dropbox.com/scl/fi/8e3caljzx65j0pomwf2lq/IMG-20240706-WA0007.jpg?rlkey=pfv4ia3f6nbyusavq3vb16kay&st=2wbfjyz3&dl=0" alt="">
						</div>
						<div class="team-content">
							<div class="team-title">
								<h4><a href="team-detials.html">Dr. Bambang Supriyadi</a></h4>
								<span>Kepala Program Studi</span>
							</div>
							<div class="team-social-icon">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-instagram"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
								</ul>
							</div>
							<div class="team-btn">
								<a href="cv2.html">Lihat Detail</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="team-single-box wow fadeInUp animated" data-wow-delay="400ms">
						<div class="team-thumb">
							<img src="https://dl.dropbox.com/scl/fi/0zw22el295pggnzjwo4sm/IMG-20240706-WA0008.jpg?rlkey=2bxlkw9n6yroyw2kqcfw19c14&st=xz4gnik1&dl=0" alt="">
						</div>
						<div class="team-content">
							<div class="team-title">
								<h4><a href="team-detials.html">Dr. Taufik Hidayat</a></h4>
								<span>Pembingbing Akademik TI</span>
							</div>
							<div class="team-social-icon">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-instagram"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
								</ul>
							</div>
							<div class="team-btn">
								<a href="cv3.html">Lihat Detail</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="team-single-box wow fadeInUp animated" data-wow-delay="500ms">
						<div class="team-thumb">
							<img src="https://dl.dropbox.com/scl/fi/6jksngpntvkx7u651cf8v/IMG-20240706-WA0013.jpg?rlkey=9yc95il3xn3chqku6258u8deb&st=mlskf3ck&dl=0" alt="">
						</div>
						<div class="team-content">
							<div class="team-title">
								<h4><a href="team-detials.html">Dr. Mahdi Wijaya</a></h4>
								<span>Dosen Pembimbing Skripsi/Tesis/Disertasi</span>
							</div>
							<div class="team-social-icon">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-instagram"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
								</ul>
							</div>
							<div class="team-btn">
								<a href="cv4,html">Lihat Detail</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End Team Area -->
	<!--==================================================-->


	<!--==================================================-->
	<!-- Start Video Gallery Area -->
	<!--==================================================-->
	<div class="video-gallery-area" id="video">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title text-center wow fadeInUp animated" data-wow-delay="100ms">
						<div class="section-title-shape">
							<img src="{{ asset('admin/dist/assets/landing/assets/images/resource/section-shape.png') }}" alt="">
						</div>
						<div class="section-sub-title">
							<h4>LATEST VIDEO GALLERY</h4>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="video-single-box wow fadeInUp animated" data-wow-delay="200ms">
						<div class="video-thumb">
							<img src="https://dl.dropbox.com/scl/fi/s0bzbaea91hz5ojf80drs/oxfo.jpg?rlkey=fn1dus4acjwz1ddqufjg5yt7t&st=jj22j8n5&dl=0" alt="">
							<div class="video-price">
							</div>
							<div class="video-content">
								<div class="video-icon">
									<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube"
										data-autoplay="true" href="https://youtu.be/sao63znb0Tw?si=KitLxBYfyHm9kUrb"><i
											class="bi bi-play"></i></a>
								</div>
								<div class="video-title">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="video-single-box wow fadeInUp animated" data-wow-delay="400ms">
						<div class="video-thumb">
							<img src="https://dl.dropbox.com/scl/fi/g7v6r8z78471sqwncec90/IMG-20240706-WA0019.jpg?rlkey=6uv8czpsfe2rdp8vm27ugobq5&st=tcr5sofj&dl=0" alt="">
							<div class="video-price">
							</div>
							<div class="video-content">
								<div class="video-icon">
									<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube"
										data-autoplay="true" href="https://youtu.be/sao63znb0Tw?si=yP0kGTJgjPXC-57Z"><i
											class="bi bi-play"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="video-single-box wow fadeInUp animated" data-wow-delay="600ms">
						<div class="video-thumb">
							<img src="https://dl.dropbox.com/scl/fi/c3kvtwtg9tzsipnz7n731/IMG-20240706-WA0020.jpg?rlkey=4bvulhb5b2g7nr88mdvdp3m8y&st=j9ad81kd&dl=0" alt="">
							<div class="video-price">
							</div>
							<div class="video-content">
								<div class="video-icon">
									<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube"
										data-autoplay="true" href="https://youtu.be/iY9pUZEM6co?si=73GIcRoM8TQl60oI"><i
											class="bi bi-play"></i></a>
								</div>
								<div class="video-title">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="video-single-box wow fadeInUp animated" data-wow-delay="800ms">
						<div class="video-thumb">
							<img src="https://dl.dropbox.com/scl/fi/bu2djp500h1upw7gtyfwz/IMG-20240706-WA0021.jpg?rlkey=56m878s1e7xfg7a1mixuaxkac&st=ajogusrq&dl=0" alt="">
							<div class="video-price">
							</div>
							<div class="video-content">
								<div class="video-icon">
									<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube"
										data-autoplay="true" href="https://youtu.be/sWB0ng7KtM4?si=fH_z3cqKEA_Eyy4z"><i
											class="bi bi-play"></i></a>
								</div>
								<div class="video-title">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End Video Gallery Area -->
	<!--==================================================-->
	<!--==================================================-->
	<!--==================================================-->
	<!-- Start Testimonial Area -->
	<!--==================================================-->
	<div class="testimonial-area" id="testi">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title text-center wow fadeInUp animated" data-wow-delay="100ms">
						<div class="section-title-shape">
							<img src="{{ asset('admin/dist/assets/landing/assets/images/resource/section-shape.png') }}" alt="">
						</div>
						<div class="section-sub-title">
							<h4>MAHASISWA </h4>
						</div>
						<div class="section-main-title">
							<h2>BERPRESTASI</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="column">
					<div class="testi-single-box wow fadeInUp animated" data-wow-delay="200ms">
						<div class="testi-thumb">
							<img src="https://dl.dropbox.com/scl/fi/ktjp990tdqg0setk8a49p/WhatsApp-Image-2024-07-06-at-10.38.41_cdb6ccd3.jpg?rlkey=hgewdos8819vg8okd77pqvvcr&st=wjthukgl&dl=0" alt="">
							<div class="testi-content">
								<h4> Farhan Abdullah</h4>
								<span>Teknik Informatika/span>
								<p>pengembangan aplikasi mobile dan kecerdasan buatan. Saya telah berhasil mengembangkan beberapa aplikasi berbasis AI yang telah diimplementasikan di industri lokal. </p>
							</div>
						</div>
					</div>
					<div class="testi-items-box two wow fadeInUp animated" data-wow-delay="400ms">
						<div class="testi-shape">
						</div>
						<div class="testi-icon">
							<i class="bi bi-star-fill"></i>
							<i class="bi bi-star-fill"></i>
							<i class="bi bi-star-fill"></i>
							<i class="bi bi-star-fill"></i>
							<i class="bi bi-star-fill"></i>
						</div>
						<div class="testi-item-content">
							<h4>Farhan Abdullah</h4>
							<span>Web Developer</span>
							<p> Saya Rizky Pratama, mahasiswa semester enam di Jurusan Teknik Informatika, Universitas 404 Jakarta. Saya memiliki minat yang besar dalam pengembangan aplikasi mobile dan kecerdasan buatan. </p>
						</div>
					</div>
				</div>
				<div class="column">
					<div class="testi-items-box wow fadeInUp animated" data-wow-delay="600ms">
						<div class="testi-shape">
						</div>
						<div class="testi-icon">
							<i class="bi bi-star-fill"></i>
							<i class="bi bi-star-fill"></i>
							<i class="bi bi-star-fill"></i>
							<i class="bi bi-star-fill"></i>
							<i class="bi bi-star-fill"></i>
						</div>
						<div class="testi-item-content">
							<h4>Anisa Putri</h4>
							<p>Saya Anisa Putri, mahasiswa tingkat akhir di Program Studi Sistem Informasi, Universitas 404 Jakarta. Saya tertarik pada analisis bisnis dan manajemen sistem informasi.</p>
						</div>
					</div>
					<div class="testi-single-box wow fadeInUp animated" data-wow-delay="800ms">
						<div class="testi-thumb">
							<img src="https://dl.dropbox.com/scl/fi/5ra1teq317hrik937oi1u/WhatsApp-Image-2024-07-06-at-10.38.41_0a66cf95.jpg?rlkey=sxw1r9sn961gk79js2eqa6qsq&st=4iqp5f2z&dl=0" alt="">
							<div class="testi-content">
								<h4>Anisa Putri</h4>
								<span>Senior Consultant</span>
								<p>Telah berhasil memenangkan kompetisi analisis data regional dan menerapkan solusi analitik untuk meningkatkan efisiensi operasional dalam sebuah perusahaan start-up lokal.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="column">
					<div class="testi-single-box wow fadeInUp animated" data-wow-delay="1000ms">
						<div class="testi-thumb">
							<img src="https://dl.dropbox.com/scl/fi/tq8cwv1ivajmw8gn5a6ey/WhatsApp-Image-2024-07-06-at-10.38.41_1329f798.jpg?rlkey=hqqmnfedlhk0p5rm2c8zj09xl&st=lcz8wd1c&dl=0" alt="">
							<div class="testi-content">
								<h4>Aditya Nugraha</h4>
								<p>berhasil mengembangkan strategi pemasaran digital yang inovatif untuk beberapa perusahaan lokal, meningkatkan visibilitas dan penjualan mereka secara signifikan.</p>
							</div>
						</div>
					</div>
					<div class="testi-items-box two wow fadeInUp animated" data-wow-delay="1200ms">
						<div class="testi-shape">

						</div>
						<div class="testi-icon">
							<i class="bi bi-star-fill"></i>
							<i class="bi bi-star-fill"></i>
							<i class="bi bi-star-fill"></i>
							<i class="bi bi-star-fill"></i>
							<i class="bi bi-star-fill"></i>
						</div>
						<div class="testi-item-content">
							<h4>Aditya Nugraha</h4>
							<p>Saya Aditya Nugraha, mahasiswa tahun ketiga di Program Studi Bisnis Digital, Universitas 404 Jakarta. Saya memiliki minat yang mendalam dalam e-commerce dan pemasaran digital. </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End Testimonial Area -->
	<!--==================================================-->

	<!--==================================================-->
	<!-- Start Sidebar Area -->
	<!--==================================================-->
	<div class="sidebar-group info-group">
		<div class="sidebar-widget">
			<div class="sidebar-widget-container">
				<div class="widget-heading">
					<a href="#" class="close-side-widget">
						<i class="bi bi-x-lg"></i>
					</a>
				</div>
				<div class="sidebar-textwidget">
					<div class="sidebar-info-contents">
						<div class="content-inner">
							<div class="sidebar-logo">
								<a href="index.html"><img src="{{ asset('admin/dist/assets/landing/assets/images/logo.png') }}" alt="logo"></a>
							</div>
							<div class="sidebar-widget-menu">
								<ul>
									<li class="dropdown"><a href="#" data-toggle="dropdown">Home <i
												class="icon-arrow"></i></a>
										<ul class="dropdown-menu">
											<li><a href="index.html">Home </a></li>
											<li><a href="landing.html">Home Landing</a></li>
											<li><a href="video.html">Home Video</a></li>
										</ul>
									</li>
									<li class="dropdown"><a href="#" data-toggle="dropdown">Courses <i class="icon-arrow"></i></a>
										<ul class="dropdown-menu">
											<li><a href="service.html">Courses</a></li>
											<li><a href="course-details.html">Courses Details</a></li>
										</ul>
									</li>
									<li class="dropdown"><a href="#" data-toggle="dropdown">Team <i
												class="icon-arrow"></i></a>
										<ul class="dropdown-menu">
											<li><a href="team.html">Team</a></li>
											<li><a href="team-detials.html">Team Details</a></li>
										</ul>
									</li>
									<li class="dropdown"><a href="#project" data-toggle="dropdown">Pages <i
												class="icon-arrow"></i></a>
										<ul class="dropdown-menu">
											<li><a href="team.html">Team</a></li>
											<li><a href="team-detials.html">Team Details</a></li>
											<li><a href="project-grid.html">Gallery</a></li>
											<li><a href="projects-details.html">Gallery Details</a></li>
											<li><a href="faq.html">Faq Page</a></li>
											<li><a href="contact.html">Contact</a></li>
											<li><a href="error.html">Error Page</a></li>
										</ul>
									</li>
									<li class="dropdown"><a href="#" data-toggle="dropdown">Blog <i
												class="icon-arrow"></i></a>
										<ul class="dropdown-menu">
											<li><a href="blog.html">Blog</a></li>
											<li><a href="blog-details.html">Blog Details</a></li>
										</ul>
									</li>
									<li class="dropdown"><a href="contact.html" data-toggle="dropdown">Contacts</a></li>
								</ul>
							</div>
							<div class="contact-info">
								<h2>Contact Info</h2>
								<ul class="list-style-one">
									<li><i class="bi bi-geo-alt-fill"></i>6391 Elgin St. Celina, Delaware</li>
									<li><i class="bi bi-telephone-fill"></i>(+001) 123-456-789</li>
									<li><i class="bi bi-envelope"></i> info@example.com</li>
									<li><i class="bi bi-alarm-fill"></i> Week Days: 08.00 to 10.00
									</li>
								</ul>
							</div>
							<ul class="social-box">
								<li class="facebook"><a href="#" class="fab fa-facebook-f"></a></li>
								<li class="twitter"><a href="#" class="fab fa-instagram"></a></li>
								<li class="linkedin"><a href="#" class="fab fa-twitter"></a></li>
								<li class="instagram"><a href="#" class="fab fa-pinterest-p"></a></li>
								<li class="youtube"><a href="#" class="fab fa-linkedin-in"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End Sidebar Area -->
	<!--==================================================-->

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

	<!--==================================================-->
	<!-- End scrollup section Area -->
	<!--==================================================-->


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

</body>

</html>