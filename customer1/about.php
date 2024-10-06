<?php 
include 'config.php';
session_start();
if(!isset($_SESSION['cost_logged_in']))
{
    header("location: signup_page.php");
} 
?>
<!doctype html>
<html lang="zxx">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>WorkOn |About
	</title>
	<!-- Template CSS -->
	<link rel="stylesheet" href="assets/css/style-starter.css">
	<!-- Template CSS -->
	<link href="//fonts.googleapis.com/css?family=Josefin+Sans:400,400i,500,600,700&display=swap"
		rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Lato:300,400,400i,700&display=swap" rel="stylesheet">
	<!-- Template CSS -->
</head>

<body>
	<!--w3l-header-->
	<?php //include 'head_section.php';?>
	<!--//top-header-content-->
	<?php include 'header.php';?>
	<!-- //w3l-header -->
	<!-- /breadcrumbs -->
	<nav id="breadcrumbs" class="breadcrumbs">
		<div class="container page-wrapper">
			<a href="#">Home</a> » <span class="breadcrumb_last" aria-current="page">About</span>
		</div>
	</nav>
	<!-- //breadcrumbs -->
	<section class="w3l-content-about-grid">
		<div class="about-inner-cont py-5">
			<div class="container py-lg-5">
				<div class="row content-ab-grids">
					<div class="col-lg-6 content-ab-left">
						<div class="title-content text-left">
							<h6 class="sub-title">Welcome to our CleanFreshly</h6>
							<h3 class="hny-title">About Our Company</h3>
						</div>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur hic odio voluptatem
							tenetur
							consequatur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur hic odio
							voluptatem tenetur
							consequatur adipisicing elit.</p>
						<p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur hic odio
							voluptatem tenetur
							consequatur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur hic odio
							voluptatem tenetur
							consequatur adipisicing elit.</p>
						<img src="assets/images/ab2.jpg" class="img-fluid" alt="" />
					</div>
					<div class="col-lg-6 content-ab-right pl-lg-5 mt-lg-0 mt-5">
						<img src="assets/images/ab3.jpg" class="img-fluid" alt="" />
						<div class="title-content text-left mt-5">
							<h6 class="sub-title">Simple Text</h6>
							<h3 class="hny-title">Why Choose Us</h3>
						</div>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur hic odio voluptatem
							tenetur
							consequatur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur hic odio
							voluptatem tenetur
							consequatur adipisicing elit.</p>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur hic odio voluptatem
							tenetur
							consequatur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur hic odio
							voluptatem tenetur
							consequatur adipisicing elit.</p>

					</div>
				</div>



			</div>
		</div>
	</section>
	<section class="w3l-progress-6">
		<!-- /content-6-section -->
		<div class="progress-6-mian py-5">
			<div class="container py-lg-3">
				<div class="progress-in row">
					<div class="content-gd col-lg-6">
						<div class="title-content text-left">
							<h6 class="sub-title">Simple Text</h6>
							<h3 class="hny-title">We have 17+ years of Professional Experience</h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sunt in culpa qui officia sed
								deserunt mollit anim </p>
						</div>
					</div>
					<div class="content-gd col-lg-6 mt-lg-0 mt-4">
						<div class="progress-info">
							<h6 class="progress-tittle">Plumbing</h6>
							<div class="progress">
								<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 80%"
									aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
								</div>
							</div>
						</div>
						<div class="progress-info">
							<h6 class="progress-tittle">Office Cleaning</h6>
							<div class="progress">
								<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 90%"
									aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
								</div>
							</div>
						</div>
						<div class="progress-info">
							<h6 class="progress-tittle">Spring Cleaning
							</h6>
							<div class="progress">
								<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 95%"
									aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
								</div>
							</div>
						</div>
						<div class="progress-info">
							<h6 class="progress-tittle">Customer Satisfaction</h6>
							<div class="progress">
								<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 95%"
									aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //progress-->
	<!--/team-sec-->
	<section class="w3l-team-main">
		<div class="team py-5">
			<div class="container py-lg-5">
				<div class="title-content text-center">
					<h6 class="sub-title">Meet Our</h6>
					<h3 class="hny-title">Amazing Team</h3>
					<p class="title-para">Lorem ipsum dolor sit amet consectetur adipisicing elit sunt in culpa qui
						officia sed deserunt mollit anim id est laborum mollit anim id est nulla.</p>
				</div>
				<div class="row team-row">
					<div class="col-lg-3 col-sm-6 team-wrap">
						<div class="team-info text-left">
							<div class="column position-relative">
								<a href="#url"><img src="assets/images/team1.jpg" alt=""
										class="img-fluid team-image" /></a>
							</div>
							<div class="column">
								<h3 class="name-pos"><a href="#url">Mickel Zaman</a></h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit </p>
								<div class="social">
									<div class="social-left">
										<a href="#facebook" class="facebook"><span class="fa fa-facebook"
												aria-hidden="true"></span></a>
										<a href="#twitter" class="twitter"><span class="fa fa-twitter"
												aria-hidden="true"></span></a>
									</div>
									<div class="social-right">
										<a href="#email" class="email"><span class="fa fa-envelope-o"></span></a>
										<a href="#phone" class="phone"><span class="fa fa-phone"></span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end team member -->

					<div class="col-lg-3 col-sm-6 team-wrap">

						<div class="team-info text-left">
							<div class="column position-relative">
								<a href="#url"><img src="assets/images/team2.jpg" alt=""
										class="img-fluid team-image" /></a>
							</div>
							<div class="column">
								<h3 class="name-pos"><a href="#url">Paul Croves</a></h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit </p>
								<div class="social">
									<div class="social-left">
										<a href="#facebook" class="facebook"><span class="fa fa-facebook"
												aria-hidden="true"></span></a>
										<a href="#twitter" class="twitter"><span class="fa fa-twitter"
												aria-hidden="true"></span></a>
									</div>
									<div class="social-right">
										<a href="#email" class="email"><span class="fa fa-envelope-o"></span></a>
										<a href="#phone" class="phone"><span class="fa fa-phone"></span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end team member -->

					<div class="col-lg-3 col-sm-6 team-wrap">
						<div class="team-info text-left">
							<div class="column position-relative">
								<a href="#url"><img src="assets/images/team3.jpg" alt=""
										class="img-fluid team-image" /></a>
							</div>
							<div class="column">
								<h3 class="name-pos"><a href="#url">Ricardo Spencer</a></h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit </p>
								<div class="social">
									<div class="social-left">
										<a href="#facebook" class="facebook"><span class="fa fa-facebook"
												aria-hidden="true"></span></a>
										<a href="#twitter" class="twitter"><span class="fa fa-twitter"
												aria-hidden="true"></span></a>
									</div>
									<div class="social-right">
										<a href="#email" class="email"><span class="fa fa-envelope-o"></span></a>
										<a href="#phone" class="phone"><span class="fa fa-phone"></span></a>
									</div>
								</div>
							</div>
						</div>

					</div>
					<!-- end team member -->
					<!-- end team member -->

					<div class="col-lg-3 col-sm-6 team-wrap">

						<div class="team-info text-left">
							<div class="column position-relative">
								<a href="#url"><img src="assets/images/team4.jpg" alt=""
										class="img-fluid team-image" /></a>
							</div>
							<div class="column">
								<h3 class="name-pos"><a href="#url">Marko Dugonji</a></h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit </p>
								<div class="social">
									<div class="social-left">
										<a href="#facebook" class="facebook"><span class="fa fa-facebook"
												aria-hidden="true"></span></a>
										<a href="#twitter" class="twitter"><span class="fa fa-twitter"
												aria-hidden="true"></span></a>
									</div>
									<div class="social-right">
										<a href="#email" class="email"><span class="fa fa-envelope-o"></span></a>
										<a href="#phone" class="phone"><span class="fa fa-phone"></span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>
	<!--//team-sec-->
	<!-- /specification-6-->
	<section class="w3l-satisfied-main">
		<div class="satisfy-content py-5">
			<div class="container py-lg-5">
				<h6 class="sub-title">Satisfied Clients</h6>
				<h3 class="hny-title two"> We Providing A High Quality Services</h3>
				<p class="counter-sub-para">Lorem ipsum dolor sit amet consectetur adipisicing elit sunt in culpa qui
					officia sed deserunt mollit anim id est laborum mollit anim id est nulla.</p>
				<!--start-divice-scree-slider-->
				<div class="skill_info mt-lg-5 mt-4">
					<div class="stats_left">
						<div class="counter_grid">
							<div class="icon_info">
								<p class="counter">165</p>
								<h3>Cleaning Staff</h3>
								<p class="counter-para">Lorem ipsum dolor sit amet consectetur adipisicing elit </p>
							</div>
						</div>
					</div>
					<div class="stats_left">
						<div class="counter_grid">
							<div class="icon_info">
								<p class="counter">563</p>
								<h3>Successful Projects</h3>
								<p class="counter-para">Lorem ipsum dolor sit amet consectetur adipisicing elit </p>
							</div>
						</div>
					</div>
					<div class="stats_left">
						<div class="counter_grid">
							<div class="icon_info">
								<p class="counter">645</p>
								<h3>Happy Customer</h3>
								<p class="counter-para">Lorem ipsum dolor sit amet consectetur adipisicing elit </p>
							</div>
						</div>
					</div>
					<div class="stats_left">
						<div class="counter_grid">
							<div class="icon_info">
								<p class="counter">465</p>
								<h3>Carpets Cleaned</h3>
								<p class="counter-para">Lorem ipsum dolor sit amet consectetur adipisicing elit </p>
							</div>
						</div>
					</div>

				</div>

			</div>
	</section>
	<!-- //specification-6-->
	<!--/testimonials-->
	<section class="w3l-testimonials" id="testimonials">
		<div class="testimonials py-5">
			<div class="container py-lg-5">
				<div class="title-content text-center">
					<h6 class="sub-title">Testimonials</h6>
					<h3 class="hny-title">What our Clients say</h3>
					<p class="title-para">Lorem ipsum dolor sit amet consectetur adipisicing elit sunt in culpa qui
						officia sed deserunt mollit anim id est laborum mollit anim id est nulla.</p>
				</div>
				<div class="row mt-lg-5 mt-4">
					<div class="col-md-10 mx-auto">
						<div class="owl-two owl-carousel owl-theme">
							<div class="item">
								<div class="slider-info mt-lg-4 mt-3">
									<div class="message">
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea sit id
											accusantium
											officia quod quasi necessitatibus perspiciatis Harum error provident
											quibusdam tenetur.</p>
										<div class="name mt-4">
											<h4>Phillip Hunt</h4>
											<p>Example Company</p>
										</div>
									</div>
									<div class="img-circle">
										<img src="assets/images/c1.jpg" class="img-fluid testimonial-img" alt="client">
									</div>
								</div>
							</div>
							<div class="item">
								<div class="slider-info mt-lg-4 mt-3">
									<div class="message">
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea sit id
											accusantium
											officia quod quasi necessitatibus perspiciatis Harum error provident
											quibusdam tenetur.</p>
										<div class="name mt-4">
											<h4>Sara Grant</h4>
											<p>Example Company</p>
										</div>
									</div>
									<div class="img-circle">
										<img src="assets/images/c2.jpg" class="img-fluid testimonial-img" alt="client">
									</div>
								</div>
							</div>
							<div class="item">
								<div class="slider-info mt-lg-4 mt-3">
									<div class="message">
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea sit id
											accusantium
											officia quod quasi necessitatibus perspiciatis Harum error provident
											quibusdam tenetur.</p>
										<div class="name mt-4">
											<h4>Luke Jacobs</h4>
											<p>Example Company</p>
										</div>
									</div>
									<div class="img-circle">
										<img src="assets/images/c3.jpg" class="img-fluid testimonial-img" alt="client">
									</div>
								</div>
							</div>
							<div class="item">
								<div class="slider-info mt-lg-4 mt-3">

									<div class="message">
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea sit id
											accusantium
											officia quod quasi necessitatibus perspiciatis Harum error provident
											quibusdam tenetur.</p>
										<div class="name mt-4">
											<h4>Claire Olson</h4>
											<p>Example Company</p>
										</div>
									</div>
									<div class="img-circle">
										<img src="assets/images/c4.jpg" class="img-fluid testimonial-img" alt="client">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--//testimonials-->
	<!-- footer-66 -->
	<?php include 'footer.php';?>
	<!--//footer-66 -->
