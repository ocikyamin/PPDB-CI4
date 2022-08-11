
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from eduport.webestica.com/index-7.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Aug 2022 19:25:51 GMT -->
<head>
	<title>Eduport - LMS, Education and Course Theme</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Webestica.com">
	<meta name="description" content="Eduport- LMS, Education and Course Theme">

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?=base_url()?>/assets/images/favicon.ico">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&amp;family=Roboto:wght@400;500;700&amp;display=swap"> -->

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/vendor/font-awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/vendor/bootstrap-icons/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/vendor/tiny-slider/tiny-slider.css">

	<!-- Theme CSS -->
	<link id="style-switch" rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/style.css">

</head>

<body>

<!-- Header START -->
<header class="navbar-light navbar-sticky navbar-transparent">
	<!-- Logo Nav START -->
	<nav class="navbar navbar-expand-lg">
		<div class="container">
			<!-- Logo START -->
			<a class="navbar-brand me-0" href="index.html">
				<img class="light-mode-item navbar-brand-item" src="<?=base_url()?>/assets/logo/brand.png" alt="logo">
				<img class="dark-mode-item navbar-brand-item" src="<?=base_url()?>/assets/logo/brand.png" alt="logo">
			</a>
			<!-- Logo END -->

			<!-- Responsive navbar toggler -->
			<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-animation">
					<span></span>
					<span></span>
					<span></span>
				</span>
			</button>

			<!-- Main navbar START -->
			<div class="navbar-collapse collapse" id="navbarCollapse">

				<!-- Nav Search END -->
				<ul class="navbar-nav navbar-nav-scroll ms-auto">
				<li class="nav-item"><a class="nav-link active" href="./"><i class="fa fa-home"></i> Home</a></li>

					<!-- Nav item 1 Demos -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="demoMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-circle"></i> Informasi</a>
						<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="demoMenu">
							<li> <a class="dropdown-item" href="/syarat"><i class="fa fa-chevron-right"></i> Syarat Pendaftaran</a></li>
							<li> <a class="dropdown-item" href="./"><i class="fa fa-chevron-right"></i> Biaya Pendaftaran</a></li>
							<li> <a class="dropdown-item" href="./"><i class="fa fa-chevron-right"></i> Alur Pendaftaran</a></li>
							<li> <a class="dropdown-item" href="./"><i class="fa fa-chevron-right"></i> Daftar Ulang</a></li>
							<li> <a class="dropdown-item" href="./"><i class="fa fa-chevron-right"></i> Pengumuman Kelulusan</a></li>
							<li> <a class="dropdown-item" href="./"><i class="fa fa-chevron-right"></i> Jadwal Masuk</a></li>
							<li> <a class="dropdown-item" href="./"><i class="fa fa-chevron-right"></i> Surat Pernyataan</a></li>
							<li> <a class="dropdown-item" href="./"><i class="fa fa-chevron-right"></i> Materi Tes <span class="badge bg-success ms-2 smaller">New</span></a></li>
						</ul>
					</li>

					<!-- Nav item 2 Course -->
					<li class="nav-item dropdown"><a class="nav-link" href="/user-guide"><i class="bi bi-stickies-fill"></i> Petunjuk</a></li>

					<!-- Nav item 3 link-->
					<li class="nav-item"><a class="nav-link" href="/contact"><i class="fa fa-user"></i> Kontak</a></li>
					
				</ul>
			</div>
			<div class="dropdown ms-1 ms-lg-0">
				<a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
					<img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="avatar">
				</a>
				<ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3" aria-labelledby="profileDropdown">
					<!-- Profile info -->
					<li class="px-3 mb-3">
						<div class="d-flex align-items-center">
							<!-- Avatar -->
							<div class="avatar me-3">
								<img class="avatar-img rounded-circle shadow" src="assets/images/avatar/01.jpg" alt="avatar">
							</div>
							<div>
								<a class="h6" href="#">Lori Ferguson</a>
								<p class="small m-0">example@gmail.com</p>
							</div>
						</div>
					</li>
					<li> <hr class="dropdown-divider"></li>
					<!-- Links -->
					<li><a class="dropdown-item" href="#"><i class="bi bi-person fa-fw me-2"></i>Edit Profile</a></li>
					<li><a class="dropdown-item" href="#"><i class="bi bi-gear fa-fw me-2"></i>Account Settings</a></li>
					<li><a class="dropdown-item" href="#"><i class="bi bi-info-circle fa-fw me-2"></i>Help</a></li>
					<li><a class="dropdown-item bg-danger-soft-hover" href="#"><i class="bi bi-power fa-fw me-2"></i>Sign Out</a></li>
				
			
				</ul>
			</div>
			<!-- Main navbar END -->

      <!-- Dark mode switch -->
			<div class="navbar-nav ms-2">
				<div class="modeswitch-wrap" id="darkModeSwitch">
          <div class="modeswitch-item">
            <div class="modeswitch-icon"></div>
          </div>
        </div>
			</div>

			<!-- Signin button -->
			<!-- <div class="navbar-nav ms-2 d-none d-sm-block">
				<button class="btn btn-sm btn-dark mb-0">Buy now</button>
			</div> -->

		</div>
	</nav>
	<!-- Logo Nav END -->
