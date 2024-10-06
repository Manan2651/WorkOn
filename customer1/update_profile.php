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
        $user_id=$_SESSION['cost_logged_in'];
        $sql = "SELECT * FROM `customer_master` WHERE `email` = '".$user_id."'";
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
</head>

<body>
    <!--w3l-header-->
    <?php include 'header.php';?>
    <!--//top-header-content-->

    <!-- //w3l-header -->
    <!-- /contact-form -->
    <section class="w3l-contact-main">
        <div id="contacts4-block" class="contact-map">

        </div>
    </section>
    <!-- //contact-form -->
    <!-- /contact-form -->
    <section class="w3l-contact-main">
        <div class="contact-infhny py-5">
            <div class="container py-lg-5">
                <div class="grid contact-grids row">

                    <div class="col">
                        <div class="row">
                            <div class="col mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="e-profile">
                                            <div class="row">
                                                <div class="col-12 col-sm-auto mb-3">
                                                    <div class="mx-auto" style="width: 160px;">

                                                        <img src="assets/images/img.jpg" alt="profile"
                                                            class="d-flex justify-content-center align-items-center rounded"
                                                            style="height: 140px;  background-color: rgb(233, 236, 239);" />
                                                        <!--change to offline or busy as needed-->


                                                    </div>
                                                </div>
                                                <div
                                                    class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                                    <div class="text-center text-sm-left mb-2 mb-sm-0">
                                                        <h4 class="pt-sm-2 pb-1 mb-0  ml-5 text-nowrap">
                                                            <?php echo $user['name'];?>
                                                        </h4>


                                                        <p class="mb-0 ml-5"><?php echo $user['email'];?></p>

                                                    </div>

                                                </div>
                                            </div>

                                            <ul class="nav nav-tabs">
                                                <li class="nav-item"><a href="" class="active nav-link">Settings</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content pt-3">
                                                <div class="tab-pane active">
                                                    <form class="form" method="POST" action="update_profile1.php">
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label>Name</label>
                                                                            <input class="form-control" type="text"
                                                                                style="border-color:black" name="name"
                                                                                value="<?php echo $user['name'];?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label>Contact Number</label>
                                                                            <input class="form-control" type="text"
                                                                                style="border-color:black"
                                                                                name="contact"
                                                                                value="<?php echo $user['contact'];?>">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label>Email</label>
                                                                            <input class="form-control" type="text"
                                                                                style="border-color:black" name="email"
                                                                                value="<?php echo $user['email'];?>">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label>Address</label>
                                                                            <input class="form-control" type="text"
                                                                                style="border-color:black"
                                                                                name="address"
                                                                                value="<?php echo $user['address'];?>">
                                                                                <input type="hidden" name="customer_id" value="<?php echo $user['customer_id'];?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label>City</label>
                                                                            <?php
                                                                                $sql1="SELECT * FROM city_master";
                                                                                $result1=mysqli_query($conn,$sql1);
                                                                                
                                                                                ?>
                                                                            <select id="city" name="city"
                                                                                class="form-control"
                                                                                style="color:black;">
                                                                                <?php
                                                                                if($result1->num_rows > 0){ 
                                                                                    while($row = $result1->fetch_assoc()){  
                                                                                        // echo '<option value="'.$row['city_id'].'"'."if('"$row['category_id']"'=='"$user['category_id']"')".{"selected"} ?>>>'.$row['city_name'].'
                                                                                                    </option>';
                                                                                                    <option value="<?= $row['city_name'];?>"
                                                                                                        <?php if($row['city_name']==$user['city']){echo "selected";} ?>>
                                                                                                        <?= $row['city_name'];?></option> <?php  
                                                                                }
                                                                                }
                                                                        ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="text-left">
                                                                <a onclick="myFunction()"><button
                                                                        class="btn submit btn-secondary"
                                                                        style="background-color:orange;border-color:orange;margin-left:20px;">
                                                                        <i class="fa fa-sign-out"
                                                                            style="color:white;"></i>
                                                                        <span style="color:white;">Logout</span>
                                                                    </button></a>
                                                            </div>
                                                            <div class="col">
                                                                <div class="text-right">
                                                                    <button class="btn submit">Update Profile</button>
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

                            <!-- <div class="col-12 col-md-3 mb-3">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="px-xl-3">
                                            <a onclick="myFunction()"><button class="btn btn-block btn-secondary">
                                                    <i class="fa fa-sign-out" style="color:white;"></i>
                                                    <span style="color:white;">Logout</span>
                                                </button></a>
                                        </div>
                                    </div>
                                </div>

                            </div> -->
                        </div>

                    </div>

                </div>
            </div>
    </section>
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