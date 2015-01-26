<?php
/**
 * Template Name: Default Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
  

<div class="section section-banner-sm" id="home">
  <div class="container">
    <div class="offset-top">
     <?php while ( have_posts() ) : the_post();?>
      <div class="l-banner">
        <h1 class="l-banner-title"><?php the_title(); ?></h1>
      </div>
    </div>
  </div>
</div>

<div class="section section-l1 skin-white text-center copy separator" id="about">
  <div class="container">
        <?php the_content(); ?>
    </div>
  </div>
   <?php endwhile;?>
</div>



<?php get_footer(); ?>