</header>
<!-- Header END -->

<!-- **************** MAIN CONTENT START **************** -->
<main>

<!-- =======================
Main Banner START -->
<section class="position-relative">
	

	<!-- SVG decoration -->
	<figure class="position-absolute top-50 end-0 translate-middle-y mt-n8">
		<svg class="rtl-flip" width="1360.5px" height="793px" viewBox="0 0 1360.5 793" style="enable-background:new 0 0 1360.5 793;" xml:space="preserve">
			<path class="fill-primary opacity-1" d="M33.5,766.3c75.3-24.2,124.5-20.3,155.2-62.8c35.4-49,53.1-184.7,138-191.2s100.9,55.6,208.8-21.2 s44.5-134.3,166.4-174.9c121.8-40.6,177,80.1,279.6,36s122.1-248.4,178.8-290.9c49.3-37,171.2-56.7,200.2-61.1v793H33.5 C33.5,793-41.9,790.4,33.5,766.3z"/>
		</svg>
	</figure>

	<div class="container position-relative mt-0 mt-sm-5 pt-5">
		
		<div class="row align-items-center">
			<div class="col-md-5">
				
			
				<!-- Title -->
				<h6 class="mb-0">Selamat Datang, di portal <strong>Pendaftaran Santri Baru</strong> Madrasah Tarbiyah Islamiyah (MTI) Canduang</h6>
				<h1 class="mb-3">PSB <span class="text-primary">Sites</span></h1>
				<!-- <h6 class="mb-2">Klik tombol dibawah ini untuk mendaftar baru !</h6> -->
				<div class="d-inline-block bg-white px-3 py-2 rounded-pill mb-3">
						<p class="mb-0 text-dark"><span class="badge text-bg-success rounded-pill me-1">Informasi</span> Pendaftaran telah dibuka, ayo segera daftar !</p>
					</div>
				<!-- Button -->
				<a href="#" class="btn btn-primary shadow-sm"> Daftar Sekarang</a>
				<div class="row g-3 mb-3 mb-lg-0 mt-3">
					<!-- Item -->
					<div class="col-sm-6">
						<div class="d-flex align-items-center">
							<!-- Icon -->
							<div class="icon-lg fs-4 text-orange bg-orange bg-opacity-10 rounded"> <i class="bi bi-globe"></i> </div>
							<!-- Info -->
							<div class="ms-3">
								<div class="d-flex">
									<h4 class="purecounter fw-bold mb-0" data-purecounter-start="0" data-purecounter-end="600" data-purecounter-delay="100" data-purecounter-duration="0">600</h4>
									<span class="h4 mb-0">+</span>
								</div>
								<div>Visitors</div>
							</div>
						</div>
					</div>
					<!-- Item -->
					<div class="col-sm-6">
						<div class="d-flex align-items-center">
							<!-- Icon -->
							<div class="icon-lg fs-4 text-info bg-info bg-opacity-10 rounded"> <i class="bi bi-people"></i> </div>
							<!-- Info -->
							<div class="ms-3">
								<div class="d-flex">
									<h4 class="purecounter fw-bold mb-0" data-purecounter-start="0" data-purecounter-end="400" data-purecounter-delay="100" data-purecounter-duration="0">400</h4>
									<span class="h4 mb-0">+</span>
								</div>
								<div>Registered</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-7">
				
				<!-- Image -->
				<img src="<?=base_url()?>/assets/images/element/05.svg" alt="">
				
			</div>
		</div>
	</div>
</section>
<!-- =======================
Main Banner END -->


