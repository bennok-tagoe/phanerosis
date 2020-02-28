<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * 
 *
 * @package Phanerosis
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	

	<?php wp_head(); ?>
</head>


<body class="page-subpage page-404 navigation-off-canvas <?php echo join( ' ', get_body_class( $class ) )?>" id="page-top">
	<div id="outer-wrapper">
	    <div id="inner-wrapper">
	        <div class="header">
	            <div class="wrapper">
	                <div class="brand">
	                	<?php
	                	if ( has_custom_logo() ) {
	                		echo '<a href="">'.the_custom_logo().'</a>';
	                	} else {
	                	        echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
	                	}

	                	?>
	                </div>
	                <nav class="navigation-items">
	                    <div class="wrapper">
	                    	<ul class="main-navigation navigation-top-header"></ul>
	                    	<?php
	                    	wp_nav_menu( array(
	                    		'theme_location' => 'menu-1',
	                    		'menu_id'        => 'primary-menu',
	                    	) );
	                    	?>
	                    	<div class="toggle-navigation">
	                    	    <div class="icon">
	                    	        <div class="line"></div>
	                    	        <div class="line"></div>
	                    	        <div class="line"></div>
	                    	    </div>
	                    	</div>
	                        <!-- <ul class="user-area">
	                            <li><a href="index.html">Home</a></li>
	                            <li><a href="blog.html">Blog</a></li>
	                            <li><a href="about.html"><strong>About</strong></a></li>
	                        </ul>
	                        <a href="map.html" class="submit-item">
	                            <div class="content"><span>Find a Chapter</span></div>
	                            <div class="icon">
	                                <i class="fa fa-map-marker"></i>
	                            </div>
	                        </a> -->
	                    </div>
	                </nav>
	            </div>
	        </div>
	        <!-- end Navigation-->
	        <!-- Page Canvas-->
	        <div id="page-canvas">
	            <!--Off Canvas Navigation-->
	            <nav class="off-canvas-navigation">
	                <header>Full Menu</header>
	                <div class="main-navigation navigation-off-canvas"></div>
	            </nav>
	            <!--end Off Canvas Navigation-->


