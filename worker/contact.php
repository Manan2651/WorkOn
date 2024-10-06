<?php 
include 'config.php';
session_start();
if(!isset($_SESSION['wor_logged_in']))
{
    header("location: login.php");
} 
?>
<!doctype html>
<html lang="zxx">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Cleanfreshly a Home Maintenance & Service Category Bootstrap Responsive Web Template | Contact :: W3layouts
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
	<?php include 'header.php';?>
	<!--//top-header-content-->
	
	<!-- //w3l-header -->
	<!-- /contact-form -->
	<section class="w3l-contact-main">
	<div class="container py-lg-5">
	<?php include 'send_request.php';?>
</div>
	</section>
	<!-- //contact-form -->
	<!-- /contact-form -->
	
	<!-- //contact-form -->

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

<script src="assets/js/bootstrap.min.js"></script>