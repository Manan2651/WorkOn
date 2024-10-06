<?php include 'config.php';
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
    <title>WorkOn |About
    </title>
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <!-- Template CSS -->
    <link href="//fonts.googleapis.com/css?family=Josefin+Sans:400,400i,500,600,700&display=swap" rel="stylesheet">
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
            <a href="#">Home</a> » <span class="breadcrumb_last" aria-current="page">Requests</span>
        </div>
    </nav>
    <!-- //breadcrumbs -->
    <?php
		$to_id=$_SESSION['wor_email'];
		$sql="SELECT * FROM book_master WHERE wor_email='".$to_id."' AND status=1";
		//$sql="SELECT * FROM request_master WHERE from_id='".$to_id."' AND response=0";
		// echo $sql;
		$result = mysqli_query($conn, $sql);
        $count= mysqli_num_rows($result);
	?>
    <?php 
	if($count > 0)
	{
		                    // echo $sql;exit; 
                    //var_dump($result);exit;  ?>
    <section class="w3l-content-about-grid">
        <div class="container py-lg-5">
            <?php while($row = mysqli_fetch_array($result))
          {
                                        //var_dump($row);exit;?>

            <div class="card p-3 mt-3">
                <a href="index.php">
                    <div class="d-flex align-items-center">
                        <!-- "https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80 -->
                        <div class="image"> <img src="assets/images/img.jpg" class="rounded" width="155">
                        </div>
                        <div class="ml-3 w-100">
                            <h4 class="mb-0 mt-0" style="color:black;"><?php echo $row['cost_email']?></h4>
                            <!-- <span>Senior Journalist</span> -->
                            <div class="p-2 mt-2 d-flex justify-content-between rounded text-red stats">
                                <div class="d-flex flex-column"> <span class="articles">Customer Name</span> <span
                                        class="number1"><?php echo $row['cost_name']?></span> </div>
                                <div class="d-flex flex-column"> <span class="followers">Address</span> <span
                                        class="number2"><?php echo $row['address']?></span> </div>
                                <div class="d-flex flex-column"> <span class="rating">Given Date</span> <span
                                        class="number3"><?php echo $row['new_date']?> </span> </div>
                            </div>
                            <div class="button mt-2 d-flex flex-row align-items-center">
                                <a href="accept_request.php?wor_email=<?php echo $row['wor_email'];?>"><input
                                        class="btn btn-sm btn-outline-primary w-100" type="submit" value="Accept" /></a>
                                <!-- <button class="btn btn-sm btn-outline-primary w-100">Accept</button>  -->
                                <!-- <button class="btn btn-sm btn-primary w-100 ml-2">Decline</button> </div> -->
                                <a href="delete_request.php?from_id=<?php echo $row['wor_email'];?>"><input
                                        class="btn btn-sm btn-primary w-100 ml-2" type="submit" value="Decline" /></a>
                            </div>

                        </div>
                    </div>
                </a>
            </div>


            <?php  }
    }
	else
	{?>
            <div class="container py-lg-5">
                <?php echo "No Request Found";?>
            </div>
            <?php
	}
?>
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
$(function() {
    $('.navbar-toggler').click(function() {
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
$(document).ready(function() {
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
$(document).ready(function() {
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