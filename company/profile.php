<?php include 'config.php';
session_start();
if(!isset($_SESSION['com_logged_in']))
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
    if(isset($_SESSION['com_email']))
    {
        $user_id=$_SESSION['com_email'];
        $sql = "SELECT * FROM `company_master_table1` WHERE `email` = '".$user_id."'";
        $run_sql= mysqli_query($conn,$sql);
     //echo $query;
        if($run_sql !== FALSE)
        {
            $user = mysqli_fetch_assoc($run_sql); ?>
    <!-- <section class="w3l-contact-main">
        <div class="contact-infhny py-5"> -->
            <div class="container py-lg-5">
                <div class="grid contact-grids row">
                    <div class="col">
                        <!-- <div class="row"> -->
                            <div class="col mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="e-profile">
                                            <div class="row">
                                                <div class="col-12 col-sm-auto mb-3">
                                                    <div class="mx-auto" style="width: 160px;">

                                                        <img src="<?php echo $user['profile_pic'];?>" alt="profile"
                                                            class="d-flex justify-content-center align-items-center rounded"
                                                            style="height: 140px;  background-color: rgb(233, 236, 239);" />
                                                        <!--change to offline or busy as needed-->


                                                    </div>
                                                </div>
                                                <div
                                                    class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                                    <div class="text-center text-sm-left mb-2 mb-sm-0">
                                                        <h4 class="pt-sm-2 pb-1 mb-0  ml-5 text-nowrap" style="text-transform:capitalize;">
                                                            <?php echo $user['com_name'];?>
                                                        </h4>


                                                        <p class="mb-0 ml-5"><?php echo $user['email'];?></p>

                                                    </div>

                                                </div>
                                            </div>
                                            <ul class="nav nav-tabs">
                                                <!-- <div class="tab"> -->
                                                <li class="nav-item mr-1">
                                                    <a class="tablinks nav-link"
                                                        onclick="openCity(event, 'London')"
                                                        id="defaultOpen"><h5>Profile</h5></a>
                                                </li>
                                                
                                        </div>

                                        <div id="London" class="tabcontent">
                                            <!-- <h3>London</h3>
                                            <p>London is the capital city of England.</p> -->
                                        </div>

                                        <div id="Paris" class="tabcontent">
                                            <!-- <h3>Paris</h3>
                                            <p>Paris is the capital of France.</p> -->
                                        </div>
                                        <!--                                             
                                                <li class="nav-item"><a href="" class="active nav-link">Settings</a>
                                                </li>
                                                <li class="nav-item"><a href="" class="nav-link">Settings</a>
                                                </li> -->
                                        </ul>

                                        <div class="tab-content pt-3">
                                            <div class="tab-pane active">
                                                <form class="form" novalidate="">
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>Name</label>
                                                                        <label
                                                                            class="form-control"><?php echo $user['com_name'];?></label>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>Contact</label>
                                                                        <lable class="form-control">
                                                                            <?php echo $user['contact'];?>
                                                                        </lable>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>Email</label>
                                                                        <label
                                                                            class="form-control"><?php echo $user['email'];?>
                                                                            </lable>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>Address</label>
                                                                        <textarea readonly
                                                                            class="form-control"><?php echo $user['address'];?></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>Area</label>
                                                                        <label
                                                                            class="form-control"><?php echo $user['area'];?></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col mb-3">
                                                                    <div class="form-group">
                                                                        <label>About</label>
                                                                        <label
                                                                            class="form-control"><?php echo $user['discription'];?></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                            <div class="col d-flex justify-content-end">
                                                                <a href="edit_profile.php?edit_email=<?php echo $user['email'];?>" class="btn btn-primary" style="background:#f45d01;border:0px;" >Edit Profile</a>
                                                            </div>
                                                        </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-3 mb-3">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="px-xl-3">
                                        <a class="btn btn-block btn-secondary" href="logout.php" style="color:white">
                                            <i class="fa fa-sign-out"></i>
                                            <span >Logout</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </section>
    <?php
            }
     }?>
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