<!-- =======================
About START -->
<section class="pb-0 pb-lg-5">
	<div class="container">
		<div class="row g-4 g-lg-5 align-items-center">
			<div class="col-lg-6 position-relative order-2">
				<!-- SVG decoration -->
				<figure class="position-absolute top-50 start-50 translate-middle ms-n8 d-none d-sm-block">
					<svg width="625.8px" height="550px" viewBox="0 0 625.8 630.8" style="enable-background:new 0 0 625.8 630.8;">
						<path class="fill-primary opacity-1" d="M445.8,133.5c59.7,50.3,122.9,96,149.7,161c26.5,64.6,15.9,148.6-29.9,197.7C520.3,541,439,555,364.9,578.1 c-74.5,23.1-142.1,55.2-200.4,42.3S57.2,549.7,32.6,487.3c-24.2-62-24.2-128.9-17.8-199.6C21.7,217,34.5,142.6,78.7,89.6 S198.6,5,264.4,16.7S386.1,83.2,445.8,133.5z"/>
					</svg>
				</figure>
				<!-- Image -->
				<img src="<?=base_url()?>/assets/images/element/06.svg" class="position-relative" alt="">
			</div>

			<div class="col-lg-6 position-relative order-1 order-lg-2">
				<!-- Title -->
				<h2>Program Pendidikan</h2>
				<p class="mb-2">
					Pondok Pesantren Madrsah Tarbiyah Islamiyah (MTI) Canduang Memiliki Program Pendidikan yang telah terakreditasi unggul, diantaranya : 
				</p>
				<!-- Info list -->
				<ul class="list-group list-group-borderless mb-2">
					<li class="list-group-item d-flex align-items-center px-0">
						<p class="mb-0 h6 fw-light"><i class="bi bi-arrow-right text-primary me-2"></i>Kitab Kuning + Madrsah Tsanawiyah</p>
					</li>
					<li class="list-group-item d-flex align-items-center px-0">
						<p class="mb-0 h6 fw-light"><i class="bi bi-arrow-right text-primary me-2"></i>Kitab Kuning + Madrsah Aliyah</p>
					</li>
					<li class="list-group-item d-flex align-items-center px-0">
						<p class="mb-0 h6 fw-light"><i class="bi bi-arrow-right text-primary me-2"></i>Ma'had Aly (Bahasa & Sastra Arab)</p>
					</li>
				</ul>
				<!-- Button -->
				<a href="#" class="btn btn-warning shadow-sm mb-0"><i class="fa fa-fw bi bi-cloud-download-fill"></i> Download Brosur</a>
			</div>
		</div>
	</div>
</section>
<!-- =======================
About END -->

