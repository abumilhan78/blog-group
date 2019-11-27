<?php 
include 'App/koneksi.php';
?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Stuff Template</title>
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

	<!-- Theme style  -->
	<link rel="stylesheet" href="assets/stuff/css/style.css">

	<!-- Modernizr JS -->
	<script src="assets/stuff/js/modernizr-2.6.2.min.js"></script>
	

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="index.html">Stuff</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li class="active"><a href="index.html">Home</a></li>
								<li class="has-dropdown">
									<a href="blog.html">Teknologi</a>
									<ul class="dropdown">
										<li><a href="single.html">Blog Single</a></li>
										<li><a href="#">Video</a></li>
										<li><a href="#">Read</a></li>
										<li><a href="#">Lifestyle</a></li>
									</ul>
								</li>
								<li><a href="event.html">Gadget</a></li>
								<li><a href="travel.html">Informatika</a></li>
								<li><a href="about.html">Elektronika</a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
					<?php
					$blog2 = new Frontend();
						foreach ($blog2->index() as $key) {
                        $date = date_create($key['tgl_dibuat']);
						
					?>
			   	<li style="background-image: url(admin/artikel/img/<?= $key['foto']; ?>);">
			   		<div class="overlay"></div>
			   		<div class="container">
			   			<div class="row">
				   			<div class="col-md-6 col-md-pull-3 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
				   						<p class="meta">
												<span class="cat"><a href="#"><?= $key['nama_kategori']; ?></a></span>
												<span class="date"><?= date_format($date, 'd F Y'); ?></span>
												<span class="pos">By <a href="#"><?= $key['penulis']; ?></a></span>
											</p>
					   					<h1><?= $key['judul'];?></h1>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	
			   	<?php } ?>
			   	
			  	</ul>
		  	</div>
		</aside>

		<div id="colorlib-container">
			<div class="container">
				<h1>Artikel Terbaru</h1>
				<div class="row row-pb-md">
					<?php
                    
                    $blog = new Frontend();
                    foreach ($blog->index() as $key) {
                        $date = date_create($key['tgl_dibuat']);
                ?>
					<div class="col-md-4">
						<div class="blog-entry">
							<div class="blog-img">
								<a href="<?= $key['link'];?>.php"><img src="admin/artikel/img/<?= $key['foto']; ?>" class="img-responsive" alt="html5 bootstrap template"></a>
							</div>
							<div class="desc">
								<p class="meta">
									<span class="cat"><a href="#"><?=$key['nama_kategori']; ?></a></span>
									<span class="date"><?= date_format($date, 'd F Y'); ?></span><br>
									<span class="pos">By <a href="#"><?= $key['penulis']; ?></a></span>
								</p>
								<h2><a href="blog.html"><?= $key['judul'];?></a></h2>
							</div>
						</div>
					</div>		
					<?php }?>			
				</div>
			</div>
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

