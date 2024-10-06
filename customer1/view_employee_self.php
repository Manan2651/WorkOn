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
    <link href="//fonts.googleapis.com/css?family=Josefin+Sans:400,400i,500,600,700&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:300,400,400i,700&display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
        <a class=" btn btn-primary mb-2" href="services.php"><i class="fa fa-arrow-left"><input class="btn btn-primary" type="submit" value="Back"></i></a>
            <!-- Modal -->


            <!-- /content-grids-->
            <!-- <div class="content-photo-info py-5"> -->
            <!-- <div class="container py-lg-5"> -->
            <!-- //breadcrumbs -->
            <?php
        $com_id=$_GET['emp_detail'];
        //$user_id=$_SESSION['com_email'];
        $sql1 = "SELECT * FROM `worker_master` WHERE `worker_id` = '".$com_id."'";
        $run_sql= mysqli_query($conn,$sql1);
     //echo $query;
        if($run_sql !== FALSE)
        {
            $user = mysqli_fetch_assoc($run_sql); ?>
            <!-- <div class="container py-lg-5"> -->
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

                                                <img src="../worker/<?php echo $user['wor_profile'];?>" alt="profile"
                                                    class="d-flex justify-content-center align-items-center rounded"
                                                    style="height: 140px; width:224px; background-color: rgb(233, 236, 239);" />
                                                <!--change to offline or busy as needed-->


                                            </div>
                                        </div>
                                        <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                            <div class="text-center text-sm-left mb-2 mb-sm-0">
                                                <h4 class="pt-sm-2 pb-1 mb-0  ml-5 text-nowrap">
                                                    <?php echo $user['wor_name'];?>
                                                </h4>
                                                </h4><?php
                                                $sql3="SELECT * FROM `rate` WHERE `wor_email`='".$user['wor_email']."'";
                                                $result5=mysqli_query($conn,$sql3);
                                                $user3=mysqli_num_rows($result5);
                                                if($user3 >0)
                                                {
                                                    $sum_rate=0;
                                                    $count=0;
                                                    while($row1 = mysqli_fetch_array($result5))
                                                    {  
                                                        $sum_rate=$row1['rate']+$sum_rate;
                                                        $count++;
                                                    }
                                                    $avg_rate=$sum_rate/$count;?>
                                                <h4 class="pt-sm-2 pb-1 mb-0  ml-5 text-nowrap"
                                                    style="text-transform:capitalize;">
                                                    <?php echo $avg_rate;?>
                                                    <span class="fa fa-star checked" style="color: orange;"></span>
                                                    <?php echo "From ".$user3;?>
                                                </h4><?php
                                                }
                                                else
                                                {?>
                                                <h4 class="pt-sm-2 pb-1 mb-0  ml-5 text-nowrap"
                                                    style="text-transform:capitalize;">
                                                    <?php echo "0";?>
                                                    <span class="fa fa-star checked" style="color: orange;"></span>
                                                    <?php echo "From 0";
                                                }?>
                                                </h4>

                                                <p class="mb-0 ml-5"><?php echo $user['wor_email'];?></p>

                                            </div>

                                        </div>
                                    </div>
                                    <ul class="nav nav-tabs">
                                        <!-- <div class="tab"> -->
                                        <li class="nav-item mr-1">
                                            <a class="tablinks nav-link" onclick="openCity(event, 'London')"
                                                id="defaultOpen">
                                                <h5>Profile</h5>
                                            </a>
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
                                                                    class="form-control"><?php echo $user['wor_name'];$wor_name=$user['wor_name'];?></label>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label>Email</label>
                                                                <label class="form-control"><?php echo $user['wor_email'];
                                                                    $wor_email=$user['wor_email'];?>
                                                                    </lable>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label>Address</label>
                                                                <label
                                                                    class="form-control"><?php echo $user['wor_address'];?></label>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label>City</label>
                                                                <?php
                                                                $area=$user['wor_area'];
                                                                $email=$user['wor_email'];
                                                                $visit_charges=$user['visit_charges'];
                                                                $skill_list=$user['wor_skills'];
                                                                $query1="SELECT * FROM city_master WHERE city_id='".$user['wor_city']."'";
                                                                $result1=mysqli_query($conn,$query1);
                                                                if($result1 !== 0)
                                                                
                                                                    $user1 = mysqli_fetch_assoc($result1);
                                                                ?>
                                                                <label
                                                                    class="form-control"><?php echo $user1['city_name'];$city=$user1['city_name'];?></label>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col mb-3">
                                                            <div class="form-group">
                                                                <label>Area</label>
                                                                <label
                                                                    class="form-control"><?php echo $user['wor_area'];?></label>
                                                            </div>
                                                        </div>
                                                        <div class="col mb-3">
                                                            <div class="form-group">
                                                                <label>About</label>
                                                                <label
                                                                    class="form-control"><?php echo $user['description'];?></label>
                                                            </div>
                                                        </div>
                                                    </div>
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
                            <h4 style="margin-left:35px;">Book Worker</h4>
                            <div class="px-xl-3">
                                <a class="btn btn-block btn-secondary" data-toggle="modal" data-target="#myModal"
                                    style="color:white">
                                    <i class="fa fa-book"></i>
                                    <span>Book</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                    <!-- <div class="col-12 col-md-3 mb-3"> -->
                    <?php
                    $sql2="SELECT * FROM bookmark_master WHERE from_id='".$_SESSION['cost_logged_in']."' AND wor_id='".$email."'";
                    $result4=mysqli_query($conn,$sql2);
                    $user4=mysqli_num_rows($result4);
                    if($user4 >0)
                    {
                        ?>
                    <div class="card mb-3">
                        <div class="card-body">
                            <h4 style="margin-left:50px;">Bookmark</h4>
                            <div class="px-xl-3">
                                <a href="unbookmark1.php?wor_email=<?php echo $email; ?>&&wor_id=<?php echo $user['worker_id']; ?>"
                                    class="btn btn-block" style="color:black;border-color:black;">
                                    <i class="fa fa-bookmark"></i>
                                    <span>Bookmarked</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    else
                    {?>
                    <div class="card mb-3">
                        <div class="card-body">
                            <h4 style="margin-left:50px;">Bookmark</h4>
                            <div class="px-xl-3">
                                <a href="bookmark1.php?wor_email=<?php echo $email; ?>&&wor_id=<?php echo $user['worker_id']; ?>"
                                    class="btn btn-block btn-secondary" style="color:white">
                                    <i class="fa fa-bookmark"></i>
                                    <span>Bookmark</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>

            <!-- </div> -->
            <!-- </div> -->
            <?php
       }?>
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-lg">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Book worker</h4>
                            <h5 style="color:orange;">To: <?php echo $wor_email;?>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <!-- <h6 style="color:orange;">Enter your details</h6> -->
                            <form method="post" action="a1.php">
                                <?php
                                $query2="SELECT * FROM customer_master WHERE email='".$_SESSION['cost_logged_in']."'";
                                $result3=mysqli_query($conn,$query2);
                                if(mysqli_num_rows($result3) > 0)
                                
                                    $user2=mysqli_fetch_assoc($result3);
                                ?>
                                <table cellspacing="15">

                                    <tr>
                                        <td style="width:417px">
                                            <h6><label>You Will Charged For Visit</label></h6>
                                            <input readonly class="form-control mb-4 mt--1" name="cost_name"
                                                value="<?php echo "₹".$visit_charges;?>"></label>
                                            <input type="hidden" class="form-control mb-4 mt--1" name="cost_name"
                                                value="<?php echo $user2['name'];?>"></label>
                                            <h6><label>Date</label></h6>
                                            <input type="date" name="dateFrom" min="<?php echo date("Y-m-d")?>"
                                                class="form-control mb-4" required>
                                            <h6><label>Description</label></h6>
                                            <textarea class="form-control mb-4" name="description" rows="4" cols="5"
                                                required></textarea>
                                            <h6><label>Contact</label></h6>
                                            <input readonly class="form-control mb-4" name="contact"
                                                value="<?php echo $user2['contact'];?>">
                                        </td>
                                        <td>
                                        </td>
                                        <td style="width:450px;vertical-align:top;">
                                            <h6><label>Area</label></h6>
                                            <input readonly class="form-control mb-4" name="area"
                                                value="<?php echo $area;?>">
                                            <h6><label>City</label></h6>
                                            <input readonly class="form-control mb-4" name="city"
                                                value="<?php echo $city;?>">
                                            <h6><label>Address</label></h6>
                                            <textarea class="form-control mb-4" rows="4" name="address" cols="5"
                                                required><?php echo $user2['address'];?></textarea>
                                            <input type="hidden" class="form-control mb-4" name="wor_email"
                                                value="<?php echo $email;?>">
                                            <input type="hidden" class="form-control mb-4" name="skill_list"
                                                value="<?php echo $skill_list;?>">
                                            <input type="hidden" class="form-control mb-4" name="wor_name"
                                                value="<?php echo $wor_name;?>">
                                        </td>
                                    </tr>
                                </table>


                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary mb-2" value="Book Now">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>

            <?php //echo $com_id;
    ?>
        </div>
        <!-- </div> -->


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