<!-- =======================
Listed course START -->
<section class="position-relative pb-0 pb-sm-5">
	<div class="container">
		<!-- Title -->
		<div class="row mb-4">
			<div class="col-lg-8 mx-auto text-center">
				<h2>Program Unggulan</h2>
				<p class="mb-0">Perceived end knowledge certainly day sweetness why cordially</p>
			</div>
		</div>

		<div class="row g-4">
			<!-- Item -->
			<div class="col-sm-6 col-md-4 col-xl-3">
				<div class="bg-primary bg-opacity-10 rounded-3 text-center p-3 position-relative btn-transition">
					<!-- Image -->
					<div class="icon-xl bg-body mx-auto rounded-circle mb-3">
						<img src="<?=base_url()?>/assets/images/element/data-science.svg" alt="">
					</div>
					<!-- Title -->
					<h5 class="mb-1"><a href="#" class="stretched-link">Data Science</a></h5>
					<span class="mb-0">15 Course</span>
				</div>
			</div>

			<!-- Item -->
			<div class="col-sm-6 col-md-4 col-xl-3">
				<div class="bg-primary bg-opacity-10 rounded-3 text-center p-3 position-relative btn-transition">
					<!-- Image -->
					<div class="icon-xl bg-body mx-auto rounded-circle mb-3">
						<img src="<?=base_url()?>/assets/images/element/online.svg" alt="">
					</div>
					<!-- Title -->
					<h5 class="mb-1"><a href="#" class="stretched-link">Computer Science</a></h5>
					<span class="mb-0">22 Course</span>
				</div>
			</div>

			<!-- Item -->
			<div class="col-sm-6 col-md-4 col-xl-3">
				<div class="bg-primary bg-opacity-10 rounded-3 text-center p-3 position-relative btn-transition">
					<!-- Image -->
					<div class="icon-xl bg-body mx-auto rounded-circle mb-3">
						<img src="<?=base_url()?>/assets/images/element/engineering.svg" alt="">
					</div>
					<!-- Title -->
					<h5 class="mb-1"><a href="#" class="stretched-link">Engineering</a></h5>
					<span class="mb-0">53 Course</span>
				</div>
			</div>

			<!-- Item -->
			<div class="col-sm-6 col-md-4 col-xl-3">
				<div class="bg-primary bg-opacity-10 rounded-3 text-center p-3 position-relative btn-transition">
					<!-- Image -->
					<div class="icon-xl bg-body mx-auto rounded-circle mb-3">
						<img src="<?=base_url()?>/assets/images/element/coding.svg" alt="">
					</div>
					<!-- Title -->
					<h5 class="mb-1"><a href="#" class="stretched-link">Web Development</a></h5>
					<span class="mb-0">25 Course</span>
				</div>
			</div>

			<!-- Item -->
			<div class="col-sm-6 col-md-4 col-xl-3">
				<div class="bg-primary bg-opacity-10 rounded-3 text-center p-3 position-relative btn-transition">
					<!-- Image -->
					<div class="icon-xl bg-body mx-auto rounded-circle mb-3">
						<img src="<?=base_url()?>/assets/images/element/profit.svg" alt="">
					</div>
					<!-- Title -->
					<h5 class="mb-1"><a href="#" class="stretched-link">Marketing</a></h5>
					<span class="mb-0">20 Course</span>
				</div>
			</div>

			<!-- Item -->
			<div class="col-sm-6 col-md-4 col-xl-3">
				<div class="bg-primary bg-opacity-10 rounded-3 text-center p-3 position-relative btn-transition">
					<!-- Image -->
					<div class="icon-xl bg-body mx-auto rounded-circle mb-3">
						<img src="<?=base_url()?>/assets/images/element/medical.svg" alt="">
					</div>
					<!-- Title -->
					<h5 class="mb-1"><a href="#" class="stretched-link">Medical</a></h5>
					<span class="mb-0">10 Course</span>
				</div>
			</div>

			<!-- Item -->
			<div class="col-sm-6 col-md-4 col-xl-3">
				<div class="bg-primary bg-opacity-10 rounded-3 text-center p-3 position-relative btn-transition">
					<!-- Image -->
					<div class="icon-xl bg-body mx-auto rounded-circle mb-3">
						<img src="<?=base_url()?>/assets/images/element/home.svg" alt="">
					</div>
					<!-- Title -->
					<h5 class="mb-1"><a href="#" class="stretched-link">Architecture</a></h5>
					<span class="mb-0">30 Course</span>
				</div>
			</div>

			<!-- Item -->
			<div class="col-sm-6 col-md-4 col-xl-3">
				<div class="bg-primary bg-opacity-10 rounded-3 text-center p-3 position-relative btn-transition">
					<!-- Image -->
					<div class="icon-xl bg-body mx-auto rounded-circle mb-3">
						<img src="<?=base_url()?>/assets/images/element/artist.svg" alt="">
					</div>
					<!-- Title -->
					<h5 class="mb-1"><a href="#" class="stretched-link">Art & Design</a></h5>
					<span class="mb-0">35 Course</span>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Listed course END -->



<!-- =======================
Download START -->
<section class="overflow-hidden">
	<div class="container">
		<div class="row g-4 align-items-center">
			<div class="col-md-5 position-relative z-index-9">
				<!-- Title -->
				<h2>Learn on your mobile Anytime</h2>
				<p>How promotion excellent curiosity yet attempted happiness Gay prosperous impression had conviction For every delay death ask to style Me mean able my by in they Extremity. had conviction For every delay death ask to style Me mean able my by in they Extremity.</p>
				<!-- Download button -->
				<div class="row">
					<!-- Google play store button -->
					<div class="col-6 col-sm-4 col-md-6 col-lg-4">
						<a href="#"><img src="<?=base_url()?>/assets/images/element/google-play.svg" class="btn-transition" alt="google-play"></a>
					</div>
					<!-- App store button -->
					<div class="col-6 col-sm-4 col-md-6 col-lg-4">
						<a href="#"><img src="<?=base_url()?>/assets/images/element/app-store.svg" class="btn-transition" alt="app-store"></a>
					</div>
				</div>
			</div>

			<div class="col-md-7 text-md-end position-relative">
				<!-- SVG decoration -->
				<figure class="position-absolute top-50 end-0 translate-middle-y me-n8">
					<svg width="632.6px" height="540.4px" viewBox="0 0 632.6 540.4">
						<path class="fill-primary opacity-1" d="M531.4,46.9c46.3,27.4,81.4,79.8,91.1,136.2c9.7,56.8-6.4,117.7-38.3,166s-79.4,84.2-138.6,119.3 c-59.6,35.1-130.6,69.7-201.5,62.1c-70.5-7.7-141.4-57.6-185.4-126.5C14.4,335.5-2.9,247.2,23.7,179.5 c26.2-68.1,96.7-116.5,161.6-140.2c64.9-24.2,124.5-24.6,183.3-23.4C427,17.1,485.1,19.5,531.4,46.9z"/>
					</svg>
				</figure>

				<!-- Image -->
				<img src="<?=base_url()?>/assets/images/element/07.svg" class="position-relative" alt="">
			</div>
		</div>
	</div>
