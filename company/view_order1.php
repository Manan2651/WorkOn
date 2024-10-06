<?php 
include 'config.php';
session_start();
if(!isset($_SESSION['com_logged_in']))
{
    header("location: login.php");
} 
?>
<?php
    if(isset($_SESSION['com_logged_in']))
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
                    //echo $query1;
                }
                ?>
                <div class="card-body">
                    <table>
                        <tr>
                            <td style="vertical-align:top;width:25%">
                                Detailed Problem:<p class="card-text"><?php echo $row5['description']; ?></p>
                                Customer Address:<p class="card-text"><?php echo $row5['address']; ?></p>
                            </td>
                            <td style="width:15%">
                                Company Name:<p class="card-text" style="text-transform:capitalize;">
                                    <?php echo $row5['com_name']; ?></p>
                                Company Area:<p class="card-text"><?php echo $row5['area']; ?></p>
                                Booked For:<p class="card-text"><?php echo $row5['skill_list']; ?></p>
                            </td>
                            <td style="width:50%">
                                Given Address:<p class="card-text"><?php echo $row5['address']; ?></p>
                                Given Date:<p class="card-text"><?php echo $row5['new_date']; ?></p>
                                Your problem:<p class="card-text"><?php echo $row5['description']; ?></p>
                            </td>
                            <td style="vertical-align:top"><h4 style="color:red;">
                            Assigned Worker:</h4>
                            <h5 style="color:blue;">
                                <?php echo $row5['wor_email'];?></h5>
                            </td>
                        </tr>
                        <!-- </section> -->
                    </table>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Assign Worker</h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <?php
                   $com_email=$_SESSION['com_email'];
                   $sql3="SELECT * FROM company_master_table1 WHERE `email`='".$com_email."'";
                   $result6=mysqli_query($conn,$sql3);
                   //echo $sql3;

                $user4=mysqli_fetch_assoc($result6);
                $sql2="SELECT * FROM worker_master WHERE `com_name`='".$user4['company_id']."'";
                $result3=mysqli_query($conn,$sql2);
                // echo $sql2;
                //echo $sql2;
                // $user2=mysqli_fetch_assoc($result3);
                $run_sql2=mysqli_num_rows($result3);
                // echo $run_sql2;
                if($run_sql2 > 0)
                {
                ?>
                <div class="modal-body">
                    <table style="width:100%;">
                        <th style="height:50px;">
                            <h4 style="color:blue;">Worker Name</h4>
                        </th>
                        <th>
                            <h4 style="color:blue;">Worker Email</h4>
                        </th>
                        <th>
                            <h4 style="color:blue;">Assign Worker</h4>
                        </th>
                        <?php
                        while($row4 = mysqli_fetch_array($result3))
                            {
                        ?>
                        <tr style="height:50px;">
                            <td>
                                <h6><?php echo $row4['wor_name'];?></h6>
                            </td>
                            <td>
                                <h6><?php echo $row4['wor_email'];?></h6>
                            </td>
                            <?php
                            ?>
                            <td>
                                <?php echo $row4['wor_email'];?>
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                    </table>
                </div>
                <?php
                }
                else
                {?>
                <div class="modal-body">
                    <h5>Add Worker</h5><br>

                </div>
                <?php 
                }
                ?>
            </div>
            </form>
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