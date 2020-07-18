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

                <ul class="quicklinks">
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

            </div>
        </div>
    
    
        <!-- Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <script>
            $('.collapse').on('shown.bs.collapse', function(){
                $(this).parent().find(".glyphicon-plus").removeClass("glyphicon-plus").addClass("glyphicon-minus");
                }).on('hidden.bs.collapse', function(){
                $(this).parent().find(".glyphicon-minus").removeClass("glyphicon-minus").addClass("glyphicon-plus");
            });
        </script>
    
    <?php wp_footer(); ?>

    </body>

</html>