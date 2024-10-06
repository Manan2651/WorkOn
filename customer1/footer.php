<footer class="w3l-footer-66">
        <div class="footer-28-main">
            <div class="container">
                <div class="row footer-hny-top">
                    <div class="col-lg-6 footer-logo pl-lg-0">
                        <h2><a class="navbar-brand" href="index.php">Work<span>On</span></a></h2>
                        <!-- if logo is image enable this   
						<a class="navbar-brand" href="#index.php">
							<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
						</a> -->
                    </div>

                </div>
                <div class="row footer-top-28">
                    <div class="col-lg-2 col-md-6 footer-list-28 pl-lg-0">
                        <h6 class="footer-title-28">Extra Links</h6>
                        <ul>
                            <li><a href="about.php">About Company</a></li>
                            <li><a href="services.php">Our Services</a></li>
                            <li><a href="portfolio.php">Recent projects list</a></li>
                            <li><a href="blog.php">Latest News blog</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-5 col-md-6 footer-list-28">
                        <h6 class="footer-title-28">list of Services</h6>
                        <ul class="d-grid footer-column-2">
                            <li><a href="services.php">Plumbing</a></li>
                            <li><a href="services.php">Carpenter</a></li>
                            <li><a href="services.php">Electrician</a></li>
                            <li><a href="services.php">Wall painting</a></li>
                            <li><a href="services.php">Furniture moving</a></li>
                            <li><a href="services.php">House Cleaning</a></li>
                            <li><a href="services.php">Replacing wires</a></li>
                            <li><a href="services.php">AC & Refrigerator</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-6 footer-list-28">
                        <h6 class="footer-title-28">Support</h6>
                        <ul>
                            <li><a href="#link">Documentation</a></li>
                            <li><a href="#link">Privacy policy</a></li>
                            <li><a href="#link">Terms of service</a></li>
                            <li><a href="#link">24/7 support</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-list-28 pr-lg-0">
                        <h6 class="footer-title-28">Working Hours</h6>
                        <ul class="working-hours">
                            <li><span>Monday</span> : 8AM - 6AM</li>
                            <li><span>Tuesday</span> : 8AM - 6AM</li>
                            <li><span>Wednesday</span> : 8AM - 6AM</li>
                            <li><span>Thursday - Friday </span> : 8AM - 6AM</li>
                            <li><span>Sunday</span> : Closed</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="midd-footer-28 align-center">
                <p class="copy-footer-28">© 2022 WorkOn. All rights reserved | Designed by </p>
            </div>
        </div>
        <!-- move top -->
        <button onclick="topFunction()" id="movetop" title="Go to top">
            <span class="fa fa-angle-up"></span>
        </button>
        <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
        </script>
        <!-- /move top -->

    </footer>