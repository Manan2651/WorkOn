<?php 
include 'config.php';
session_start();
if(!isset($_SESSION['cost_logged_in']))
{
    header("location: signup_page.php");
} 
?>
<?php
    if(isset($_SESSION['cost_logged_in']))
    {
        $user_id=$_GET['emp_detail'];
        $sql = "SELECT * FROM `book_master` WHERE `book_id` = '".$user_id."'";
        $run_sql= mysqli_query($conn,$sql);
     //echo $query;
        if(mysqli_num_rows($run_sql) > 0)
        {
            $user = mysqli_fetch_assoc($run_sql); ?>
<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>WorkOn |Profile
    </title>
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <!-- Template CSS -->
    <link href="//fonts.googleapis.com/css?family=Josefin+Sans:400,400i,500,600,700&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:300,400,400i,700&display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Font Awesome 4-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!--Only for demo purpose - no need to add.-->
    <!-- <link rel="stylesheet" type="text/css" href="demo.css" /> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <!--w3l-header-->
    <?php include 'header.php';?>
    <!--//top-header-content-->

    <!-- //w3l-header -->
    <!-- /contact-form -->
    <nav id="breadcrumbs" class="breadcrumbs">
        <div class="container page-wrapper">
            <a href="index.php">Home</a> » <span class="breadcrumb_last" aria-current="page"><a
                    href="bookings.php">Bookings</a> </span> » <span class="breadcrumb_last" aria-current="page">Status
            </span>
        </div>
    </nav>
    <!-- //contact-form -->
    <!-- /contact-form -->
    <section class="w3l-contact-main">
        <!-- <div class="contact-infhny py-5"> -->
        <div class="container py-lg-5">
            <div class="grid contact-grids row">
                <?php
            $query1="SELECT * FROM book_master WHERE `book_id`='".$_GET['emp_detail']."'";
                // echo $query1;exit;
                $result5=mysqli_query($conn,$query1);
                // echo $query1;
                if($result5 !== FALSE)
                { 
                    $row5 = mysqli_fetch_array($result5);
                    $user3= mysqli_fetch_assoc($result5);
                    //echo $query1;
                }
                if($user['self']==0)
                {
                ?>
                <div class="card-body">
                    <table>
                        <tr>
                            <td style="vertical-align:center;width:40%">
                                <?php include 'view_status_1.php'; ?>
                            </td>
                            <td style="width:15%">
                                Company Name:<p class="card-text" style="text-transform:capitalize;">
                                    <?php echo $row5['com_name'];$email=$row5['com_email']; ?></p>
                                Company Area:<p class="card-text"><?php echo $row5['area']; ?></p>
                                Booked For:<p class="card-text"><?php echo $row5['skill_list']; ?></p>
                            </td>
                            <td style="width:35%">
                                Given Address:<p class="card-text"><?php echo $row5['address']; ?></p>
                                Given Date:<p class="card-text"><?php echo $row5['new_date']; ?></p>
                                Your problem:<p class="card-text"><?php echo $row5['description']; ?></p>
                            </td>
                            <td style="vertical-align:top">
                                <input class="btn" style="background-color:aqua;color:black;" type="submit"
                                    value="Genrate OTP" data-toggle="modal" data-target="#myModal">
                                <input class="btn" style="background-color:aqua;color:black;margin-top:30px;"
                                    type="submit" value="Give Ratings" data-toggle="modal" data-target="#myModal1">
                            </td>
                        </tr>
                        <!-- </section> -->
                    </table>
                </div>
                <?php
                }
                else
                {?>
                <div class="card-body">
                    <table>
                        <tr>
                            <td style="vertical-align:center;width:40%">
                                <?php include 'view_status_1.php'; ?>
                            </td>
                            <td style="width:17%">
                                Worker Email:<p class="card-text">
                                    <?php echo $row5['wor_email'];$email=$row5['wor_email'];$email1=$row5['wor_email']; ?>
                                </p>
                                Worker Area:<p class="card-text"><?php echo $row5['area']; ?></p>
                                Booked For:<p class="card-text"><?php echo $row5['skill_list']; ?></p>
                            </td>
                            <td style="width:35%">
                                Given Address:<p class="card-text"><?php echo $row5['address']; ?></p>
                                Given Date:<p class="card-text"><?php echo $row5['new_date']; ?></p>
                                Your problem:<p class="card-text"><?php echo $row5['description']; ?></p>
                            </td>
                            <td style="vertical-align:top">
                                <input class="btn" style="background-color:aqua;color:black;" type="submit"
                                    value="Genrate OTP" data-toggle="modal" data-target="#myModal">
                                <input class="btn" style="background-color:aqua;color:black;margin-top:30px;"
                                    type="submit" value="Give Ratings" data-toggle="modal" data-target="#myModal1">
                            </td>
                        </tr>
                        <!-- </section> -->
                    </table>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Generated OTP</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <?php
                if($user['self']==0)
                {
                    $sql2="SELECT * FROM book_master WHERE `status`=2 AND `book_id`='".$_GET['emp_detail']."'";
                }
                else
                {
                    $sql2="SELECT * FROM book_master WHERE `status`=1 AND `book_id`='".$_GET['emp_detail']."'";
                }
                $result3=mysqli_query($conn,$sql2);
                $user2=mysqli_fetch_assoc($result3);
                $run_sql2=mysqli_num_rows($result3);
                if($run_sql2 > 0)
                {
                ?>
                <div class="modal-body">
                    <h5>Your OTP is here:</h5><br>
                    <h5 style="color:red;">
                        <lable><?php echo $user2['otp'];?></lable>
                    </h5>
                </div>
                <?php
                }
                else
                {?>
                <div class="modal-body">
                    <h5>Your OTP is here:</h5><br>
                    <h5 style="color:red;">
                        <lable>OTP Has Not Generated Yet</lable>
                    </h5>
                </div>
                <?php 
                }
                ?>
            </div>
            </form>
        </div>
    </div>
    <div class="modal fade" id="myModal1" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Give Ratings</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <?php
                    $query1="SELECT * FROM book_master WHERE `book_id`='".$_GET['emp_detail']."'";
                // echo $query1;exit;
                $result5=mysqli_query($conn,$query1);
                // echo $query1;
                if($result5 !== FALSE)
                { 
                    $row5 = mysqli_fetch_array($result5);
                    $user3= mysqli_fetch_assoc($result5);
                    //echo $query1;
                }
                if($user['self']==0)
                {$sql4="SELECT * FROM rate WHERE `from_id`='".$_SESSION['cost_logged_in']."' AND `email`='".$email."'";
                ?>
                <form action="result.php" method="POST">
                    <?php
                }
                else
                {$sql4="SELECT * FROM rate WHERE `from_id`='".$_SESSION['cost_logged_in']."' AND `wor_email`='".$email1."'";?>
                    <form action="result1.php" method="POST"><?php
                }?>
                        <div class="modal-body" style="height:100px;width:100%;margin-top:50px;margin-left:300px;">
                            <?php include 'rating.php';?>
                            <input type="hidden" name="to_id" value="<?php echo $email; ?>">
                            <input type="hidden" name="from_id" value="<?php echo $_SESSION['cost_logged_in']; ?>">
                        </div>
                        <div class="modal-footer">
                            <?php 
                            
                             //echo $sql4;
                            $result2=mysqli_query($conn,$sql4);
                            $user5=mysqli_num_rows($result2);
                            if($user5 >0)
                             {
                            ?>
                            <lable style="margin-right:90px;color:red;">You Have Already Given Your FeedBack, Thank You
                            </lable>
                            <?php
                            }
                             else{
                            ?>
                            <lable style="margin-right:90px;color:Blue;">You can give ratings one time only.</lable>
                            <input type="submit" class="btn btn-primary mb-2" value="Submit">

                            <!-- <input type="submit" class="btn btn-primary mb-2" value="Book Now" disabled> -->

                            <?php
                            }
                            ?>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
    <!-- //contact-form -->
    <?php
            }
     }?>
    <!-- footer-66 -->
    <?php include 'footer.php';?>
    <!--//footer-66 -->
</body>

</html>

<script>
function myFunction() {
    let text = "Are you sure";
    if (confirm(text) == true) {
        window.location.href = "logout.php";
    } else {
        window.close();
    }
    document.getElementById("demo").innerHTML = text;
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

<script src="assets/js/bootstrap.min.js"></script>