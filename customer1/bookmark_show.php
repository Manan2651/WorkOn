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
            <a href="index.php">Home</a> » <span class="breadcrumb_last" aria-current="page">Bookings</span>
        </div>
    </nav>
    <!-- //breadcrumbs -->
    <!-- /services-grids-->
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
            <?php include 'bookmark_com.php'; ?>
        </div>
        <div id="Paris" class="tabcontent">
            <?php include 'bookmark_wor.php'; ?>
        </div>
    </div>
  
        
    <?php include 'footer.php';?>
    <!--//footer-66 -->
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
</body>

</html>