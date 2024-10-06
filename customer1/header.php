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


            </div>
        </div>
    </div>
</section>
<header class="w3l-header-nav">
    <!--/nav-->
    <nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
        <div class="container">
            <!-- <h1><a class="navbar-brand" href="index.php">Work<span class="fa fa-cog"></span><span>n</span></a></h1> -->
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
                    <li class="nav-item active">
                        <a class="nav-link" href="bookmark_show.php">Bookmark</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="services.php">Services</a>
                    </li>
                    <!-- <li class="nav-item active">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li> -->
                    <li class="nav-item active">
                        <a class="nav-link" href="bookings.php">Bookings</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="profile.php">Profile</a>
                    </li>
                </ul>

                <select class="ml-lg-3 mt-lg-0 mt-3 mr-2 book btn btn-secondary btn-style"
                    onchange="location = this.value;">
                    <option value="index.php">Get Started
                    </option>
                    <option value="signup_page.php">Login as Customer
                    </option>
                    <option value="../company/login.php">Login as Company
                    </option>
                    <option value="../worker/login.php">Login as Worker
                    </option>
                </select>
                <!-- <a href="signup_page.php" class="ml-lg-3 mt-lg-0 mt-3 mr-2 book btn btn-secondary btn-style">Get
                      started</a> -->
                <?php include 'logout1.php'; ?>
            </div>
        </div>
    </nav>
    <!--//nav-->
</header>