</body>

</html>

<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- disable body scroll which navbar is in active -->

<!--//-->
<script>
	$(function () {
		$('.navbar-toggler').click(function () {
			$('body').toggleClass('noscroll');
		})
	});
</script>
<!--/scroll-down-JS-->
<!-- stats -->
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.countup.js"></script>
<script>
	$('.counter').countUp();
</script>
<!-- //stats -->
<!-- for blog carousel slider -->
<script src="assets/js/owl.carousel.js"></script>
<!-- script for banner slider-->
<script>
	$(document).ready(function () {
		$('.owl-one').owlCarousel({
			loop: true,
			margin: 0,
			nav: false,
			responsiveClass: true,
			autoplay: false,
			autoplayTimeout: 5000,
			autoplaySpeed: 1000,
			autoplayHoverPause: false,
			responsive: {
				0: {
					items: 1,
					nav: false
				},
				480: {
					items: 1,
					nav: false
				},
				667: {
					items: 1,
					nav: true
				},
				1000: {
					items: 1,
					nav: true
				}
			}
		})
	})
</script>
<!-- //testimonials owlcarousel -->
<script>
	$(document).ready(function () {
		$('.owl-two').owlCarousel({
			loop: true,
			margin: 30,
			nav: false,
			responsiveClass: true,
			autoplay: false,
			autoplayTimeout: 5000,
			autoplaySpeed: 1000,
			autoplayHoverPause: false,
			responsive: {
				0: {
					items: 1,
					nav: false
				},
				480: {
					items: 1,
					nav: false
				},
				667: {
					items: 1,
					nav: false
				},
				1000: {
					items: 1,
					nav: false
				}
			}
		})
	})
</script>
<!-- //script for Testimonials-->
<!-- //script -->

<script src="assets/js/bootstrap.min.js"></script>