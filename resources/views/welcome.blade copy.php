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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<!-- modernizr js -->
	<script src="{{ asset('admin/dist/assets/landing/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
	<link rel="icon" href="{{ asset('admin/src/images/kogo bidan.jpg"') }}" type="image/png">
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
            <!-- Logo dan Teks Bunda Peduli -->
            <div class="col-lg-2 d-flex align-items-center">
                <a class="d-flex align-items-center text-decoration-non">
					<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
                    <img src="https://www.dropbox.com/scl/fi/4a6kod3m1l1u7ukq9p60w/logo-remove.png?rlkey=wslgefag7hc5gef0wv6sz09c6&raw=1" width="70" alt="Logo Bidan" />
					<span class="ms-2 fs-2" style="white-space: nowrap;">Bunda Peduli</span>
				</a>
                
            </div>

            <!-- Menu Navbar -->
            <div class="col-lg-10">
                <div class="header-menu">
                    <ul class="d-flex justify-content-center list-unstyled m-0">
                        <li><a href="#">Home</a></li>
                        <li><a href="#course">BMI</a></li>
                        <li><a href="#prodi2">Resep</a></li>
                        <li><a href="#gizi_sehat">Gizi Sehat</a></li>
                        <li><a href="{{ route('login') }}">Konsultasi</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
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
								<h1>Bunda Peduli</h1>
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
							<img src="{{ asset('admin/dist/assets/landing/assets/images/slider/Happy young woman with a baby in her arms.png') }}" alt="">
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
						<div class="slider-main-title">
								<h1>Dengan Bunda Peduli</h1>
							</div>
							<div class="slider-sub-title">
								<h4>Pantau Nutrisi Si Kecil</h4>
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
	<div class="categories-area mt-5">
    <div class="container mt-5 ">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
                </div>

                <!-- Kalkulator BMI Section -->
				<div class="prodi mt-5" id="course">
				<h1 class="text-start mb-1 text-black">Kalkulator BMI</h1>

				<div class="row mb-4">
					<!-- Penjelasan Rumus dan Deskripsi di sebelah kiri -->
					<div class="col-md-6 mt-5">
						<p class="text-start">
							Body Mass Index (BMI) adalah alat untuk mengukur proporsi berat badan terhadap tinggi badan. Ini digunakan untuk mengevaluasi apakah berat badan Anda berada dalam kategori yang sehat.
						</p>
						<p class="text-start">
							<strong>Rumus BMI:</strong> <em>BMI = Berat (kg) / (Tinggi (m))²</em>
						</p>
					</div>

					<!-- Tabel Kategori BMI di sebelah kanan -->
					<div class="col-md-6">
						<p class="text-center"><strong>Kategori BMI:</strong></p>
						<table class="table table-bordered text-center">
							<thead>
								<tr>
									<th scope="col">Kategori</th>
									<th scope="col">Rentang BMI</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Underweight</td>
									<td>&lt; 18.5</td>
								</tr>
								<tr>
									<td>Normal weight</td>
									<td>18.5 - 24.9</td>
								</tr>
								<tr>
									<td>Overweight</td>
									<td>25 - 29.9</td>
								</tr>
								<tr>
									<td>Obesity</td>
									<td>&ge; 30</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<p class="text-start">
					Masukkan berat badan dan tinggi badan Anda untuk menghitung BMI dan mengetahui kategori kesehatan Anda.
				</p>
			</div>


        <!-- Kalkulator dan Solusi Section -->
		
		<!DOCTYPE html>
		<html lang="id">
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Kalkulator BMI</title>
			<style>
				.custom-card {
					background-color: #EBA199; 
					border-radius: 10px;  
					box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);  
					padding: 20px;           
				}
			</style>
		</head>
		<body>
			<div class="row justify-content-center align-items-center mt-4 mb-5">
				<div class="col-md-6">
					<!-- Kalkulator BMI Card -->
					<div class="card p-4 shadow-lg rounded custom-card">
						<h2 class="text-center mb-4 text-black">Hitung BMI</h2>
						<form id="bmiForm">
							<div class="mb-3">
								<label for="weight" class="form-label">Berat (kg):</label>
								<input type="number" id="weight" class="form-control" required placeholder="Masukkan berat badan (kg)">
							</div>
							<div class="mb-3">
								<label for="height" class="form-label">Tinggi (cm):</label>
								<input type="number" id="height" class="form-control" required placeholder="Masukkan tinggi badan (cm)">
							</div>
							<button type="submit" class="btn w-100" style="background-color: #90CBC1; border: none; color: white;">Submit</button>
						</form>
                    <!-- Hasil BMI -->
                    <div id="bmi-result" class="mt-4" style="display:none;">
                        <h3 class="text-center">Hasil BMI:</h3>
                        <p id="bmi-value" class="text-center fs-4 fw-bold text-success"></p>
                        <p id="bmi-category" class="text-center fs-5 text-info"></p>
                    </div>
                </div>
            </div>

            <!-- Solusi & Informasi BMI Card -->
			<div class="col-md-6">
				<div class="card p-4 shadow-lg rounded">
					<style>
						.card {
							background-color: #EBA199; /* Warna latar belakang card */
							border-radius: 10px; /* Menambah radius pada sudut */
						}
					</style>
					<h2 class="text-center mb-4 text-black">Solusi & Informasi BMI</h2>
					<div id="solution" class="text-center">
						<p class="fs-5">Masukkan berat dan tinggi badan untuk mengetahui kategori BMI Anda dan solusi yang sesuai.</p>
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
	<div class="course-area mt-5" id="prodi2">
	<div class="container mt-5">
		<div class="row align-items-center">
			<div class="col-lg-6 col-md-12">
				<div class="section-title wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
					
				</div>
			</div>
			<div class="col-lg-9 col-md-12 mx-auto ">
				<ul class="course-menu d-flex justify-content-center wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
					<h1>Resep Makanan Sehat</h1>

				</ul>
			</div>
		</div>
		<div class="row filters" id="MixItUp7324BF">
			<div class="col-lg-4 col-md-6 mix ios des">
				<div class="course-single-box wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
					<div class="course-thumb">
						<img src="/admin/src/images/ayam.png" alt="Admin Image">
						<img src="/admin/src/images/ayam.png" alt="Admin Image">
						<div class="course-icon">
							<i class="bi bi-heart"></i>
						</div>
					</div>
					<div class="course-content">
						<div class="course-title">
							<h4><a href="https://hellosehat.com/parenting/anak-1-sampai-5-tahun/gizi-balita/menu-makan-malam-anak/">Pasta Ayam Bayam</a></h4>
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
						<img src="/admin/src/images/nasi.png" alt="Admin Image">
						<img src="/admin/src/images/nasi.png" alt="Admin Image">
						<div class="course-icon">
							<i class="bi bi-heart"></i>
						</div>
					</div>
					<div class="course-content">
						<div class="course-title">
							<h4><a href="https://hellosehat.com/parenting/anak-1-sampai-5-tahun/gizi-balita/menu-makanan-balita/">Nasi Goreng Seafood</a></h4>
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
						<img src="/admin/src/images/sayur.png" alt="Admin Image">
						<img src="/admin/src/images/sayur.png" alt="Admin Image">
						<div class="course-icon">
							<i class="bi bi-heart"></i>
						</div>
					</div>
					<div class="course-content">
						<div class="course-title">
							<h4><a href="https://hellosehat.com/parenting/anak-1-sampai-5-tahun/gizi-balita/menu-makanan-balita/">Sup Ayam</a></h4>
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
						<img src="/admin/src/images/makaroni.png" alt="Admin Image">
						<img src="/admin/src/images/makaroni.png" alt="Admin Image">
						<div class="course-icon">
							<i class="bi bi-heart"></i>
						</div>
					</div>
					<div class="course-content">
						<div class="course-title">
							<h4><a href="https://hellosehat.com/parenting/anak-1-sampai-5-tahun/gizi-balita/menu-makanan-balita/">Makaroni Skotel </a></h4>
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
						<img src="/admin/src/images/hati.png" alt="Admin Image">
						<img src="/admin/src/images/hati.png" alt="Admin Image">
						<div class="course-icon">
							<i class="bi bi-heart"></i>
						</div>
					</div>
					<div class="course-content">
						<div class="course-title">
							<h4><a href="https://hellosehat.com/parenting/anak-1-sampai-5-tahun/gizi-balita/menu-makanan-balita/">Semur Hati Ayam</a></h4>
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
						<img src="/admin/src/images/lemon.png" alt="Admin Image">
						<img src="/admin/src/images/lemon.png" alt="Admin Image">
						<div class="course-icon">
							<i class="bi bi-heart"></i>
						</div>
					</div>
					<div class="course-content">
						<div class="course-title">
							<h4><a href="https://hellosehat.com/parenting/anak-1-sampai-5-tahun/gizi-balita/menu-makanan-balita/">ES Loli Alpukat</a></h4>
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


			<div class="col-lg-9 col-md-12 mx-auto " id="gizi_sehat">
				<ul class="course-menu d-flex justify-content-center wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
					<h1>Gizi Sehat</h1>
				</ul>
			</div>
		</div>
		<div class="row filters" id="MixItUp7324BF">
			<div class="col-lg-4 col-md-6 mix ios des">
				<div class="course-single-box wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
					<div class="course-thumb">
						<img src="/admin/src/images/1.png" alt="Admin Image">
						<img src="/admin/src/images/1.png" alt="Admin Image">
						<div class="course-icon">
							<i class="bi bi-heart"></i>
						</div>
					</div>
					<div class="course-content">
						<div class="course-title">
							<h4><a href="https://www.alodokter.com/ketahui-10-manfaat-jus-buah-bagi-kesehatan-dan-cara-sehat-membuatnya">Ketahui 10 Manfaat Jus Buah bagi Kesehatan dan Cara Sehat Membuatnya</a></h4>
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
						<img src="/admin/src/images/2.png" alt="Admin Image">
						<img src="/admin/src/images/2.png" alt="Admin Image">
						<div class="course-icon">
							<i class="bi bi-heart"></i>
						</div>
					</div>
					<div class="course-content">
						<div class="course-title">
							<h4><a href="https://www.alodokter.com/beragam-jenis-ikan-yang-tidak-boleh-untuk-mpasi">Beragam Jenis Ikan yang Tidak Boleh untuk MPASI</a></h4>
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
						<img src="/admin/src/images/telor.png" alt="Admin Image">
						<img src="/admin/src/images/telor.png" alt="Admin Image">
						<div class="course-icon">
							<i class="bi bi-heart"></i>
						</div>
					</div>
					<div class="course-content">
						<div class="course-title">
							<h4><a href="https://www.alodokter.com/6-manfaat-telur-puyuh-untuk-anak-yang-sayang-dilewatkan">6 Manfaat Telur Puyuh untuk Anak yang Sayang Dilewatkan</a></h4>
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
						<img src="/admin/src/images/sambel.png" alt="Admin Image">
						<img src="/admin/src/images/sambel.png" alt="Admin Image">
						<div class="course-icon">
							<i class="bi bi-heart"></i>
						</div>
					</div>
					<div class="course-content">
						<div class="course-title">
							<h4><a href="https://www.alodokter.com/tekstur-mpasi-6-bulan-dan-resepnya">Tekstur MPASI 6 Bulan dan Resepnya </a></h4>
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
						<img src="/admin/src/images/bumbu.png" alt="Admin Image">
						<img src="/admin/src/images/bumbu.png" alt="Admin Image">
						<div class="course-icon">
							<i class="bi bi-heart"></i>
						</div>
					</div>
					<div class="course-content">
						<div class="course-title">
							<h4><a href="https://www.alodokter.com/mengenal-real-food-dan-manfaatnya-untuk-kesehatan">Mengenal Real Food dan Manfaatnya untuk Kesehatan</a></h4>
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
						<img src="/admin/src/images/krupuk.png" alt="Admin Image">
						<img src="/admin/src/images/krupuk.png" alt="Admin Image">
						<div class="course-icon">
							<i class="bi bi-heart"></i>
						</div>
					</div>
					<div class="course-content">
						<div class="course-title">
							<h4><a href="https://www.alodokter.com/menu-mpasi-jamur-solusi-praktis-penuhi-kebutuhan-nutrisi-si-kecil">Menu MPASI Jamur, Solusi Praktis Penuhi Kebutuhan Nutrisi Si Kecil</a></h4>
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
	<!--==================================================-->
	<!-- Start Video Gallery Area -->
	<!--==================================================-->
	<!--==================================================-->
	<!-- End Video Gallery Area -->
	<!--==================================================-->
	<!--==================================================-->
	<!--==================================================-->
	<!-- Start Testimonial Area -->
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
								<li><a href="https://www.instagram.com/ti4_flaminggo?igsh=MW1jZ2s5OWpqdHNmeg=="><i class="fab fa-instagram"></i></a></li>
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
							<h4>Hubungi Kami</h4>
						</div>
						<div class="footer-wiget-touch">
							<ul>
								<li>
									<div class="icon">
										<i class="bi bi-geo-alt"></i>
									</div>
									<div class="title">
										<h6>Alamat</h6>
									</div>
									<div class="adress">
										<a href="https://maps.app.goo.gl/u8WrngSjuymeoJ688">Jalan Lenteng Agung Raya No.20 RT.5/RW.1 Lenteng Agung, Srengseng Sawah, Kec. Jagakarsa, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12640</a>
									</div>
								</li>
								<li>
									<div class="icon">
										<i class="bi bi-telephone-plus-fill"></i>
									</div>
									<div class="title">
										<h6>Nomer Telpon</h6>
									</div>
									<div class="adress">
										<a href="https://wa.me/qr/J4RRHOOKWOBPP1">088296554844</a>
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
										<a href="#">Flaminggo@gmail.com</a>
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
						<p>2024 - 2025 | Flaminggo</a>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="footer-privacy-menu">
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
	<script>
        document.getElementById("bmiForm").addEventListener("submit", function(event) {
            event.preventDefault();
            
            // Ambil nilai input berat dan tinggi
            var weight = parseFloat(document.getElementById("weight").value);
            var height = parseFloat(document.getElementById("height").value) / 100; // Ubah cm menjadi meter
            
            // Cek validitas input
            if (isNaN(weight) || isNaN(height) || weight <= 0 || height <= 0) {
                alert("Mohon masukkan nilai yang valid.");
                return;
            }

            // Hitung BMI
            var bmi = weight / (height * height);
            var category = getBMICategory(bmi);
            
            // Tampilkan hasil BMI
            document.getElementById("bmi-value").innerText = "BMI: " + bmi.toFixed(2);
            document.getElementById("bmi-category").innerText = "Kategori: " + category;
            
            // Tampilkan hasil BMI
            document.getElementById("bmi-result").style.display = "block";

            // Tampilkan solusi berdasarkan kategori BMI
            showSolution(category);
        });

        function getBMICategory(bmi) {
            if (bmi < 18.5) {
                return "Kekurangan berat badan";
            } else if (bmi >= 18.5 && bmi < 24.9) {
                return "Berat badan normal";
            } else if (bmi >= 25 && bmi < 29.9) {
                return "Kelebihan berat badan";
            } else {
                return "Obesitas";
            }
        }

        function showSolution(category) {
            var solutionText = "";

            switch (category) {
                case "Kekurangan berat badan":
                    solutionText = "<p class='fs-6 text-warning'>Cobalah untuk meningkatkan asupan kalori Anda dengan makanan bergizi dan berkonsultasilah dengan ahli gizi.</p>";
                    break;
                case "Berat badan normal":
                    solutionText = "<p class='fs-6 text-success'>Anda berada dalam rentang berat badan yang sehat. Pertahankan gaya hidup sehat dengan diet seimbang dan olahraga teratur.</p>";
                    break;
                case "Kelebihan berat badan":
                    solutionText = "<p class='fs-6 text-warning'>Pertimbangkan untuk mengurangi asupan kalori dan meningkatkan aktivitas fisik. Konsultasikan dengan ahli gizi atau dokter untuk panduan lebih lanjut.</p>";
                    break;
                case "Obesitas":
                    solutionText = "<p class='fs-6 text-danger'>Obesitas dapat meningkatkan risiko berbagai penyakit. Sangat disarankan untuk berkonsultasi dengan dokter atau ahli gizi untuk merencanakan penurunan berat badan yang aman.</p>";
                    break;
            }

            document.getElementById("solution").innerHTML = solutionText;
        }
    </script>

</body>

</html>