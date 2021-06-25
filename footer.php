        <!-- FOOTER -->
        
        <div class="footer">
                <div class="footer-logo">
                    <img class="footer-img" src="<?php bloginfo('template_directory'); ?>/assets/images/logo-transparent-white.png">
                </div>


                <div class="footer-maininfo">
                    <div>

                        <h4 class="quote quote-top">We're based in Mayfield, Kentucky.</h4>
                        <h5 class="quote quote-bottom">We're here to create a lasting tribute to honor your loved ones. Get in touch with us!</h5>
                    </div>
                </div>

            <div class="footer-quicklinks">

                <ul class="quicklinks">
                    <li class="quicklink-title">CONTACT</li>
                    <li class="quicklink"><a class="footer-link" href="mailto:darnell.monuments@yahoo.com">darnell.monuments@yahoo.com</a></li>
                    <li class="quicklink quicklink-break"><a class="footer-link" href="tel:2702478858">270-247-8858</a></li>
                    <li class="quicklink">227 Fox Rd</li>
                    <li class="quicklink">Mayfield, KY 42066</li>
                </ul>

                <ul class="quicklinks hours">
                    <li class="quicklink-title">HOURS</li>
                    <li class="quicklink quicklink-break"><i>Open By Appointments Only</i></li>
                    <li class="quicklink">Monday-Friday</li>
                    <li class="quicklink quicklink-break">9:00 a.m. - 4:30 p.m.</li>
                    <li class="quicklink">Saturday</li>
                    <li class="quicklink"><i>By Appointments Only</i></li>
                </ul>

                <ul class="quicklinks footer-nav">
                    <li class="quicklink-title">QUICKLINKS</li>
                    <li class="quicklink"><a class="footer-link" href=
                        
                            <?php
                                if($pagename == "") {
                                    echo "";
                                }

                                else {
                                    echo "../";
                                }
                            ?>       
                                             
                        >Home</a></li>
                    <li class="quicklink"><a class="footer-link" href="products">Products</a></li>
                    <li class="quicklink"><a class="footer-link" href="about">About</a></li>
                    <li class="quicklink"><a class="footer-link" href="faq">FAQ</a></li>
                    <li class="quicklink"><a class="footer-link" href="contact-us">Contact Us</a></li>
                </ul>

                <ul class="quicklinks hours-responsive">
                    <li class="quicklink-title">HOURS</li>
                    <li class="quicklink"><i>Open By Appointments Only</i></li>
                    <li class="quicklink">Monday-Friday</li>
                    <li class="quicklink quicklink-break">9:00 a.m. - 4:30 p.m.</li>
                    <li class="quicklink">Saturday</li>
                    <li class="quicklink"><i>By Appointments Only</i></li>
                </ul>

            </div>
        </div>

    <?php wp_footer(); ?>

    </body>

</html>