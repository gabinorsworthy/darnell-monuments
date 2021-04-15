<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Darnell Monuments</title>

        <link href="https://fonts.googleapis.com/css2?family=Lora:wght@600&display=swap" rel="stylesheet">

        <?php wp_head();?>

    </head>



    <body>
        
        <!-- NAVIGATION BAR -->
        
        <div>
            <h5 class="notice-title">
                IMPORTANT NOTICE:
            </h5>
            <h6 class="notice-note">
                Due to Covid-19, we are not accepting walk-ins. Please call to schedule an appointment.<br>
            </h6>
            <h6 class="notice-link-section">
                <a class="notice-link" href="tel:2702478858">270-247-8858</a>
            </h6>
        </div>

        <div class="header-logo">
            
            <a class="logo-link" href=
            
                <?php
                    if($pagename == "") {
                        echo "";
                    }

                    else {
                        echo "../";
                    }
                ?>
            
            ><img class="logo" src="<?php bloginfo('template_directory'); ?>/assets/images/DarnellMonumentsLogo.jpg"></a>

        </div>

        <header>
                

                <nav>
                    <div class="menu-icon">
                        <div class="menu-link">
                            <div class="line"></div>
                            <div class="line"></div>
                            <div class="line"></div>
                        </div>
                    </div>
                    <ul class="header-list">
                        <li class="header-item"><a class="header-link <?php if ($pagename == '') echo 'active'?>" href=
                        
                            <?php
                                if($pagename == "") {
                                    echo "";
                                }

                                else {
                                    echo "../";
                                }
                            ?>       
                                             
                        >Home</a></li>
                        <li class="header-item"><a class="header-link <?php if ($pagename == 'products') echo 'active'?>" href="products">Products</a></li>
                        <li class="header-item"><a class="header-link <?php if ($pagename == 'about') echo ' active'?>" href="about">About</a></li>
                        <li class="header-item"><a class="header-link <?php if ($pagename == 'faq') echo ' active'?>" href="faq">FAQ</a></li>
                        <li class="header-item"><a class="header-link <?php if ($pagename == 'contact-us') echo ' active'?>" href="contact-us">Contact Us</a></li>
                    </ul>
                </nav>

        </header>

        