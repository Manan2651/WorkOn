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
    <link href="//fonts.googleapis.com/css?family=Josefin+Sans:400,400i,500,600,700&display=swap" rel="stylesheet">
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
            <?php
       if(isset($_GET['email1']))
        {
               //$user_id=$_SESSION['wor_email'];
               $to_id=$_GET['email1'];
               $from_id=$_SESSION['wor_email'];
               $sql = "SELECT * FROM `company_master_table1` WHERE `email` = '".$to_id."'";
               //echo $sql;exit;
               $run_sql= mysqli_query($conn,$sql);
            //echo $query;
            $q= "SELECT * FROM `request_master` WHERE `from_id`='".$from_id."' AND `to_id`='".$to_id."' AND `response`=1";
            //echo $q;
               //echo $sql;exit;
               $result = mysqli_query($conn, $q);
               
                if(mysqli_num_rows($run_sql) > 0)
                {   
                    //echo $sql;exit;
                    $user = mysqli_fetch_assoc($run_sql);?>
            <!-- <div class="container-fluid page-body-wrapper">
                <div class="main-panel">
                    <div class="content-wrapper pb-0">
                        <div class="page-header flex-wrap"> -->
            <div class="col">
                <div class="row">
                    <div class="col mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="e-profile">
                                    <div class="row">
                                        <div class="col-12 col-sm-auto mb-3">
                                            <div class="mx-auto" style="width: 160px;">
                                                <?php //$user['email'];exit;?>
                                                <!-- <img src="<?php //echo $user['profile_pic'];?>" alt="profile"
                                                            class="d-flex justify-content-center align-items-center rounded"
                                                            style="height: 140px;  background-color: rgb(233, 236, 239);" /> -->
                                                <!--change to offline or busy as needed-->


                                            </div>
                                        </div>
                                        <!-- <div
                                                    class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                                    <div class="text-center text-sm-left mb-2 mb-sm-0">
                                                        <h4 class="pt-sm-2 pb-1 mb-0  ml-5 text-nowrap">
                                                            <?php echo $user['email'];?>
                                                        </h4>


                                                        <p class="mb-0 ml-5"><?php echo $user['email'];?></p>

                                                    </div>

                                                </div> -->
                                    </div>

                                    <ul class="nav nav-tabs">
                                        <li class="nav-item"><a href="" class="active nav-link">Information</a>
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
                                                                    <label>Company Name</label>
                                                                    <label
                                                                        class="form-control"><?php echo $user['com_name'];?>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>Email</label>
                                                                        <label
                                                                            class="form-control"><?php echo $user['email'];?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label>Company Address</label>
                                                                    <label
                                                                        class="form-control"><?php echo $user['address'];?></label>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label>Company City</label>
                                                                    <label
                                                                        class="form-control"><?php echo $user['city'];?></label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <?php if($row = mysqli_fetch_assoc($result))
                                                                { ?><div class="col d-flex justify-content-end">
                                                        <div class="col d-flex justify-content-end">
                                                            <button class="btn mr-4"
                                                                style="border-radius:3px;border-color:#969b90;"
                                                                disabled>Requested</button>
                                                        </div>
                                                        <?php }
                                                                else{ ?>
                                                        <div class="col d-flex justify-content-end">
                                                            <a href="send_request1.php?email=<?php echo $user['email'];?>"
                                                                class="btn mr-4 btn-primary">Send
                                                                Request</a>
                                                        </div>
                                                        <?php } ?>

                                                        <!-- <div class="col d-flex justify-content-end"> -->
                                                        <a href="contact.php" class="btn mr-4"
                                                            style="border-radius:3px;border-color:#969b90;">Back</a>
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
        <!-- </div>
        </div>
        </div> -->
        <?php
        }     
     }?>
        <style type="text/css">
        body {

            background: #f8f8f8;

        }
        </style>

        <script src="assets/vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="assets/vendors/chart.js/Chart.min.js"></script>
        <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
        <script src="assets/vendors/flot/jquery.flot.js"></script>
        <script src="assets/vendors/flot/jquery.flot.resize.js"></script>
        <script src="assets/vendors/flot/jquery.flot.categories.js"></script>
        <script src="assets/vendors/flot/jquery.flot.fillbetween.js"></script>
        <script src="assets/vendors/flot/jquery.flot.stack.js"></script>
        <script src="assets/vendors/flot/jquery.flot.pie.js"></script>
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="assets/js/off-canvas.js"></script>
        <script src="assets/js/hoverable-collapse.js"></script>
        <script src="assets/js/misc.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page -->
        <script src="assets/js/dashboard.js"></script>
        <!-- End custom js for this page -->
        </div>
    </section>
    <!-- //contact-form -->
    <!-- /contact-form -->

    <!-- //contact-form -->

    <!-- footer-66 -->
    <?php include 'footer.php';?>
    <!--//footer-66 -->
</body>