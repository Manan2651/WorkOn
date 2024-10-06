<?php 
include 'config.php';
session_start();
if(!isset($_SESSION['wor_email']))
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
            <a href="#">Home</a> » <span class="breadcrumb_last" aria-current="page">Employee</span>
        </div>
    </nav>
    <section class="w3l-content-with-photo-4">
        <div class="container py-lg-5">
            <!-- /content-grids-->
            <!-- <div class="content-photo-info py-5"> -->
            <!-- <div class="container py-lg-5"> -->
                <!-- //breadcrumbs -->
                <?php
    $com_id=$_GET['emp_detail'];
    //echo $com_id;
    $sql="SELECT * FROM worker_master WHERE com_name='".$com_id."'";
    $result=mysqli_query($conn,$sql);?>
                <div class="card" style="width:100%;">
                    <div class="card-body">
                        <h4 class="card-title">Employee List</h4>
                        <p class="card-description">See Profile
                        </p>
                        <?php   if($result !== FALSE)
    { ?>
                        <div class="table-responsive" >
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Contact</th>
                                        <th>Address</th>
                                        <th>Area</th>
                                        <th>Skills</th>
                                        <th>Book Now</th>
                                        <th>Save Worker</th>
                                    </tr>
                                </thead>
                                <?php 
        while($row = mysqli_fetch_array($result))
        {?>
                                <tbody>
                                    <tr>
                                        <td>
                                            <?php echo $row['wor_name']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['wor_email']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['wor_contact']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['wor_address']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['wor_area']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['wor_skills']; ?>
                                        </td>
                                        <td>
                                            <input class="btn btn-primary" type="submit" value="Book">
                                        </td>
                                        <td>
                                        <input class="btn btn-primary" type="submit" value="Save">
                                        </td>
                                    </tr>
                                </tbody>
                                <?php
                    }?>
                            </table>
                        </div>
                        <?php }
    ?>
                    </div>
                <!-- </div> -->
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