</section>
<!-- =======================
Download END -->

<!-- =======================
Action box START -->
<section>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="bg-light p-4 p-sm-5 rounded-3 position-relative overflow-hidden">
					<!-- SVG decoration -->
					<figure class="position-absolute top-0 start-0 d-none d-lg-block ms-n7">
						<svg width="294.5px" height="261.6px" viewBox="0 0 294.5 261.6" style="enable-background:new 0 0 294.5 261.6;">
							<path class="fill-warning opacity-5" d="M280.7,84.9c-4.6-9.5-10.1-18.6-16.4-27.2c-18.4-25.2-44.9-45.3-76-54.2c-31.7-9.1-67.7-0.2-93.1,21.6 C82,36.4,71.9,50.6,65.4,66.3c-4.6,11.1-9.5,22.3-17.2,31.8c-6.8,8.3-15.6,15-22.8,23C10.4,137.6-0.1,157.2,0,179 c0.1,28,11.4,64.6,40.4,76.7c23.9,10,50.7-3.1,75.4-4.7c23.1-1.5,43.1,10.4,65.5,10.6c53.4,0.6,97.8-42,109.7-90.4 C298.5,140.9,293.4,111.5,280.7,84.9z"/>
						</svg>
					</figure>
					<!-- SVG decoration -->
					<figure class="position-absolute top-50 start-50 translate-middle">
						<svg width="453px" height="211px">
							<path class="fill-orange" d="M16.002,8.001 C16.002,12.420 12.420,16.002 8.001,16.002 C3.582,16.002 -0.000,12.420 -0.000,8.001 C-0.000,3.582 3.582,-0.000 8.001,-0.000 C12.420,-0.000 16.002,3.582 16.002,8.001 Z"/>
							<path class="fill-warning" d="M176.227,203.296 C176.227,207.326 172.819,210.593 168.614,210.593 C164.409,210.593 161.000,207.326 161.000,203.296 C161.000,199.266 164.409,196.000 168.614,196.000 C172.819,196.000 176.227,199.266 176.227,203.296 Z"/>
							<path class="fill-primary" d="M453.002,65.001 C453.002,69.420 449.420,73.002 445.001,73.002 C440.582,73.002 437.000,69.420 437.000,65.001 C437.000,60.582 440.582,57.000 445.001,57.000 C449.420,57.000 453.002,60.582 453.002,65.001 Z"/>
						</svg>
					</figure>
					<!-- SVG image -->
					<img src="<?=base_url()?>/assets/images/element/09.svg" class="position-absolute bottom-0 end-0 z-index-1 d-none d-lg-block me-n3" alt="">
					<!-- SVG decoration -->
					<figure class="position-absolute top-0 end-0 mt-5 me-n5 d-none d-sm-block">
						<svg 	width="285px" height="272px">
							<path class="fill-info opacity-4" d="M142.500,-0.000 C221.200,-0.000 285.000,60.889 285.000,136.000 C285.000,211.111 221.200,272.000 142.500,272.000 C63.799,272.000 -0.000,211.111 -0.000,136.000 C-0.000,60.889 63.799,-0.000 142.500,-0.000 Z"/>
						</svg>
					</figure>

					<div class="row g-4 justify-content-center align-items-center position-relative">
						<div class="col-lg-3 text-center text-lg-start ps-0">
							<!-- Image -->
							<img src="<?=base_url()?>/assets/images/element/08.svg" alt="">
						</div>
						<!-- Title -->
						<div class="col-lg-6 text-center">
							<span class="h6 fw-light">Get a Free Tutorial of</span>
							<h3 class="mb-0 mt-2">Exclusive Bootstrap 5 Responsive Website Coding Course</h3>
						</div>
						<!-- Content and input -->
						<div class="col-lg-3 text-center text-lg-end z-index-9">
							<a href="#" class="btn btn-warning mb-0">Get a free trial</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Action box END -->

