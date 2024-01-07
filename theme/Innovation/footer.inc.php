<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); } 
/****************************************************
*
* @File: 			footer.inc.php
* @Package:		GetSimple
* @Action:		Innovation theme for GetSimple CMS
*
*****************************************************/
?>

<footer>
            <div class="container">
                <div class="row mt-n2-6">
                    <div class="col-sm-6 col-lg-3 mt-2-6">
                        <div class="footer-logo mb-1-9">
                            <a href="index.html"><img src="<?php get_site_url(); ?>./data/uploads/logos/logo-footer.jpeg" alt="..."></a>
                        </div>
                        <p class="text-white mb-1-6 mb-lg-1-9 opacity9">we are dedicated to transforming lives through the power of nutrition</p>
                        <form class="quform newsletter-form w-90 w-sm-100" action="quform/newsletter-two.php" method="post" enctype="multipart/form-data" onclick="">
                                <div class="quform-elements position-relative">
                                    <div class="row">
                                        <!-- Begin Text input element -->
                                        <div class="col-md-12">
                                            <div class="quform-element mb-0">
                                                <div class="quform-input">
                                                    <input class="form-control news-box" id="email_address" type="text" name="email_address" placeholder="Subscribe with us">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Submit button -->
                                        <div class="col-md-12">
                                            <div class="quform-submit-inner">
                                                <button class="newsletter-btn bg-primary" type="submit"><span><i class="fas fa-paper-plane text-white"></i></span></button>
                                            </div>
                                            <div class="quform-loading-wrap text-start"><span class="quform-loading"></span></div>
                                        </div>
                                        <!-- End Submit button -->
                                    </div>
                                </div>
                            </form>
                    </div>
                    <div class="col-sm-6 col-lg-3 mt-2-6">
                        <div class="ps-sm-1-6 ps-md-1-9 ps-xl-2-9">
                            <h3 class="title-font text-secondary mb-4 h4">Quick Links</h3>
                            <ul class="footer-list-style1">
                                <li><a href="<?php get_site_url(); ?> about-us/">About Us</a></li>
                                <li><a href="<?php get_site_url(); ?> our-team/">Our Team</a></li>
                                <li><a href="<?php get_site_url(); ?> blog/">Blog</a></li>
                                <li><a href=" <?php get_site_url(); ?>contact/">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mt-2-6">
                        <div class="ps-xl-1-9">
                            <h3 class="title-font text-secondary mb-4 h4">Services</h3>
                            <ul class="footer-list-style1">
                                <li><a href="<?php get_site_url(); ?> meal-plans/">Meal Plans</a></li>
                                <li><a href="<?php get_site_url(); ?> seminar-schedule/">Seminars</a></li>
                                <li><a href="<?php get_site_url(); ?> personalized-nutrition/">Personalized nutrition</a></li>
                                <li><a href="<?php get_site_url(); ?> weight-loss-programs/">Weight Management Programs</a></li>
                                <li><a href="<?php get_site_url(); ?> fitness-performance/">Fitness Performance</a></li>
                            </ul>
                           
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mt-2-6">
                        <div class="ps-sm-1-9">
                            <h3 class="title-font text-secondary mb-4 h4">Opening Hours</h3>
                            <ul class="footer-hour-list">
                                <li>
                                    <i class="fas fa-business-time text-white"></i>
                                    <div>
                                        <h4 class="h6 text-white">Monday - Friday</h4>
                                        <p class="mb-0 text-white display-30">8:00 AM - 5:00 PM</p>
                                    </div>
                                </li>
                                <li>
                                    <i class="fas fa-business-time text-white"></i>
                                    <div>
                                        <h4 class="h6 text-white">Saturday</h4>
                                        <p class="mb-0 text-white display-30">9:00 AM - 4:00 PM</p>
                                    </div>
                                </li>
                                <li>
                                    <i class="fas fa-business-time text-white"></i>
                                    <div>
                                        <h4 class="h6 text-white">Sunday</h4>
                                        <p class="mb-0 text-white display-30">Closed</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bar">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 text-center text-md-start mt-3 mt-md-0 order-2 order-md-1">
                            <p class="d-inline-block text-white mb-0 display-30 display-lg-29">&copy; <span class="current-year"></span> Diet Select | All Right Reserverd</p>
                        </div>
                        <div class="col-md-6 text-md-end order-1 order-md-2">
                            <p class="text-white d-inline-block font-weight-600 mb-0 align-middle me-3">Follw Us :</p>
                            <ul class="footer-social-style1">
							<li>
                                    <a target="_blank" href="https://www.instagram.com/dietselect254/"><i class="fab fa-instagram"></i></a>
                                </li>
								<li>
                                    <a target="_blank" href="https://www.tiktok.com/@dietselect254"><i class="fab fa-tiktok"></i></a>
                                </li> 
                                <li>
                                    <a target="_blank" href="https://www.facebook.com/dietselect254/?locale=ja_JP"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://twitter.com/dietselect254?lang=en"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a target="_blank" href="#!"><i class="fab fa-youtube"></i></a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://www.linkedin.com/in/awuor-joyce-registered-dietitian-nutritionist-52b153100/"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


 <!-- SCROLL TO TOP
    ================================================== -->
    <a href="#!" class="scroll-to-top"><i class="fas fa-angle-up" aria-hidden="true"></i></a>

    <!-- all js include start -->

    <!-- jQuery -->
    <script src="<?php get_theme_url(); ?>/assets/js/jquery.min.js"></script>

    <!-- popper js -->
    <script src="<?php get_theme_url(); ?>/assets/js/popper.min.js"></script>

    <!-- bootstrap -->
    <script src="<?php get_theme_url(); ?>/assets/js/bootstrap.min.js"></script>

    <!-- jquery -->
    <script src="<?php get_theme_url(); ?>/assets/js/core.min.js"></script>

  
    <!-- theme core scripts -->
    <script src="<?php get_theme_url(); ?>/assets/js/main.js"></script>
	 
</body>
</html>