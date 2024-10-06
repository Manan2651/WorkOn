<?php 
include 'config.php';
session_start();
if(!isset($_SESSION['com_email']))
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
    <title>WorkOn |Services
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
    <?php include 'header.php';?>
    <!--//top-header-content-->

    <!-- //w3l-header -->
    <!-- /breadcrumbs -->
    <nav id="breadcrumbs" class="breadcrumbs">
        <div class="container page-wrapper">
            <a href="index.php">Home</a> » <span class="breadcrumb_last" aria-current="page">Services</span>
        </div>
    </nav>
    <!-- //breadcrumbs -->
    <!-- /services-grids-->
    <?php
   if(isset($_GET['emp_email']))
   {
       $user_id=$_GET['emp_email'];
       $sql = "SELECT * FROM `worker_master` WHERE `wor_email` = '".$user_id."'";
       $run_sql= mysqli_query($conn,$sql);
    //echo $query;
       if(mysqli_num_rows($run_sql) > 0)
       {
           $user = mysqli_fetch_assoc($run_sql);?>
    <!-- End of Search  -->
    <!-- Start of Listing Workers -->
    <div class="container py-lg-5">
        <div class="content-wrapper pb-0">
            <div class="page-header flex-wrap">
                <div class="col">
                    <div class="row">
                        <div class="col mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="e-profile">
                                        <div class="row">
                                            <div class="col-12 col-sm-auto mb-3">
                                                <div class="mx-auto" style="width: 160px;">

                                                    <img src="<?php echo $user['wor_profile'];?>" alt="profile"
                                                        class="d-flex justify-content-center align-items-center rounded"
                                                        style="height: 140px;  background-color: rgb(233, 236, 239);" />
                                                    <!--change to offline or busy as needed-->


                                                </div>
                                            </div>
                                            <div
                                                class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                                <div class="text-center text-sm-left mb-2 mb-sm-0">
                                                    <h4 class="pt-sm-2 pb-1 mb-0  ml-5 text-nowrap">
                                                        <?php echo $user['wor_email'];?>
                                                    </h4>


                                                    <p class="mb-0 ml-5"><?php echo $user['wor_email'];?></p>

                                                </div>
                                            </div>
                                        </div>

                                        <ul class="nav nav-tabs">
                                            <li class="nav-item"><a href="" class="active nav-link">Settings</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content pt-3">
                                            <div class="tab-pane active">
                                                <form class="form" novalidate="">
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>Worker Name</label>
                                                                        <label
                                                                            class="form-control"><?php echo $user['wor_name'];?></label>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>Email</label>
                                                                        <label
                                                                            class="form-control"><?php echo $user['wor_email'];?></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>Worker Gender</label>
                                                                        <label
                                                                            class="form-control"><?php echo $user['wor_gender'];?></label>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>Contact Number</label>
                                                                        <label
                                                                            class="form-control"><?php echo $user['wor_contact'];?></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>Company Address</label>
                                                                        <label
                                                                            class="form-control"><?php echo $user['wor_address'];?></label>
                                                                    </div>
                                                                </div>
                                                               
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>Company City</label>
                                                                        <label
                                                                            class="form-control"><?php echo $user['wor_area'];?></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col d-flex justify-content-end">
                                                            <a href="employee.php" class="btn btn-primary">Back</a>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php
            }
     }
    ?>
    <!-- /services-grids-->

    <!-- /specification-6-->

    <!-- //specification-6-->
    <!--pricing-16-->
    <!-- //pricing-16 -->
    <!-- footer-66 -->
    <?php include 'footer.php';?>
    <!--//footer-66 -->
</body>

</html>
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
</script>
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
<!-- //script -->

<script src="assets/js/bootstrap.min.js"></script>