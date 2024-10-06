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

    <section class="w3l-content-with-photo-4">
        <!-- /content-grids-->
        <!-- <div class="content-photo-info py-5"> -->
        <div class="container py-lg-5">
            <form action="services.php" method="post">
                <?php 
                    $sql="SELECT * FROM area_master WHERE city_id='1'";
                    $result=mysqli_query($conn,$sql);
                    //$row=mysqli_fetch_array($result);
                    if($result !== FALSE)
                    {?>
                <table cellpadding="15" style="width:100px">
                    <!-- <tr>
                            <td colspan="3" style="color:white">
                                <h1>Find Worker In Near By Your Area</h1>
                            </td>
                        </tr> -->
                    <tr>
                        <td>
                            <h6><select name="area" class="btn"
                                    style="width:400px;height:50px;border-color:black;color:black;background:white;">
                                    <?php while($row=mysqli_fetch_array($result))
																{ ?>
                                    <option value="<?php echo $row['area_name']?>">
                                        <?php echo $row['area_name']?>
                                    </option>
                                    <?php } ?>
                                </select>
                                <h6>
                                    <?php }?>
                        </td>
                        <?php //
                                $sql1="SELECT * FROM skill_list";
                                $result1=mysqli_query($conn,$sql1);
                                //$row=mysqli_fetch_array($result);
                                if($result1 !== FALSE)
                    {?>
                        <td>
                            <h6><select name="skill" class="btn mt-0"
                                    style="width:400px;height:50px;border-color:black;color:black;background:white;">
                                    <?php while($row1=mysqli_fetch_array($result1))
											{ ?>
                                    <option value="<?php echo $row1['name']?>">
                                        <?php echo $row1['name']?>
                                        <?php } ?>
                                        <?php } ?>
                                </select>
                                <h6>
                        </td>
                        <td style="vertical-align: top;">
                            <a href="services.php"><input type="submit"
                                    style="padding: 0px 30px;color:white;height: 50px;display: inline-block;font-size: 16px;line-height: 48px;text-transform: capitalize;font-weight: 700;transition:0.3s ease-in;border-radius:25px;background-color: black;border: 2px solid #fff;"
                                    vlaue="Read More"></a>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <!-- </div> -->
    </section>
    <!-- End of Search  -->
    <!-- Start of Listing Workers -->
    <div class="container py-lg-5">
        <div class="tab">
            <ul class="nav nav-tabs">
                <li class="nav-item mr-1">
                    <a class="tablinks nav-link" onclick="openCity(event, 'London')">
                        <h3>Company</h3>
                    </a>
                </li>
                <li class="nav-item mr-1">
                    <a class="tablinks nav-link" onclick="openCity(event, 'Paris')">
                        <h3>Self Employee</h3>
                    </a>
                </li>
            </ul>
        </div>
        <div id="London" class="tabcontent">
            <?php include 'services_company.php'; ?>
        </div>
        <div id="Paris" class="tabcontent">
            <?php include 'services_self.php'; ?>
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