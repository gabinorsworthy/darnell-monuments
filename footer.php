        <!-- FOOTER -->
        
        <div class="footer">
                <div class="footer-logo">
                    <img class="footer-img" src="<?php bloginfo('template_directory'); ?>/assets/images/DarnellMonumentsLogo.jpg">
                </div>


                <div class="footer-maininfo">
                    <div>

                        <h4 class="quote quote-top">We're based in Mayfield, Kentucky.</h4>
                        <h5 class="quote quote-bottom">We're happy to work with clients from all over. Get in touch with us!</h5>
                    </div>
                </div>

            <div class="footer-quicklinks">

                <ul class="quicklinks">
                    <li class="quicklink-title">CONTACT</li>
                    <li class="quicklink">darnell.monuments@yahoo.com</li>
                    <li class="quicklink">(123) 456-7890</li>
                    <li class="quicklink">123 Main St</li>
                    <li class="quicklink">Mayfield, KY, 12345</li>
                </ul>

                <ul class="quicklinks hours">
                    <li class="quicklink-title">HOURS</li>
                    <li class="quicklink">Monday-Friday</li>
                    <li class="quicklink">XX:XX-YY:YY</li>
                </ul>

                <ul class="quicklinks">
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
                    <li class="quicklink">Monday-Friday</li>
                    <li class="quicklink">XX:XX-YY:YY</li>
                </ul>

            </div>
        </div>

    <?php wp_footer(); ?>

    </body>

</html>