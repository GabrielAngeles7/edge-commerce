<?php
/**
 * Template Name: Front Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
  

<div class="section section-banner module" id="home">
  <div class="container">

    <div class="flexslider slider-main text-center offset-top">
          <ul class="slides">

          <?php

          if( have_rows('banner_area') ):
              while ( have_rows('banner_area') ) : the_row();

            ?>
            <li>
              <div class="slide-desc mb-30">
                <h1 class="title t-lg t-upper"><?php the_sub_field('banner_title'); ?></h1>
                 <?php the_sub_field('banner_content'); ?>
                <a href="#" class="btn btn-default btn-rounded"><?php the_sub_field('banner_link_name'); ?></a>
               
              </div>
            <img src="<?php the_sub_field('banner_image'); ?>" class="slide-img"/>
        </li>

         <?php  endwhile; endif; ?>

          </ul>
       </div>

     
  </div>
</div>

<div class="l-content">

  <div class="section section-l1 section-gray text-center copy separator" id="about">
    <div class="container">
      <h2 class="title t-upper mb-30"><span class="icon icon-l <?php the_field('site_intro_icon') ;?>"></span><?php the_field('site_intro_title'); ?></h2>
      <?php the_field('site_intro_content'); ?>
    </div>
  </div>


  <div class="section section-l1 section-tabbed" id="feat">
    <div class="container">
      <div role="tabpanel" class="tabpanel-aside">
        <div class="sidebar">

          <div class="tab-title">
            <div class="section section-dark ">
              <h2 class="title t-upper"><?php the_field('tab_title'); ?></h2>
              <?php the_field('tab_title_intro'); ?>
            </div>
          </div>

            <ul class="nav nav-tabs nav-tab-l1" role="tablist" id="myTab">
            <?php 
           $cntr = 0;
            $features_tab =  array(
            'post_type' => 'main-features', 
            'post_status' => 'publish',
            'orderby' => 'id',
            'order' => 'asc',
            'posts_per_page' => -1);

                // The Query
                $the_query = new WP_Query( $features_tab );
                // The Loop
                    while ( $the_query->have_posts() ) :$the_query->the_post();
                    ?>

              <li role="presentation" class="<?php echo ($cntr == 0) ? 'active' : ''; ?>">
                <a href="#chart<?php echo $cntr;?>" aria-controls="home" role="tab" data-toggle="tab">
                  <span class="icon icon-l <?php the_field('icon_name') ;?>"></span>
                  <span class="t-label"> <?php the_title() ;?></span>
                </a>
              </li>

            <?php   $cntr++; endwhile; ?>
          </ul>
        </div>

        <div class="tab-content">
         <?php 
           $cntr = 0;
            $features_tab =  array(
            'post_type' => 'main-features', 
            'post_status' => 'publish',
            'orderby' => 'id',
            'order' => 'asc',
            'posts_per_page' => -1);

                // The Query
                $the_query = new WP_Query( $features_tab );
                // The Loop
                    while ( $the_query->have_posts() ) :$the_query->the_post();
                    ?>

          <div role="tabpanel" class="tab-pane fade in <?php echo ($cntr == 0) ? 'active' : ''; ?>" id="chart<?php echo $cntr;?>">
              <h2 class="title t-upper mb-30"><?php the_title() ;?></h2>
              <?php the_content() ;?>
          </div>

          <?php   $cntr++; endwhile; ?>

        </div>
      </div>
    </div>
  </div> 

  <div class="section section-l1 section-gray"  id="customer">
    <div class="container text-center">
      <h2 class="title t-upper mb-30"><?php the_field('slider_title', 6); ?></h2>
      <div class="flexslider slider-client text-center">
            <ul class="slides">

          <?php

          if( have_rows('slider_image_area', 6) ):
              while ( have_rows('slider_image_area', 6) ) : the_row();

            ?>
              <li><img src="<?php the_sub_field('slider_image'); ?>" class=""/></li>

                  <?php  endwhile; endif; ?>
            </ul>     
         </div>
    </div>
  </div>

</div>


<?php get_footer(); ?>