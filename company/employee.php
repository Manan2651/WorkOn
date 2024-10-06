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
    $id=$_SESSION['com_email'];
            $sql1="SELECT * FROM `company_master_table1`WHERE email='".$id."'";// SET `response` = '1' WHERE from_id='".$user_id."' AND to_id='".$to_id."'";
            $result1=mysqli_query($conn,$sql1);
            if($result1 !== FALSE){
             //echo $sql1;exit;    
                while($row1 = mysqli_fetch_array($result1))
                { 
                    // echo $sql1;exit;              
                    $com_id=$row1['company_id'];  
                    //echo $com_id;exit; 
                }
            }     ?>
    <!-- End of Search  -->
    <!-- Start of Listing Workers -->
    <div class="container py-lg-5">
        <div class="content-wrapper pb-0">
            <!-- <div class="col-lg-6 grid-margin stretch-card"> -->
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Employee List</h4>
                    <p class="card-description">See Profile
                    </p>

                    <?php
                            // $from_id=$_SESSION['wor_email'];
                            // $q = "SELECT * FROM request_master WHERE  from_id='".$from_id."'";// AND to_id='".$row['email']."'";
                          
                            // $result1 = mysqli_query($conn, $q);
                            // echo $result1;exit;
                    $sql = "SELECT * FROM `worker_master` WHERE `com_name`='".$com_id."'";
                    //echo $sql;
                    $result = mysqli_query($conn, $sql);
                    if($result !== FALSE)
                    {
                        ?>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Employee Name</th>
                                    <th>Employee Email</th>
                                    <th>Employee Contact</th>
                                    <th>See Profile</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                      while($row = mysqli_fetch_array($result))
                                      {
                                       
                                       ?>
                                <tr>
                                    <td><?php echo $row['wor_name'];?></td>
                                    <td><?php echo $row['wor_email'];?></td>
                                    <td><?php echo $row['wor_contact'];?></td>
                                    <?php //$to_id=$row['email'];
                                                    //if($row['email'] === $result1){
                                                      //while($row = mysqli_fetch_array($result1))
                                                     //{?>
                                    <td><a href="emp_profile.php?emp_email=<?php echo $row['wor_email'];?>"><input
                                                type="submit" value="See Profile"
                                                style="background:#ffab2d;color:#ffffff;border:0px;border-radius:6px;padding:5px 7px;font-family:Rubik,sans-serif;font-size: 13px;" /></a>
                                    </td>
                                    <?php //}}
                                                    //else{
                                                        //while($row1 = mysqli_fetch_array($result1))
                                                        //{?>
                                    <!-- <td><a href="send_request1.php?email=<?php //echo $row['email'];?>"><input
                                                        type="submit" value="Send Request"
                                                        style="background:#ffab2d;color:#ffffff;border:0px;border-radius:6px;padding:5px 7px;font-family:Rubik,sans-serif;font-size: 13px;" /></a>
                                            </td> -->
                                    <?php //}
                                            // }
                                        }?>
                                </tr>
                                <?php  //}?>
                                <!-- <td>
                                            <label class="badge badge-warning">In progress</label>
                                        </td> -->
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <?php
                         }?>
            </div>
        </div>
    </div>
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