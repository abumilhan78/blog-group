<?php 
include 'App/koneksi.php';

 ?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Zamannie</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="assets/stuff/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="assets/stuff/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="assets/stuff/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="assets/stuff/css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="assets/stuff/css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="assets/stuff/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/stuff/css/owl.theme.default.min.css">
	
	<!-- Flaticons  -->
	<link rel="stylesheet" href="assets/stuff/fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="assets/stuff/css/style.css">

	<!-- Modernizr JS -->
	<script src="assets/stuff/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="assets/stuff/js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="index.html">Zamannie</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="teknologi.php">Teknologi</a></li>
								<li><a href="gadget.php">Gadget</a></li>
								<li class="active"><a href="informatika.php">Informatika</a></li>
								<li><a href="elektronika.php">Elektronika</a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<aside id="colorlib-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12 breadcrumbs text-center">
						<h2>Informatika</h2>
						<p><span><a href="index.html">Home</a></span> / <span>Informatika</span></p>
					</div>
				</div>
			</div>
		</aside>

		<div id="colorlib-container">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="row row-pb-md">
							<?php
								$blog2 = new Frontend();

						foreach ($blog2->index() as $key) {
                        $date = date_create($key['tgl_dibuat']);
                        if ($key['nama_kategori'] == "Informatika") {
                        	# code...
                        
							?>
							<div class="col-md-6">
								<div class="blog-entry">
									<div class="blog-img">
										<a href="blog.html"><img src="admin/artikel/img/<?= $key['foto']; ?>" class="img-responsive" alt="html5 bootstrap template"></a>
									</div>
									<div class="desc">
										<p class="meta">
											<span class="cat"><a href="#"><?= $key['nama_kategori'] ?></a></span>
											<span class="date"><?= date_format($date, 'd F Y'); ?></span>
											<span class="pos">By <a href="#"><?= $key['penulis'] ?></a></span>
										</p>
										<h2><a href="blog.html"><?= $key['judul'] ?></a></h2>
									</div>
								</div>
							</div>
							<?php }  } ?>
						</div>
						
						
						
						
						
					</div>
				</div>
			</div>
		</div>

		<div id="colorlib-instagram">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 colorlib-heading text-center">
					<h2>Instagram</h2>
				</div>
			</div>
			<div class="row">
				<div class="instagram-entry">
					<a href="#" class="instagram text-center" style="background-image: url(assets/stuff/images/gallery-1.jpg);">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url(assets/stuff/images/gallery-2.jpg);">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url(assets/stuff/images/gallery-3.jpg);">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url(assets/stuff/images/gallery-4.jpg);">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url(assets/stuff/images/gallery-5.jpg);">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url(assets/stuff/images/gallery-6.jpg);">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url(assets/stuff/images/gallery-7.jpg);">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url(assets/stuff/images/gallery-8.jpg);">
					</a>
				</div>
			</div>
		</div>
		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3">
						<h2>Navigational</h2>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#"><i class="icon-check"></i> Home</a></li>
								<li><a href="#"><i class="icon-check"></i> About Me</a></li>
								<li><a href="#"><i class="icon-check"></i> Blog</a></li>
								<li><a href="#"><i class="icon-check"></i> Travel</a></li>
								<li><a href="#"><i class="icon-check"></i> Lifestyle</a></li>
								<li><a href="#"><i class="icon-check"></i> Fashion</a></li>
								<li><a href="#"><i class="icon-check"></i> Health</a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-3">
						<h2>Recent Post</h2>
						<div class="f-blog">
							<a href="blog.html" class="blog-img" style="background-image: url(assets/stuff/images/blog-1.jpg);">
							</a>
							<div class="desc">
								<h3><a href="blog.html">Be a designer</a></h3>
								<p class="admin"><span>25 March 2018</span></p>
							</div>
						</div>
						<div class="f-blog">
							<a href="blog.html" class="blog-img" style="background-image: url(assets/stuff/images/blog-2.jpg);">
							</a>
							<div class="desc">
								<h3><a href="blog.html">How to build website</a></h3>
								<p class="admin"><span>24 March 2018</span></p>
							</div>
						</div>
						<div class="f-blog">
							<a href="blog.html" class="blog-img" style="background-image: url(assets/stuff/images/blog-3.jpg);">
							</a>
							<div class="desc">
								<h3><a href="blog.html">Create website</a></h3>
								<p class="admin"><span>23 March 2018</span></p>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<h2>Archive</h2>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#"><i class="icon-check"></i> February 2018</a></li>
								<li><a href="#"><i class="icon-check"></i> January 2018</a></li>
								<li><a href="#"><i class="icon-check"></i> December 2017</a></li>
								<li><a href="#"><i class="icon-check"></i> November 2017</a></li>
								<li><a href="#"><i class="icon-check"></i> October 2017</a></li>
								<li><a href="#"><i class="icon-check"></i> September 2017</a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-3">
						<h2>Tags</h2>
						<p class="tags">
							<span><a href="#"><i class="icon-tag"></i> Modeling</a></span>
							<span><a href="#"><i class="icon-tag"></i> Fashion</a></span>
							<span><a href="#"><i class="icon-tag"></i> Life</a></span>
							<span><a href="#"><i class="icon-tag"></i> Blog</a></span>
							<span><a href="#"><i class="icon-tag"></i> Workout</a></span>
							<span><a href="#"><i class="icon-tag"></i> Vacation</a></span>
							<span><a href="#"><i class="icon-tag"></i> Travel</a></span>
							<span><a href="#"><i class="icon-tag"></i> Exercise</a></span>
							<span><a href="#"><i class="icon-tag"></i> Health</a></span>
							<span><a href="#"><i class="icon-tag"></i> News</a></span>
							<span><a href="#"><i class="icon-tag"></i> Model</a></span>
							<span><a href="#"><i class="icon-tag"></i> Women</a></span>
							<span><a href="#"><i class="icon-tag"></i> Animals</a></span>
							<span><a href="#"><i class="icon-tag"></i> Nature</a></span>
							<span><a href="#"><i class="icon-tag"></i> Art</a></span>
							<span><a href="#"><i class="icon-tag"></i> Sea</a></span>
							<span><a href="#"><i class="icon-tag"></i> Ocean</a></span>
							<span><a href="#"><i class="icon-tag"></i> Office</a></span>
							<span><a href="#"><i class="icon-tag"></i> Home</a></span>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<p>
							<small class="block"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small> 
							<small class="block">Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
						</p>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="assets/stuff/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="assets/stuff/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="assets/stuff/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="assets/stuff/js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="assets/stuff/js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="assets/stuff/js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="assets/stuff/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/stuff/js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="assets/stuff/js/main.js"></script>

	</body>
</html>

