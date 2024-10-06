<section class="w3l-top-header-content">
    <div class="hny-top-menu">
        <div class="container">
            <div class="row">
                <ul class="accounts col-sm-8">
                    <li class="top_li"><span class="fa fa-clock-o"></span> <a href="#">Monday - Friday: 10:00 -
                            18:00</a>
                    </li>
                    <li class="top_li mr-lg-0"><span class="fa fa-envelope-o"></span> <a
                            href="mailto:mananbhatt2651@gmail.com" class="mail"> mail@company.com</a>

                    </li>
                    <li class="top_li"><span class="fa fa-phone"></span> <a href="tel:+91 9898450728">+91
                            9898450728</a>
                    </li>

                </ul>
                <ul class="social-top col-sm-4">
                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                    <li><a href="#"><span class="fa fa-instagram"></span></a> </li>
                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fa fa-vimeo"></span></a> </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-linkedin"></span>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</section>
<header class="w3l-header-nav">
    <!--/nav-->
    <nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
        <div class="container">
            <h1><a class="navbar-brand" href="index.php">L<span>C</span>H</a></h1>
            <!-- if logo is image enable this   
                        <a class="navbar-brand" href="#index.php">
                            <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                        </a> -->
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <span class="fa icon-expand fa-bars"></span>
                <span class="fa icon-close fa-times"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <!-- <li class="nav-item active">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="services.php">Services</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li> -->
                    <?php
                    $sql = "SELECT * FROM worker_master WHERE `wor_email`='" . $_SESSION['wor_email'] . "'";
                    $result = mysqli_query($conn, $sql);
                    $user = mysqli_fetch_assoc($result);
                    // echo $user['self']; 
                    if ($user['wor_self_emp'] == 0) {
                        ?>
                        <li class="nav-item active">
                            <a class="nav-link" href="request1.php">Requests</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="work_1.php">Pending Work</a>
                        </li>
                        <?php
                    } else { ?>
                        <li class="nav-item active">
                            <a class="nav-link" href="request.php">Request</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="work.php">Pending Work</a>
                        </li>
                        <?php
                    }
                    ?>

                </ul>
                <!-- <a href="signup_worker.php" class="ml-lg-3 mt-lg-0 mt-3 mr-2 book btn btn-secondary btn-style">Get
                      started</a> -->
                <?php include 'logout1.php'; ?>
            </div>
        </div>
    </nav>
    <!--//nav-->
</header>