<!-- =======================
Client feedback START -->
<section class="bg-warning position-relative">
	<!-- SVG Image -->
	<!-- <figure class="position-absolute start-0 bottom-0 mb-0">
		<img src="<?=base_url()?>/assets/images/element/10.svg" class="h-200px" alt="">
	</figure> -->

	<div class="container">
		<!-- Title -->
		<div class="row mb-4">
			<div class="col-lg-8 mx-auto text-center">
				<h2 class="text-white"> Apa Kata Alumni ?</h2>
				<p class="mb-0">Perceived end knowledge certainly day sweetness why cordially</p>
			</div>
		</div>

		<!-- Feedback START -->
		<div class="row">
			<!-- Slider START -->
			<div class="tiny-slider arrow-round arrow-creative arrow-dark arrow-hover">
				<div class="tiny-slider-inner" data-autoplay="true" data-edge="5" data-arrow="true" data-dots="false" data-items="4" data-items-xl="3" data-items-md="2" data-items-xs="1">

					<!-- Feedback item -->
					<div>
						<div class="bg-body text-center p-4 rounded-3 border border-1 position-relative">
							<!-- Avatar -->
							<div class="avatar avatar-lg mb-3">
								<img class="avatar-img rounded-circle" src="<?=base_url()?>/assets/images/avatar/05.jpg" alt="avatar">
							</div>
							<!-- Title -->
							<h6 class="mb-2">Lori Stevens</h6>
							<!-- Content -->
							<blockquote class="mt-1">
								<p>
									<span class="me-1 small"><i class="fas fa-quote-left"></i></span>
										Moonlight newspaper up its enjoyment agreeable depending. Timed voice share led him to widen. At weddings believed laughing
									<span class="ms-1 small"><i class="fas fa-quote-right"></i></span>
								</p>
							</blockquote>
						</div>
					</div>

					<!-- Feedback item -->
					<div>
						<div class="bg-body text-center p-4 rounded-3 border border-1 position-relative">
							<!-- Avatar -->
							<div class="avatar avatar-lg mb-3">
								<img class="avatar-img rounded-circle" src="<?=base_url()?>/assets/images/avatar/07.jpg" alt="avatar">
							</div>
							<!-- Title -->
							<h6 class="mb-2">Billy Vasquez</h6>
							<!-- Content -->
							<blockquote class="mt-1">
								<p>
									<span class="me-1 small"><i class="fas fa-quote-left"></i></span>
									Its enjoyment	Moonlight newspaper up agreeable depending. Timed voice share led him to widen. At weddings believed laughing
									<span class="ms-1 small"><i class="fas fa-quote-right"></i></span>
								</p>
							</blockquote>
						</div>
					</div>

					<!-- Feedback item -->
					<div>
						<div class="bg-body text-center p-4 rounded-3 border border-1 position-relative">
							<!-- Avatar -->
							<div class="avatar avatar-lg mb-3">
								<img class="avatar-img rounded-circle" src="<?=base_url()?>/assets/images/avatar/09.jpg" alt="avatar">
							</div>
							<!-- Title -->
							<h6 class="mb-2">Carolyn Ortiz</h6>
							<!-- Content -->
							<blockquote class="mt-1">
								<p>
									<span class="me-1 small"><i class="fas fa-quote-left"></i></span>
										Newspaper up its enjoyment agreeable depending. Timed voice share led him to widen. At weddings believed laughing
									<span class="ms-1 small"><i class="fas fa-quote-right"></i></span>
								</p>
							</blockquote>
						</div>
					</div>

					<!-- Feedback item -->
					<div>
						<div class="bg-body text-center p-4 rounded-3 border border-1 position-relative">
							<!-- Avatar -->
							<div class="avatar avatar-lg mb-3">
								<img class="avatar-img rounded-circle" src="<?=base_url()?>/assets/images/avatar/01.jpg" alt="avatar">
							</div>
							<!-- Title -->
							<h6 class="mb-2">Carolyn Ortiz</h6>
							<!-- Content -->
							<blockquote class="mt-1">
								<p>
									<span class="me-1 small"><i class="fas fa-quote-left"></i></span>
										Newspaper up its enjoyment agreeable depending. Timed voice share led him to widen. At weddings believed laughing
									<span class="ms-1 small"><i class="fas fa-quote-right"></i></span>
								</p>
							</blockquote>
						</div>
					</div>
				</div>
			</div>	
			<!-- Slider START -->	
		</div>
		<!-- Feedback END -->
	</div>
</section>
<!-- =======================
Client feedback END -->

