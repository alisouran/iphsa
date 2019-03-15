<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo get_the_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--Start Css Style Files-->
	<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet"> 
    <!--BootStrap-->
    <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
    <!--Media Queries-->
    <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_directory'); ?>/css/media-queries.css">
    <!--Slider Css Files-->
    <link href="<?php bloginfo('template_directory'); ?>/css/ninja-slider.css" rel="stylesheet" />
    <!--Slider Css Files-->    
    <link href="<?php bloginfo('template_directory'); ?>/css/thumbnail-slider.css" rel="stylesheet" type="text/css" />
	<!--Owl Carousel-->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/owl.theme.default.min.css">
    <!--Custom Css Styles-->
    <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheet_url'); ?>">
<!--End Css Style Files-->
    <?php include('inc/scripts.php'); ?>
    <?php wp_head(); ?>
</head>
<body>
<!--Start NavBar-->
    <header id="header" class="navbar-bg-color">
			<nav class="navbar navbar-expand-lg navbar-light">
				<!-- <a class="navbar-brand" href="#"><b>IP</b>SF</a> -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <?php
                            $args = array (
                                'theme_location' => '',
                                'container'      => '',
                                'menu'           => 'primary',
                                'echo'           => 'true',
                                'fallback_cd'    => 'wp_page_menu',
                                'menu_class'     => 'nav-item nav-link navbar-text',
                                'items_wrap'     => '<ul class="navbar-nav mr-auto mt-2 mt-lg-0 bd-left d-rtl">%3$s</ul>'
                            );
                            wp_nav_menu($args);
                        ?>
				</div>
			</nav>
    </header>
<!--End NavBar-->
