<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Zean's Sport</title>
	<meta name="description" content="Beapp is a Mobile App Development Agency HTML5 Template by tempload." />
	<meta name="keywords" content="beapp, mobile app, agency, development, html, template, tempload" />
	<meta name="author" content="tempload"/>

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="{{asset('assets/images/favicon.png')}}" />

	<!-- Bootstrap & Plugins CSS -->
	<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

	<!-- Custom CSS -->
	<link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
</head>
<body>

	<!-- ***** Preloader Start ***** -->
	<div class="loader-wrapper">
		<div class="center">
			<div class="dot dot-one"></div>
			<div class="dot dot-two"></div>
			<div class="dot dot-three"></div> 
			<div class="dot dot-four"></div>  
			<div class="dot dot-five"></div>
		</div>
	</div>
	<!-- ***** Preloader End ***** -->

	<!-- ***** Header Area Start ***** -->
	<header class="header-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<nav class="main-nav">
						<!-- ***** Logo Start ***** -->
						<h1 class="logo text-white" >Zean's Sport Center</h1>
						<!-- ***** Logo End ***** -->

						<!-- ***** Menu Start ***** -->
						<ul class="nav">
							<li><a href="/homeuser">HOME</a></li>
							<li><a href="/lapanganuser">LAPANGAN</a></li>
							<li><a href="/sewalapangan">SEWA LAPANGAN</a></li>
							<li><a href="/tentang">TENTANG KAMI</a></li>
							{{-- <li><a href="services.html">SERVICES</a></li> --}}
							{{-- <li><a href="blog.html">BLOG</a></li> --}}
							<li><a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('LOGOUT') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
							{{-- <li><a href="contact.html" class="btn-nav-line">CONTACT</a></li> --}}
						</ul>
						<!-- ***** Menu End ***** -->						
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- ***** Header Area End ***** -->


@yield('content')
	<!-- ***** Blog End ***** -->


	<!-- ***** Footer Start ***** -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-12 col-sm-12">
					{{-- <img src="assets/images/logo-dark.svg" class="logo" alt=""> --}}
					<div class="text">Zean's Sport Center</div>
					<div class="text">Mereka yang merasa tidak punya waktu untuk berolahraga, cepat atau lambat harus meluangkan waktu untuk merawat penyakitnya. Dengan fisik yang bugar, kesehatan prima.</div>
				</div>
				{{-- <div class="col-lg-2 col-md-4 col-sm-6 col-6">
					<h5>Helpful Links</h5>
					<ul class="footer-nav">
						<li><a href="#"><i class="fa fa-angle-right"></i><span>Our Work</span></a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i><span>About Us</span></a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i><span>Services</span></a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i><span>Blog</span></a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i><span>Contact</span></a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6 col-6">
					<h5>Latest Apps</h5>
					<ul class="footer-nav">
						<li><a href="#"><i class="fa fa-angle-right"></i><span>Dance School</span></a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i><span>Coiner</span></a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i><span>Cloud Manager</span></a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i><span>Coding Life</span></a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i><span>Smart Office</span></a></li>
					</ul>
				</div> --}}
				<div class="col-lg-3 col-md-4 col-sm-12">
					<h5>Contact Perusahaan</h5>
					<div class="address">
						<p>Alamat: Jl.Kampus UNIDA, Desa Bitai</p>
						<p>Phone: (272) 211-7370</p>
						<p><span>E-Mail:</span><a href="#"> zean'ssport@gmail.com</a></p>
						{{-- <ul class="social">
							<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
							<li><a href="#"><i class="fa fa-github-square"></i></a></li>
						</ul> --}}
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<p class="copyright">© 2022. Zean's Sport Center.</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- ***** Footer Start ***** -->



	<!-- jQuery -->
	<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>

	<!-- Bootstrap -->
	<script src="{{asset('assets/js/popper.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

	<!-- Plugins -->
	<script src="{{asset('assets/js/scrollreveal.min.js')}}"></script>
	<script src="{{asset('assets/js/parallax.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
	<script src="{{asset('assets/js/imgfix.js')}}"></script>	

	<!-- Global Init -->
	<script src="{{asset('assets/js/custom.js')}}"></script>
</body>
</html>