<section class="position-relative overflow-hidden pt-0 pt-sm-5">
	<div class="container">

		<!-- Title -->
		<div class="row position-relative z-index-9">
			<div class="col-12 text-center mx-auto">
				<h2 class="mb-0">Frequently Asked Questions</h2>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-10 col-xl-8 mx-auto text-center position-relative">

				<!-- SVG decoration -->
				<figure class="position-absolute top-0 start-0 translate-middle ms-8">
					<svg style="enable-background:new 0 0 141.7 143.9;">
						<path class="fill-success" d="M137.7,53.1c9.6,29.3,1.8,64.7-20.2,80.7s-58.1,12.6-83.5-5.8C8.6,109.5-6.1,76.1,2.4,48.7 C10.8,21.1,42.2-0.7,71.5,0S128.1,23.8,137.7,53.1z"></path>
					</svg>
				</figure>
				
				<!-- SVG decoration -->
				<figure class="position-absolute bottom-0 end-0 me-n9 rotate-193">
					<svg width="297.5px" height="295.9px">
						<path stroke="#F99D2B" fill="none" stroke-width="13" d="M286.2,165.5c-9.8,74.9-78.8,128.9-153.9,120.4c-76-8.6-131.4-78.2-122.8-154.2C18.2,55.8,87.8,0.3,163.7,9"></path>
					</svg>
				</figure>

				<!-- FAQ START -->
				<div class="accordion accordion-icon accordion-shadow mt-4 text-start position-relative" id="accordionExample2">
					<!-- Item -->
					<div class="accordion-item mb-3">
						<h6 class="accordion-header font-base" id="heading-1">
							<button class="accordion-button fw-bold rounded collapsed pe-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
								What subject can you teach?
							</button>
						</h6>
						<!-- Body -->
						<div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#accordionExample2">
							<div class="accordion-body mt-3">
								Yet remarkably appearance gets him his projection. Diverted endeavor bed peculiar men the not desirous. Acuteness abilities ask can offending furnished fulfilled sex. Warrant fifteen exposed ye at mistake. Blush since so in noisy still built up an again. As young ye hopes no he place means. Partiality diminution gay yet entreaties admiration. In mention perhaps attempt pointed suppose. Unknown ye chamber of warrant of Norland arrived.
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<h6 class="accordion-header font-base" id="heading-2">
							<button class="accordion-button fw-bold rounded collapsed pe-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
								Will you give me the answer any time?
							</button>
						</h6>
						<!-- Body -->
						<div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#accordionExample2">
							<div class="accordion-body mt-3">
								What deal evil rent by real in. But her ready least set lived spite solid. September how men saw tolerably two behavior arranging. She offices for highest and replied one venture pasture. Applauded no discovery in newspaper allowance am northward. Frequently partiality possession resolution at or appearance unaffected me. Engaged its was the evident pleased husband. Ye goodness felicity do disposal dwelling no. First am plate jokes to began to cause a scale. Subjects he prospect elegance followed no overcame possible it on. Improved own provided blessing may peculiar domestic. Sight house has sex never. No visited raising gravity outward subject my cottage Mr be.
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<h6 class="accordion-header font-base" id="heading-3">
							<button class="accordion-button fw-bold collapsed rounded pe-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
								How much should I offer the sellers? 
							</button>
						</h6>
						<!-- Body -->
						<div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#accordionExample2">
							<div class="accordion-body mt-3">
								Post no so what deal evil rent by real in. But her ready least set lived spite solid. September how men saw tolerably two behavior arranging. She offices for highest and replied one venture pasture. Applauded no discovery in newspaper allowance am northward. Frequently partiality possession resolution at or appearance unaffected me. Engaged its was the evident pleased husband. Ye goodness felicity do disposal dwelling no. First am plate jokes to began to cause a scale. Subjects he prospect elegance followed no overcame possible it on. Improved own provided blessing may peculiar domestic. Sight house has sex never. No visited raising gravity outward subject my cottage Mr be. Hold do at tore in park feet near my case. Invitation at understood occasional sentiments insipidity inhabiting in. Off melancholy alteration principles old. Is do speedily kindness properly oh. Respect article painted cottage he is offices parlors.
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<h6 class="accordion-header font-base" id="heading-4">
							<button class="accordion-button fw-bold collapsed rounded pe-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
								Installation Guide 
							</button>
						</h6>
						<!-- Body -->
						<div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4" data-bs-parent="#accordionExample2">
							<div class="accordion-body mt-3">
								<p>What deal evil rent by real in. But her ready least set lived spite solid. September how men saw tolerably two behavior arranging. She offices for highest and replied one venture pasture. Applauded no discovery in newspaper allowance am northward. Frequently partiality possession resolution at or appearance unaffected me. Engaged its was the evident pleased husband. Ye goodness felicity do disposal dwelling no. First am plate jokes to began to cause a scale. Subjects he prospect elegance followed no overcame possible it on. Improved own provided blessing may peculiar domestic. Sight house has sex never. No visited raising gravity outward subject my cottage Mr be.</p>
								<p class="mb-0">At the moment, we only accept Credit/Debit cards and Paypal payments. Paypal is the easiest way to make payments online. While checking out your order. Be sure to fill in correct details for fast &amp; hassle-free payment processing.	</p>
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<h6 class="accordion-header font-base" id="heading-5">
							<button class="accordion-button fw-bold collapsed rounded pe-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
								Additional Options and Services
							</button>
						</h6>
						<!-- Body -->
						<div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5" data-bs-parent="#accordionExample2">
							<div class="accordion-body mt-3">
								Post no so what deal evil rent by real in. But her ready least set lived spite solid. September how men saw tolerably two behavior arranging. She offices for highest and replied one venture pasture. Applauded no discovery in newspaper allowance am northward. Frequently partiality possession resolution at or appearance unaffected me. Engaged its was the evident pleased husband. Ye goodness felicity do disposal dwelling no. First am plate jokes to began to cause a scale. Subjects he prospect elegance followed no overcame possible it on. Improved own provided blessing may peculiar domestic. Sight house has sex never. No visited raising gravity outward subject my cottage Mr be. Hold do at tore in park feet near my case. Invitation at understood occasional sentiments insipidity inhabiting in. Off melancholy alteration principles old. Is do speedily kindness properly oh. Respect article painted cottage he is offices parlors.
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item">
						<h6 class="accordion-header font-base" id="heading-6">
							<button class="accordion-button fw-bold collapsed rounded pe-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
								What's are the difference between a college and a university?
							</button>
						</h6>
						<!-- Body -->
						<div id="collapse-6" class="accordion-collapse collapse" aria-labelledby="heading-6" data-bs-parent="#accordionExample2">
							<div class="accordion-body mt-3">
								Post no so what deal evil rent by real in. But her ready least set lived spite solid. September how men saw tolerably two behavior arranging. She offices for highest and replied one venture pasture. Applauded no discovery in newspaper allowance am northward. Frequently partiality possession resolution at or appearance unaffected me. Engaged its was the evident pleased husband. Ye goodness felicity do disposal dwelling no. First am plate jokes to began to cause a scale. Subjects he prospect elegance followed no overcame possible it on. Improved own provided blessing may peculiar domestic. Sight house has sex never. No visited raising gravity outward subject my cottage Mr be. Hold do at tore in park feet near my case. Invitation at understood occasional sentiments insipidity inhabiting in. Off melancholy alteration principles old. Is do speedily kindness properly oh. Respect article painted cottage he is offices parlors.
							</div>
						</div>
					</div>
				</div>
				<!-- FAQ END -->
			</div>
		</div>
	</div>
