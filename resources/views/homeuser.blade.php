	
	@extends('layout.user')
	@section('content')
	<!-- ***** Wellcome Area Start ***** -->
	<section class="welcome-area">
		<!-- ***** Wellcome Area Background Start ***** -->
		<div class="welcome-bg" data-bg="assets/images/5.png">
			<img src="assets/images/bg-bottom.svg" alt="">
		</div>
		<!-- ***** Wellcome Area Background End ***** -->

		<!-- ***** Wellcome Area Content Start ***** -->
		<div class="welcome-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-12 align-self-center">
						<h1>Selamat Datang di Penyewaan Lapangan Futsal...</h1>
						<p>Pemenang sejati tidak akan berhenti berjuang sampai peluit akhir pertandingan dibunyikan.</p>
						{{-- <a class="btn-white-line" href="#">ALL WORKS</a> --}}
					</div>
				</div>
			</div>
		</div>
		<!-- ***** Wellcome Area Content End ***** -->
	</section>
	<!-- ***** Wellcome Area End ***** -->
	<!-- ***** Blog Start ***** -->
	{{-- <section class="section pbottom-70">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="center-heading">
						<h2 class="section-title">Latest Blog Posts</h2>
					</div>
				</div>
				<div class="offset-lg-3 col-lg-6">
					<div class="center-text">
						<p>Fusce placerat pretium mauris, vel sollicitudin elit lacinia vitae. Quisque sit amet nisi erat.</p>
					</div>					
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="blog-post-thumb">
						<div class="img">
							<img src="assets/images/photos/blog/1.jpg" alt="">
						</div>
						<h3>
							<a href="blog-single.html">5 steps to becoming GDPR compliant on mobile apps</a>
						</h3>
						<div class="text">
							Mauris tellus sem, ultrices varius nisl at, convallis iaculis mauris. Sed eget sem vitae purus tempus dignissim.
						</div>
						<a href="blog-single.html" class="btn-primary-line">Read More</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="blog-post-thumb">
						<div class="img">
							<img src="assets/images/photos/blog/2.jpg" alt="">
						</div>
						<h3>
							<a href="blog-single.html">Measuring app success through mobile analytics</a>
						</h3>
						<div class="text">
							Cras imperdiet faucibus sem, a dignissim urna feugiat sed. Interdum et malesuada fames ac ante ipsum primis in faucibus.
						</div>
						<a href="blog-single.html" class="btn-primary-line">Read More</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="blog-post-thumb">
						<div class="img">
							<img src="assets/images/photos/blog/3.jpg" alt="">
						</div>
						<h3>
							<a href="blog-single.html">How accessibility will influence your app development</a>
						</h3>
						<div class="text">
							Quisque euismod nec lacus sit amet maximus. Ut convallis sagittis lorem auctor malesuada. Morbi auctor tortor eu risus condimentum.
						</div>
						<a href="blog-single.html" class="btn-primary-line">Read More</a>
					</div>
				</div>
			</div>
		</div>
	</section> --}}
	@endsection