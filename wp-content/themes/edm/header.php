<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Merienda+One' rel='stylesheet' type='text/css'>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<script>(function(){document.documentElement.className='js'})();</script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<?php wp_head(); ?>
</head>

<div class="section-canvas">
	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse">
	    <span class="sr-only">Toggle navigation</span>
	    <span class="icon-bar"></span>
	    <span class="icon-bar"></span>
	    <span class="icon-bar"></span>
 	 </button>
	<div class="section-aside">
		   <?php
              wp_nav_menu( array(
                  'menu'              => 'primary',
                  'theme_location'    => 'primary',
                  
                  'container'         => false,
                  'menu_class'        => 'nav navbar-nav navbar-right pa',
                  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                  'walker'            => new wp_bootstrap_navwalker())
              );
          ?>
	</div>
	<div class="l-wrapper">
		<div class="l-header">
			<div class="navbar navbar-default navbar-fixed-top" role="navigation">
			  <div class="container">
			    <div class="navbar-header">
			      <a class="navbar-brand" href="/#top">

			      <?php $branding = get_theme_options('branding', '');
						    str_replace('', '', $branding); ?>
						<?php if( $branding != '' ) { ?>

			      <img src="<?php echo $branding; ?>" alt="">
					 <?php } ?>
			      </a>
			    </div>
			    <div class="navbar-collapse collapse ">

			     <?php
		              wp_nav_menu( array(
		                  'menu'              => 'primary',
		                  'theme_location'    => 'primary',
		                  
		                  'container'         => false,
		                  'menu_class'        => 'nav navbar-nav navbar-right pa',
		                  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		                  'walker'            => new wp_bootstrap_navwalker())
		              );
		          ?>

			    </div><!--/.nav-collapse -->
			  </div>
			</div>
		</div>
		<div class="t-content">