</section>

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
Footer START -->
<footer class="bg-dark p-3">
	<div class="container">
		<div class="row align-items-center">
			<!-- Widget -->
			<div class="col-md-4 text-center text-md-start mb-3 mb-md-0">
				<!-- Logo START -->
				<a href="index.html"> <img class="h-20px" src="assets/images/logo-light.svg" alt="logo"> </a>
			</div>
			
			<!-- Widget -->
			<div class="col-md-4 mb-3 mb-md-0">
				<div class="text-center text-white">
					Copyrights ©2021 <a href="#" class="text-reset btn-link">Eduport</a>. All rights reserved.
				</div>
			</div>
			<!-- Widget -->
			<div class="col-md-4">
				<!-- Rating -->
				<ul class="list-inline mb-0 text-center text-md-end">
					<li class="list-inline-item ms-2"><a href="#"><i class="text-white fab fa-facebook"></i></a></li>
					<li class="list-inline-item ms-2"><a href="#"><i class="text-white fab fa-instagram"></i></a></li>
					<li class="list-inline-item ms-2"><a href="#"><i class="text-white fab fa-linkedin-in"></i></a></li>
					<li class="list-inline-item ms-2"><a href="#"><i class="text-white fab fa-twitter"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<!-- =======================
Footer END -->

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

<!-- Bootstrap JS -->
<script src="<?=base_url()?>/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vendors -->
<script src="<?=base_url()?>/assets/vendor/tiny-slider/tiny-slider.js"></script>

<!-- Template Functions -->
<script src="<?=base_url()?>/assets/js/functions.js"></script>

</body>

<!-- Mirrored from eduport.webestica.com/index-7.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Aug 2022 19:25:55 GMT -->
</html>