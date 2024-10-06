<?php include 'config.php';
session_start();
// if(!isset($_SESSION['cost_logged_in']))
// {
//     header("location: signup_page.php");
// } 
// ?>


<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>WorkOn a Home Maintenance & Service Category | Home
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

    <!--//top-header-content-->
    <?php include 'header.php'; ?>


    <section class="w3l-main-slider" id="home">
        <div class="banner-content">
            <div class="owl-one owl-carousel owl-theme">
                <div class="item">
                    <li>
                        <div class="slider-info banner-view bg bg2">
                            <div class="banner-info">
                                <div class="container">
                                    <div class="banner-info-bg">
                                        <!-- <h6>Fast and efficient</h6>
                                        <h5>The superior choice for commercial cleaning
                                        </h5> -->
                                        <table cellpadding="15" style="width:100px">
                                            <tr>
                                                <td colspan="3" style="color:white">
                                                    <h1>Find Worker In Near By Your Area</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <?php
                                                    $sql = "SELECT * FROM area_master WHERE city_id='1'";
                                                    $result = mysqli_query($conn, $sql);
                                                    //$row=mysqli_fetch_array($result);
                                                    if ($result !== FALSE) { ?>
                                                        <h6><select name="area" class="btn"
                                                                style="width:400px;height:50px;border-color:white;color:black;background:white;">
                                                                <?php while ($row = mysqli_fetch_array($result)) { ?>
                                                                    <option value="<?php echo $row['area_name'] ?>">
                                                                        <?php echo $row['area_name'] ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>
                                                            <h6>
                                                            <?php } ?>
                                                </td>
                                                <?php //include 'config.php';
                                                $sql1 = "SELECT * FROM skill_list";
                                                $result1 = mysqli_query($conn, $sql1);
                                                //$row=mysqli_fetch_array($result);
                                                if ($result1 !== FALSE) { ?>
                                                    <td>
                                                        <h6><select name="area" class="btn mt-0"
                                                                style="width:400px;height:50px;color:black;background:white;">
                                                                <?php while ($row1 = mysqli_fetch_array($result1)) { ?>
                                                                    <option value="<?php echo $row1['name'] ?>">
                                                                        <?php echo $row1['name'] ?>
                                                                    <?php } ?>
                                                                <?php } ?>
                                                        </select>
                                                        <h6>
                                                </td>
                                                <td style="vertical-align: top;">
                                                    <a href="services.php"><input type="submit"
                                                            style="padding: 0px 30px;color: #fff;height: 50px;display: inline-block;font-size: 16px;line-height: 48px;text-transform: capitalize;font-weight: 700;transition:0.3s ease-in;border-radius:25px;background-color: transparent;border: 2px solid #fff;"
                                                            vlaue="Read More"></a>
                                                </td>
                                            </tr>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="item">
                    <li>
                        <div class="slider-info  banner-view banner-top1 bg bg2">
                            <div class="banner-info">
                                <div class="container">
                                    <div class="banner-info-bg">
                                        <table cellpadding="15" style="width:100px">
                                            <tr>
                                                <td colspan="3" style="color:white">
                                                    <h1>Find Worker In Near By Your Area</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <?php
                                                    $sql = "SELECT * FROM area_master WHERE city_id='1'";
                                                    $result = mysqli_query($conn, $sql);
                                                    //$row=mysqli_fetch_array($result);
                                                    if ($result !== FALSE) { ?>
                                                        <h6><select name="area" class="btn"
                                                                style="width:400px;height:50px;border-color:white;color:black;background:white;">
                                                                <?php while ($row = mysqli_fetch_array($result)) { ?>
                                                                    <option value="<?php echo $row['area_name'] ?>">
                                                                        <?php echo $row['area_name'] ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>
                                                            <h6>
                                                            <?php } ?>
                                                </td>
                                                <?php //include 'config.php';
                                                $sql1 = "SELECT * FROM skill_list";
                                                $result1 = mysqli_query($conn, $sql1);
                                                //$row=mysqli_fetch_array($result);
                                                if ($result1 !== FALSE) { ?>
                                                    <td>
                                                        <h6><select name="area" class="btn mt-0"
                                                                style="width:400px;height:50px;color:black;background:white;">
                                                                <?php while ($row1 = mysqli_fetch_array($result1)) { ?>
                                                                    <option value="<?php echo $row1['name'] ?>">
                                                                        <?php echo $row1['name'] ?>
                                                                    <?php } ?>
                                                                <?php } ?>
                                                        </select>
                                                        <h6>
                                                </td>
                                                <td style="vertical-align: top;">
                                                    <a href="services.php"><input type="submit"
                                                            style="padding: 0px 30px;color: #fff;height: 50px;display: inline-block;font-size: 16px;line-height: 48px;text-transform: capitalize;font-weight: 700;transition:0.3s ease-in;border-radius:25px;background-color: transparent;border: 2px solid #fff;"
                                                            vlaue="Read More"></a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="item">
                    <li>
                        <div class="slider-info banner-view banner-top2 bg bg2">
                            <div class="banner-info">
                                <div class="container">
                                    <div class="banner-info-bg">
                                        <table cellpadding="15" style="width:100px">
                                            <tr>
                                                <td colspan="3" style="color:white">
                                                    <h1>Find Worker In Near By Your Area</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <?php
                                                    $sql = "SELECT * FROM area_master WHERE city_id='1'";
                                                    $result = mysqli_query($conn, $sql);
                                                    //$row=mysqli_fetch_array($result);
                                                    if ($result !== FALSE) { ?>
                                                        <h6><select name="area" class="btn"
                                                                style="width:400px;height:50px;border-color:white;color:black;background:white;">
                                                                <?php while ($row = mysqli_fetch_array($result)) { ?>
                                                                    <option value="<?php echo $row['area_name'] ?>">
                                                                        <?php echo $row['area_name'] ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>
                                                            <h6>
                                                            <?php } ?>
                                                </td>
                                                <?php //include 'config.php';
                                                $sql1 = "SELECT * FROM skill_list";
                                                $result1 = mysqli_query($conn, $sql1);
                                                //$row=mysqli_fetch_array($result);
                                                if ($result1 !== FALSE) { ?>
                                                    <td>
                                                        <h6><select name="area" class="btn mt-0"
                                                                style="width:400px;height:50px;color:black;background:white;">
                                                                <?php while ($row1 = mysqli_fetch_array($result1)) { ?>
                                                                    <option value="<?php echo $row1['name'] ?>">
                                                                        <?php echo $row1['name'] ?>
                                                                    <?php } ?>
                                                                <?php } ?>
                                                        </select>
                                                        <h6>
                                                </td>
                                                <td style="vertical-align: top;">
                                                    <a href="services.php"><input type="submit"
                                                            style="padding: 0px 30px;color: #fff;height: 50px;display: inline-block;font-size: 16px;line-height: 48px;text-transform: capitalize;font-weight: 700;transition:0.3s ease-in;border-radius:25px;background-color: transparent;border: 2px solid #fff;"
                                                            vlaue="Read More"></a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
            </div>
        </div>
    </section>
    <!-- /main-slider -->
    <!-- //banner-slider-->
    <!-- /bottom-grids-->
    <section class="w3l-bottom-grids-6">
        <div class="container">
            <div class="grids-area-hny main-cont-wthree-fea row">
                <div class="col-lg-4 col-md-6 grids-feature">
                    <div class="area-box">
                        <span class="fa fa-bath"></span>
                        <h4><a href="#feature" class="title-head">Best Quality</a></h4>
                        <p>Worker will provide you the Best Quality instruments suggested by the brand itself.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grids-feature">
                    <div class="area-box active">
                        <span class="fa fa-cogs active"></span>
                        <h4><a href="#feature" class="title-head">Expert Advice</a></h4>
                        <p> Take expert advices from our Professional Workers to get your work done.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grids-feature">
                    <div class="area-box">
                        <span class="fa fa-users"></span>
                        <h4><a href="#feature" class="title-head">Worker Expertise</a></h4>
                        <p>Our Workers are expert in their own field which will solve your problem instantly. </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- //bottom-grids-->
    <!-- /content-with-photo-1-->
    <section class="w3l-content-with-photo-1">
        <div class="ab-content-6-mian py-5">
            <div class="container py-lg-5">
                <div class="welcome-grids row">
                    <div class="col-lg-6 welcome-image">
                        <img src="assets/images/ab1.jpg" class="img-fluid" alt="" />
                    </div>
                    <div class="col-lg-6 mt-lg-0 mt-5 pl-lg-4">
                        <div class="title-content text-left">
                            <h6 class="sub-title">Welcome to our WorkOn</h6>
                            <h3 class="hny-title">About Our Company</h3>
                        </div>
                        <p class="my-3">"Labor-Cart Hub" is an innovative online platform that combines booking
                            skilled workers for tasks and online shopping. This user-friendly platform
                            simplifies daily living by providing simple access to services and products
                            via a single interface. It meets today's requirement for simplicity and
                            efficiency while benefiting both users and service providers in a digitally
                            connected ecosystem.</p>
                    </div>


                </div>

            </div>
        </div>
    </section>
    <!-- //content-with-photo-1-->

    <!-- /content-6-->

    <!-- //content-6-->
    <!-- /offer-->
    <section class="features-4">
        <div class="features4-block py-5">
            <div class="container py-lg-5">
                <div class="features4-grids text-center row">
                    <div class="col-lg-3 col-md-6 features4-grid">
                        <div class="features4-grid-inn">
                            <span class="fa fa-bath icon-fea4" aria-hidden="true"></span>
                            <h5><a href="#URL">Plumbing</a></h5>
                            <p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio
                                consectetur.</p>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 features4-grid sec-features4-grid">
                        <div class="features4-grid-inn">
                            <span class="fa fa-american-sign-language-interpreting icon-fea4" aria-hidden="true"></span>
                            <h5><a href="#URL">Repairs</a></h5>
                            <p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio
                                consectetur.</p>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 features4-grid">
                        <div class="features4-grid-inn">
                            <span class="fa fa-fire-extinguisher icon-fea4" aria-hidden="true"></span>
                            <h5><a href="#URL">Spring</a></h5>
                            <p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio
                                consectetur.</p>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 features4-grid">
                        <div class="features4-grid-inn">
                            <span class="fa fa-gavel icon-fea4" aria-hidden="true"></span>
                            <h5><a href="#URL">Carpenter</a></h5>
                            <p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio
                                consectetur.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//offer-->
    <!-- /quote-6-->
    <section class="w3l-quote-6">
        <div class="quote-info py-5">
            <div class="container py-lg-5">
                <div class="quote-grids-info row">
                    <div class="quote-gd-left col-lg-10 pr-lg-5">
                        <h4>Professional Cleaning <br>Services Provider</h4>
                        <p class="para-quote">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                            sed deserunt mollit anim id est laborum mollit anim id est nulla.</p>
                        <div class="row mt-lg-5 mt-4">
                            <div class="col-lg-4 col-md-6 sub-quote mt-4">
                                <div class="quote-sec-info">
                                    <div class="appyl-sub-icon">
                                        <span class="fa fa-phone"></span>
                                    </div>
                                    <div class="appyl-sub-icon-info">
                                        <h5>Phone</h5>
                                        <p><a href="tel:+142 5897555">+142
                                                5897555</a></p>
                                    </div>

                                </div>

                            </div>
                            <div class="col-lg-4 col-md-6 sub-quote mt-4">
                                <div class="quote-sec-info">
                                    <div class="appyl-sub-icon">
                                        <span class="fa fa-envelope-o"></span>
                                    </div>
                                    <div class="appyl-sub-icon-info">
                                        <h5>Email</h5>
                                        <p><a href="mailto:mail@company.com" class="mail"> mail@company.com</a></p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 sub-quote mt-4">
                                <div class="quote-sec-info">
                                    <div class="appyl-sub-icon">
                                        <span class="fa fa-clock-o"></span>
                                    </div>
                                    <div class="appyl-sub-icon-info">
                                        <h5>Opening Hours</h5>
                                        <p>10.00 to 18.00</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //quote-6-->
    <!--/testimonials-->
    <!-- <section class="w3l-testimonials" id="testimonials">
        <div class="testimonials py-5">
            <div class="container py-lg-5">
                <div class="title-content text-center">
                    <h6 class="sub-title">Testimonials</h6>
                    <h3 class="hny-title">What our Clients say</h3>
                    <p class="title-para">Lorem ipsum dolor sit amet consectetur adipisicing elit sunt in culpa qui
                        officia sed deserunt mollit anim id est laborum mollit anim id est nulla.</p>
                </div>
                <div class="row mt-lg-5 mt-4">
                    <div class="col-md-10 mx-auto">
                        <div class="owl-two owl-carousel owl-theme">
                            <div class="item">
                                <div class="slider-info mt-lg-4 mt-3">
                                    <div class="message">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea sit id
                                            accusantium
                                            officia quod quasi necessitatibus perspiciatis Harum error provident
                                            quibusdam tenetur.</p>
                                        <div class="name mt-4">
                                            <h4>Phillip Hunt</h4>
                                            <p>Example Company</p>
                                        </div>
                                    </div>
                                    <div class="img-circle">
                                        <img src="assets/images/c1.jpg" class="img-fluid testimonial-img" alt="client">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="slider-info mt-lg-4 mt-3">
                                    <div class="message">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea sit id
                                            accusantium
                                            officia quod quasi necessitatibus perspiciatis Harum error provident
                                            quibusdam tenetur.</p>
                                        <div class="name mt-4">
                                            <h4>Sara Grant</h4>
                                            <p>Example Company</p>
                                        </div>
                                    </div>
                                    <div class="img-circle">
                                        <img src="assets/images/c2.jpg" class="img-fluid testimonial-img" alt="client">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="slider-info mt-lg-4 mt-3">
                                    <div class="message">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea sit id
                                            accusantium
                                            officia quod quasi necessitatibus perspiciatis Harum error provident
                                            quibusdam tenetur.</p>
                                        <div class="name mt-4">
                                            <h4>Luke Jacobs</h4>
                                            <p>Example Company</p>
                                        </div>
                                    </div>
                                    <div class="img-circle">
                                        <img src="assets/images/c3.jpg" class="img-fluid testimonial-img" alt="client">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="slider-info mt-lg-4 mt-3">

                                    <div class="message">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea sit id
                                            accusantium
                                            officia quod quasi necessitatibus perspiciatis Harum error provident
                                            quibusdam tenetur.</p>
                                        <div class="name mt-4">
                                            <h4>Claire Olson</h4>
                                            <p>Example Company</p>
                                        </div>
                                    </div>
                                    <div class="img-circle">
                                        <img src="assets/images/c4.jpg" class="img-fluid testimonial-img" alt="client">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--//testimonials-->
    <!-- footer-66 -->
    <?php include 'footer.php'; ?>
    <!--//footer-66 -->
</body>

</html>

<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- disable body scroll which navbar is in active -->

<!--//-->
<script>
    $(function () {
        $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
        })
    });
</script>
<!--/scroll-down-JS-->
<!-- for blog carousel slider -->
<script src="assets/js/owl.carousel.js"></script>
<!-- script for banner slider-->
<script>
    $(document).ready(function () {
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
    $(document).ready(function () {
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