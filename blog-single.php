<?php 
include 'App/koneksi.php';

$info = new Frontend();

    $artikel = new Artikel();
    foreach ($info->info($_GET['id']) as $data) {
        $kategori = $data['nama_kategori'];
    }
    // var_dump($artikel);                                    
    var_dump($kategori);
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
	
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

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
								<li><a href="index.html">Home</a></li>
								<li class="has-dropdown active">
									<a href="blog.html">Blog</a>
									<ul class="dropdown">
										<li><a href="single.html">Blog Single</a></li>
										<li><a href="#">Video</a></li>
										<li><a href="#">Read</a></li>
										<li><a href="#">Lifestyle</a></li>
									</ul>
								</li>
								<li><a href="event.html">Event</a></li>
								<li><a href="travel.html">Travel</a></li>
								<li><a href="about.html">About Me</a></li>
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
						<h2>Blog detail</h2>
						<p><span><a href="index.html">Home</a></span> / <span><a href="blog.html">Blog </a></span> / <span>Blog Single</span></p>
					</div>
				</div>
			</div>
		</aside>
		<?php
                $artikel = new Artikel();
                foreach ($artikel->show($_GET['id']) as $data) {
                    $id = $data['id'];
                    $judul = $data['judul'];
                    $konten = $data['konten'];
                    $foto = $data['foto'];
                    $tgl = date_create($data['tgl_buat']);
                }
                // var_dump($artikel);                                    
                ?>
		<div id="colorlib-container">
			<div class="container">
				<div class="row">
					<div class="col-md-9 content">
						<div class="row row-pb-lg">
							<div class="col-md-12">
								<div class="blog-entry">
									<div class="blog-img blog-detail">
										<img src="admin/artikel/img/<?= $foto ?>" class="img-responsive" alt="html5 bootstrap template">
									</div>
									<div class="desc">
										<p class="meta">
											<span class="cat"><a href="#"><?= $kategori; ?></a></span>
											<span class="date">20 March 2018</span>
											<span class="pos">By <a href="#">Rich</a></span>
										</p>
										<h2><a href="blog.html">Recipe for your site</a></h2>
										<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way. </p>
										<blockquote>
											A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
										</blockquote>
										<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
										<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way. </p>
									</div>
								</div>
							</div>
						</div>
						<div class="row row-pb-lg">
							<div class="col-md-12">
								<h2 class="heading-2">23 Comments</h2>
								<div class="review">
						   		<div class="user-img" style="background-image: url(assets/stuff/images/person1.jpg)"></div>
						   		<div class="desc">
						   			<h4>
						   				<span class="text-left">Jacob Webb</span>
						   				<span class="text-right">24 March 2018</span>
						   			</h4>
						   			<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
						   			<p class="star">
					   					<span class="text-left"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
						   			</p>
						   		</div>
						   	</div>
						   	<div class="review">
						   		<div class="user-img" style="background-image: url(assets/stuff/images/person2.jpg)"></div>
						   		<div class="desc">
						   			<h4>
						   				<span class="text-left">Jacob Webb</span>
						   				<span class="text-right">24 March 2018</span>
						   			</h4>
						   			<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
						   			<p class="star">
					   					<span class="text-left"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
						   			</p>
						   		</div>
						   	</div>
						   	<div class="review">
						   		<div class="user-img" style="background-image: url(assets/stuff/images/person3.jpg)"></div>
						   		<div class="desc">
						   			<h4>
						   				<span class="text-left">Jacob Webb</span>
						   				<span class="text-right">24 March 2018</span>
						   			</h4>
						   			<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
						   			<p class="star">
					   					<span class="text-left"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
						   			</p>
						   		</div>
						   	</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2 class="heading-2">Say something</h2>
								<form action="#">
									<div class="row form-group">
										<div class="col-md-6">
											<!-- <label for="fname">First Name</label> -->
											<input type="text" id="fname" class="form-control" placeholder="Your firstname">
										</div>
										<div class="col-md-6">
											<!-- <label for="lname">Last Name</label> -->
											<input type="text" id="lname" class="form-control" placeholder="Your lastname">
										</div>
									</div>

									<div class="row form-group">
										<div class="col-md-12">
											<!-- <label for="email">Email</label> -->
											<input type="text" id="email" class="form-control" placeholder="Your email address">
										</div>
									</div>

									<div class="row form-group">
										<div class="col-md-12">
											<!-- <label for="subject">Subject</label> -->
											<input type="text" id="subject" class="form-control" placeholder="Your subject of this message">
										</div>
									</div>

									<div class="row form-group">
										<div class="col-md-12">
											<!-- <label for="message">Message</label> -->
											<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
										</div>
									</div>
									<div class="form-group">
										<input type="submit" value="Post Comment" class="btn btn-primary">
									</div>
								</form>	
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="sidebar">
							<div class="side">
								<div class="form-group">
									<input type="text" class="form-control" id="search" placeholder="Enter any key to search...">
									<button type="submit" class="btn btn-primary"><i class="icon-search3"></i></button>
								</div>
							</div>
							<div class="side">
								<h2 class="sidebar-heading">Categories</h2>
								<p>
									<ul class="category">
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
							<div class="side">
								<h2 class="sidebar-heading">Recent Blog</h2>
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
							<div class="side">
								<h2 class="sidebar-heading">Instagram</h2>
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
							<div class="side">
								<div class="form-group">
									<input type="text" class="form-control form-email text-center" id="email" placeholder="Enter your email">
									<button type="submit" class="btn btn-primary btn-subscribe">Subscribe</button>
								</div>
							</div>
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

