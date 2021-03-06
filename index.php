<?php get_header();?>
        
        <!-- HEADER IMAGE -->
        <div class="header-container text-center">
            <div class="header-description">
                <h2>This space will be dedicated to a short one-sentence description of the site/product.</h2>
                <button type="button" class="header-btn btn">View Products</button>
            </div>
        </div>

        <p></p>
        
        <div class="container">
            <!-- ABOUT SECTION -->
            <div>

                <div>
                    <img class="rounded-circle about-img" src="https://via.placeholder.com/200x200.png">
                </div>

                <div>
                    <h1>ABOUT DARNELL MONUMENTS</h1>
                    <p></p>
                    <h4 class="description">
                        This should be a short description about Darnell
                        Monuments (i.e. your products/what you do) and
                        potentially a mission statement. A lengthier description
                        and story will be put on the "About" page.
                        This should be a short description about Darnell
                        Monuments (i.e. your products/what you do) and
                        potentially a mission statement. A lengthier description
                        and story will be put on the "About" page.
                    </h4>

                    <button type="button" class="btn">Learn More</button>
                </div>

            </div>


            <!--
            <div class="row section">

                <div class="col-12 text-center">
                    <h1>ABOUT DARNELL MONUMENTS</h1>
                    <p></p>
                </div>

                <div class="col-12 col-lg-4 text-center">
                    <img class="rounded-circle about-img" src="https://via.placeholder.com/200x200.png">
                </div>

                <div class=" col-12 col-lg-8 text-center">
                    <h4 class="description">
                        This should be a short description about Darnell
                        Monuments (i.e. your products/what you do) and
                        potentially a mission statement. A lengthier description
                        and story will be put on the "About" page.
                        This should be a short description about Darnell
                        Monuments (i.e. your products/what you do) and
                        potentially a mission statement. A lengthier description
                        and story will be put on the "About" page.
                    </h4>

                    <button type="button" class="btn">Learn More</button>
                </div>

            </div>
-->

            <!-- PRODUCTS SECTION -->
            <div class="row section text-center">

                <div class="col-12">
                    <h1>OUR PRODUCTS</h1>
                </div>

                <div class="col-12 col-sm-6 col-md-4">
                    <img class="product-img rounded-circle" src="https://via.placeholder.com/200x200.png">
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <img class="product-img rounded-circle" src="https://via.placeholder.com/200x200.png">
                </div>
                <div class="col-12 col-sm-6 offset-sm-3 col-md-4 offset-md-0">
                    <img class="product-img rounded-circle" src="https://via.placeholder.com/200x200.png">
                </div>
            
                <div class="col-12">
                    <h4 class="description">
                        This will be a short description on your products.
                        This will be a short description on your products.
                        This will be a short description on your products.
                        This will be a short description on your products.
                        This will be a short description on your products.
                        This will be a short description on your products.
                    </h4>

                    <button type="button" class="btn">View More</button>
                </div>

            </div>

            <!-- FAQ SECTION -->
            <div class="row section">

                <div class="col-12">
                    <h1 class="text-center">FAQs</h1>

                    <div class="accordion" id="faq" role="tablist" aria-multiselectable="true">
                        <!-- Question 1 -->
                        <div class="card mb-3">
                            <div class="card-header" role="tab" id="questionOne">
                                <a class="collapsed text-decoration-none question" data-toggle="collapse" data-parent="#faq" href="#collapseOne" aria-expanded="false" area-controls="collapseOne">
                                    Question 1
                                </a>
                            </div>

                            <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="questionOne" data-parent="#faq">
                                <h5 class="card-body">
                                    Answer 1
                                </h5>
                            </div>
                        </div>

                        <!-- Question 2 -->
                        <div class="card mb-3">
                            <div class="card-header" role="tab" id="questionTwo">
                                <a class="collapsed text-decoration-none question" data-toggle="collapse" data-parent="#faq" href="#collapseTwo" aria-expanded="false" area-controls="collapseTwo">
                                    Question 2
                                </a>
                            </div>

                            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="questionTwo" data-parent="#faq">
                                <h5 class="card-body">
                                    Answer 2
                                </h5>
                            </div>
                        </div>

                        <!-- Question 3 -->
                        <div class="card mb-3">
                            <div class="card-header" role="tab" id="questionThree">
                                <a class="collapsed text-decoration-none question" data-toggle="collapse" data-parent="#faq" href="#collapseThree" aria-expanded="false" area-controls="collapseThree">
                                    Question 3
                                </a>
                            </div>

                            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="questionThree" data-parent="#faq">
                                <h5 class="card-body">
                                    Answer 3
                                </h5>
                            </div>
                        </div>

                        <!-- Question 4 -->
                        <div class="card mb-3">
                            <div class="card-header" role="tab" id="questionFour">
                                <a class="collapsed text-decoration-none question" data-toggle="collapse" data-parent="#faq" href="#collapseFour" aria-expanded="false" area-controls="collapseFour">
                                    Question 4
                                </a>
                            </div>

                            <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="questionFour" data-parent="#faq">
                                <h5 class="card-body">
                                    Answer 4
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="button" class="btn">View More</button>
                    </div>
                </div>

            </div>
        </div>

<?php get_footer();?>