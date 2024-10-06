<?php 
session_start();
if(!isset($_SESSION['com_logged_in']))
{
    header("location: login.php");
} 
?>
<?php include 'config.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>WorkOn</title>
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css" />
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- <link rel="shortcut icon" href="assets/images/logo.png" /> -->
    <style>
    body {
        background-color: #d7deef;
        /* border-radius: 10px; */
    }

    .card {
        width: 500px;
        border: none;
        border-radius: 10px;
        background-color: #fff
    }

    .stats {
        background: #f2f5f8 !important;
        color: #000 !important
    }

    .articles {
        font-size: 10px;
        color: #a1aab9
    }

    .number1 {
        font-weight: 500
    }

    .followers {
        font-size: 10px;
        color: #a1aab9
    }

    .number2 {
        font-weight: 500
    }

    .rating {
        font-size: 10px;
        color: #a1aab9
    }

    .number3 {
        font-weight: 500
    }
    </style>
</head>
<?php
$to_id=$_SESSION['com_username'];
 $sql="SELECT * FROM request_master WHERE to_id='".$to_id."' AND response=0";
//$sql="SELECT * FROM request_master WHERE from_id='".$to_id."' AND response=0";
//  echo $sql;exit;
$result = mysqli_query($conn, $sql);
?>

<body>

    <div class="container-scroller">
        <?php include 'header.php';?>
        <div class="container-fluid page-body-wrapper">


            <div class="main-panel">
                <!-- <div class="content-wrapper pb-0"> -->
                <!-- <div class="container mt-5 d-flex justify-content-center"> -->
                <?php if($result !== FALSE)
                    // echo $sql;exit; 
                    //var_dump($result);exit;   
                        while($row = mysqli_fetch_array($result))
                                      {
                                        //var_dump($row);exit;?>

                <div class="card p-3 mt-3">
                    <a href="index.php">
                        <div class="d-flex align-items-center">
                            <!-- "https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80 -->
                            <div class="image"> <img src="assets/images/faces/img.jpg" class="rounded" width="155">
                            </div>
                            <div class="ml-3 w-100">
                                <h4 class="mb-0 mt-0" style="color:black;"><?php echo $row['from_id']?></h4>
                                <!-- <span>Senior Journalist</span> -->
                                <div
                                    class="p-2 mt-2 bg-primary d-flex justify-content-between rounded text-white stats">
                                    <!-- <div class="d-flex flex-column"> <span class="articles">Articles</span> <span
                                        class="number1">38</span> </div>
                                <div class="d-flex flex-column"> <span class="followers">Followers</span> <span
                                        class="number2">980</span> </div>
                                <div class="d-flex flex-column"> <span class="rating">Rating</span> <span
                                        class="number3">8.9</span> </div> -->
                                </div>
                                <div class="button mt-2 d-flex flex-row align-items-center">
                                    <a href="accept_request.php?from_id=<?php echo $row['from_id'];?>"><input
                                            class="btn btn-sm btn-outline-primary w-100" type="submit"
                                            value="Accept" /></a>
                                    <!-- <button class="btn btn-sm btn-outline-primary w-100">Accept</button>  -->
                                    <!-- <button class="btn btn-sm btn-primary w-100 ml-2">Decline</button> </div> -->
                                    <a href="delete_request.php?from_id=<?php echo $row['from_id'];?>"><input
                                            class="btn btn-sm btn-primary w-100 ml-2" type="submit"
                                            value="Decline" /></a>
                                </div>

                            </div>
                        </div>
                    </a>
                    <?php  }?>
                </div>

            </div>
        </div>

        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
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
</body>

</html>