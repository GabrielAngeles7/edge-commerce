<?php
/**
 * Template Name: Single Page
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

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-8 pull-right">
        <div class="l-content">
          <div class="section-single">
            <h1 class="section-title"><?php the_field('site_intro_title') ;?></h1>
            <div class="hr-twobars"></div>

            <div class="copy">
            <?php the_field('site_intro_content') ;?>
              
            </div>
 <?php endwhile;?>
            <div class="row">
              
              <div class="col-sm-6">
              <div class="panel-group" id="accordion">

              <?php $post_type='docu' ; 
                $taxonomies= get_object_taxonomies( (object) array( 'post_type'=> $post_type ) );
                $cntr = 1; foreach( $taxonomies as $taxonomy ) : $terms = get_terms( $taxonomy ); 
                foreach( $terms as $term ) : ?>

                <?php if($cntr%2 == 0) {?>
                 
                <?php } else{?>
                     
                      <div class="panel panel-secondary">
                        <div class="panel-heading">
                          <h4 class="panel-title title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $term->slug ?>" >
                            <img src="<?php echo z_taxonomy_image_url($term->term_id); ?>" alt="">
                             <span><?php echo $term->name ?></span>
                            </a>
                          </h4>
                        </div>
                        <div id="<?php echo $term->slug ?>" class="panel-collapse collapse">
                          <div class="panel-body">
                            <ul class="list-circle">
                    <?php $count=0 ;$query = new WP_Query( array("taxonomy" => $taxonomy, "term" => $term->slug )); 
                    if( $query->have_posts() ): while( $query->have_posts() ) : $query->the_post(); ?>
                              <li><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></li>
                               <?php $count++ ; endwhile; wp_reset_query(); endif; ?>
                            </ul>
                          </div>
                        </div>
                      </div>
                  

                <?php } ?>  

                   <?php $cntr++; endforeach; endforeach; ?>
                </div>
              </div>

              <div class="col-sm-6">
              <div class="panel-group" id="accordion">

              <?php $post_type='docu' ; 
                $taxonomies= get_object_taxonomies( (object) array( 'post_type'=> $post_type ) );
                $cntr = 1; foreach( $taxonomies as $taxonomy ) : $terms = get_terms( $taxonomy ); 
                foreach( $terms as $term ) : ?>

                <?php if($cntr%2 == 0) {?>
                  
                      <div class="panel panel-secondary">
                        <div class="panel-heading">
                          <h4 class="panel-title title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $term->slug ?>" >
                            <img src="<?php echo z_taxonomy_image_url($term->term_id); ?>" alt="">
                             <span><?php echo $term->name ?></span>
                            </a>
                          </h4>
                        </div>
                        <div id="<?php echo $term->slug ?>" class="panel-collapse collapse">
                          <div class="panel-body">
                            <ul class="list-circle">
                    <?php $count=0 ;$query = new WP_Query( array("taxonomy" => $taxonomy, "term" => $term->slug )); 
                    if( $query->have_posts() ): while( $query->have_posts() ) : $query->the_post(); ?>
                              <li><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></li>
                               <?php $count++ ; endwhile; wp_reset_query(); endif; ?>
                            </ul>
                          </div>
                        </div>
                      </div>
                   
                <?php } ?>
          
                   <?php $cntr++; endforeach; endforeach; ?>
               </div>
              </div>

            </div>

          </div>
        </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-4 pull-right">
        <?php get_sidebar(); ?>
        </div>
      </div>

      <div class="clearfix"></div>
    </div>
  </div>
</div>



<?php get_footer(); ?>