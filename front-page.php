<?php get_header();?>
        
        <!-- HEADER IMAGE -->
        <div class="header-container text-center" style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('<?php bloginfo('template_directory'); ?>/assets/images/hero.jpg');">
            <div class="header-description">
                <h1 class="hero-text">Welcome to Darnell Monuments.<br/>We are here to help you create a lasting tribute to honor your loved ones.</h1>
                <button type="button" class="header-btn btn" onclick="location.href ='products'">View Products</button>
                
            </div>
        </div>
        
        <!-- ABOUT SECTION -->
        <div class="section first-section">

            <div class="section-image left-image">
                <img class="about-img" src="<?php bloginfo('template_directory'); ?>/assets/images/summary-img.jpg">
            </div>

            <div class="section-text">
                <h1 class="section-title">Darnell Monuments</h1>
                <p></p>
                <h4 class="description">
                    As the owners of Darnell Monuments, we would like to welcome you to our
                    website. We are a family owned and operated monument business in Mayfield,
                    Kentucky, proudly serving our local and surrounding areas for 16 years.
                </h4>

                <button type="button" class="btn" onclick="location.href ='about'">Learn More</button>
            </div>

        </div>

        <!-- PRODUCTS SECTION -->
        <div class="section reverse-section">

            <div class="section-image right-image carousel slide" id="carouselProducts" data-interval="false">
                <div class="carousel-inner">
                    <div class="carousel-item active"><img class="products-img" src="<?php bloginfo('template_directory'); ?>/assets/images/traditional8.jpg"></div>
                    <div class="carousel-item"><img class="products-img" src="<?php bloginfo('template_directory'); ?>/assets/images/heart6.jpg"></div>
                    <div class="carousel-item"><img class="products-img" src="<?php bloginfo('template_directory'); ?>/assets/images/flat3.jpg"></div>
                    <div class="carousel-item"><img class="products-img" src="<?php bloginfo('template_directory'); ?>/assets/images/special11.jpg"></div>
                    <div class="carousel-item"><img class="products-img" src="<?php bloginfo('template_directory'); ?>/assets/images/slant1.jpg"></div>
                    <div class="carousel-item"><img class="products-img" src="<?php bloginfo('template_directory'); ?>/assets/images/etchings2.jpg"></div>
                    <div class="carousel-item"><img class="products-img" src="<?php bloginfo('template_directory'); ?>/assets/images/bench3.jpg"></div>

                    <a class="carousel-control-prev" href="#carouselProducts" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselProducts" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                
            </div>
            
            <div class="section-text">
                <h1 class="section-title">Our Products</h1>
                <p></p>
                <h4 class="description">
                    The products we offer range from small flat markers to mausoleums.
                    <br/><br/>
                    In order to meet the growing need for more economical products for families to
                    be able to honor their loved ones either in a cemetery, a family garden, or in a
                    personal setting of their choice, we are now offering 5 X 10 granite markers.
                    These markers can be personally engraved and purchased on-line.
                </h4>

                <button type="button" class="btn" onclick="location.href ='products'">View More</button>
            </div>

        </div>


        <!-- FAQ SECTION -->
        <div class="section faq-section">
            <h1 class="section-title text-center faq-title">FAQs</h1>

            <div class="accordion" id="faq" role="tablist" aria-multiselectable="true">
                <!-- Question 1 -->
                <div class="card mb-3">
                    <div class="card-header" role="tab" id="questionOne">
                        <a class="collapsed text-decoration-none question" data-toggle="collapse" data-parent="#faq" href="#collapseOne" aria-expanded="false" area-controls="collapseOne">
                            What is the process for choosing a stone?
                        </a>
                    </div>

                    <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="questionOne" data-parent="#faq">
                        <h5 class="card-body">
                            The first step is to decide the size, shape, and color of your stone. We have
                            pictures of different kinds of stones for you to look at. Also, I suggest that you
                            drive through a few cemeteries and look for something that you like. If you see
                            something that catches your eye, take a picture of it and share it with us. We can
                            get any stone you see and match any design that you see.
                            <br/><br/>
                            The second step is to choose the color. The variety of colors are gray, black,
                            brown, red, green, blue, and many more. The gray is the most economical.
                            <br/><br/>
                            You can also decide between polished or rough sides.
                            <br/><br/>
                            The third step is to decide on the wording and design. Options are the basic
                            information such as names and dates. Other options are simple verses, poems,
                            comments or pictures of hobbies, interests, etc. We have many examples to
                            choose from.
                            <br/><br/>
                            Once you decide on the design of your monument. You will receive a computer
                            generated printout by mail, text, or email. This will allow you to see what your
                            design will look like. This is also an opportunity for you to proof the spelling and
                            dates and the final look of the design. We will ask you to sign the printout and
                            return it, or text, or email that you approve of the design. This will allow us to
                            start work on the monument once half payment is made.
                        </h5>
                    </div>
                </div>

                <!-- Question 2 -->
                <div class="card mb-3">
                    <div class="card-header" role="tab" id="questionTwo">
                        <a class="collapsed text-decoration-none question" data-toggle="collapse" data-parent="#faq" href="#collapseTwo" aria-expanded="false" area-controls="collapseTwo">
                            Do you sell online?
                        </a>
                    </div>

                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="questionTwo" data-parent="#faq">
                        <h5 class="card-body">
                            Yes, we sell small markers on-line. Small markers are a great economical way to
                            honor a loved one especially if you want to create your own personal memory
                            garden on your own property. Also, these 5 X 10 markers make excellent pet
                            stones. These small granite markers can also be engraved with addresses, special
                            dates, memory verses, nick names, even titles of special songs. The possibilities
                            are endless.
                        </h5>
                    </div>
                </div>

                <!-- Question 3 -->
                <div class="card mb-3">
                    <div class="card-header" role="tab" id="questionThree">
                        <a class="collapsed text-decoration-none question" data-toggle="collapse" data-parent="#faq" href="#collapseThree" aria-expanded="false" area-controls="collapseThree">
                            Do you do your own engraving?
                        </a>
                    </div>

                    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="questionThree" data-parent="#faq">
                        <h5 class="card-body">
                            We do the engraving on-site. Our granite is from the finest quarries and we define
                            craftsmanship.
                        </h5>
                    </div>
                </div>

                <!-- Question 4 -->
                <div class="card mb-3">
                    <div class="card-header" role="tab" id="questionFour">
                        <a class="collapsed text-decoration-none question" data-toggle="collapse" data-parent="#faq" href="#collapseFour" aria-expanded="false" area-controls="collapseFour">
                            When is payment required and do you accept credit cards?
                        </a>
                    </div>

                    <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="questionFour" data-parent="#faq">
                        <h5 class="card-body">
                            We require half payment at the time the order is placed. The second half is
                            required when the monument is placed in the cemetery. We do not accept credit
                            cards. We accept cash, checks, and money orders.
                        </h5>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <button type="button" class="btn" onclick="location.href ='faq'">View More</button>
            </div>
        </div>
  

        
<?php get_footer();?>