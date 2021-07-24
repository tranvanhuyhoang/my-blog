
<!doctype html>
<html class="no-js" lang="vi">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Hoàng Blog</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-site-verification" content="9CvwivXxffGFTtJIv82RjurxNW9DRx3FC2doagZd350" />
        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="<?php bloginfo('template_directory') ?>/images/favicon.ico" type="image/x-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oxygen:300,400,700" rel="stylesheet">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/assets/bootstrap.min.css">

        <!-- Fontawesome Icon -->
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/assets/font-awesome.min.css">

        <!-- Owl Carousel -->
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/assets/owl.theme.default.min.css">

        <!-- Magnific Popup -->
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/assets/magnific-popup.css">

        <!-- Animate CSS -->
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/assets/animate.css">        

        <!-- Custom Style -->
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/assets/normalize.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/style.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/assets/responsive.css">

    </head>
    <body>
        <!-- Pre-Loader -->
        <div class="preloader">
            <div class="spinner">
                <div class="rect1"></div>
                <div class="rect2"></div>
                <div class="rect3"></div>
                <div class="rect4"></div>
                <div class="rect5"></div> 
            </div>
        </div>
        <!-- End Pre-Loader -->

        <!-- Header -->
        <nav class="navbar navbar-default about-navbar">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Change Logo Here -->
                    <a data-scroll class="navbar-brand" href="<?php echo home_url(); ?>">HOANG DEV<span>.</span></a>
                </div><!-- /.navbar-header -->
                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                  <?php wp_nav_menu( 
                    array( 
                      'theme_location' => 'header-menu',  //trùng với id menu trong file function
                      'container' => 'false', // muốn bao bọc bằng thẻ div không
                      'menu_id' => 'header-menu', 
                      'menu_class' => 'nav navbar-nav navbar-right'
                    ) 
                    ); ?>



                    <!-- <ul class="nav navbar-nav navbar-right">
                        <li><a>HOME <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul>
                                <li><a href="01-particles-background.html">Home One</a></li>
                                <li><a href="02-slider-background.html">Home Two</a></li>
                                <li><a href="03-image-background.html">Home Three</a></li>
                                <li><a href="04-typed-version.html">Home Four</a></li> 
                                <li><a href="05-gradient-background.html">Home Five</a></li>
                            </ul>
                        </li>
                        <li><a>PORTFOLIO <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul>
                                <li><a>Gutter <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    <ul>
                                        <li><a href="19-portfolio-two-col-gutter.html">Two Column</a></li>
                                        <li><a href="20-portfolio-three-col-gutter.html">Three Column</a></li>
                                    </ul>
                                </li>
                                <li><a>Gutterless <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    <ul>
                                        <li><a href="21-portfolio-two-col-gutterless.html">Two Column</a></li>
                                        <li><a href="22-portfolio-three-col-gutterless.html">Three Column</a></li>
                                    </ul>
                                </li>
                                <li><a>Gutter Full <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    <ul>
                                        <li><a href="23-portfolio-two-col-gutter-full.html">Two Column</a></li>
                                        <li><a href="24-portfolio-three-col-gutter-full.html">Three Column</a></li>
                                        <li><a href="25-portfolio-four-col-gutter-full.html">Four Column</a></li>
                                    </ul>
                                </li>
                                <li><a>Gutterless Full <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    <ul>
                                        <li><a href="26-portfolio-two-col-gutterless-full.html">Two Column</a></li>
                                        <li><a href="27-portfolio-three-col-gutterless-full.html">Three Column</a></li>
                                        <li><a href="28-portfolio-four-col-gutterless-full.html">Four Column</a></li>
                                    </ul>
                                </li>
                                <li><a>Details <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    <ul>
                                        <li><a href="29-portfolio-details-one.html">Details One</a></li>
                                        <li><a href="30-portfolio-details-two.html">Details Two</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a>PAGES <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul>
                                <li><a>About <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    <ul>
                                        <li><a href="06-about-one.html">About-1</a></li>
                                        <li><a href="07-about-two.html">About-2</a></li>
                                    </ul>
                                </li>
                                <li><a>Pricing Table <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    <ul>
                                        <li><a href="15-pricing-one.html">Table-1</a></li>
                                        <li><a href="16-pricing-two.html">Table-2</a></li>
                                        <li><a href="17-pricing-three.html">Table-3</a></li>
                                        <li><a href="18-pricing-four.html">Table-4</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a>SERVICE <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul>
                                <li><a href="08-service-one.html">Service One</a></li>
                                <li><a href="09-service-two.html">Service Two</a></li>
                                <li><a href="10-service-three.html">Service Three</a></li>
                            </ul>
                        </li>
                        <li><a>BLOG <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul>
                                <li><a href="31-blog-full.html">Blog</a></li>
                                <li><a href="32-blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                <li><a href="33-blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                <li><a href="34-blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>                        
                        <li><a>CONTACT <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="contact-menu">
                                <li><a href="11-contact-one.html">Contact One</a></li>
                                <li><a href="12-contact-two.html">Contact Two</a></li>
                                <li><a href="13-contact-three.html">Contact Three</a></li>
                                <li><a href="14-contact-four.html">Contact Four</a></li>
                            </ul>
                        </li> 
                    </ul> -->
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!-- End Header -->