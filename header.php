<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Darnell Monuments</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <?php wp_head();?>

    </head>



    <body>
        
        <!-- NAVIGATION BAR -->

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

        