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
    <title>WorkOn a Home Maintenance & Service Category | Home
    </title>
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <!-- Template CSS -->
    <link href="//fonts.googleapis.com/css?family=Josefin+Sans:400,400i,500,600,700&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:300,400,400i,700&display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->

</head>

<body>
    <!--w3l-header-->

    <!--//top-header-content-->
    <?php include 'header.php';?>
    <!-- //w3l-header -->
    <!--banner-slider-->
    <!-- main-slider -->
    <?php
    //if(isset($_SESSION['com_email']))
    //{
        $user_id=$_SESSION['wor_email'];
        $sql = "SELECT * FROM `book_master` WHERE `wor_email` = '".$user_id."' AND `status` =1 ORDER BY `new_date` ASC";
        $run_sql= mysqli_query($conn,$sql);
    //  echo $sql;
        if($run_sql !== FALSE)
        {
            //$user = mysqli_fetch_assoc($run_sql); ?>
    <div class="container py-lg-5">
        <?php //echo $sql;exit;
            while($row2 = mysqli_fetch_array($run_sql))
                {//echo $query;exit;?>
        <a href="view_order.php?emp_detail=<?php echo $row2['book_id'];?>" style="dispaly:block;">
            <div class="card mb-3 mt-2" style="width:100%;height:100%">
                <!-- <table style="width:100%" class="table"> -->
                <div class="card-header" style="color:black;">
                    <h4 style="text-transform:capitalize;">For: <?php echo $row2['new_date'];
                                                //$emp_list=$row2['com_name']; ?></h4>
                    <!-- <h5 class="card-title"></h5> -->
                </div>
                <div class="card-body">
                    <!-- <h5 class="card-title"></h5> -->
                    <!-- <section style="dispaly:flex;justify-content:space-between;"> -->
                    <table>
                        <tr>
                            <td style="vertical-align:top;width:30%">
                                Customer Address:<p class="card-text"><?php echo $row2['address']; ?></p>
                                Customer Contact:<p class="card-text"><?php echo $row2['contact']; ?></p>
                            </td>
                            <td style="width:60%">
                                Customer Email:<p class="card-text"><?php echo $row2['cost_email']; ?></p>
                                Customer Area:<p class="card-text"><?php echo $row2['area']; ?></p>
                                Problem:<p class="card-text"><?php echo $row2['description']; ?></p>
                            </td>
                            <td style="vertical-align:top">
                                <input class="btn btn-primary" type="submit" value="View Order">
                            </td>
                        </tr>
                        <!-- </section> -->
                    </table>
                    <!-- <a href="#" class="btn btn-primary">See Profile</a> -->
                </div>

                <!-- <a href="#" class="btn btn-primary">See Profile</a> -->
            </div>
        </a>
        <?php } 
        }
        else
        {
            echo "<h1>No order Found.</h1>";
        }
    //}
        ?>
        <!-- </div> -->
    </div>
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
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>